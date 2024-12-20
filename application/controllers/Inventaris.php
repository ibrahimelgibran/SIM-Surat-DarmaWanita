<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inventaris_model');
    }

    public function index()
    {
        $judul = [
            'title' => 'Management Surat',
            'sub_title' => 'Data Inventaris'
        ];

        $data['title'] = 'Data Inventaris';
        $data['inventaris'] = $this->Inventaris_model->get_all();
        $judul['sub_title'] = 'Data Inventaris'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $judul);
        $this->load->view('inventaris/inventaris_view', $data);
        $this->load->view('templates/footer');

    }

    public function create()
    {
        $data['title'] = 'Form Inventaris';
        $data['sub_title'] = 'Form Inventaris'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('inventaris/inventaris_form');
        $this->load->view('templates/footer');

    }

    public function store()
    {
        $data = [
            'jenis_barang' => $this->input->post('jenis_barang'),
            'tahun_pembuatan' => $this->input->post('tahun_pembuatan'),
            'bahan' => $this->input->post('bahan'),
            'jumlah' => $this->input->post('jumlah'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->Inventaris_model->insert($data);
        redirect('inventaris');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Inventaris';
        $data['inventaris'] = $this->Inventaris_model->get_by_id($id);
        $data['sub_title'] = 'Edit Inventaris'; // Tambahkan sub_title di sini
    $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('inventaris/inventaris_form', $data);
        $this->load->view('templates/footer');

    }

    public function update($id)
    {
        $data = [
            'jenis_barang' => $this->input->post('jenis_barang'),
            'tahun_pembuatan' => $this->input->post('tahun_pembuatan'),
            'bahan' => $this->input->post('bahan'),
            'jumlah' => $this->input->post('jumlah'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->Inventaris_model->update($id, $data);
        redirect('inventaris');
    }

    public function delete($id)
    {
        $this->Inventaris_model->delete($id);
        redirect('inventaris');
    }
}
