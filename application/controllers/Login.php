<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
  { 
    parent::__construct();
    $this->load->library('cart');
    $this->load->model('keranjang_model');
    $this->load->model('AdminModel');
  }

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required|alpha_numeric');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric');
		
		$username = $this->input->post('username');
	    $password = $this->input->post('password');
		if($this->form_validation->run() ==FALSE)
		{
			$this->load->view('login');
		}else{
			$this->load->model('LoginModel');
			$admin_user= $this->LoginModel->cek_login($username,$password);
		
			if($admin_user == FALSE)
			{
				$this->session->set_flashdata('error','Username / Password Anda Salah !!');
				redirect('login');
			}else{
				$this->session->set_userdata('username', $admin_user->username);
				redirect('admin/index');
								
		    }

	    }
    }
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}