<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
	public function index(){

		if ($this->session->userdata('login') == "sudah login") {
				$data['kelas'] = $this->model_data->select('kelas');
				$data['main_view'] = 'add_staff';
        		$this->load->view('header_admin', $data);
		} else {
			redirect(base_url('index.php/auth'));
		}

	}

	public function add_staff()
	{
		if ($this->session->userdata('login') == "sudah login") {
			$data = array(
					'id' => $this->input->post('id'),
					'nis' => $this->input->post('nis'),
				 	'nama' => $this->input->post('nama'),
				 	'kelas' =>  $this->input->post('kelas'),
				 	'posisi' =>  $this->input->post('posisi'),
				 	'username' =>  $this->input->post('username'),
				 	'password' =>  $this->input->post('password')
	 );

			$this->db->insert('data_staff', $data);

			if ($this->db->affected_rows() > 0){
					$data['notif'] = 'berhasil';
					$data['main_view'] = 'add_staff';
					$this->load->view('header_admin', $data);
			}else{
					$data['notif'] = 'gagal';
					$data['main_view'] = 'add_staff';
					$this->load->view('header_admin', $data);
			}
		} else {
			redirect(base_url('auth'));
		}
	}

	public function data_staff()
	{ 
		if ($this->session->userdata('login') == "sudah login") {
				$where = array(
								'posisi !=' => "Admin",
								);
				$data['staff'] = $this->model_data->select_where('data_staff',$where);
				$data['main_view'] = 'data_staff';
        		$this->load->view('header_admin', $data);
		} else {
			redirect(base_url('index.php/auth'));
		}
	}	

	public function tampil_edit_staff() 
	{
		if ($this->session->userdata('login') == "sudah login") {
		$data['kelas'] = $this->model_data->select('kelas');
		$a = $this->uri->segment(3);
		$data['key'] = $this->model_data->getstaff($a);
		$data['main_view']= 'edit_staff';
		$this->load->view('header_admin', $data);
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

	public function updates_staff()
	{
		if ($this->session->userdata('login') == "sudah login") {
		$id = $this->input->post('id');
		$data = array(
					'id' => $this->input->post('id'),
					'nis' => $this->input->post('nis'),
				 	'nama' => $this->input->post('nama'),
				 	'kelas' =>  $this->input->post('kelas'),
				 	'posisi' =>  $this->input->post('posisi'),
				 	'username' =>  $this->input->post('username'),
				 	'password' =>  $this->input->post('password'),
				 );

			$this->db->where('id',$id)
					 ->update('data_staff', $data);

			if ($this->db->affected_rows() > 0){
					$this->session->set_flashdata('notif', 'berhasil');
					redirect('staff/data_staff');
			}else{
					$this->session->set_flashdata('notif', 'gagal');
					redirect('staff/data_staff');
			}
	} else {
			redirect(base_url('auth'));
		}
			
		}

	public function hapus_staff() {
			if ($this->session->userdata('login') == "sudah login") {
			$a = $this->uri->segment(3);
			$go = $this->model_data->hapusstaff($a);
			if ($go) {
				$this->session->set_flashdata('hapus', 'berhasil');
				redirect('staff/data_staff');
			} else {
				$this->session->set_flashdata('hapus', 'gagal');
				redirect('staff/data_staff');
			}
		} else {
			redirect(base_url('index.php/auth'));
		}
	}
	
}

/* End of file staff.php */
/* Location: ./application/controllers/staff.php */