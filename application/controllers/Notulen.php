<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notulen extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Notulen_model');
    }

    public function index() {
        $data['notulen'] = $this->Notulen_model->get_all_notulen();
        $this->load->view('admin/notulen/index', $data);
    }

    public function create() {
        $this->load->view('admin/notulen/create');
    }

    public function store() {
        $data = [
            'judul' => $this->input->post('judul'),
            'tanggal' => $this->input->post('tanggal'),
            'isi' => $this->input->post('isi')
        ];
        $this->Notulen_model->insert_notulen($data);
        redirect('notulen');
    }

    public function edit($id) {
        $data['notulen'] = $this->Notulen_model->get_notulen($id);
        $this->load->view('admin/notulen/edit', $data);
    }

    public function update($id) {
        $data = [
            'judul' => $this->input->post('judul'),
            'tanggal' => $this->input->post('tanggal'),
            'isi' => $this->input->post('isi')
        ];
        $this->Notulen_model->update_notulen($id, $data);
        redirect('notulen');
    }

    public function delete($id) {
        $this->Notulen_model->delete_notulen($id);
        redirect('notulen');
    }
}
