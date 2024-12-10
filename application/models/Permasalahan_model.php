<?php
class Permasalahan_model extends CI_Model {
    public function get_all() {
        return $this->db->get('permasalahan')->result();
    }

    public function insert($data) {
        return $this->db->insert('permasalahan', $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where('permasalahan', ['id' => $id])->row();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('permasalahan', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('permasalahan');
    }
}
