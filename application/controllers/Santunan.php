<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santunan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Santunan_model');
    }

    public function index() {
        $data['title'] = 'Buku Santunan Pendidikan';
        $data['santunan'] = $this->Santunan_model->getAll();
        $data['sub_title'] = 'Buku Santunan Pendidikan'; // Tambahkan sub_title di sini
        $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('santunan/santunan_view', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $data['title'] = 'Form Santunan Pendidikan';
        $data['sub_title'] = 'Form Santunan Pendidikan'; // Tambahkan sub_title di sini
        $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('santunan/santunan_form');
        $this->load->view('templates/footer');

    }

    public function store() {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'nama_anak' => $this->input->post('nama_anak'),
            'nama_ortu' => $this->input->post('nama_ortu'),
            'alamat_sekolah' => $this->input->post('alamat_sekolah'),
            'golongan' => $this->input->post('golongan'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->Santunan_model->insert($data);
        redirect('santunan');
    }

    public function edit($id) {
        $data['title'] = 'Edit Santunan Pendidikan';
        $data['santunan'] = $this->Santunan_model->getById($id);
        $data['sub_title'] = 'Edit Santunan Pendidikan'; // Tambahkan sub_title di sini
        $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('santunan/santunan_form', $data);
        $this->load->view('templates/footer');

    }

    public function update($id) {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'nama_anak' => $this->input->post('nama_anak'),
            'nama_ortu' => $this->input->post('nama_ortu'),
            'alamat_sekolah' => $this->input->post('alamat_sekolah'),
            'golongan' => $this->input->post('golongan'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->Santunan_model->update($id, $data);
        redirect('santunan');
    }

    public function delete($id) {
        $this->Santunan_model->delete($id);
        redirect('santunan');
    }
}
