<?php
class Dashboard_model extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function sum_pemasukan(){
    $sql = "SELECT sum(pemasukan) as pemasukan FROM transaksi";
    $result = $this->db->query($sql);
    return $result->row()->pemasukan;
  }

  public function sum_pengeluaran(){
    $sql = "SELECT sum(pengeluaran) as pengeluaran FROM transaksi";
    $result = $this->db->query($sql);
    return $result->row()->pengeluaran;
  }

  public function get_saldo(){
    $sql = "SELECT sum(pemasukan)-sum(pengeluaran) as saldo FROM transaksi";
    $result = $this->db->query($sql);
    return $result->row()->saldo;
  } 

  public function sum_piutang(){
    $sql = "SELECT sum(nominal) as piutang FROM piutang";
    $result = $this->db->query($sql);
    return $result->row()->piutang;
  }

  public function in_agustus(){
    $sql = "SELECT sum(pemasukan) as pemasukan FROM transaksi WHERE tanggal_transaksi BETWEEN '2020-08-00' AND '2020-08-32'";
    $result = $this->db->query($sql);
    return $result->row()->pemasukan;
  }

  public function out_agustus(){
    $sql = "SELECT sum(pengeluaran) as pengeluaran FROM transaksi WHERE tanggal_transaksi BETWEEN '2020-08-00' AND '2020-08-32'";
    $result = $this->db->query($sql);
    return $result->row()->pengeluaran;
  }

  public function in_september(){
    $sql = "SELECT sum(pemasukan) as pemasukan FROM transaksi WHERE tanggal_transaksi BETWEEN '2020-09-00' AND '2020-09-32'";
    $result = $this->db->query($sql);
    return $result->row()->pemasukan;
  }

  public function out_september(){
    $sql = "SELECT sum(pengeluaran) as pengeluaran FROM transaksi WHERE tanggal_transaksi BETWEEN '2020-09-00' AND '2020-09-32'";
    $result = $this->db->query($sql);
    return $result->row()->pengeluaran;
  }

  public function in_oktober(){
    $sql = "SELECT sum(pemasukan) as pemasukan FROM transaksi WHERE tanggal_transaksi BETWEEN '2020-10-00' AND '2020-10-32'";
    $result = $this->db->query($sql);
    return $result->row()->pemasukan;
  }

  public function out_oktober(){
    $sql = "SELECT sum(pengeluaran) as pengeluaran FROM transaksi WHERE tanggal_transaksi BETWEEN '2020-10-00' AND '2020-10-32'";
    $result = $this->db->query($sql);
    return $result->row()->pengeluaran;
  }    

  public function in_november(){
    $sql = "SELECT sum(pemasukan) as pemasukan FROM transaksi WHERE tanggal_transaksi BETWEEN '2020-11-00' AND '2020-11-32'";
    $result = $this->db->query($sql);
    return $result->row()->pemasukan;
  }

  public function out_november(){
    $sql = "SELECT sum(pengeluaran) as pengeluaran FROM transaksi WHERE tanggal_transaksi BETWEEN '2020-11-00' AND '2020-11-32'";
    $result = $this->db->query($sql);
    return $result->row()->pengeluaran;
  }

  public function in_desember(){
    $sql = "SELECT sum(pemasukan) as pemasukan FROM transaksi WHERE tanggal_transaksi BETWEEN '2020-12-00' AND '2020-12-32'";
    $result = $this->db->query($sql);
    return $result->row()->pemasukan;
  }

  public function out_desember(){
    $sql = "SELECT sum(pengeluaran) as pengeluaran FROM transaksi WHERE tanggal_transaksi BETWEEN '2020-12-00' AND '2020-12-32'";
    $result = $this->db->query($sql);
    return $result->row()->pengeluaran;
  }

  public function in_januari(){
    $sql = "SELECT sum(pemasukan) as pemasukan FROM transaksi WHERE tanggal_transaksi BETWEEN '2021-01-00' AND '2021-01-32'";
    $result = $this->db->query($sql);
    return $result->row()->pemasukan;
  }

  public function out_januari(){
    $sql = "SELECT sum(pengeluaran) as pengeluaran FROM transaksi WHERE tanggal_transaksi BETWEEN '2021-01-00' AND '2021-01-32'";
    $result = $this->db->query($sql);
    return $result->row()->pengeluaran;
  }

}
?>