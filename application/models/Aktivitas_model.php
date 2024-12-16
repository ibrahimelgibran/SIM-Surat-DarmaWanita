<?php
class Aktivitas_model extends CI_Model {

    public function get_all_aktivitas() {
        return $this->db->get('log_kegiatan')->result();
    }

    public function insert_aktivitas($data) {
        $this->db->insert('log_kegiatan', $data);
    }

    public function delete_aktivitas($id) {
        $this->db->where('id', $id);
        $this->db->delete('log_kegiatan');
    }
    public function get_aktivitas_by_id($id) {
        return $this->db->get_where('log_kegiatan', array('id' => $id))->row();
    }
    
    public function update_aktivitas($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('log_kegiatan', $data);
    }
}
