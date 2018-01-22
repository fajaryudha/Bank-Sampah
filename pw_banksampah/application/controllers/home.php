<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('login') == "sudah login") { //menjalankan fungsi login di controller
			if ($this->session->userdata('posisi') == "Admin") {
				$where = array(
								'posisi !=' => "Admin",
								);
				$data['staff'] = $this->model_data->select_where('data_staff',$where);
				$data['kelas'] = $this->model_data->select_chart('data_sampah');
				$data['main_view'] = 'dashboard';
				$this->load->view('header_admin', $data);
			} else if ($this->session->userdata('posisi') == "Petugas"){
				$data['kelas'] = $this->model_data->select('data_sampah');
				$data['main_view'] = 'dashboard_petugas';
				$this->load->view('header_petugas', $data);
			} else {
				$data['main_view'] = 'dashboard_pengelola';
				$this->load->view('header_pengelola', $data);
			}
		} else {
			redirect(base_url());
		}
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */