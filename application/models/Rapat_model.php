<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapat_model extends CI_Model {
    public function getAll() {
        return $this->db->get('bahan_rapat')->result_array();
    }

    public function getById($id) {
        return $this->db->get_where('bahan_rapat', ['id' => $id])->row_array();
    }

    public function insert($data) {
        return $this->db->insert('bahan_rapat', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('bahan_rapat', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('bahan_rapat');
    }
}
