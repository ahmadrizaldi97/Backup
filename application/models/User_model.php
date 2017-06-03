<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getDataUser()
		{
			$this->db->select('*');
			$this->db->from('user');
			$query = $this->db->get();
			return $query->result();
		}

	public function getIdUser($nim)
	{
		$this->db->where('nim_nip',$nim);
		$query = $this->db->get('user');
		return $query->result();
	}
	
	public function create()
	{
		$insertuser = array(
			'nama_user' => $this->input->post('nama_user'), 
			'nim_nip' => $this->input->post('nim_nip'),
			'alamat' => $this->input->post('alamat'), 
			'no_telp' => $this->input->post('no_telp'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'foto' => $this->upload->data('file_name')
			);

		$this->db->insert('user',$insertuser);
	}

	public function getUser($id)
	{
		$query=$this->db->query("select * from user where id='$id'");
		return $query->result_array();
	}
	
	public function updateUser($id)
	{
		$updateuser = array(
			'nama_user' => $this->input->post('nama_user'), 
			'nim_nip' => $this->input->post('nim_nip'),
			'alamat' => $this->input->post('alamat'), 
			'no_telp' => $this->input->post('no_telp'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'foto' => $this->upload->data('file_name')
			);
		$this->db->where('id', $id);
		$this->db->update('user', $updateuser);
	}	

	public function deleteUser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */