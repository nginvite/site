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
    
    public function getUndanganByDomain($domain)
    {
        $query = "
            select undangan.*, tema.nama_tema
            from tabel_undangan undangan
            inner join tabel_tema tema on undangan.id_tema = tema.id_tema
            where domain = '$domain'
        ";
        return $this->db->query($query)->row_array();
    }
}
