<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PelayananKB extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('PelayananKB_model');
    }

    public function index() {
        $data['title'] = 'Register Pelayanan KB';
        $data['kb_data'] = $this->PelayananKB_model->get_all();
        $data['sub_title'] = 'Register Pelayanan KB'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('kb/kb_view', $data);
        $this->load->view('templates/footer');

    }

    public function tambah() {
        $data['title'] = 'Tambah Data';
        $data['sub_title'] = 'Tambah Data'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('kb/kb_form_tambah');
        $this->load->view('templates/footer');
    }

    public function simpan() {
        $data = array(
            'nama_peserta' => $this->input->post('nama_peserta'),
            'nama_suami' => $this->input->post('nama_suami'),
            'usia' => $this->input->post('usia'),
            'jenis_kontrasepsi' => $this->input->post('jenis_kontrasepsi'),
            'tanggal_pelayanan' => $this->input->post('tanggal_pelayanan'),
            'efek_samping' => $this->input->post('efek_samping'),
            'keterangan' => $this->input->post('keterangan')
        );
        $this->PelayananKB_model->insert($data);
        redirect('PelayananKB');
    }

    public function edit($id) {
        $data['title'] = 'Edit Data Pelayanan KB';
        $data['sub_title'] = 'Edit Data Pelayanan KB'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $data['kb'] = $this->PelayananKB_model->get_by_id($id);
        $this->load->view('templates/header', $data);
        $this->load->view('kb/kb_form_edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $data = array(
            'nama_peserta' => $this->input->post('nama_peserta'),
            'nama_suami' => $this->input->post('nama_suami'),
            'usia' => $this->input->post('usia'),
            'jenis_kontrasepsi' => $this->input->post('jenis_kontrasepsi'),
            'tanggal_pelayanan' => $this->input->post('tanggal_pelayanan'),
            'efek_samping' => $this->input->post('efek_samping'),
            'keterangan' => $this->input->post('keterangan')
        );
        $this->PelayananKB_model->update($id, $data);
        redirect('PelayananKB');
    }

    public function hapus($id) {
        $this->PelayananKB_model->delete($id);
        redirect('PelayananKB');
    }
}
