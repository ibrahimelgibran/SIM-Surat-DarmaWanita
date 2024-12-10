<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuHarianModel extends CI_Model {
    public function get_all() {
        return $this->db->get('buku_harian')->result_array();
    }

    public function insert($data) {
        return $this->db->insert('buku_harian', $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where('buku_harian', ['id' => $id])->row_array();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('buku_harian', $data);
    }

    public function delete($id) {
        return $this->db->delete('buku_harian', ['id' => $id]);
    }
}
