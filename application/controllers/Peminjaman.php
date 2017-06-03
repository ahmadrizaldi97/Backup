<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['id_user'] = $session_data['id_user'];
			
		}else{
			redirect('login','refresh');
		}

		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Buku_model');
		$this->load->model('Kategori_model');
		$this->load->model('Peminjaman_model');
		$this->load->model('User_model');
				
	}



	public function index()
	{
		$data['Peminjamandata'] = $this->Peminjaman_model->getDataPeminjam();
		$this->load->view('hed_fot/sidebar');
		$this->load->view('peminjaman/peminjaman',$data);
		$this->load->view('hed_fot/footer');
	}

	public function tambahpeminjaman()
	{

		$this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric');
		$this->form_validation->set_rules('jumlah_buku', 'Jumlah Buku', 'trim|required|numeric');
		$jumlah = $this->input->post('jumlah_buku');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('hed_fot/sidebar');
			$this->load->view('peminjaman/insert_nim_jumlah');
			$this->load->view('hed_fot/footer');
		} else {
			if ($jumlah > 5) {
				echo "<script>alert('Jumlah buku yang dipinjam melebihi batas')</script>";
				redirect('peminjaman/tambahpeminjaman','refresh');
			}else{
				$data['jumlah_buku'] = $jumlah;
				$data['datauser'] = $this->User_model->getIdUser($this->input->post('nim'));
				$data['databuku'] = $this->Buku_model->getDataBuku();
				$this->load->view('hed_fot/sidebar');
				$this->load->view('/peminjaman/input_data_peminjam',$data);
				$this->load->view('hed_fot/footer');
			}


		}

		
	}

	public function bukuygdipinjam($id)
	{
			$data['bukuygdipinjam'] = $this->Peminjaman_model->getbukuygdipinjam($id);
			$this->load->view('hed_fot/sidebar');
			$this->load->view('peminjaman/bukuygdipinjam',$data);
			$this->load->view('hed_fot/footer');
	}

	public function insertdatapeminjam()
	{

		$jumlah = $this->input->post('jumlah_buku');

		for($i=0; $i< $jumlah; $i++){
			$this->form_validation->set_rules('id_user', 'id_user', 'trim|required');
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('hed_fot/sidebar');
			$this->load->view('peminjaman/insert_nim_jumlah');
			$this->load->view('hed_fot/footer');
		} else {


			// for($i=0; $i< $jumlah; $i++){
			
				// $databuku = $this->input->post("id_buku");
				// $buku = $databuku[$i];
				// $this->Peminjaman_model->insert();
				$id_peminjaman = $this->Peminjaman_model->insert();

				for($i=0; $i< $jumlah; $i++){
			
				$databuku = $this->input->post("id_buku");
				$buku = $databuku[$i];
				$this->Peminjaman_model->insert_detail($id_peminjaman,$buku);

			}
		// }
			


			$data['Peminjamandata'] = $this->Peminjaman_model->getDataPeminjam();
		$this->load->view('hed_fot/sidebar');
		$this->load->view('peminjaman/peminjaman',$data);
		$this->load->view('hed_fot/footer');
		}
	}

}

/* End of file Peminjaman.php */
/* Location: ./application/controllers/Peminjaman.php */
 ?>