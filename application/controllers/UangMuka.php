<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UangMuka extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('UangMukaModel');
    }

    // Menampilkan form
    public function form() {
        $data['title'] = 'Form Uang Muka';
        $data['uang_muka_data'] = $this->UangMukaModel->get_all(); // Ambil data dari database
    $data['sub_title'] = 'Data Uang Muka'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('uang_muka/form_uang', $data);
        $this->load->view('templates/footer');
    }

    // Simpan data ke database
    public function save() {
        $postData = $this->input->post();
        
        // Struktur data untuk batch insert
        $data = [];
        foreach ($postData['uraian'] as $key => $uraian) {
            $data[] = [
                'nomor' => $postData['nomor'][$key],
                'uraian' => $uraian,
                'nomor_bukti' => $postData['nomor_bukti'][$key],
                'jumlah_uang_muka' => $postData['jumlah_uang_muka'][$key],
                'tanggal_pajak' => $postData['tanggal_pajak'][$key],
                'no_bukti_pajak' => $postData['no_bukti_pajak'][$key],
                'jumlah_pajak' => $postData['jumlah_pajak'][$key],
                'disetor_tunai' => $postData['disetor_tunai'][$key],
                'saldo_uang_muka' => $postData['saldo_uang_muka'][$key],
            ];
        }

        if ($this->UangMukaModel->insert($data)) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menyimpan data.');
        }

        redirect('UangMuka/form');
    }

    // Menghapus data
    public function delete($id) {
        if ($this->UangMukaModel->delete($id)) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data.');
        }
        redirect('UangMuka/form');
    }

    // Menampilkan data untuk diedit
    public function edit($id) {
        $data['title'] = 'Edit Uang Muka';
        $data['uang_muka'] = $this->UangMukaModel->get_by_id($id); // Ambil data yang ingin diedit
        $data['sub_title'] = 'Data Uang Muka'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('uang_muka/edit_uang', $data);
        $this->load->view('templates/footer');
    }

    // Menyimpan perubahan data
    public function update() {
        $postData = $this->input->post();
        $id = $postData['id'];

        $data = [
            'nomor' => $postData['nomor'],
            'uraian' => $postData['uraian'],
            'nomor_bukti' => $postData['nomor_bukti'],
            'jumlah_uang_muka' => $postData['jumlah_uang_muka'],
            'tanggal_pajak' => $postData['tanggal_pajak'],
            'no_bukti_pajak' => $postData['no_bukti_pajak'],
            'jumlah_pajak' => $postData['jumlah_pajak'],
            'disetor_tunai' => $postData['disetor_tunai'],
            'saldo_uang_muka' => $postData['saldo_uang_muka'],
        ];

        if ($this->UangMukaModel->update($id, $data)) {
            $this->session->set_flashdata('success', 'Data berhasil diupdate.');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupdate data.');
        }

        redirect('UangMuka/form');
    }
}
