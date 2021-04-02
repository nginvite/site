<?php
class Pengguna_model extends CI_Model
{
    public function registrasi($data)
    {
        $this->db->insert('tabel_pengguna', $data);
        // return $this->db->affected_rows();
    }
}
