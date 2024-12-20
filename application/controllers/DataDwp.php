<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataDwp extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('DataDwp_model');
    }

    public function index() {
        $data['title'] = 'Data Induk Anggota DWP';
        $data['data_dwp'] = $this->DataDwp_model->getAll();
        $data['sub_title'] = 'Data Induk Anggota DWP'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('dwp/data_dwp_view', $data);
        $this->load->view('templates/footer');

    }

    public function create() {
        $data['title'] = 'Form Data Anggota DWP';
        $data['sub_title'] = 'Form Data Anggota DWP'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('dwp/data_dwp_form');
        $this->load->view('templates/footer');

    }

    public function store() {
        $data = [
            'nama_suami' => $this->input->post('nama_suami'),
            'golongan' => $this->input->post('golongan'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'status' => $this->input->post('status'),
            'karyawati' => $this->input->post('karyawati'),
            'jenis_kb' => $this->input->post('jenis_kb'),
            'nama_anak' => $this->input->post('nama_anak'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'nama_sekolah' => $this->input->post('nama_sekolah'),
            'alamat' => $this->input->post('alamat'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->DataDwp_model->insert($data);
        redirect('DataDwp');
    }

    public function edit($id) {
        $data['title'] = 'Edit Data Anggota DWP';
        $data['sub_title'] = 'Edit Data Anggota DWP'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $data['data_dwp'] = $this->DataDwp_model->getById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('dwp/data_dwp_form', $data);
        $this->load->view('templates/footer');

    }

    public function update($id) {
        $data = [
            'nama_suami' => $this->input->post('nama_suami'),
            'golongan' => $this->input->post('golongan'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'status' => $this->input->post('status'),
            'karyawati' => $this->input->post('karyawati'),
            'jenis_kb' => $this->input->post('jenis_kb'),
            'nama_anak' => $this->input->post('nama_anak'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'nama_sekolah' => $this->input->post('nama_sekolah'),
            'alamat' => $this->input->post('alamat'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->DataDwp_model->update($id, $data);
        redirect('DataDwp');
    }

    public function delete($id) {
        $this->DataDwp_model->delete($id);
        redirect('DataDwp');
    }
}
