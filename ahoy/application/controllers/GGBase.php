<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GGBase extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("GGBase_model");
	}
	public function index()
	{
		$data["title"] = "Daftar Produk Otomotif";
		$data["data_GGBase"] = $this->GGBase_model->getAll();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('gudang/index', $data);
		$this->load->view('templates/footer');
	}
	public function add()
	{
		$Gudang = $this->GGBase_model;
		$validation = $this->form_validation;
		$validation->set_rules($Gudang->rules());
		$data["title"] = "Tambah Produk";
		if ($validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/menu');
			$this->load->view('gudang/add', $data);
			$this->load->view('templates/footer');
		} else {
			$Gudang->save();
			$this->session->set_flashdata('message', 'Disimpan');
			redirect("GGBase");
		}
	}
	public function update($id = null)
	{
		if (!isset($id)) redirect('ggbase');

		$Gudang = $this->GGBase_model;
		$validation = $this->form_validation;
		$validation->set_rules($Gudang->rules());
		if ($validation->run()) {
			$Gudang->update();
			$this->session->set_flashdata('messagedit', 'diubah');
			redirect("ggbase");
		}

		$data["title"] = "Ubah Data Produk";
		$data["data_GGBase"] = $Gudang->getById($id);

		if (!$data["data_GGBase"]) show_404();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('gudang/edit', $data);
		$this->load->view('templates/footer');
	}
	public function delete()
	{
		$id = $this->input->get('id');
		if (!isset($id)) show_404();
		$this->GGBase_model->delete($id);
		$msg['success'] = true;
		$this->session->set_flashdata('messagehps', 'dihapus');
		$this->output->set_output(json_encode($msg));
	}
}
