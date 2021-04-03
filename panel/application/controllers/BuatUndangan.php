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
        $this->form_validation->set_rules('domain', 'domain', 'required');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['file_name']             = time();
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        $upload_pria = $this->upload->do_upload('photo_pria');
        if ($upload_pria && $this->form_validation->run() == TRUE) {
            $upload_data_pria = $this->upload->data();
            $upload_wanita = $this->upload->do_upload('photo_wanita');
            if ($upload_wanita) {
                $upload_data_wanita = $this->upload->data();
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
                $data['photo_wanita'] = $upload_data_pria['file_name'];
                $data['photo_pria'] = $upload_data_wanita['file_name'];
                $data['domain'] = $this->input->post('domain');
                if ($this->db->insert('tabel_undangan', $data)) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Undangan baru berhasil dibuat!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                    redirect('undangan');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Terjadi kesalahan, silahkan coba lagi!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Kesalahan, ' . $this->upload->display_errors() . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Kesalahan, ' . $this->upload->display_errors() . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        }
        $data['title'] = "Buat Baru";
        $this->load->view('_partials/header', $data);
        $this->load->view('buat_undangan', $data);
        $this->load->view('_partials/footer', $data);
    }
}
