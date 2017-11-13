<?php
class Oppilas_model extends CI_Model{
  public function hae_oppilaat(){
    $this->db->select('*');
    $this->db->from('opiskelija');
    return $this->db->get()->result_array();
  }
  public function poista_valittu($idPoista){
    $this->db->where('idOpiskelija',$idPoista);
    $this->db->delete('opiskelija');
  }
  public function lisaa_tietokantaan($lisaa_data){
    $this->db->set($lisaa_data);
    $this->db->insert('opiskelija');
  }
}
