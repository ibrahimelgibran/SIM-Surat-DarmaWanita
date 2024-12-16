<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataDwp_model extends CI_Model {
    public function getAll() {
        return $this->db->get('data_dwp')->result_array();
    }

    public function getById($id) {
        return $this->db->get_where('data_dwp', ['id' => $id])->row_array();
    }

    public function insert($data) {
        return $this->db->insert('data_dwp', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('data_dwp', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('data_dwp');
    }
}
