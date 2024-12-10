<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuHarian extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('BukuHarianModel');
    }

    public function index() {
        $data['title'] = 'Data Buku Harian';
        $data['buku_harian'] = $this->BukuHarianModel->get_all();
        $data['sub_title'] = 'Data Buku Harian'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('bukuharian/buku_harian_view', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $data['title'] = 'Tambah Data Buku Harian';
        $data['sub_title'] = 'Tambah Data Buku Harian'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('bukuharian/buku_harian_create');
        $this->load->view('templates/footer');
    }

    public function store() {
        $data = [
            'hari_tanggal' => $this->input->post('hari_tanggal'),
            'nama_pengurus' => $this->input->post('nama_pengurus'),
            'masalah_persoalan' => $this->input->post('masalah_persoalan'),
            'tindakan' => $this->input->post('tindakan'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->BukuHarianModel->insert($data);
        redirect('BukuHarian');
    }

    public function edit($id) {
        $data['title'] = 'Edit Data Buku Harian';
        $data['buku_harian'] = $this->BukuHarianModel->get_by_id($id);
        $data['sub_title'] = 'Edit Data Buku Harian'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('bukuharian/buku_harian_edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $data = [
            'hari_tanggal' => $this->input->post('hari_tanggal'),
            'nama_pengurus' => $this->input->post('nama_pengurus'),
            'masalah_persoalan' => $this->input->post('masalah_persoalan'),
            'tindakan' => $this->input->post('tindakan'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->BukuHarianModel->update($id, $data);
        redirect('BukuHarian');
    }

    public function delete($id) {
        $this->BukuHarianModel->delete($id);
        redirect('BukuHarian');
    }
}
