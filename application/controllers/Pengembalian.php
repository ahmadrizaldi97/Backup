<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Peminjaman_model');
		$this->load->model('Pengembalian_model');
	}

	public function index()
	{
		$data['Peminjamandata'] = $this->Pengembalian_model->getDataPengembalian();
		$this->load->view('hed_fot/sidebar');
		$this->load->view('peminjaman/pengembalian_view', $data);
		$this->load->view('hed_fot/footer');
	}

	public function update($id)
	{
		$this->Pengembalian_model->update_data($id);
		$data['Peminjamandata'] = $this->Peminjaman_model->getDataPeminjam();
		$this->load->view('hed_fot/sidebar');
		$this->load->view('peminjaman/pengembalian_view', $data);
		$this->load->view('hed_fot/footer');
	}

	public function update_peminjaman($id_buku,$id_peminjaman,$iduser)
	{
		$this->Pengembalian_model->update_spesific_data($id_buku,$id_peminjaman);

			$id = $this->uri->segment(5);
			$data['bukuygdipinjam'] = $this->Peminjaman_model->getbukuygdipinjam($id);
			$this->load->view('hed_fot/sidebar');
			$this->load->view('peminjaman/bukuygdipinjam',$data);
			$this->load->view('hed_fot/footer');
		// $data['Peminjamandata'] = $this->Pengembalian_model->getDataPengembalian();
		// $this->load->view('hed_fot/sidebar');
		// $this->load->view('peminjaman/pengembalian_view', $data);
		// $this->load->view('hed_fot/footer');
	}

	public function bukuygdipinjam($iduser,$id_peminjaman)
	{
		$data['bukuygdipinjam'] = $this->Pengembalian_model->getBukuYgDiKembalikan($iduser,$id_peminjaman);
		$this->load->view('hed_fot/sidebar');
		$this->load->view('peminjaman/bukuygdikembalikan',$data);
		$this->load->view('hed_fot/footer');
	}



	

}

/* End of file Pengembalian.php */
/* Location: ./application/controllers/Pengembalian.php */

?>
