<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_package');
	}

	public function index()
	{
		$data['harga_paket'] = $this->Model_package->tampilkan_data()->result_array();
		$data['price'] = $this->Model_package->tampilkan_data()->result_array();
		$this->load->view('landingpage/index', $data);
	}
}