<?php
class Transaksi_model extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function getAlltrs(){
    // return $this->db->order_by('tanggal_transaksi','ASC')->get('transaksi')->result();
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('kategori','kategori.kode_kategori = transaksi.kode_kategori');
    $this->db->join('rekening', 'rekening.id_rekening = transaksi.id_rekening');
    $this->db->order_by('tanggal_transaksi','ASC');
    $query = $this->db->get();
    return $query->result();
  }

  public function getAllktrs(){
    $this->db->select('*');
    $this->db->from('kategori');
    $query = $this->db->get();
    return $query->result();
  }

  public function getAllrkns(){
    $this->db->select('*');
    $this->db->from('rekening');
    $query = $this->db->get();
    return $query->result();
  }

  public function gettrs($id_transaksi){
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
    $this->db->where('id_transaksi', $id_transaksi)->delete('transaksi');
    return $this->db->affected_rows();
  }
}
?>