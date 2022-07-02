<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Ahay extends CI_Controller
	{
		public function index() 
		{
			$data["title"] = "Nama Kelompok";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/menu');
			$this->load->view('kelompok/index', $data);
			$this->load->view('templates/footer');
			}
	}
?>