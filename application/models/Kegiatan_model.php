<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_model extends CI_Model {
    public function get_all_kegiatan() {
        return $this->db->get('kegiatan')->result_array();
    }

    public function add_kegiatan($data) {
        return $this->db->insert('kegiatan', $data);
    }

    public function get_kegiatan_by_id($id) {
        return $this->db->get_where('kegiatan', ['id' => $id])->row_array();
    }

    public function update_kegiatan($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('kegiatan', $data);
    }

    public function delete_kegiatan($id) {
        return $this->db->delete('kegiatan', ['id' => $id]);
    }
}
