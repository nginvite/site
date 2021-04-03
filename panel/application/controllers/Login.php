<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function proses_login()
    {
        $this->form_validation->set_rules('email', 'Email address', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == TRUE) {
            $user = $this->db->get_where('tabel_pengguna', array(
                'email' => $this->input->post('email')
            ))->row_array();
            if ($user['email'] == $this->input->post('email')) {
                if (password_verify($this->input->post('password'), $user['password'])) {
                    $this->session->set_userdata($user);
                    redirect('undangan');
                    exit;
                } else {
                    $this->session->set_flashdata('error', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Email atau katasandi tidak sesuai!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                }
            } else {
                $this->session->set_flashdata('error', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Email atau katasandi tidak sesuai!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            }
        }
        $this->load->view('login');
    }

    public function prosses_logout()
    {
        $this->session->unset_userdata('user');
        redirect('login');
    }
}
