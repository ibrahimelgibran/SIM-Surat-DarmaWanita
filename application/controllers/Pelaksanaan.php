<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelaksanaan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pelaksanaan_model');
    }

    public function index() {
        $data['title'] = 'Buku Pelaksanaan Program Kerja';
        $data['programs'] = $this->Pelaksanaan_model->getAll();
        $data['sub_title'] = 'Buku Pelaksanaan Program Kerja'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('pelaksanaan/pelaksanaan_view', $data);
        $this->load->view('templates/footer');

    }

    public function create() {
        $data['title'] = 'Form Pelaksanaan Program Kerja';
        $data['sub_title'] = 'Form Pelaksanaan Program Kerja'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('pelaksanaan/pelaksanaan_form');
        $this->load->view('templates/footer');

    }

    public function store() {
        $data = [
            'program_kerja' => $this->input->post('program_kerja'),
            'kegiatan' => $this->input->post('kegiatan'),
            'jadwal' => $this->input->post('jadwal'),
            'hambatan' => $this->input->post('hambatan'),
            'saran_usul' => $this->input->post('saran_usul'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->Pelaksanaan_model->insert($data);
        redirect('pelaksanaan');
    }

    public function edit($id) {
        $data['title'] = 'Edit Pelaksanaan Program Kerja';
        $data['program'] = $this->Pelaksanaan_model->getById($id);
        $data['sub_title'] = 'Edit Pelaksanaan Program Kerja'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('pelaksanaan/pelaksanaan_form', $data);
        $this->load->view('templates/footer');

    }

    public function update($id) {
        $data = [
            'program_kerja' => $this->input->post('program_kerja'),
            'kegiatan' => $this->input->post('kegiatan'),
            'jadwal' => $this->input->post('jadwal'),
            'hambatan' => $this->input->post('hambatan'),
            'saran_usul' => $this->input->post('saran_usul'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->Pelaksanaan_model->update($id, $data);
        redirect('pelaksanaan');
    }

    public function delete($id) {
        $this->Pelaksanaan_model->delete($id);
        redirect('pelaksanaan');
    }
}
