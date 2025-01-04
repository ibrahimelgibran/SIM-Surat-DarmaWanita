<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuBank extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('BukuBank_model');
        $this->load->helper('url');
    }

    public function index() {
        $judul = [
            'title' => 'Management Surat',
            'sub_title' => 'Data Buku Bank'
        ];
        $data['title'] = 'Form Buku Bank';
        $data['transaksi'] = $this->BukuBank_model->get_all_data();
        $data['sub_title'] = 'Data Buku Bank'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $judul);
        $this->load->view('bukubank/buku_bank', $data);
        $this->load->view('templates/footer');

    }

    public function save() {
        $this->BukuBank_model->insert_data($this->input->post());
        redirect('BukuBank');
    }

    public function edit($id) {
        $data['title'] = 'Form Buku Bank';
        $data['transaksi'] = $this->BukuBank_model->get_by_id($id);
        $data['all_transaksi'] = $this->BukuBank_model->get_all_data();
        $data['sub_title'] = 'Data Buku Bank'; // Tambahkan sub_title di sini
        $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('bukubank/buku_bank_edit', $data);
        $this->load->view('templates/footer');

    }

    public function update($id) {
        $this->BukuBank_model->update_data($id, $this->input->post());
        redirect('BukuBank');
    }

    public function delete($id) {
        $this->BukuBank_model->delete_data($id);
        redirect('BukuBank');
    }
}
