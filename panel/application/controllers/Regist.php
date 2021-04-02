<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Regist extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        $this->load->view('regist');
    }

    public function proses_regist()
    {
        redirect('/login');
    }
}
