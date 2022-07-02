<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GGBase_model extends CI_model
{
	private $table = 'gudangotomotif';

	public function rules()
	{
		return [
			[
				'field' => 'nama_barang',
				'label' => 'Nama Barang',
				'rules' => 'trim|required'
			],
			[
				'field' => 'brand',
				'label' => 'Brand',
				'rules' => 'trim|required'
			],
			[
				'field' => 'harga_barang',
				'label' => 'Harga',
				'rules' => 'trim|required'
			],
			[
				'field' => 'stok_barang',
				'label' => 'Stok',
				'rules' => 'trim|required'
			],
		];
	}
	public function getById($id)
	{
		return $this->db->get_where($this->table, ["id_produk" => $id])->row();
	}
	public function getAll()
	{
		$this->db->from($this->table);
		$this->db->order_by("id_produk", "desc");
		$query = $this->db->get();
		return $query->result();
	}
	public function save()
	{
		$data = array(
			"nama_barang" => $this->input->post('nama_barang'),
			"brand" => $this->input->post('brand'),
			"harga_barang" => $this->input->post('harga_barang'),
			"stok_barang" => $this->input->post('stok_barang')
		);
		return $this->db->insert($this->table, $data);
	}
	public function update()
	{
		$data = array(
			"nama_barang" => $this->input->post('nama_barang'),
			"brand" => $this->input->post('brand'),
			"harga_barang" => $this->input->post('harga_barang'),
			"stok_barang" => $this->input->post('stok_barang')
		);
		return $this->db->update($this->table, $data, array('id_produk' => $this->input->post('id_produk')));
	}
	public function	delete($id)
	{
		return $this->db->delete($this->table, array("id_produk" => $id));
	}
}
