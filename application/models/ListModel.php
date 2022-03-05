<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ListModel extends CI_Model {
  
  public function tampil_data(){
    $query = $this->db->get('tbl_puskesmas');
    return $query->result_array();
  }

  public function view_by($id_list){
    $this->db->where('id_list', $id_list);
    return $this->db->get('tbl_puskesmas')->row();
  } 

  // public function getJoin(){
  //   $this->db->select('*')
  //       ->from('tbl_puskesmas')
  //       ->join('tbl_data', 'tbl_data.id_data = tbl_puskesmas.id_list');

  //   $query = $this->db->get();
  //   return $query->result_array();

}