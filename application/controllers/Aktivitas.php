<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktivitas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Aktivitas_model');
        $this->load->helper('url');
    }

    public function index() {
        $judul = [
            'title' => 'Management Surat',
            'sub_title' => 'Data Aktivitas Tahunan'
        ];

        $data['title'] = 'Data Aktivitas Tahunan';
        $data['aktivitas'] = $this->Aktivitas_model->get_all_aktivitas();
        $judul['sub_title'] = 'Data Aktivitas Tahunan'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $judul);
        $this->load->view('aktivitas/aktivitas_view', $data);
        $this->load->view('templates/footer');

    }

    public function tambah() {
        $data = array(
            'kegiatan' => $this->input->post('kegiatan'),
            'tgl_dilaksanakan' => $this->input->post('tgl_dilaksanakan'),
            'keterangan' => $this->input->post('keterangan')
        );
        $this->Aktivitas_model->insert_aktivitas($data);
        redirect('aktivitas');
    }

    public function edit($id) {
        $data['title'] = 'Edit Data Aktivitas';
        $data['aktivitas'] = $this->Aktivitas_model->get_aktivitas_by_id($id);
        $data['sub_title'] = 'Edit Data Aktivitas'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('aktivitas/aktivitas_edit_view', $data);
        $this->load->view('templates/footer');
    }
    
    public function update($id) {
        $data = array(
            'kegiatan' => $this->input->post('kegiatan'),
            'tgl_dilaksanakan' => $this->input->post('tgl_dilaksanakan'),
            'keterangan' => $this->input->post('keterangan')
        );
        $this->Aktivitas_model->update_aktivitas($id, $data);
        redirect('aktivitas');
    }

    public function hapus($id) {
        $this->Aktivitas_model->delete_aktivitas($id);
        redirect('aktivitas');
    }
}
