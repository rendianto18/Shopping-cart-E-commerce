<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
  { 
    parent::__construct();
    $this->load->model('AdminModel');
  }

  public function index()
  {
    $data['tbl_puskesmas'] = $this->AdminModel->tampil_data();
    // $this->load->view('template/header',$data);
    $this->load->view('admin/index',$data);
    // $this->load->view('template/footer');
  }

   public function tambah(){

/*    $this->form_validation->set_rules('input_id', 'Id', 'required|max_length[11]');*/
    $this->form_validation->set_rules('input_nmpuskesmas', 'Nama Puskesmas', 'required|max_length[50]');
    $this->form_validation->set_rules('input_alamat', 'Alamat', 'required|max_length[50]');
    $this->form_validation->set_rules('input_kuota', 'Kouta', 'required|max_length[50]');
    $this->form_validation->set_rules('input_lat', 'Latitude', 'required|max_length[100]');
    $this->form_validation->set_rules('input_long', 'Longitude', 'required|max_length[100]');
    $this->form_validation->set_rules('input_jenis', 'Jenis', 'required|max_length[100]');
    $this->form_validation->set_rules('input_gambar', 'Gambar', 'required|max_length[100]');
      
    if($this->form_validation->run() == FALSE){
    $data['tbl_puskesmas'] = $this->AdminModel->tampil_data();
    $this->load->view('template/header');
    $this->load->view('admin/form_tambah',$data);
    $this->load->view('template/footer');

    }
    else{
      $this->AdminModel->tambah();
      redirect('admin/index');
    }
  }
  
  public function ubah($id_list){
    $this->form_validation->set_rules('input_nmpuskesmas', 'Nama Puskesmas', 'required|max_length[50]');
    $this->form_validation->set_rules('input_alamat', 'Alamat', 'required|max_length[500]');
    $this->form_validation->set_rules('input_kuota', 'Kouta', 'required|max_length[50]');
    $this->form_validation->set_rules('input_lat', 'Latitude', 'required|max_length[100]');
    $this->form_validation->set_rules('input_long', 'Longitude', 'required|max_length[100]');
    $this->form_validation->set_rules('input_jenis', 'Jenis', 'required|max_length[100]');
    $this->form_validation->set_rules('input_gambar', 'Gambar', 'required|max_length[100]');
      
    if($this->form_validation->run() == FALSE){
    $data['tbl_puskesmas'] = $this->AdminModel->view_by($id_list);
    // $this->load->view('template/header');
    $this->load->view('admin/form_ubah',$data);
    // $this->load->view('template/footer');

    }
    else{
      $this->AdminModel->ubah($id_list);
      redirect('admin/index');
    }
  }
  
  public function delete($id_list){
    $this->AdminModel->delete($id_list);
    redirect('admin/index');
  }

}
?>