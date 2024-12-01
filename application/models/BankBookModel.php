<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BankBookModel extends CI_Model {

    protected $table = 'bank_book'; // Nama tabel di database

    // Fungsi untuk menyimpan data ke tabel
    public function insert($data) {
        if (!is_array($data)) {
            return false; // Data harus berupa array
        }
        return $this->db->insert($this->table, $data);
    }

    // Fungsi untuk menyimpan banyak data (batch insert)
    public function insert_batch($data) {
        if (!is_array($data) || empty($data)) {
            return false; // Data harus berupa array dan tidak kosong
        }
        return $this->db->insert_batch($this->table, $data);
    }

    // Fungsi untuk mengambil semua data dari tabel
    public function get_all() {
        return $this->db->get($this->table)->result();
    }

    // Fungsi untuk mengambil data berdasarkan kondisi tertentu
    public function get_where($conditions) {
        if (!is_array($conditions)) {
            return false; // Kondisi harus berupa array
        }
        return $this->db->get_where($this->table, $conditions)->result();
    }

    // Fungsi untuk memperbarui data
    public function update($conditions, $data) {
        if (!is_array($conditions) || !is_array($data)) {
            return false; // Kondisi dan data harus berupa array
        }
        return $this->db->update($this->table, $data, $conditions);
    }

    // Fungsi untuk menghapus data berdasarkan kondisi tertentu
    public function delete($conditions) {
        if (!is_array($conditions)) {
            return false; // Kondisi harus berupa array
        }
        return $this->db->delete($this->table, $conditions);
    }
}
