<?php
class Permasalahan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Permasalahan_model');
    }

    public function index() {
        $data['title'] = 'Permasalahan';
        $data['permasalahan'] = $this->Permasalahan_model->get_all();
        $data['sub_title'] = 'Permasalahan'; // Tambahkan sub_title di sini
        $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('permasalahan/permasalahan_view', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $data = [
            'tanggal_bulan' => $this->input->post('tanggal_bulan'),
            'permasalahan' => $this->input->post('permasalahan'),
            'keputusan' => $this->input->post('keputusan'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->Permasalahan_model->insert($data);
        redirect('Permasalahan');
    }

    public function edit($id) {
        $data['title'] = 'Edit Permasalahan';
        $data['permasalahan'] = $this->Permasalahan_model->get_by_id($id);
        $data['sub_title'] = 'Edit Permasalahan'; // Tambahkan sub_title di sini
        $data['user'] = $this->session->userdata('username');
        $this->load->view('templates/header', $data);
        $this->load->view('permasalahan/edit_permasalahan_view', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $data = [
            'tanggal_bulan' => $this->input->post('tanggal_bulan'),
            'permasalahan' => $this->input->post('permasalahan'),
            'keputusan' => $this->input->post('keputusan'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->Permasalahan_model->update($id, $data);
        redirect('Permasalahan');
    }

    public function delete($id) {
        $this->Permasalahan_model->delete($id);
        redirect('Permasalahan');
    }
}
