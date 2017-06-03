<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->load->model('Loginmodel');

		}

		public function index()
		{
			$this->load->view('login');
		}

		public function register()
		{

			$this->form_validation->set_rules('nama_user', 'Nama Lengkap', 'trim|required');
			$this->form_validation->set_rules('nim_nip', 'NIM/NIP', 'trim|required|numeric');
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('no_telepon', 'No. Telepon', 'trim|required|numeric');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[conf_password]');
		$this->form_validation->set_rules('conf_password', 'Confirm Password', 'trim|required');

		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100000';
		$config['max_width']  = '3024';
		$config['max_height']  = '2368';
		
		$this->load->library('upload', $config);
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('register');
			} else {
					if ( ! $this->upload->do_upload('userfile')){
					$error = array('error' => $this->upload->display_errors());
					echo var_dump($error);
				}
				else{
					
					$this->Loginmodel->insert();
					$this->load->view('login');
				}
			}
		}


		public function ceklogin()
	 {
	 	//This method will have the credentials validation
	   $this->load->library('form_validation');
	 
	   $this->form_validation->set_rules('username', 'Username', 'trim|required');
	   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
	 
	   if($this->form_validation->run() == FALSE)
	   {
	     //Field validation failed.  User redirected to login page
	     $this->load->view('login');
	   }
	   else
	   {
	     //Go to private area
	    redirect('buku', 'refresh');
	   }
	 }
	 
	 function check_database($password)
	 {
	   //Field validation succeeded.  Validate against database
	   $username = $this->input->post('username');
	 
	   //query the database
	   $result = $this->Loginmodel->login($username, $password);
	 
	   if($result)
	   {
	     $sess_array = array();
	     foreach($result as $row)
	     {
	       $sess_array = array(
	         'id_user' => $row->id_user,
	         'username' => $row->username,
	         'nama_user' => $row->nama_user,
	         'nim_nip' => $row->nim_nip,
	         'foto' => $row->foto
	       );
	       $this->session->set_userdata('logged_in', $sess_array);
	     }
	     return TRUE;
	   }
	   else
	   {
	     $this->form_validation->set_message('check_database', 'Invalid username or password');
	     return false;
	   }
	 }

	 public function logout()
	{
		$this->session->unset_userdata('logged_in');
	    session_destroy();
	    redirect('buku', 'refresh');
	}
	
	}
	
	/* End of file Login.php */
	/* Location: ./application/controllers/Login.php */

?>