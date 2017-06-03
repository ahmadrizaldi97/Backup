<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('User_model');
	}


	public function index()
	{
		$data['datauser'] = $this->User_model->getDataUser();
		$this->load->view('hed_fot/sidebar');
		$this->load->view('user/user_view',$data);
		$this->load->view('hed_fot/footer');
	}

	public function insertUser()
	{
		
	}

	public function edit($id)
	{
		# code...
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */

 ?>