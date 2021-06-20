<?php 

class Auth extends CI_Controller{


	public function login(){

		$this->form_validation->set_rules('username', 'Username', 'required',['required' => 'Username wajib diisi !']);
		$this->form_validation->set_rules('password', 'Passwrod', 'required',['required' => 'Password wajib diisi !']);
		if($this->form_validation->run() == FALSE){
			
			$this->load->view('templates/header_login');
			$this->load->view('form_login');
			$this->load->view('templates/footer_beranda');
		}else{
			$auth = $this->m_auth->cek_login();

			if($auth == FALSE){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Username atau Password Anda Salah !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('auth/login');
			}else{
				$this->session->set_userdata('username', $auth->username);
				$this->session->set_userdata('nama_user', $auth->nama_user);
				$this->session->set_userdata('role_id', $auth->role_id);

				switch ($auth->role_id){
					case 1 : redirect('admin/admin_kopi');
							break;
					case 2 : redirect('dashboard/index');
							break;
					default : break;
				}

			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('auth/login');
	}

	public function registrasi(){
		$this->session->sess_destroy();
		$this->form_validation->set_rules('nama_user','nama_user', 'required');
		$this->form_validation->set_rules('alamat_user','alamat_user', 'required');
		$this->form_validation->set_rules('username','username', 'required');
		$this->form_validation->set_rules('password_1','password', 'required|matches[password_2]');
		$this->form_validation->set_rules('password_2','password', 'required|matches[password_1]');
		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header_registrasi');
			$this->load->view('registrasi');
			$this->load->view('templates/footer_beranda');

		}else{

			$nama_user = $this->input->post('nama_user');
			$username = $this->input->post('username');
			$password = $this->input->post('password_1');
			$alamat_user = $this->input->post('alamat_user');
			$role_id = 2;
			$gambar_user = $_FILES['gambar_user'];
		if($foto=''){

		}else{
			$config['upload_path'] = './assets/img/user';
			$config['allowed_types'] = 'jpg|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar_user')){
				echo "Upload Gagal"; die();
			}else{
				$gambar_user = $this->upload->data('file_name');

			}
		}


			$data = array(
				'nama_user' => $nama_user,
				'username' => $username,
				'password' => $password,
				'alamat_user' => $alamat_user,
				'role_id' => $role_id,
				'gambar_user' => $gambar_user,
			);
			$this->db->insert('user', $data);
		redirect ('auth/login');
		}
	}


	public function profil(){

	$data['user'] = $this->m_auth->tampil_data_user();
	$this->load->view('templates/header_profil');
	$this->load->view('profil',$data);
	$this->load->view('templates/footer_beranda');
	}
}


 ?>