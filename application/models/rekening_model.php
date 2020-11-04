<?php
class Rekening_model extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function getAllrkn(){
    return $this->db->get('rekening')->result();
  }

  public function getrkn($id_rekening){
    return $this->db->where('id_rekening', $id_rekening)->get('rekening')->row();
  }

  public function insert($data){
    $this->db->insert('rekening', $data);
    return $this->db->affected_rows();
  }

  public function update($id_rekening, $data){
    $this->db->where('id_rekening', $id_rekening)->update('rekening', $data);
    return $this->db->affected_rows();
  }

  public function delete($id_rekening){
    $this->db->where('id_rekening', $kode)->delete('rekening');
    return $this->db->affected_rows();
  }
}
?>