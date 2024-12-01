<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UangMukaModel extends CI_Model {
    protected $table = 'uang_muka';

    // Insert data ke database
    public function insert($data) {
        return $this->db->insert_batch($this->table, $data);
    }

    // Ambil semua data
    public function get_all() {
        return $this->db->get($this->table)->result();
    }

    // Mengambil data berdasarkan ID
    public function get_by_id($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    // Menghapus data berdasarkan ID
    public function delete($id) {
        return $this->db->delete($this->table, ['id' => $id]);
    }

    // Update data
    public function update($id, $data) {
        return $this->db->update($this->table, $data, ['id' => $id]);
    }
}
