<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sampah_petugas extends CI_Controller {

	public function index()
	{

		if ($this->session->userdata('login') == "sudah login"){ 
				$data['staff'] = $this->model_data->select('data_sampah');
				$data['main_view'] = 'data_pengumpulan';
        		$this->load->view('header_petugas', $data);
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
				redirect('sampah_petugas');
			} else {
				$this->session->set_flashdata('hapus', 'gagal');
				redirect('sampah_petugas');
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
		$data['main_view']= 'edit_sampah_petugas';
		$this->load->view('header_petugas', $data);
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
					redirect('sampah_petugas');
			}else{
					$this->session->set_flashdata('notif', 'gagal');
					redirect('sampah_petugas');
			}
		} else {
			redirect(base_url('auth'));
		}
			
	}

	public function add_sampah()
	{
		if($this->session->userdata('login') == "sudah login") {
			$data['kelas'] = $this->model_data->select('kelas');
			$data['main_view']= 'input_sampah_petugas';
			$this->load->view('header_petugas', $data);
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
					$data['main_view'] = 'input_sampah_petugas';
					$this->load->view('header_petugas', $data);
			}else{
					$data['notif'] = 'gagal';
					$data['main_view'] = 'input_sampah_petugas';
					$this->load->view('header_petugas', $data);
			}
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

}

/* End of file sampah_petugas.php */
/* Location: ./application/controllers/sampah_petugas.php */