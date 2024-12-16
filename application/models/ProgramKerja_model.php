<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgramKerja_model extends CI_Model {
    public function getAll() {
        return $this->db->get('program_kerja')->result_array();
    }

    public function getById($id) {
        return $this->db->get_where('program_kerja', ['id' => $id])->row_array();
    }

    public function insert($data) {
        return $this->db->insert('program_kerja', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('program_kerja', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('program_kerja');
    }
}
