<?php 


class Admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') != '1')
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Anda Harus Login Terlebih Dahulu !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('auth/login');
		}
	}

	public function admin_tulisan(){

	$this->load->library('pagination');
	 //config
		$config['base_url'] = 'http://localhost/codeigniter/admin/admin_panduan';
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

		$config['total_rows'] = $this->m_admin->countAllartikel();
		$config['per_page'] = 6;
		$config['num_links'] = 5;

		//initialize
		$this->pagination->initialize($config);

	$data['start'] = $this->uri->segment(3);
	$data['admin_artikel'] = $this->m_admin->tampil_limit_artikel($config['per_page'],$data['start']);
	// $data['admin_artikel'] = $this->m_admin->tampil_data_artikel()->result();
	$data['admin'] = $this->m_admin->tampil_data_admin()->result();
	$this->load->helper('text');


	 $this->load->view('templates/header_admin');
	 $this->load->view('admin_artikel', $data);
	 $this->load->view('templates/footer_admin');
	

	 }

	 public function admin_kopi(){

	 $this->load->library('pagination');
	 //config
		$config['base_url'] = 'http://localhost/codeigniter/admin/admin_kopi';
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

		$config['total_rows'] = $this->m_admin->countAllkopi();
		$config['per_page'] = 6;
		$config['num_links'] = 5;

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['kopi'] = $this->m_admin->tampil_limit($config['per_page'],$data['start']);
		$data['brand'] = $this->m_admin->tampil_data_brand()->result();

	 $this->load->view('templates/header_admin');
	 $this->load->view('admin_kopi', $data);
	 $this->load->view('templates/footer_admin');
	 }
	 public function tambah_kopi(){

		$nama_kopi = $this->input->post('nama_kopi');
		$berat_kopi = $this->input->post('berat_kopi');
		$variasi_kopi = $this->input->post('variasi_kopi');
		$rekomendasi_seduh = $this->input->post('rekomendasi_seduh');
		$karakter_rasa = $this->input->post('karakter_rasa');
		$tingkat_roasting = $this->input->post('tingkat_roasting');
		$stock_kopi = $this->input->post('stock_kopi');
		$harga_kopi = $this->input->post('harga_kopi');
		$id_brand = $this->input->post('id_brand');
		$gambar_kopi = $_FILES['gambar_kopi'];
		if($foto=''){

		}else{
			$config['upload_path'] = './assets/img/kopi';
			$config['allowed_types'] = 'jpg|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar_kopi')){
				echo "Upload Gagal"; die();
			}else{
				$gambar_kopi = $this->upload->data('file_name');

			}
		}

		$data = array(
			'nama_kopi' => $nama_kopi,
			'berat_kopi' => $berat_kopi,
			'variasi_kopi' => $variasi_kopi,
			'rekomendasi_seduh' => $rekomendasi_seduh,
			'karakter_rasa' => $karakter_rasa,
			'tingkat_roasting' => $tingkat_roasting,
			'stock_kopi' => $stock_kopi,
			'harga_kopi' => $harga_kopi,
			'gambar_kopi' => $gambar_kopi,
			'id_brand' => $id_brand,
		);
		$this->m_admin->input_data_kopi($data, 'kopi');
		redirect ('admin/admin_kopi');
	}
	public function hapus_kopi($id){

		$where = array ('id_kopi' => $id);
		$this->m_admin->hapus_data_kopi($where, 'kopi');
		redirect ('admin/admin_kopi');
	}


	public function tambah_artikel(){

		$judul_artikel = $this->input->post('judul_artikel');
		$isi_artikel = $this->input->post('isi_artikel');
		$id_admin = $this->input->post('id_admin');
		$gambar_artikel = $_FILES['gambar_artikel'];
		if($foto=''){

		}else{
			$config['upload_path'] = './assets/img/artikel';
			$config['allowed_types'] = 'jpg|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar_artikel')){
				echo "Upload Gagal"; die();
			}else{
				$gambar_artikel = $this->upload->data('file_name');

			}
		}

		$data = array(
			'judul_artikel' => $judul_artikel,
			'isi_artikel' => $isi_artikel,
			'gambar_artikel' => $gambar_artikel,
			'id_admin' => $id_admin,
		);
		$this->m_admin->input_data_artikel($data, 'artikel');
		redirect ('admin/admin_tulisan');
	}

	public function hapus_artikel($id){

		$where = array ('id_artikel' => $id);
		$this->m_admin->hapus_data_artikel($where, 'artikel');
		redirect ('admin/admin_tulisan');
	}

	public function admin_panduan(){

	$this->load->library('pagination');
	 //config
		$config['base_url'] = 'http://localhost/codeigniter/admin/admin_panduan';
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

		$config['total_rows'] = $this->m_admin->countAllpanduan();
		$config['per_page'] = 6;
		$config['num_links'] = 5;

		//initialize
		$this->pagination->initialize($config);

	$data['start'] = $this->uri->segment(3);
	$data['admin_panduan'] = $this->m_admin->tampil_limit_panduan($config['per_page'],$data['start']);
	// $data['admin_panduan'] = $this->m_admin->tampil_data_panduan()->result();
	$data['admin'] = $this->m_admin->tampil_data_admin()->result();
	$this->load->helper('text');


	 $this->load->view('templates/header_admin');
	 $this->load->view('admin_panduan', $data);
	 $this->load->view('templates/footer_admin');
	

	 }

	public function tambah_panduan(){

		$judul_panduan = $this->input->post('judul_panduan');
		$isi_panduan = $this->input->post('isi_panduan');
		$id_admin = $this->input->post('id_admin');
		$gambar_panduan = $_FILES['gambar_panduan'];
		if($foto=''){

		}else{
			$config['upload_path'] = './assets/img/panduan';
			$config['allowed_types'] = 'jpg|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar_panduan')){
				echo "Upload Gagal"; die();
			}else{
				$gambar_panduan = $this->upload->data('file_name');

			}
		}

		$data = array(
			'judul_panduan' => $judul_panduan,
			'isi_panduan' => $isi_panduan,
			'gambar_panduan' => $gambar_panduan,
			'id_admin' => $id_admin,
		);
		$this->m_admin->input_data_panduan($data, 'panduan');
		redirect ('admin/admin_panduan');
	}

	public function hapus_panduan($id){

		$where = array ('id_panduan' => $id);
		$this->m_admin->hapus_data_panduan($where, 'panduan');
		redirect ('admin/admin_panduan');
	}

	public function admin_pemesanan (){

	$data['transaksi'] = $this->m_admin->transaksi();

	$this->load->view('templates/header_admin');
	 $this->load->view('admin_pemesanan', $data);
	 $this->load->view('templates/footer_admin');
	}

	public function detail_pemesanan($id){

		$data['transaksi'] = $this->m_admin->ambil_id_transaksi($id);
		$data['pesanan'] = $this->m_admin->ambil_id_pesanan($id);
		$this->load->view('templates/header_admin');
	 	$this->load->view('detail_pemesanan', $data);
	 	$this->load->view('templates/footer_admin');
	}
}

 ?>