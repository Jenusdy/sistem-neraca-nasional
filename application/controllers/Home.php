<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_home');
	}

	public function index(){
		$header['page'] = 'Home';
 		$this->load->view('template/header',$header);
		$this->load->view('template/navbar');
		$this->load->view('home');
		$this->load->view('template/footer');
	}


	public function pdb_produksi_harga_berlaku(){
		$header['page'] = 'PDB Produksi Harga Berlaku';

		$data['pdb_produksi_berlaku'] = $this->Model_home->get_produksi_pdb_berlaku();
 		$this->load->view('template/header',$header);
		$this->load->view('template/navbar');
		$this->load->view('pdb_produksi_harga_berlaku',$data);
		$this->load->view('template/footer');
	}


	public function pdb_produksi_harga_konstan(){
		$header['page'] = 'PDB Produksi Harga Konstan';

		$data['pdb_produksi_konstan'] = $this->Model_home->get_produksi_pdb_konstan();
 		$this->load->view('template/header',$header);
		$this->load->view('template/navbar');
		$this->load->view('pdb_produksi_harga_konstan',$data);
		$this->load->view('template/footer');
	}

	public function pdb_pengeluaran(){
		$header['page'] = 'PDB Pengeluaran';

		$data['pdb_pengeluaran'] = $this->Model_home->get_pdb_pengeluaran();
 		$this->load->view('template/header',$header);
		$this->load->view('template/navbar');
		$this->load->view('pdb_pengeluaran',$data);
		$this->load->view('template/footer');
	}


	public function input_data_pdb_pengeluaran(){
		$header['page'] = 'Input data PDB pengeluaran';

		$this->load->view('template/header', $header);
		$this->load->view('template/navbar');
		$this->load->view('input_data_pdb_pengeluaran');
		$this->load->view('template/footer');
	}

	public function input_data_pdb_produksi_harga_konstan(){
		$header['page'] = 'Input data PDB Produksi Harga Konstan';

		$this->load->view('template/header', $header);
		$this->load->view('template/navbar');
		$this->load->view('input_data_pdb_produksi_harga_konstan');
		$this->load->view('template/footer');
	}

	public function input_data_pdb_produksi_harga_berlaku(){
		$header['page'] = 'Input data PDB Produksi Harga Berlaku';

		$this->load->view('template/header', $header);
		$this->load->view('template/navbar');
		$this->load->view('input_data_pdb_produksi_harga_konstan');
		$this->load->view('template/footer');
	}

	public function upload_data(){
		$header['page'] = 'Upload Data';

		$this->load->view('template/header',$header);
		$this->load->view('template/navbar');
		$this->load->view('upload_data');
		$this->load->view('template/footer');
	}

	public function proses_data_pdb_pengeluaran(){
		$data = array(	'tahun' 				=> $this->input->post('tahun') ,
						'konsumsi_ruta' 		=> $this->input->post('konsumsi_rumah_tangga'),
						'konsumsi_LNPRT'		=> $this->input->post('konsumsi_lnprt'),
						'konsumsi_pemerintah'	=> $this->input->post('konsumsi_pemerintah'),
						'pmtb_bruto'			=> $this->input->post('pmtb'),
						'perubahan_inventori'	=> $this->input->post('perubahan_inventori'),
						'ekspor_barangjasa'		=> $this->input->post('eskpor_barang_jasa'),
						'impor_barangjasa'		=> $this->input->post('impor_barang_jasa'),
						'diskrepansi_statistik1'=> $this->input->post('diskrepansi_statistik')
					);
		echo json_encode($data);
	}
}
