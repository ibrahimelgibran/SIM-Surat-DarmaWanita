<?php
class PelayananKB_model extends CI_Model {
    public function get_all() {
        return $this->db->get('register_pelayanan_kb')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('register_pelayanan_kb', ['id' => $id])->row();
    }

    public function insert($data) {
        $this->db->insert('register_pelayanan_kb', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('register_pelayanan_kb', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('register_pelayanan_kb');
    }
}
