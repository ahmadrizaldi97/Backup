<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_Model extends CI_Model {

	public function getDataPeminjam()
	{

			$stop_date = date('Ymd');
			$stop_date = date('Ymd', strtotime($stop_date . ' +3 day'));

			$this->db->select('*');
			$this->db->from('peminjaman');
			$this->db->join('detail_pinjam','detail_pinjam.id_peminjaman = peminjaman.id_peminjaman');
			$this->db->join('buku', 'buku.id_buku = detail_pinjam.id_buku');
			$this->db->join('user', 'peminjaman.id_user = user.id_user');
			
			//ada If disini
			//$this->db->group_by("peminjaman.id_user");
			//

			$this->db->group_by("peminjaman.id_peminjaman");
			$this->db->where('detail_pinjam.status','Belum Kembali');
			$this->db->where('peminjaman.tanggal_pengembalian >', $stop_date);
			$query = $this->db->get();
			return $query->result();
	}

	public function getbukuygdipinjam($id)
	{
			$stop_date = date('Ymd');
			// $stop_date = date('Ymd', strtotime($stop_date . ' +3 day'));

			$this->db->select('*');
			$this->db->from('detail_pinjam');
			$this->db->join('peminjaman','peminjaman.id_peminjaman = detail_pinjam.id_peminjaman');
			$this->db->join('buku','buku.id_buku = detail_pinjam.id_buku');
			$this->db->join('kategori', 'kategori.id_kategori = buku.id_kategori');
			$this->db->join('user','peminjaman.id_user = user.id_user');
			$this->db->where('peminjaman.id_user',$id);
			$this->db->where('detail_pinjam.status','Belum Kembali');
			// $this->db->where('peminjaman.tanggal_pengembalian > ', $stop_date);
			$this->db->where('DATE_ADD(peminjaman.tanggal_pengembalian,INTERVAL 3 DAY) > ', $stop_date);

			$query = $this->db->get();
			return $query->result();

	}

	public function insert_detail($id,$id_buku)
	{
		$object = array(
			'id_peminjaman' => $id,
			'id_buku' => $id_buku,
			'status' => 'Belum Kembali'
			 );

		$this->db->insert('detail_pinjam',$object);
	}

	public function insert()
	{
		$date = date('Ymd');
		$stop_date = date('Ymd');
		$stop_date = date('Ymd', strtotime($stop_date . ' +14 day'));

		$object = array(
			'id_user' => $this->input->post('id_user'),
			'tanggal_pinjam' => $date,
			'tanggal_pengembalian' => $stop_date

			);

		$this->db->insert('peminjaman',$object);
		$insert_id = $this->db->insert_id();

   		return  $insert_id;

	}

}

/* End of file Peminjaman.php */
/* Location: ./application/models/Peminjaman.php */

 ?>