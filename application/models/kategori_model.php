<?php
class Kategori_model extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function getAllKtr(){
    return $this->db->get('kategori')->result();
  }

  public function getKtr($kode){
    return $this->db->where('kode_kategori', $kode)->get('kategori')->row();
  }

  public function insert($data){
    $this->db->insert('kategori', $data);
    return $this->db->affected_rows();
  }

  public function update($kode, $data){
    $this->db->where('kode_kategori', $kode)->update('kategori', $data);
    return $this->db->affected_rows();
  }

  public function delete($kode){
    $this->db->where('kode_kategori', $kode)->delete('kategori');
    return $this->db->affected_rows();
  }
}
?>