<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sampah_admin extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('login') == "sudah login") {
			$data['kelas'] = $this->model_data->select('kelas');
			$data['main_view']= 'input_sampah';
			$this->load->view('header_admin', $data);
		}else{
			redirect(base_url('index.php/auth'));
		}
	}

	public function simpan_sampah()
	{	
		if ($this->session->userdata('login') == "sudah login") {
			$data = array(
					'id' => $this->input->post('id'),
				 	'penyetor' => $this->input->post('penyetor'),
				 	'jenis_sampah' =>  $this->input->post('jenis_sampah'),
				 	'detail_sampah' => $this->input->post('detail_sampah'),
				 	'berat_sampah' =>  $this->input->post('berat_sampah'),
				 	'poin' =>  $this->input->post('poin'),
	 );
			$this->db->insert('data_sampah', $data);

			if ($this->db->affected_rows() > 0){
					$data['notif'] = 'berhasil';
					$data['main_view'] = 'input_sampah';
					$this->load->view('header_admin', $data);
			}else{
					$data['notif'] = 'gagal';
					$data['main_view'] = 'input_sampah';
					$this->load->view('header_admin', $data);
			}
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

	public function kelola_sampah()
	{ 
		if ($this->session->userdata('login') == "sudah login") {
				$where  = array('tgl_dikerjakan' => NULL, );
				$data['staff'] = $this->model_data->select_where('data_sampah', $where);
				$data['main_view'] = 'kelola_sampah';
        		$this->load->view('header_admin', $data);
		} else {
			redirect(base_url('index.php/auth'));
		}
	}	

	public function tampil_kelola_sampah() 
	{
		if ($this->session->userdata('login') == "sudah login") {
		$a = $this->uri->segment(3);
		$data['key'] = $this->model_data->getsampah($a);
		$data['main_view']= 'input_kelola_sampah';
		$this->load->view('header_admin', $data);
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

	public function input_kelola_sampah()
	{
		if ($this->session->userdata('login') == "sudah login") {
		$id = $this->input->post('id');
		$data = array(
				 	'tgl_dikerjakan' => $this->input->post('tgl_dikerjakan'),
				 	'deskripsi' =>  $this->input->post('deskripsi'),
				 	'foto' =>  $this->input->post('foto'),
				 );

			$this->db->where('id',$id)
					 ->update('data_sampah', $data);

			if ($this->db->affected_rows() > 0){
					$this->session->set_flashdata('notif', 'berhasil');
					redirect('sampah_admin/kelola_sampah');
			}else{
					$this->session->set_flashdata('notif', 'gagal');
					redirect('sampah_admin/kelola_sampah');
			}
	} else {
			redirect(base_url('index.php/auth'));
		}
			
		}


		public function data_pengumpulan()
		{ 
		if ($this->session->userdata('login') == "sudah login"){ 
				$data['staff'] = $this->model_data->select('data_sampah');
				$data['main_view'] = 'data_pengumpulan';
        		$this->load->view('header_admin', $data);
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

	public function data_sampah()
		{ 
		if ($this->session->userdata('login') == "sudah login"){ 
				$where = array (
								'deskripsi' => NULL, 
								);
				$data['sampah_belum'] = $this->model_data->select_where('data_sampah',$where);
				$wheres = array (
								'deskripsi !=' => NULL, 
								);
				$data['sampah_sudah'] = $this->model_data->select_where('data_sampah',$wheres);
				$data['main_view'] = 'data_sampah';
        		$this->load->view('header_admin', $data);
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

	public function hapus_sampah() {
			if ($this->session->userdata('login') == "sudah login") {
			$a = $this->uri->segment(3);
			$go = $this->model_data->hapussampah($a);
			if ($go) {
				$this->session->set_flashdata('hapus', 'berhasil');
				redirect('sampah_admin/data_sampah');
			} else {
				$this->session->set_flashdata('hapus', 'gagal');
				redirect('sampah_admin/data_sampah');
			}
		} else {
			redirect(base_url('index.php/auth'));
		}
	}
		public function tampil_sampah_done() 
	{
		if ($this->session->userdata('login') == "sudah login") {
		$data['kelas'] = $this->model_data->select('kelas');
		$a = $this->uri->segment(3);
		$data['key'] = $this->model_data->getsampah($a);
		$data['main_view']= 'edit_sampah_done';
		$this->load->view('header_admin', $data);
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

	public function edit_sampah_done()
	{
		if ($this->session->userdata('login') == "sudah login") {
		$id = $this->input->post('id');
		$data = array(
					'penyetor' => $this->input->post('penyetor'),
				 	'jenis_sampah' =>  $this->input->post('jenis_sampah'),
				 	'detail_sampah' => $this->input->post('detail_sampah'),
				 	'berat_sampah' =>  $this->input->post('berat_sampah'),
				 	'poin' =>  $this->input->post('poin'),
				 	'tgl_dikerjakan' => $this->input->post('tgl_dikerjakan'),
				 	'deskripsi' =>  $this->input->post('deskripsi'),
				 	'foto' =>  $this->input->post('foto'),
				 );

			$this->db->where('id',$id)
					 ->update('data_sampah', $data);

			if ($this->db->affected_rows() > 0){
					$this->session->set_flashdata('notif', 'berhasil');
					redirect('sampah_admin/data_sampah');
			}else{
					$this->session->set_flashdata('notif', 'gagal');
					redirect('sampah_admin/data_sampah');
			}
	} else {
			redirect(base_url('index.php/auth'));
		}
			
		}

		public function tampil_edit_sampah() 
	{
		if ($this->session->userdata('login') == "sudah login") {
		$data['kelas'] = $this->model_data->select('kelas');
		$a = $this->uri->segment(3);
		$data['key'] = $this->model_data->getsampah($a);
		$data['main_view']= 'edit_sampah';
		$this->load->view('header_admin', $data);
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

		public function edit_sampah()
	{
		if ($this->session->userdata('login') == "sudah login") {
		$id = $this->input->post('id');
		$data = array(
					'id' => $this->input->post('id'),
				 	'penyetor' => $this->input->post('penyetor'),
				 	'jenis_sampah' =>  $this->input->post('jenis_sampah'),
				 	'detail_sampah' => $this->input->post('detail_sampah'),
				 	'berat_sampah' =>  $this->input->post('berat_sampah'),
				 	'poin' =>  $this->input->post('poin'),
				 );

			$this->db->where('id',$id)
					 ->update('data_sampah', $data);

			if ($this->db->affected_rows() > 0){
					$this->session->set_flashdata('notif', 'berhasil');
					redirect('sampah_admin/data_sampah');
			}else{
					$this->session->set_flashdata('notif', 'gagal');
					redirect('sampah_admin/data_sampah');
			}
	} else {
			redirect(base_url('auth'));
		}
			
		}
}
/* End of file sampah_admin.php */
/* Location: ./application/controllers/sampah_admin.php */