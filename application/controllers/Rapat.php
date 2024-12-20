<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapat extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Rapat_model');
    }

    public function index() {
        $judul = [
            'title' => 'Management Surat',
            'sub_title' => 'Buku Bahan Rapat Pengurus Inti'
        ];

        $data['title'] = 'Buku Bahan Rapat Pengurus Inti';
        $data['bahan_rapat'] = $this->Rapat_model->getAll();
        $judul['sub_title'] = 'Buku Bahan Rapat Pengurus Inti'; // Tambahkan sub_title di sini
        $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $judul);
        $this->load->view('rapat/rapat_view', $data);
        $this->load->view('templates/footer');

    }

    public function create() {
        $data['title'] = 'Form Buku Bahan Rapat';
        $data['sub_title'] = 'Form Buku Bahan Rapat'; // Tambahkan sub_title di sini
        $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('rapat/rapat_form');
        $this->load->view('templates/footer');

    }

    public function store() {
        $data = [
            'permasalahan' => $this->input->post('permasalahan'),
            'keputusan' => $this->input->post('keputusan'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->Rapat_model->insert($data);
        redirect('rapat');
    }

    public function edit($id) {
        $data['title'] = 'Edit Buku Bahan Rapat';
        $data['sub_title'] = 'Edit Buku Bahan Rapat'; // Tambahkan sub_title di sini
        $data['user'] = $this->session->userdata('username');
        $data['rapat'] = $this->Rapat_model->getById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('rapat/rapat_form', $data);
        $this->load->view('templates/footer');

    }

    public function update($id) {
        $data = [
            'permasalahan' => $this->input->post('permasalahan'),
            'keputusan' => $this->input->post('keputusan'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->Rapat_model->update($id, $data);
        redirect('rapat');
    }

    public function delete($id) {
        $this->Rapat_model->delete($id);
        redirect('rapat');
    }
}
