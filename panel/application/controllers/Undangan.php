<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Undangan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index() {
        $data['title'] = "Undangan";
        $this->load->view('_partials/header', $data);
        $this->load->view('undangan', $data);
        $this->load->view('_partials/footer', $data);
    }
}