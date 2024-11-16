<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notulen_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_notulen() {
        return $this->db->get('notulen')->result();
    }

    public function get_notulen($id) {
        return $this->db->where('id', $id)->get('notulen')->row();
    }

    public function insert_notulen($data) {
        return $this->db->insert('notulen', $data);
    }

    public function update_notulen($id, $data) {
        return $this->db->where('id', $id)->update('notulen', $data);
    }

    public function delete_notulen($id) {
        return $this->db->where('id', $id)->delete('notulen');
    }
}
