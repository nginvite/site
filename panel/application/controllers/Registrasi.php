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
        $this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('no_hp', 'No. Hp', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == TRUE) {

            $nama_pengguna = $this->input->post('nama_pengguna');
            $email         = $this->input->post('email');
            $no_hp         = $this->input->post('no_hp');
            $password      = $this->input->post('password');

            $data = [
                'nama_pengguna' => $nama_pengguna,
                'email'         => $email,
                'no_hp'         => $no_hp,
                'password'      => password_hash($password, PASSWORD_DEFAULT)
            ];

            $this->Pengguna_model->registrasi($data);
            $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Sukses, Silahkan masuk!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('/login');
        } else {
            $this->load->view('registrasi');
        }
    }
}
