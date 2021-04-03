<?php
class Undangan_model extends CI_Model
{
    public function buatUndangan($data)
    {
        $this->db->insert('tabel_undangan', $data);
    }

    public function undanganByIdPengguna($id)
    {
        return $this->db->get_where('tabel_undangan', array('id_pengguna' => $id))->result_array();
    }
}
