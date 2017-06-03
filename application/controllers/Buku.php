<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['id_user'] = $session_data['id_user'];
			$data['nim_nip'] = $session_data['nim_nip'];
			$data['nama_user'] = $session_data['nama_user'];
			$data['foto'] = $session_data['foto'];
			
			
		}else{
			redirect('login','refresh');
		}

		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Buku_model');
		$this->load->model('Kategori_model');
	}

	public function getBukuBy($id)
	{
		$data['databuku'] = $this->Buku_model->getBukuByKategori($id);
		$this->load->view('hed_fot/sidebar');
		$this->load->view('Buku/buku_view', $data);	
		$this->load->view('hed_fot/footer');
	}

	public function index()
	{
		$data['databuku'] = $this->Buku_model->getDataBuku();
		$this->load->view('hed_fot/sidebar');
		$this->load->view('Buku/buku_view', $data);	
		$this->load->view('hed_fot/footer');
	}

	public function datatable()
	{
		$data["databuku"] = $this->pegawai_model->getDataBuku();
		$this->load->view('hed_fot/sidebar');
		$this->load->view('Buku/buku_view', $data);	
		$this->load->view('hed_fot/footer');
	}

	public function tambahbuku()
	{
		$data['data_kategori'] = $this->Kategori_model->getKategori();

		$this->form_validation->set_rules('judul_buku', 'Judul Buku', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		$this->form_validation->set_rules('nama_pengarang', 'Nama Pengarang', 'trim|required');
		$this->form_validation->set_rules('jumlah_buku', 'Jumlah Buku', 'trim|required|numeric');

		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100000';
		$config['max_width']  = '3200';
		$config['max_height']  = '2400';
		
		$this->load->library('upload', $config);
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('hed_fot/sidebar');
			$this->load->view('buku/tambahbuku_view',$data);
			$this->load->view('hed_fot/footer');
		} else {

			if (!$this->upload->do_upload('userfile')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('hed_fot/sidebar');
			$this->load->view('buku/tambahbuku_view',$data);
			$this->load->view('hed_fot/footer');
		}
		else{
			
			$this->Buku_model->create();	
			$data['databuku'] = $this->Buku_model->getDataBuku();
			$this->load->view('hed_fot/sidebar');
			$this->load->view('Buku/buku_view', $data);	
			$this->load->view('hed_fot/footer');
		}

		}
	}

	public function edit($id)
	{
		$data['data_kategori'] = $this->Kategori_model->getKategori();
		$data['spesificdata'] = $this->Buku_model->getSpesificData($id);
 
		$this->form_validation->set_rules('judul_buku', 'Judul Buku', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		$this->form_validation->set_rules('nama_pengarang', 'Nama Pengarang', 'trim|required');
		$this->form_validation->set_rules('jumlah_buku', 'Jumlah Buku', 'trim|required|numeric');

		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100000';
		$config['max_width']  = '3200';
		$config['max_height']  = '2400';
		
		$this->load->library('upload', $config);
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('hed_fot/sidebar');
			$this->load->view('buku/editbuku',$data);
			$this->load->view('hed_fot/footer');
		} else {

			if (!$this->upload->do_upload('userfile')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('hed_fot/sidebar');
			$this->load->view('buku/editbuku',$data);
			$this->load->view('hed_fot/footer');
		}
		else{
			
			$this->Buku_model->create();	
			$data['databuku'] = $this->Buku_model->getDataBuku();
			$this->load->view('hed_fot/sidebar');
			$this->load->view('Buku/buku_view', $data);	
		}

		}
	}

	public function delete($id)
	{
			
			$bool = $this->Buku_model->checkBuku($id);

			if ($bool) {
				echo "<script>alert('Buku sedang dipinjam, selesaikan peminjaman terlebih dahulu');</script>";
				$data['databuku'] = $this->Buku_model->getDataBuku();
				$this->load->view('hed_fot/sidebar');
				$this->load->view('Buku/buku_view', $data);	
				$this->load->view('hed_fot/footer');
			}else{
				$this->Buku_model->delete($id);	
				echo "<script>alert('Delete Sukses');</script>";
				$data['databuku'] = $this->Buku_model->getDataBuku();
				$this->load->view('hed_fot/sidebar');
				$this->load->view('Buku/buku_view', $data);	
				$this->load->view('hed_fot/footer');
			}
	}

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */

?>