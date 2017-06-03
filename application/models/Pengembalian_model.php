<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian_model extends CI_Model {

	public function update_data($id)
		{
			$date = date('Ymd');
			$object = array(
				'status' => 'Kembali',
				'tanggal_kembali' => $date
				 );
			$this->db->where('id_peminjaman',$id);
			$this->db->update('detail_pinjam',$object);
		}	

	public function update_spesific_data($id_buku,$id_peminjaman)
	{
		$date = date('Ymd');
		$object = array(
			'status' => 'Kembali',
			'tanggal_kembali' => $date 
			);
		$this->db->where('id_peminjaman',$id_peminjaman);
		$this->db->where('id_buku',$id_buku);
		$this->db->update('detail_pinjam',$object);
	}

	public function getDataPengembalian()
	{
			$this->db->select('*');
			$this->db->from('peminjaman');
			$this->db->join('detail_pinjam','detail_pinjam.id_peminjaman = peminjaman.id_peminjaman');
			$this->db->join('buku', 'buku.id_buku = detail_pinjam.id_buku');
			$this->db->join('user', 'peminjaman.id_user = user.id_user');
			$this->db->group_by("peminjaman.id_user");
			$this->db->where('detail_pinjam.status','Kembali');
			$query = $this->db->get();
			return $query->result();
	}

	public function getBukuYgDiKembalikan($id,$id_peminjaman)
	{
			$this->db->select('*');
			$this->db->from('detail_pinjam');
			$this->db->join('peminjaman','peminjaman.id_peminjaman = detail_pinjam.id_peminjaman');
			$this->db->join('buku','buku.id_buku = detail_pinjam.id_buku');
			$this->db->join('kategori', 'kategori.id_kategori = buku.id_kategori');
			$this->db->join('user','peminjaman.id_user = user.id_user');
			$this->db->where('peminjaman.id_user',$id);
			$this->db->where('detail_pinjam.status','Kembali');
			// $this->db->group_by("detail_pinjam.id_peminjaman");

			$query = $this->db->get();
			return $query->result();
	}

	public function delete_pengembalian($id)
	{
		// $this->db->where('id_buku')
	}

}

/* End of file Pengembalian_model.php */
/* Location: ./application/models/Pengembalian_model.php */

?>