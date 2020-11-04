<?php
class Piutang_model extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function getAllptg(){
    return $this->db->get('piutang')->result();
  }

  public function getptg($id_piutang){
    return $this->db->where('id_piutang', $id_piutang)->get('piutang')->row();
  }

  public function insert($data){
    $this->db->insert('piutang', $data);
    return $this->db->affected_rows();
  }

  public function update($id_piutang, $data){
    $this->db->where('id_piutang', $id_piutang)->update('piutang', $data);
    return $this->db->affected_rows();
  }

  public function delete($id_piutang){
    $this->db->where('id_piutang', $kode)->delete('piutang');
    return $this->db->affected_rows();
  }
}
?>