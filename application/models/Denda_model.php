<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Denda_model extends CI_Model {

	public function getDenda()
		{
			$date = date('Ymd');
			$stop_date = date('Ymd');
			//$stop_date = date('Ymd', strtotime($stop_date . ' +3 day'));

			$this->db->select('*');
			$this->db->from('detail_pinjam');
			$this->db->join('peminjaman','detail_pinjam.id_peminjaman = peminjaman.id_peminjaman');
			$this->db->join('buku','buku.id_buku = detail_pinjam.id_buku');
			$this->db->join('user','user.id_user = peminjaman.id_user');
			$this->db->where('DATE_ADD(peminjaman.tanggal_pengembalian,INTERVAL 3 DAY) < ', $stop_date);
			$this->db->group_by('peminjaman.id_peminjaman');
			$query = $this->db->get();
			return $query->result();
		}	

	public function interval($id)
	{
			$stop_date = date('Ymd');
			$this->db->select('datediff(peminjaman.tanggal_pinjam, peminjaman.tanggal_pengembalian)');
			$this->db->from('detail_pinjam');
			$this->db->join('peminjaman','detail_pinjam.id_peminjaman = peminjaman.id_peminjaman');
			
			$this->db->where('DATE_ADD(peminjaman.tanggal_pengembalian,INTERVAL 3 DAY) < ', $stop_date);
			$query = $this->db->get();
			return $query->result();
	}

}

/* End of file Denda_model.php */
/* Location: ./application/models/Denda_model.php */

?>