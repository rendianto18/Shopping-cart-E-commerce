<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ListModel');
	}
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('home/index');
		$this->load->view('template/footer');
	}
    
	public function about($id_list)
	{
		$data['puskesmas'] = $this->ListModel->tampil_data();
		$data['tbl_puskesmas'] = $this->ListModel->view_by($id_list);
		$this->load->view('home/coba');
		// $this->load->view('template/footer');
	}

	public function map()
	{
		// $data['produk'] = $this->keranjang_model->get_produk_all();
		// $data['kategori'] = $this->keranjang_model->get_kategori_all();
		// $this->load->view('template/header');
		$this->load->view('map/list');
		// $this->load->view('template/footer');
	}

	public function list()
	{
		$data['puskesmas'] = $this->ListModel->tampil_data();
		// $data['kategori'] = $this->keranjang_model->get_kategori_all();
		// $this->load->view('theme/header');
		$this->load->view('map/list', $data);
		// $this->load->view('template/footer');
	}

	public function detail($id_list)
	{
		$data['puskesmas'] = $this->ListModel->tampil_data();
		$data['tbl_puskesmas'] = $this->ListModel->view_by($id_list);
		// $this->load->view('theme/header');
		$this->load->view('home/coba', $data);
		// $this->load->view('template/footer');
	}

	public function get_list_latlon($lat,$lon){
		$puskesmas =  $this->ListModel->tampil_data();
		$newPuskesmas = [];
		foreach ($puskesmas as $item){
			$newPuskesmas[] = [
				"id" => $item["id_list"],
				"distance" => $this->haversine([$lat,$lon], [$item["lat"],$item["long"]]),
				"name" => $item["nama"],
				"alamat" => $item["alamat"]
			];
		}

		$response = $this->sortList($newPuskesmas);

		echo json_encode($response);
	}

	private function sortList($data){
	
		$keys = array_column($data, 'distance');
		array_multisort($keys,SORT_ASC, $data);

		return $data;
	}


	private function haversine($point1, $point2){
		// array of lat-long i.e  $point1 = [lat,long]
		$earthRadius = 6371;  // earth radius in km
		$point1Lat = $point1[0];
		$point2Lat =$point2[0];
		$deltaLat = deg2rad($point2Lat - $point1Lat);
		$point1Long =$point1[1];
		$point2Long =$point2[1];
		$deltaLong = deg2rad($point2Long - $point1Long);
		$a = sin($deltaLat/2) * sin($deltaLat/2) + cos(deg2rad($point1Lat)) * cos(deg2rad($point2Lat)) * sin($deltaLong/2) * sin($deltaLong/2);
		$c = 2 * atan2(sqrt($a), sqrt(1-$a));
	
		$distance = $earthRadius * $c;
		return round($distance, 2);    // in km
	}



}
