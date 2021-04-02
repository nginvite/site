<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('registrasi');
    }
    public function proses_registrasi()
    {
        $nama_pengguna = $this->input->post('username');
        $email         = $this->input->post('email');
        $no_hp         = $this->input->post('no_hp');
        $password      = $this->input->post('password');
        $domain        = $this->input->post('domain');

        $data = [
            'nama_pengguna' => $nama_pengguna,
            'email'         => $email,
            'no_hp'         => $no_hp,
            'domain'        => $domain,
            'password'      => password_hash($password, PASSWORD_DEFAULT)
        ];

        $this->Pengguna_model->registrasi($data);
        redirect('/Login');
    }
}
