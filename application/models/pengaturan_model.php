<?php
class Pengaturan_model extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function getAllpgt(){
    return $this->db->get('transaksi')->result();
  }

  public function getpgt($id_transaksi){
    return $this->db->where('id_transaksi', $id_transaksi)->get('transaksi')->row();
  }

  public function insert($data){
    $this->db->insert('transaksi', $data);
    return $this->db->affected_rows();
  }

  public function update($id_transaksi, $data){
    $this->db->where('id_transaksi', $id_transaksi)->update('transaksi', $data);
    return $this->db->affected_rows();
  }

  public function delete($id_transaksi){
    $this->db->where('id_transaksi', $kode)->delete('transaksi');
    return $this->db->affected_rows();
  }
}
?>