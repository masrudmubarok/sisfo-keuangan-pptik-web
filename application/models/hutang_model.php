<?php
class Hutang_model extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function getAllHtg(){
    return $this->db->get('hutang')->result();
  }

  public function getHtg($id){
    return $this->db->where('id_hutang', $id)->get('hutang')->row();
  }

  public function insert($data){
    $this->db->insert('hutang', $data);
    return $this->db->affected_rows();
  }

  public function update($id, $data){
    $this->db->where('id_hutang', $id)->update('hutang', $data);
    return $this->db->affected_rows();
  }

  public function delete($id){
    $this->db->where('id_hutang', $kode)->delete('hutang');
    return $this->db->affected_rows();
  }
}
?>