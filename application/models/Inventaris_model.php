<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('inventaris')->result_array();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('inventaris', ['id' => $id])->row_array();
    }

    public function insert($data)
    {
        return $this->db->insert('inventaris', $data);
    }

    public function update($id, $data)
    {
        return $this->db->update('inventaris', $data, ['id' => $id]);
    }

    public function delete($id)
    {
        return $this->db->delete('inventaris', ['id' => $id]);
    }
}
