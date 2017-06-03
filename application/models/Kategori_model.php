<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Kategori_model extends CI_Model {


		public function getKategori()
		{
			$query = $this->db->get('kategori');
			return $query->result();
		}

		public function insertKategori()
		{
			$object = array(
				'nama_kategori' => $this->input->post('nama_kategori')
				);
			$this->db->insert('kategori',$object);
		}

		public function updateKategori($id)
		{
			$object = array(
				'nama_kategori' => $this->input->post('nama_kategori')
				);
			$this->db->where('id_kategori',$id);
			$this->db->update('kategori',$object);
		}

		public function delete($id)
		{
			$this->db->where('id_kategori',$id);
			$this->db->delete('kategori');
		}

		public function getDataSpesific($id)
		{
		$this->db->where('id_kategori',$id);
		$query = $this->db->get('kategori');
		return $query->result();
		}

		public function edit($id)
		{
			$object = array(
				'nama_kategori' => $this->input->post('nama_kategori')
				);
			$this->db->where('id_kategori',$id);
			$this->db->update('kategori',$object);
		}

		public function checkBuku($id)
		{
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->join('kategori','kategori.id_kategori = buku.id_kategori');
		$this->db->where('kategori.id_kategori', $id);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return true;
		}else{
			return false;
		}
		}
				

	}

	/* End of file Kategori_model.php */
	/* Location: ./application/models/Kategori_model.php */

?>
