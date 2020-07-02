<?php

class Kategori extends CI_Controller
{
	public function pizza()
	{
		$data ['pizza']=$this->model_kategori->data_pizza()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kategori/pizza',$data);
		$this->load->view('templates/footer');
	}

	public function pasta()
	{
		$data ['pasta']=$this->model_kategori->data_pasta()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kategori/pasta',$data);
		$this->load->view('templates/footer');
	}

	public function minuman()
	{
		$data ['minuman']=$this->model_kategori->data_minuman()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kategori/minuman',$data);
		$this->load->view('templates/footer');
	}


}