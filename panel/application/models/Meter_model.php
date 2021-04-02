<?php

class Meter_model extends CI_Model
{
    public function __construct()
    {
        $query = "
            select 
            *
            from meter_data";
        // Set table name
        $this->table = "(" . $query . ") data";
        // $this->table = "tube";
        // Set orderable column fields
        $this->column_order = array(
            null,
            'meter_group',
            'meter_serial',
            'meter_name',
            'update_date',
        );
        // Set searchable column fields
        $this->column_search = array(
            'meter_group',
            'meter_serial',
            'meter_name',
        );
        // Set default order
        $this->order = array('post_date' => 'desc');
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
        $this->db->from($this->table);

        if ($postData['group']) {
            $this->db->where('meter_group', $postData['group']);
        }
        

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

    public function getBySid($id) {
        $query = "
        select 
            data.*
            from meter_data data
            where data.meter_sid = '$id'
        ";
        return $this->db->query($query)->row_array();
    }
}