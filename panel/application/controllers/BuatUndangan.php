<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BuatUndangan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Buat Baru";
        $this->load->view('_partials/header', $data);
        $this->load->view('buat_undangan', $data);
        $this->load->view('_partials/footer', $data);
    }

    public function proses_buat_undangan()
    {
        $this->form_validation->set_rules('mempelai_pria', 'mempelai_pria', 'required');
        $this->form_validation->set_rules('putra_ke', 'putra_ke', 'required');
        $this->form_validation->set_rules('putra_dari_bapak', 'putra_dari_bapak', 'required');
        $this->form_validation->set_rules('putra_dari_ibu', 'putra_dari_ibu', 'required');
        $this->form_validation->set_rules('mempelai_wanita', 'mempelai_wanita', 'required');
        $this->form_validation->set_rules('putri_ke', 'putri_ke', 'required');
        $this->form_validation->set_rules('putri_dari_bapak', 'putri_dari_bapak', 'required');
        $this->form_validation->set_rules('putri_dari_ibu', 'putri_dari_ibu', 'required');
        $this->form_validation->set_rules('tanggal_akad', 'tanggal_akad', 'required');
        $this->form_validation->set_rules('jam_akad_mulai', 'jam_akad_mulai', 'required');
        $this->form_validation->set_rules('jam_akad_selesai', 'jam_akad_selesai', 'required');
        $this->form_validation->set_rules('tgl_resepsi_mulai', 'tgl_resepsi_mulai', 'required');
        $this->form_validation->set_rules('jam_resepsi_mulai', 'jam_resepsi_mulai', 'required');
        $this->form_validation->set_rules('tgl_resepsi_selesai', 'tgl_resepsi_selesai', 'required');
        $this->form_validation->set_rules('jam_resepsi_selesai', 'jam_resepsi_selesai', 'required');
        $this->form_validation->set_rules('alamat_akad', 'alamat_akad', 'required');
        $this->form_validation->set_rules('alamat_resepsi', 'alamat_resepsi', 'required');
        $this->form_validation->set_rules('koordinat_resepsi', 'koordinat_resepsi', 'required');
        $this->form_validation->set_rules('photo_wanita', 'photo_wanita', 'required');
        $this->form_validation->set_rules('photo_pria', 'photo_pria', 'required');
        $this->form_validation->set_rules('domain', 'domain', 'required');
        if ($this->form_validation->run() == TRUE) {
            $data['mempelai_pria'] = $this->input->post('mempelai_pria');
            $data['putra_ke'] = $this->input->post('putra_ke');
            $data['putra_dari_bapak'] = $this->input->post('putra_dari_bapak');
            $data['putra_dari_ibu'] = $this->input->post('putra_dari_ibu');
            $data['mempelai_wanita'] = $this->input->post('mempelai_wanita');
            $data['putri_ke'] = $this->input->post('putri_ke');
            $data['putri_dari_bapak'] = $this->input->post('putri_dari_bapak');
            $data['putri_dari_ibu'] = $this->input->post('putri_dari_ibu');
            $data['tanggal_akad'] = $this->input->post('tanggal_akad');
            $data['jam_akad_mulai'] = $this->input->post('jam_akad_mulai');
            $data['jam_akad_selesai'] = $this->input->post('jam_akad_selesai');
            $data['tgl_resepsi_mulai'] = $this->input->post('tgl_resepsi_mulai');
            $data['jam_resepsi_mulai'] = $this->input->post('jam_resepsi_mulai');
            $data['tgl_resepsi_selesai'] = $this->input->post('tgl_resepsi_selesai');
            $data['jam_resepsi_selesai'] = $this->input->post('jam_resepsi_selesai');
            $data['alamat_akad'] = $this->input->post('alamat_akad');
            $data['alamat_resepsi'] = $this->input->post('alamat_resepsi');
            $data['koordinat_resepsi'] = $this->input->post('koordinat_resepsi');
            $data['id_tema'] = $this->input->post('tema');
            $data['id_pengguna'] = $this->session->userdata('id_pengguna');
            $data['photo_wanita'] = 'test';
            $data['photo_pria'] = 'test';
            $data['domain'] = $this->input->post('domain');
            if ($this->Undangan_model->buatUndangan($data)) {
                redirect('undangan');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Email atau katasandi tidak sesuai!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            }
        }
        $data['title'] = "Buat Baru";
        $this->load->view('_partials/header', $data);
        $this->load->view('buat_undangan', $data);
        $this->load->view('_partials/footer', $data);
    }
}
