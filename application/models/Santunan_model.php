<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santunan_model extends CI_Model {
    public function getAll() {
        return $this->db->get('santunan_pendidikan')->result_array();
    }

    public function getById($id) {
        return $this->db->get_where('santunan_pendidikan', ['id' => $id])->row_array();
    }

    public function insert($data) {
        return $this->db->insert('santunan_pendidikan', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('santunan_pendidikan', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('santunan_pendidikan');
    }
}
