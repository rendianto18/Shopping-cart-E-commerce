<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdminModel extends CI_Model {
  
  public function tampil_data(){
    $query = $this->db->get('tbl_puskesmas');
    return $query->result_array();
  }

  public function view_by($id_list){
    $this->db->where('id_list', $id_list);
    return $this->db->get('tbl_puskesmas')->row();
  }  

  public function tambah(){
    $data = array(
 /*     "id_list" => $this->input->post('input_id'),*/
      "nama" => $this->input->post('input_nmpuskesmas'),
      "alamat" => $this->input->post('input_alamat'),
      "kuota" => $this->input->post('input_kuota'),
      "lat" => $this->input->post('input_lat'),
      "long" => $this->input->post('input_long'),
      "jenis" => $this->input->post('input_jenis'),
      "gambar" => $this->input->post('input_gambar')
    );
    
    $this->db->insert('tbl_puskesmas', $data);
  }

  public function ubah($id_list){
    $data = array(
      "nama" => $this->input->post('input_nmpuskesmas'),
      "alamat" => $this->input->post('input_alamat'),
      "kuota" => $this->input->post('input_kuota'),
      "lat" => $this->input->post('input_lat'),
      "long" => $this->input->post('input_long'),
      "jenis" => $this->input->post('input_jenis'),
      "gambar" => $this->input->post('input_gambar')
    );
    $this->db->where('id_list', $id_list);
    $this->db->update('tbl_puskesmas', $data);   
/*    return $this->db->get_where($tbl_puskesmas, $data)->row(); */
  }

  public function ambilId($id_list)
  {
    return $this->db->get_where('tbl_puskesmas', ['id_list' => $id_list])->row_array();
  }

  public function delete($id_list){
    $this->db->where('id_list', $id_list);
    $this->db->delete('tbl_puskesmas');
  }

}