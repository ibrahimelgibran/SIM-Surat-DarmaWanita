<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgramKerja extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ProgramKerja_model');
    }

    public function index() {
        $data['title'] = 'Data Program Kerja';
        $data['program_kerja'] = $this->ProgramKerja_model->getAll();
        $data['sub_title'] = 'Data Program Kerja'; // Tambahkan sub_title di sini
        $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('kerja/program_kerja_view', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $data['title'] = 'Form Program Kerja';
        $data['sub_title'] = 'Form Program Kerja'; // Tambahkan sub_title di sini
        $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('kerja/program_kerja_form');
        $this->load->view('templates/footer');

    }

    public function store() {
        $data = [
            'program_kerja' => $this->input->post('program_kerja'),
            'kegiatan' => $this->input->post('kegiatan'),
            'sasaran' => $this->input->post('sasaran'),
            'anggaran' => $this->input->post('anggaran'),
            'jadwal' => $this->input->post('jadwal'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->ProgramKerja_model->insert($data);
        redirect('programkerja');
    }

    public function edit($id) {
        $data['title'] = 'Edit Program Kerja';
        $data['program_kerja'] = $this->ProgramKerja_model->getById($id);
        $data['sub_title'] = 'Edit Program Kerja'; // Tambahkan sub_title di sini
        $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('kerja/program_kerja_form', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $data = [
            'program_kerja' => $this->input->post('program_kerja'),
            'kegiatan' => $this->input->post('kegiatan'),
            'sasaran' => $this->input->post('sasaran'),
            'anggaran' => $this->input->post('anggaran'),
            'jadwal' => $this->input->post('jadwal'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->ProgramKerja_model->update($id, $data);
        redirect('programkerja');
    }

    public function delete($id) {
        $this->ProgramKerja_model->delete($id);
        redirect('programkerja');
    }
}
