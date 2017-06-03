<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model {

	public function login($username, $password)
	{
		$this->db->select('id_user,nama_user,nim_nip,username,password,foto');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));

		$query = $this->db->get();
		if ($query->num_rows() ==1) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function insert()
	{
		$password =$this->input->post('password');
		$object = array(
			'nama_user' => $this->input->post('nama_user'),
			'nim_nip' => $this->input->post('nim_nip'),  
			'alamat' => $this->input->post('alamat'), 
			'no_telepon' => $this->input->post('no_telepon'), 
			'tanggal_lahir' => $this->input->post('tanggal_lahir'), 
			'foto' => $this->upload->data('file_name'), 
			'username' => $this->input->post('username'), 
			'password' => MD5($password)
			);

		$this->db->insert('user',$object);
	}

}

/* End of file Loginmodel.php */
/* Location: ./application/models/Loginmodel.php */

?>