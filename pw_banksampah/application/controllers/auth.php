<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('login') != "sudah login") {
			$this->load->view('login');
		} else {
			redirect(base_url('index.php/home'));
		}
	}

	public function login() 	
	{
		if ($this->session->userdata('login') != "sudah login") {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$auth = array(
				'username' => $username,
				'password' => $password,
				);
			$cek = $this->model_data->select_where('data_staff',$auth);
		
			if (count($cek) > 0) {
				$data_session = array(
					'id' => $cek[0]['id'],
					'nis' => $cek[0]['nis'], 
					'nama' => $cek[0]['nama'],
					'kelas' => $cek[0]['kelas'], 
					'posisi' => $cek[0]['posisi'], 
					'username' => $cek[0]['username'],
					'password' => $cek[0]['password'],
					'login' => "sudah login",);
				$this->session->set_userdata($data_session);
				redirect(base_url('index.php/home'));
			} else {
				echo "<script type='text/javascript'>
		        		alert('Data Staff Tidak Ditemukan!') 
		        		</script>"; 
		        echo "<script type='text/javascript'>
		        		window.location.href = '".base_url()."'
		        		</script>";
			}
		} else{
			redirect(base_url('index.php/home'));
		}
	}

	public function logout()
	{
		if ($this->session->userdata('login') == "sudah login") {
			$this->session->sess_destroy();
			redirect(base_url());
		} else {
			redirect(base_url());
		}
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */