<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BankBook extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BankBookModel'); // Load model untuk menyimpan data
        $this->load->helper('url');          // Load helper URL
        $this->load->helper('form');         // Load helper Form
        $this->load->library('session');     // Load library Session
    }

    // Load Form Buku Bank
    public function form()
    {
        // Data yang akan dikirimkan ke view
        $data['title'] = 'Form Buku Bank';
        
        // Load view form buku bank
        $this->load->view('templates/header', $data);  // Header template (opsional)
        $this->load->view('bukubank/bank_book_form', $data);    // View utama
        $this->load->view('templates/footer');         // Footer template (opsional)
    }

    // Proses Simpan Data
    public function save()
    {
        // Ambil data dari form
        $debet = $this->input->post('debet');
        $kredit = $this->input->post('kredit');

        // Validasi input kosong
        if (empty($debet) && empty($kredit)) {
            $this->session->set_flashdata('error', 'Data tidak boleh kosong!');
            redirect('BankBook/form');
        }

        // Proses data debet
        if (!empty($debet)) {
            foreach ($debet['tanggal'] as $key => $value) {
                $data_debet[] = [
                    'tanggal'   => $value,
                    'uraian'    => $debet['uraian'][$key],
                    'no_bukti'  => $debet['no_bukti'][$key],
                    'jumlah'    => $debet['jumlah'][$key],
                ];
            }
            $this->BankBookModel->saveDebet($data_debet); // Simpan ke database
        }

        // Proses data kredit
        if (!empty($kredit)) {
            foreach ($kredit['tanggal'] as $key => $value) {
                $data_kredit[] = [
                    'tanggal'   => $value,
                    'uraian'    => $kredit['uraian'][$key],
                    'no_bukti'  => $kredit['no_bukti'][$key],
                    'jumlah'    => $kredit['jumlah'][$key],
                ];
            }
            $this->BankBookModel->saveKredit($data_kredit); // Simpan ke database
        }

        // Set notifikasi sukses dan redirect kembali ke form
        $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        redirect('BankBook/form');
    }
}
