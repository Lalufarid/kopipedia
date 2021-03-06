<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('m_beranda');
		$data['dashboard'] = $this->m_beranda->tampil_data();
		$this->load->model('m_artikel');
		$data['artikel'] = $this->m_artikel->tampil_data();
		$this->load->model('m_panduan');
		$data['panduan'] = $this->m_panduan->tampil_data();
		$this->load->view('templates/header_beranda');
		$this->load->view('beranda',$data);
		$this->load->view('templates/footer_beranda');
	}
}
