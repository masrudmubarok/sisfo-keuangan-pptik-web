<?php
class Laporan_model extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function getAlllpr(){
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('kategori','kategori.kode_kategori = transaksi.kode_kategori');
    $this->db->join('rekening', 'rekening.id_rekening = transaksi.id_rekening');
    $this->db->order_by('tanggal_transaksi','ASC');
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

  public function tot_masuk(){
    $sql = "SELECT sum(pemasukan) as pemasukan FROM transaksi";
    $result = $this->db->query($sql);
    return $result->row()->pemasukan;
  }

  public function tot_keluar(){
    $sql = "SELECT sum(pengeluaran) as pengeluaran FROM transaksi";
    $result = $this->db->query($sql);
    return $result->row()->pengeluaran;
  }

  public function lpr_jprog(){
    $where = "nama_kategori='Join Program'";
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('kategori','kategori.kode_kategori = transaksi.kode_kategori');
    $this->db->join('rekening', 'rekening.id_rekening = transaksi.id_rekening');
    $this->db->order_by('tanggal_transaksi','ASC');
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
  }

  public function lpr_ihouse(){
    $where = "nama_kategori='In House Training'";
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('kategori','kategori.kode_kategori = transaksi.kode_kategori');
    $this->db->join('rekening', 'rekening.id_rekening = transaksi.id_rekening');
    $this->db->order_by('tanggal_transaksi','ASC');
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
  }

  public function lpr_scourse(){
    $where = "nama_kategori='Short Course'";
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('kategori','kategori.kode_kategori = transaksi.kode_kategori');
    $this->db->join('rekening', 'rekening.id_rekening = transaksi.id_rekening');
    $this->db->order_by('tanggal_transaksi','ASC');
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
  }

  public function lpr_toeic(){
    $where = "nama_kategori='TOEIC Test'";
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('kategori','kategori.kode_kategori = transaksi.kode_kategori');
    $this->db->join('rekening', 'rekening.id_rekening = transaksi.id_rekening');
    $this->db->order_by('tanggal_transaksi','ASC');
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
  }

  public function lpr_toefl(){
    $where = "nama_kategori='TOEFL Test'";
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('kategori','kategori.kode_kategori = transaksi.kode_kategori');
    $this->db->join('rekening', 'rekening.id_rekening = transaksi.id_rekening');
    $this->db->order_by('tanggal_transaksi','ASC');
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
  }

  public function lpr_icert(){
    $where = "nama_kategori='International Certification'";
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('kategori','kategori.kode_kategori = transaksi.kode_kategori');
    $this->db->join('rekening', 'rekening.id_rekening = transaksi.id_rekening');
    $this->db->order_by('tanggal_transaksi','ASC');
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
  }

  public function lpr_lain(){
    $where = "nama_kategori='Lain-lain'";
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('kategori','kategori.kode_kategori = transaksi.kode_kategori');
    $this->db->join('rekening', 'rekening.id_rekening = transaksi.id_rekening');
    $this->db->order_by('tanggal_transaksi','ASC');
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
  }
}
?>