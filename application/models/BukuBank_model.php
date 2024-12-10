<?php
class BukuBank_model extends CI_Model {
    public function get_all_data() {
        return $this->db->get('transaksi')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('transaksi', ['id' => $id])->row();
    }

    public function insert_data($data) {
        $this->db->insert('transaksi', [
            'jenis' => $data['jenis'],
            'tanggal' => $data['tanggal'],
            'uraian' => $data['uraian'],
            'no_bukti' => $data['no_bukti'],
            'jumlah' => $data['jumlah']
        ]);
    }

    public function update_data($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('transaksi', [
            'jenis' => $data['jenis'],
            'tanggal' => $data['tanggal'],
            'uraian' => $data['uraian'],
            'no_bukti' => $data['no_bukti'],
            'jumlah' => $data['jumlah']
        ]);
    }

    public function delete_data($id) {
        $this->db->delete('transaksi', ['id' => $id]);
    }
}
