<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function index($data = null)
    {
        if (isset($data)) {
            $this->load->model('Undangan_model');
            if ($data != 'panel') {
                $data = $this->Undangan_model->getUndanganByDomain($data);
                if ($data == null) {
                    $this->load->view('main');
                } else {
                    // echo json_encode($data); exit;
                    $this->load->view('tema/' . $data['nama_tema'] . '/index', $data);
                }
            } else {
                $this->load->view('main');
            }
        } else {
            $this->load->view('main');
        }
    }
}
