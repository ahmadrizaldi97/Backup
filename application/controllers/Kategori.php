<?php 
	

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('kategori_model');
	}


	public function index()
	{
		$data['data_kategori'] = $this->kategori_model->getKategori();
		$this->load->view('hed_fot/sidebar');
		$this->load->view('kategori/kategori',$data);
		$this->load->view('hed_fot/footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'trim|required|is_unique[kategori.nama_kategori]');
		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view('hed_fot/sidebar');
			$this->load->view('kategori/insertkategori');
			$this->load->view('hed_fot/footer');
		} else {
			$this->kategori_model->insertKategori();
			$data['data_kategori'] = $this->kategori_model->getKategori();
			$this->load->view('hed_fot/sidebar');
			$this->load->view('kategori/kategori',$data);
			$this->load->view('hed_fot/footer');
		}
	}

	public function delete($id)
	{

			$bool = $this->kategori_model->checkBuku($id);

			if ($bool) {
				echo "<script>alert('Tidak Dapat Menghapus Kategori');</script>";
				$data['data_kategori'] = $this->kategori_model->getKategori();
				$this->load->view('hed_fot/sidebar');
				$this->load->view('kategori/kategori',$data);
				$this->load->view('hed_fot/footer');
			}else{
			$this->kategori_model->delete($id);
			// echo "<script>alert('Delete Sukses');</script>";
			
			$data['data_kategori'] = $this->kategori_model->getKategori();
			$this->load->view('hed_fot/sidebar');
			$this->load->view('kategori/kategori',$data);
			$this->load->view('hed_fot/footer');
			}

			
		
	}

	public function edit($id)
	{
		$data['data_kategori_spesifik'] = $this->kategori_model->getDataSpesific($id);

		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'trim|required|is_unique[kategori.nama_kategori]');

		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('hed_fot/sidebar');
			$this->load->view('kategori/edit_kategori', $data);
			$this->load->view('hed_fot/footer');
		
		} else {
			
			$this->kategori_model->edit($id);

			$data['data_kategori'] = $this->kategori_model->getKategori();
			$this->load->view('hed_fot/sidebar');
			$this->load->view('kategori/kategori',$data);
			$this->load->view('hed_fot/footer');
		}
	}
}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */

?>