<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hasil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$data['kelas'] = $this->model_data->select('data_sampah');
		$data['main_view'] = 'dashboard';
		$this->load->view('hasil_foto', $data);
	}

}

/* End of file  */
/* Location: ./application/controllers/ */