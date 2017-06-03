<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Denda extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->load->model('Denda_model');
		}

		public function index()
		{
			$data['denda'] = $this->Denda_model->getDenda();
			$this->load->view('hed_fot/sidebar');
			$this->load->view('peminjaman/denda_view',$data);
			$this->load->view('hed_fot/footer');
		}

		public function sd($id)
		{
			$data['interval'] = $this->Denda_model->interval($id);
			// // echo var_dump($data);
			// $data['denda'] = $this->Denda_model->getDenda();
			// $this->load->view('hed_fot/sidebar');
			// $this->load->view('peminjaman/denda_view',$data);
			// $this->load->view('hed_fot/footer');
		}
	
	}
	
	/* End of file Denda.php */
	/* Location: ./application/controllers/Denda.php */


 ?>