<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Kegiatan_model');
    }

    public function index() {
        $data['title'] = 'Data Kegiatan';
        $data['kegiatan'] = $this->Kegiatan_model->get_all_kegiatan();
        $data['sub_title'] = 'Data kegiatan'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
    $this->load->view('templates/header', $data);
        $this->load->view('kegiatan/index', $data);
        $this->load->view('templates/footer');
    }

    public function add() {
        $data['title'] = 'Tambah Kegiatan';
        $data['sub_title'] = 'Tambah Data Kegiatan'; 
        $data['user'] = $this->session->userdata('username'); 
    
        // Cek apakah ada data yang dikirim melalui metode POST
        if ($this->input->post()) {
            // Ambil data dari form
            $data_input = [
                'hari_tanggal' => $this->input->post('hari_tanggal'),
                'nama_pengurus' => $this->input->post('nama_pengurus'),
                'tempat' => $this->input->post('tempat'),
                'kegiatan' => $this->input->post('kegiatan'),
                'keterangan' => $this->input->post('keterangan')
            ];
    
            // Validasi untuk memastikan tidak ada data kosong
            if (!empty($data_input['hari_tanggal']) && !empty($data_input['nama_pengurus']) && 
                !empty($data_input['tempat']) && !empty($data_input['kegiatan'])) {
    
                // Simpan data ke database melalui model
                $this->Kegiatan_model->add_kegiatan($data_input);
    
                // Pesan sukses
                // $this->session->set_flashdata('success', 'Kegiatan berhasil ditambahkan.');
                redirect('kegiatan');
            } else {
                // Kirim pesan error jika ada input yang kosong
                $this->session->set_flashdata('error', 'Semua kolom wajib diisi!');
                redirect('kegiatan/add');
            }
        } else {
            // Load view tambah kegiatan jika tidak ada data POST
            $this->load->view('templates/header', $data);
            $this->load->view('kegiatan/add', $data);
            $this->load->view('templates/footer');
        }
    }
    


    public function edit($id) {
        $data['title'] = 'Edit Kegiatan';
        if ($this->input->post()) {
            $data = [
                'hari_tanggal' => $this->input->post('hari_tanggal'),
                'nama_pengurus' => $this->input->post('nama_pengurus'),
                'tempat' => $this->input->post('tempat'),
                'kegiatan' => $this->input->post('kegiatan'),
                'keterangan' => $this->input->post('keterangan')
            ];
            $this->Kegiatan_model->update_kegiatan($id, $data);
            redirect('kegiatan');
        } else {
            $data['kegiatan'] = $this->Kegiatan_model->get_kegiatan_by_id($id);
            $data['sub_title'] = 'Edit Kegiatan'; // Tambahkan sub_title di sini
            $data['user'] = $this->session->userdata('username');
            $this->load->view('templates/header', $data);
            $this->load->view('kegiatan/edit', $data);
            $this->load->view('templates/footer');
        }
    }

    public function delete($id) {
        $this->Kegiatan_model->delete_kegiatan($id);
        redirect('kegiatan');
    }
}
