<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

	
	public function getDataBuku()
		{
			$this->db->select('*');
			$this->db->from('buku');
			$this->db->join('kategori', 'kategori.id_kategori = buku.id_kategori');
			$query = $this->db->get();
			return $query->result();
		}	


	public function getBukuByKategori($id)
	{
			$this->db->select('*');
			$this->db->from('buku');
			$this->db->join('kategori', 'kategori.id_kategori = buku.id_kategori');
			
			$this->db->where('buku.id_kategori',$id);
			$query = $this->db->get();
			return $query->result();
	}


	public function create()
	{
		$object = array(
			'judul_buku' => $this->input->post('judul_buku'), 
			'id_kategori' => $this->input->post('kategori'),
			'nama_pengarang' => $this->input->post('nama_pengarang'), 
			'jumlah_buku' => $this->input->post('jumlah_buku'),
			'cover' => $this->upload->data('file_name')
			);

		$this->db->insert('buku',$object);
	}

	public function getSpesificData($id)
	{
		$this->db->where('id_buku',$id);
		$query = $this->db->get('buku');
		return $query->result();
	}

	public function edit($id)
	{
		$object = array(
			'judul_buku' => $this->input->post('judul_buku'), 
			'id_kategori' => $this->input->post('kategori'),
			'nama_pengarang' => $this->input->post('nama_pengarang'), 
			'jumlah_buku' => $this->input->post('jumlah_buku'),
			'cover' => $this->upload->data('file_name')
			);

		$this->db->where('id_buku',$id);
		$this->db->update('buku',$object);
	}

	public function delete($id)
	{
		$this->db->where('id_buku',$id);
		$this->db->delete('buku');
	}


	public function checkBuku($id)
		{
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->join('detail_pinjam','detail_pinjam.id_buku = buku.id_buku');
		$this->db->where('buku.id_buku', $id);
		$this->db->where('detail_pinjam.status','Belum Kembali');

		$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return true;
			}else{
				return false;
			}
		}

}

/* End of file Buku_model.php */
/* Location: ./application/models/Buku_model.php */

?>