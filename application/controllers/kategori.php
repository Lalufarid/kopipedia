<?php 

class Kategori extends CI_Controller{

	public function u50()
	{
		$data['kopi'] = $this->m_kategori->data_u50();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function kopi_50_100()
	{
		$data['kopi'] = $this->m_kategori->data_50_100();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function a100()
	{
		$data['kopi'] = $this->m_kategori->data_a100();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function b1()
	{
		$data['kopi'] = $this->m_kategori->data_b1();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function b2()
	{
		$data['kopi'] = $this->m_kategori->data_b2();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function b3()
	{
		$data['kopi'] = $this->m_kategori->data_b3();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function b4()
	{
		$data['kopi'] = $this->m_kategori->data_b4();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function b5()
	{
		$data['kopi'] = $this->m_kategori->data_b5();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function b6()
	{
		$data['kopi'] = $this->m_kategori->data_b6();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function b7()
	{
		$data['kopi'] = $this->m_kategori->data_b7();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function b9()
	{
		$data['kopi'] = $this->m_kategori->data_b9();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function b10()
	{
		$data['kopi'] = $this->m_kategori->data_b10();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function b11()
	{
		$data['kopi'] = $this->m_kategori->data_b11();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function caramel()
	{
		$data['kopi'] = $this->m_kategori->data_caramel();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function chocolate()
	{
		$data['kopi'] = $this->m_kategori->data_chocolate();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function floral()
	{
		$data['kopi'] = $this->m_kategori->data_floral();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function fruity()
	{
		$data['kopi'] = $this->m_kategori->data_fruity();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function lemon()
	{
		$data['kopi'] = $this->m_kategori->data_lemon();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function blacktea()
	{
		$data['kopi'] = $this->m_kategori->data_blacktea();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
	public function blueberry()
	{
		$data['kopi'] = $this->m_kategori->data_blueberry();

		$this->load->view('templates/header_kopi');
		$this->load->view('kategori', $data );
		$this->load->view('templates/footer_kopi');
	}
}

 ?>