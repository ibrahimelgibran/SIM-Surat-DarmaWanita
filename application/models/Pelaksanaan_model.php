<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelaksanaan_model extends CI_Model {
    public function getAll() {
        return $this->db->get('pelaksanaan_program_kerja')->result_array();
    }

    public function getById($id) {
        return $this->db->get_where('pelaksanaan_program_kerja', ['id' => $id])->row_array();
    }

    public function insert($data) {
        return $this->db->insert('pelaksanaan_program_kerja', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('pelaksanaan_program_kerja', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('pelaksanaan_program_kerja');
    }
}
