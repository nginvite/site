<?php

class Billing_model extends CI_Model
{
    public function __construct()
    {
        
    }

    public function getRows($postData)
    {
        $this->_get_datatables_query($postData);
        if ($postData['length'] != -1) {
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function countAll()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function countFiltered($postData)
    {
        $this->_get_datatables_query($postData);
        $query = $this->db->get();
        return $query->num_rows();
    }

    private function _get_datatables_query($postData)
    {
        $start_date = $postData['start_date'];
        $end_date = $postData['end_date'];
        $lwbp_times = $this->get_time_wbp_lwbp(date('Y-m-d', strtotime($start_date)), date('Y-m-d', strtotime($end_date)));
        $date_lwbp_top_from = $lwbp_times['date_lwbp_top_from'];
        $date_lwbp_top_to = $lwbp_times['date_lwbp_top_to'];
        $date_lwbp_bottom_from = $lwbp_times['date_lwbp_bottom_from'];
        $date_lwbp_bottom_to = $lwbp_times['date_lwbp_bottom_to'];
        $date_wbp_from = $lwbp_times['date_wbp_from'];
        $date_wbp_to = $lwbp_times['date_wbp_to'];
        $date_start = $lwbp_times['start_date'];
        $date_end = $lwbp_times['end_date'];

        $query = "
        select record_date, 
        meter_sid, 
        meter_name, 
        case when wbp != 0 then sum(meter_start) else 0.0 end meter_start, 
        case when wbp != 0 then sum(meter_end) else 0.0 end meter_end, 
        case when wbp != 0 and sum(meter_end) != 0 then sum(meter_end - meter_start) else 0.0 end meter_total,

        sum( case when (record_date BETWEEN '$date_lwbp_top_from' AND '$date_lwbp_top_to') OR
        (record_date BETWEEN '$date_lwbp_bottom_from' AND '$date_lwbp_bottom_to') then wbp else 0 end) 
        lwbp,

        (select bill_config_lwbp from billing_config) 
        lwbp_tarif,

        sum( case when (record_date BETWEEN '$date_lwbp_top_from' AND '$date_lwbp_top_to') OR 
        (record_date BETWEEN '$date_lwbp_bottom_from' AND '$date_lwbp_bottom_to') then wbp else 0 end) * (select bill_config_lwbp from billing_config) 
        lwbp_cost,

        sum( case when record_date BETWEEN '$date_wbp_from' AND '$date_wbp_to' then wbp else 0 end) 
        wbp,

        (select bill_config_wbp from billing_config) 
        wbp_tarif, 

        sum( case when record_date BETWEEN '$date_wbp_from' AND '$date_wbp_to' then wbp else 0 end) * 
        (select bill_config_wbp from billing_config) 
        wbp_cost,

        sum( case when (record_date BETWEEN '$date_lwbp_top_from' AND '$date_lwbp_top_to') OR 
        (record_date BETWEEN '$date_lwbp_bottom_from' AND '$date_lwbp_bottom_to') then wbp else 0 end) * (select bill_config_lwbp from billing_config) 
        + 
        sum( case when record_date BETWEEN '$date_wbp_from' AND '$date_wbp_to' then wbp else 0 end) * 
        (select bill_config_wbp from billing_config) 
        subtotal, 

        ( sum( case when (record_date BETWEEN '$date_lwbp_top_from' AND '$date_lwbp_top_to') OR 
        (record_date BETWEEN '$date_lwbp_bottom_from' AND '$date_lwbp_bottom_to') then wbp else 0 end) * (select bill_config_lwbp from billing_config) 
        + 
        sum( case when record_date BETWEEN '$date_wbp_from' AND '$date_wbp_to' then wbp else 0 end) 
        * 
        (select bill_config_wbp from billing_config) ) * (select bill_config_pju from billing_config) / 100
        count_of_pju, 

        (select bill_config_pju from billing_config)
        pju,

        ((select bill_config_pju from billing_config) * sum( case when (record_date BETWEEN '$date_lwbp_top_from' AND '$date_lwbp_top_to') OR 
        (record_date BETWEEN '$date_lwbp_bottom_from' AND '$date_lwbp_bottom_to') then wbp else 0 end) * (select bill_config_lwbp from billing_config) 
        + 
        sum( case when record_date BETWEEN '$date_wbp_from' AND '$date_wbp_to' then wbp else 0 end) * 
        (select bill_config_pju from billing_config) / 100) 
        + 
        (sum( case when (record_date BETWEEN '$date_lwbp_top_from' AND '$date_lwbp_top_to') OR 
        (record_date BETWEEN '$date_lwbp_bottom_from' AND '$date_lwbp_bottom_to') then wbp else 0 end) * (select bill_config_lwbp from billing_config) 
        + 
        sum( case when record_date BETWEEN '$date_wbp_from' AND '$date_wbp_to' then wbp else 0 end) * 
        (select bill_config_wbp from billing_config) )
        total 
        
        from (

            SELECT
            (case when rc.record_date = '$start_date' then rc.record_value else 0 end) meter_start, 
            (case when rc.record_date = '$end_date' then rc.record_value else 0 end) meter_end,
            rc.record_sid, 
            mt.meter_sid, 
            mt.meter_name, 
            rc.record_value,
            rc.record_date,
            rc2.record_value value_before,
            rc2.record_date date_before,
            case when rc.record_value = 0 or rc2.record_value = 0 then 0 else (rc.record_value - rc2.record_value) end wbp
            FROM meter_record rc
            INNER JOIN meter_data mt ON mt.meter_sid = rc.meter_sid
            INNER JOIN meter_record rc2 on rc.meter_sid = rc2.meter_sid and rc.record_date = (rc2.record_date + INTERVAL 1 HOUR)
            WHERE rc.record_date BETWEEN '$date_start' AND DATE_ADD('$date_end', INTERVAL 30 DAY)
            ORDER BY mt.meter_name, rc.record_date ASC

        ) as result
        GROUP BY meter_sid
        ";
        // Set table name
        $this->table = "(" . $query . ") data";
        // $this->table = "tube";
        // Set orderable column fields
        $this->column_order = array(
            null,
            'meter_name', 
            'meter_start', 
            'meter_end', 
            'meter_total', 
            'lwbp',
            'lwbp_tarif', 
            'lwbp_cost',
            'wbp',
            'wbp_tarif', 
            'wbp_cost', 
            'subtotal', 
            'count_of_pju', 
            'total'
        );
        // Set searchable column fields
        $this->column_search = array(
            'meter_name',
        );
        // Set default order
        $this->order = array('meter_name' => 'asc');

        $this->db->from($this->table);
        

        $i = 0;
        // loop searchable columns
        foreach ($this->column_search as $item) {
            // if datatable send POST for search
            if ($postData['search']['value']) {
                // first loop
                if ($i === 0) {
                    // open bracket
                    $this->db->group_start();
                    $this->db->like($item, $postData['search']['value']);
                } else {
                    $this->db->or_like($item, $postData['search']['value']);
                }

                // last loop
                if (count($this->column_search) - 1 == $i) {
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }

        if (isset($postData['order'])) {
            $this->db->order_by($this->column_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function get_time_wbp_lwbp($start, $end) {
        $start_date = date("Y-m-d", strtotime($start));
        $end_date = date('Y-m-d', strtotime($end));
        $bill_config = $this->billing->getBillConfig();
        $start_time = $bill_config['bill_config_wbp_start_time'];
        $end_time = $bill_config['bill_config_wbp_end_time'];

        $date_lwbp_top_from = new DateTime($start_date . ' ' . '00:00:00');
        $date_lwbp_top_to = new DateTime($start_date . ' ' . $start_time);
        $date_lwbp_top_from = date('Y-m-d H:i:s', $date_lwbp_top_from->getTimestamp());
        $date_lwbp_top_to = date('Y-m-d H:i:s', $date_lwbp_top_to->getTimestamp() - 1);
        $data['date_lwbp_top_from'] = $date_lwbp_top_from;
        $data['date_lwbp_top_to'] = $date_lwbp_top_to;
        
        $date_lwbp_bottom_from = new DateTime($start_date . ' ' . $end_time);
        $date_lwbp_bottom_to = new DateTime($end_date . ' ' . '23:59:59');
        $date_lwbp_bottom_from =  date('Y-m-d H:i:s', $date_lwbp_bottom_from->getTimestamp() + 1);
        $date_lwbp_bottom_to = date('Y-m-d H:i:s', $date_lwbp_bottom_to->getTimestamp());

        $data['date_lwbp_bottom_from'] = $date_lwbp_bottom_from;
        $data['date_lwbp_bottom_to'] = $date_lwbp_bottom_to;
        $date_wbp_from = new DateTime($start_date . ' ' . $start_time);
        $data['date_wbp_from'] =  date('Y-m-d H:i:s', $date_wbp_from->getTimestamp());
        $date_wbp_to = new DateTime($end_date . ' ' . $end_time);
        $data['date_wbp_to'] = date('Y-m-d H:i:s', $date_wbp_to->getTimestamp());

        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;
        return $data;
    }

    public function getBySid($id) {
        $query = "
        select 
            data.*
            from meter_data data
            where data.meter_sid = '$id'
        ";
        return $this->db->query($query)->row_array();
    }

    public function getBillConfig() {
        $query = "select * from billing_config";
        return $this->db->query($query)->row_array();
    }


    public function getItem($meter_sid, $start_date, $end_date) {

        $lwbp_times = $this->get_time_wbp_lwbp(date('Y-m-d', strtotime($start_date)), date('Y-m-d', strtotime($end_date)));
        $date_lwbp_top_from = $lwbp_times['date_lwbp_top_from'];
        $date_lwbp_top_to = $lwbp_times['date_lwbp_top_to'];
        $date_lwbp_bottom_from = $lwbp_times['date_lwbp_bottom_from'];
        $date_lwbp_bottom_to = $lwbp_times['date_lwbp_bottom_to'];
        $date_wbp_from = $lwbp_times['date_wbp_from'];
        $date_wbp_to = $lwbp_times['date_wbp_to'];
        $date_start = $lwbp_times['start_date'];
        $date_end = $lwbp_times['end_date'];

        $query = "
        select record_date, 
        meter_sid, 
        meter_name, 
        meter_serial, 
        meter_tarif, 
        meter_pc_factor, 
        meter_pc_mccb, 
        meter_pc_daya, 
        case when wbp != 0 then sum(meter_start) else 0.0 end meter_start, 
        case when wbp != 0 then sum(meter_end) else 0.0 end meter_end, 
        case when wbp != 0 and sum(meter_end) != 0 then sum(meter_end - meter_start) else 0.0 end meter_total,

        sum( case when (record_date BETWEEN '$date_lwbp_top_from' AND '$date_lwbp_top_to') OR
        (record_date BETWEEN '$date_lwbp_bottom_from' AND '$date_lwbp_bottom_to') then wbp else 0 end) 
        lwbp,

        (select bill_config_lwbp from billing_config) 
        lwbp_tarif,

        sum( case when (record_date BETWEEN '$date_lwbp_top_from' AND '$date_lwbp_top_to') OR 
        (record_date BETWEEN '$date_lwbp_bottom_from' AND '$date_lwbp_bottom_to') then wbp else 0 end) * (select bill_config_lwbp from billing_config) 
        lwbp_cost,

        sum( case when record_date BETWEEN '$date_wbp_from' AND '$date_wbp_to' then wbp else 0 end) 
        wbp,

        (select bill_config_wbp from billing_config) 
        wbp_tarif, 

        sum( case when record_date BETWEEN '$date_wbp_from' AND '$date_wbp_to' then wbp else 0 end) * 
        (select bill_config_wbp from billing_config) 
        wbp_cost,

        sum( case when (record_date BETWEEN '$date_lwbp_top_from' AND '$date_lwbp_top_to') OR 
        (record_date BETWEEN '$date_lwbp_bottom_from' AND '$date_lwbp_bottom_to') then wbp else 0 end) * (select bill_config_lwbp from billing_config) 
        + 
        sum( case when record_date BETWEEN '$date_wbp_from' AND '$date_wbp_to' then wbp else 0 end) * 
        (select bill_config_wbp from billing_config)
        subtotal, 

        ( sum( case when (record_date BETWEEN '$date_lwbp_top_from' AND '$date_lwbp_top_to') OR 
        (record_date BETWEEN '$date_lwbp_bottom_from' AND '$date_lwbp_bottom_to') then wbp else 0 end) * (select bill_config_lwbp from billing_config) 
        + 
        sum( case when record_date BETWEEN '$date_wbp_from' AND '$date_wbp_to' then wbp else 0 end) * 
        (select bill_config_wbp from billing_config)
        *
        (select bill_config_pju from billing_config) )
        / 100
        count_of_pju, 

        (select bill_config_pju from billing_config)
        pju,

        ((select bill_config_pju from billing_config) * sum( case when (record_date BETWEEN '$date_lwbp_top_from' AND '$date_lwbp_top_to') OR 
        (record_date BETWEEN '$date_lwbp_bottom_from' AND '$date_lwbp_bottom_to') then wbp else 0 end) * (select bill_config_lwbp from billing_config) 
        + 
        sum( case when record_date BETWEEN '$date_wbp_from' AND '$date_wbp_to' then wbp else 0 end) * 
        (select bill_config_pju from billing_config) / 100) 
        + 
        (sum( case when (record_date BETWEEN '$date_lwbp_top_from' AND '$date_lwbp_top_to') OR 
        (record_date BETWEEN '$date_lwbp_bottom_from' AND '$date_lwbp_bottom_to') then wbp else 0 end) * (select bill_config_lwbp from billing_config) 
        + 
        sum( case when record_date BETWEEN '$date_wbp_from' AND '$date_wbp_to' then wbp else 0 end) * 
        (select bill_config_wbp from billing_config) )
        total,

        (select bill_config_invoice_title from billing_config) 
        bill_title,

        (select bill_config_address from billing_config) 
        bill_address,

        (select bill_config_logo from billing_config) 
        bill_logo
        
        from (

            SELECT
            (case when rc.record_date = '$start_date' then rc.record_value else 0 end) meter_start, 
            (case when rc.record_date = '$end_date' then rc.record_value else 0 end) meter_end,
            rc.record_sid, 
            mt.*, 
            rc.record_value,
            rc.record_date,
            rc2.record_value value_before,
            rc2.record_date date_before,
            case when rc.record_value = 0 or rc2.record_value = 0 then 0 else (rc.record_value - rc2.record_value) end wbp
            FROM meter_record rc
            INNER JOIN meter_data mt ON mt.meter_sid = rc.meter_sid
            INNER JOIN meter_record rc2 on rc.meter_sid = rc2.meter_sid and rc.record_date = (rc2.record_date + INTERVAL 1 HOUR)
            WHERE rc.record_date BETWEEN '$date_start' AND DATE_ADD('$date_end', INTERVAL 30 DAY) AND mt.meter_sid = '$meter_sid'
            ORDER BY mt.meter_name, rc.record_date ASC
        ) as result ";

        $data = $this->db->query($query)->row_array();
        $data['start'] = $start_date;
        $data['end'] = $end_date;
        return $data;
    }
}