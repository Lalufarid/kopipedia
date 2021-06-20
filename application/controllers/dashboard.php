<?php 

class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->model('m_beranda');
		$data['dashboard'] = $this->m_beranda->tampil_data();
		$this->load->model('m_artikel');
		$data['artikel'] = $this->m_artikel->tampil_data();
		$this->load->model('m_panduan');
		$data['panduan'] = $this->m_panduan->tampil_data();
		$this->load->model('m_auth');
		$data['user'] = $this->m_auth->tampil_data_user();
		$this->load->view('templates/header_beranda', $data);
		$this->load->view('beranda',$data);
		$this->load->view('templates/footer_beranda');
	}

	public function tulisan()
	{

		$this->load->model('m_artikel');

		// ambil data keyword
		if($this->input->post('submit_artikel'))
		{	
			$data['keyword'] = $this->input->post('keyword_artikel');
			$this->session->set_userdata('keyword_artikel', $data['keyword']);
		} else {
			if(!empty('keyword')){
			$data['keyword'] = $this->session->userdata('keyword_artikel');
			} else {$data['keyword'] = null;
			}
		}

		//config
		$this->db->like('judul_artikel', $data['keyword']);
		$this->db->from('artikel');
		$config['base_url'] = 'http://localhost/codeigniter/dashboard/tulisan';
		

		//styling
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
  		$config['full_tag_close'] = '  </ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 6;

		
		//initialize
		$this->pagination->initialize($config);



		$this->load->helper('text');

		$data['start'] = $this->uri->segment(3);
		$data['artikel'] = $this->m_artikel->tampil1_data($config['per_page'],$data['start'], $data['keyword']);


		$this->load->view('templates/header_artikel');
		$this->load->view('artikel',$data);
		$this->load->view('templates/footer_artikel');


	}
	public function panduan(){

		$this->load->model('m_panduan');

		// ambil data keyword
		if($this->input->post('submit_panduan'))
		{
			$data['keyword'] = $this->input->post('keyword_panduan');
			$this->session->set_userdata('keyword_panduan', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword_panduan');
		}
		//config
		$this->db->like('judul_panduan', $data['keyword']);
		$this->db->from('panduan');
		$config['base_url'] = 'http://localhost/codeigniter/dashboard/panduan';


		//styling
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
  		$config['full_tag_close'] = '  </ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 4;

		
		//initialize
		$this->pagination->initialize($config);
		$this->load->helper('text');

		$data['start'] = $this->uri->segment(3);
		$data['panduan'] = $this->m_panduan->tampil1_data($config['per_page'],$data['start'], $data['keyword']);

		$this->load->view('templates/header_panduan');
		$this->load->view('panduan',$data);
		$this->load->view('templates/footer_artikel');

	}

	public function detail_panduan($id){

		$this->load->model('m_panduan');
		$detail = $this->m_panduan->detail_data($id);
		$data['detail_panduan'] = $detail;

		$this->load->view('templates/header_panduan');
		$this->load->view('detail_panduan',$data);
		$this->load->view('templates/footer_artikel');


	}
	public function detail_artikel($id){

		$this->load->model('m_artikel');
		$detail = $this->m_artikel->detail_data($id);
		$data['detail_artikel'] = $detail;

		$this->load->view('templates/header_artikel');
		$this->load->view('detail_artikel',$data);
		$this->load->view('templates/footer_artikel');


	}

	public function roaster(){

		$this->load->model('m_roaster');
		$data['brand'] = $this->m_roaster->tampil_data();

		$this->load->view('templates/header_roaster');
		$this->load->view('roaster', $data);
		$this->load->view('templates/footer_artikel');

	}

	public function detail_roaster($id){
		$this->load->model('m_roaster');
		$detail= $this->m_roaster->detail_data($id);
		// $this->load->model('m_kopi');
		$data['kopi'] = $this->m_roaster->join($id);
		$data['detail_roaster'] = $detail;

		$this->load->view('templates/header_detail_roaster');
		$this->load->view('detail_roaster', $data);
		$this->load->view('templates/footer_roaster');
	} 


	public function tentang_kami(){

		$this->load->view('templates/header_tentang_kami');
		$this->load->view('tentang_kami');
		$this->load->view('templates/footer_artikel');
	}

	public function hubungi_kami(){

		$this->load->view('templates/header_hubungi_kami');
		$this->load->view('hubungi_kami' );
		$this->load->view('templates/footer_artikel');
	}

	public function tambah_saran (){

		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$pertanyaan = $this->input->post('pertanyaan');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'pertanyaan' => $pertanyaan,
		);
		$this->m_saran->input_data($data, 'saran');
		redirect ('dashboard/index');
		
	}

	public function kopi(){
		$this->load->model('m_kopi');
		// $data['join'] = $this->m_kopi->onjoin();

		//pagination
		$this->load->library('pagination');

		//config
		$config['base_url'] = 'http://localhost/codeigniter/dashboard/kopi';
		//styling
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
  		$config['full_tag_close'] = '  </ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		$config['total_rows'] = $this->m_kopi->countAllkopi();
		$config['per_page'] = 6;
		$config['num_links'] = 5;

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['kopi'] = $this->m_kopi->tampil_limit($config['per_page'],$data['start']);
		
		$this->load->view('templates/header_kopi');
		$this->load->view('kopi', $data );
		$this->load->view('templates/footer_kopi');
	}


	public function detail_kopi($id){
		$this->load->model('m_kopi');
		$detail= $this->m_kopi->tampil_data();
		$data['kopi'] = $this->m_kopi->join($id);
		$data['detail_kopi'] = $detail;

		$this->load->view('templates/header_detail_kopi');
		$this->load->view('detail_kopi', $data);
		$this->load->view('templates/footer_detail_kopi');
	}

	
	

}

 ?>