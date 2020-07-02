<?php

class Model_kategori extends CI_Model
{
	public function data_pizza()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'pizza'));
	}

	public function data_pasta()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'pasta'));
	}

	public function data_minuman()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'minuman'));
	}
}
