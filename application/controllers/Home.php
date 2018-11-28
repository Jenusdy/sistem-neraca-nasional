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
		$this->load->view('input_data_pdb_produksi_harga_berlaku');
		$this->load->view('template/footer');
	}


	public function insert_data_pdb_pengeluaran(){
		if($this->Model_home->check_tahun($this->input->post('tahun'),'pdb_pengeluaran')){
			$this->session->set_flashdata('status_data_sudah_ada', 'Data pada tahun tersebut sudah ada didalam database');
			redirect('Home/input_data_pdb_pengeluaran');
		}

		$data = array(	'tahun' 				=> $this->input->post('tahun') ,
						'konsumsi_ruta' 		=> $this->input->post('konsumsi_rumah_tangga'),
						'konsumsi_LNPRT'		=> $this->input->post('konsumsi_lnprt'),
						'konsumsi_pemerintahan'	=> $this->input->post('konsumsi_pemerintah'),
						'pmtb_bruto'			=> $this->input->post('pmtb'),
						'perubahan_inventori'	=> $this->input->post('perubahan_inventori'),
						'ekspor_barangjasa'		=> $this->input->post('eskpor_barang_jasa'),
						'impor_barangjasa'		=> $this->input->post('impor_barang_jasa'),
						'diskrepansi_statistik1'=> $this->input->post('diskrepansi_statistik')
					);
		if($this->Model_home->insert_data_pdb_pengeluaran($data)){
			$this->session->set_flashdata('status_insert_data_berhasil', 'Insert Data PDB Pengeluaran Berhasil');
		}else{
			$this->session->set_flashdata('status_insert_data_gagal', 'Insert Data PDB Pengeluaran Gagal');
		}

		redirect('Home/input_data_pdb_pengeluaran');
	}


	public function insert_data_pdb_produksi_harga_konstan(){
		if($this->Model_home->check_tahun($this->input->post('tahun'),'pdb_produksi_hkonstan')){
			$this->session->set_flashdata('status_data_sudah_ada', 'Data pada tahun tersebut sudah ada didalam database');
			redirect('Home/input_data_pdb_produksi_harga_konstan');
		}		

		$data = array(	'tahun'						=> $this->input->post('tahun'),
						'pertanian'					=> $this->input->post('colA'),
						'pertambangan'				=> $this->input->post('colB'),
						'industri_pengolahan'		=> $this->input->post('colC'),
						'listrik_gas'				=> $this->input->post('colD'),
						'air'						=> $this->input->post('colE'),
						'konstruksi'				=> $this->input->post('colF'),
						'perdagangan'				=> $this->input->post('colG'),
						'transportasi_pergudangan' 	=> $this->input->post('colH'),
						'akomodasi_makanminum'		=> $this->input->post('colI'),
						'informasi_komunikasi'		=> $this->input->post('colJ'),
						'jasa_keuangan'				=> $this->input->post('colK'),
						'real_estate'				=> $this->input->post('colL'),
						'jasa_perusahaan'			=> $this->input->post('colM'),
						'administrasi_pemerintahan'	=> $this->input->post('colO'),
						'jasa_pendidikan'			=> $this->input->post('colP'),
						'jasa_kesehatan'			=> $this->input->post('colQ'),
						'jasa_lainnya'				=> $this->input->post('colR'),
						'pajak_subsidi'				=> $this->input->post('pajak_subsidi'),
					);

		if($this->Model_home->insert_data_pdb_produksi_harga_konstan($data)){
			$this->session->set_flashdata('status_insert_data_berhasil', 'Insert Data PDB Produksi Harga Konstan Berhasil');
		}else{
			$this->session->set_flashdata('status_insert_data_gagal', 'Insert Data PDB Produksi Harga Konstan Gagal');
		}

		redirect('Home/input_data_pdb_produksi_harga_konstan');
	}


		public function insert_data_pdb_produksi_harga_berlaku(){
		if($this->Model_home->check_tahun($this->input->post('tahun'),'pdb_produksi_hberlaku')){
			$this->session->set_flashdata('status_data_sudah_ada', 'Data pada tahun tersebut sudah ada didalam database');
			redirect('Home/input_data_pdb_produksi_harga_berlaku');
		}		

		$data = array(	'tahun'						=> $this->input->post('tahun'),
						'pertanian'					=> $this->input->post('colA'),
						'pertambangan'				=> $this->input->post('colB'),
						'industri_pengolahan'		=> $this->input->post('colC'),
						'listrik_gas'				=> $this->input->post('colD'),
						'air'						=> $this->input->post('colE'),
						'konstruksi'				=> $this->input->post('colF'),
						'perdagangan'				=> $this->input->post('colG'),
						'transportasi_pergudangan' 	=> $this->input->post('colH'),
						'akomodasi_makanminum'		=> $this->input->post('colI'),
						'informasi_komunikasi'		=> $this->input->post('colJ'),
						'jasa_keuangan'				=> $this->input->post('colK'),
						'real_estate'				=> $this->input->post('colL'),
						'jasa_perusahaan'			=> $this->input->post('colM'),
						'administrasi_pemerintahan'	=> $this->input->post('colO'),
						'jasa_pendidikan'			=> $this->input->post('colP'),
						'jasa_kesehatan'			=> $this->input->post('colQ'),
						'jasa_lainnya'				=> $this->input->post('colR'),
						'pajak_subsidi'				=> $this->input->post('pajak_subsidi'),
					);

		if($this->Model_home->insert_data_pdb_produksi_harga_berlaku($data)){
			$this->session->set_flashdata('status_insert_data_berhasil', 'Insert Data PDB Produksi Harga Berlaku Berhasil');
		}else{
			$this->session->set_flashdata('status_insert_data_gagal', 'Insert Data PDB Produksi Harga Berlaku Gagal');
		}

		redirect('Home/input_data_pdb_produksi_harga_berlaku');
	}

	public function output_pdb_produksi_harga_konstan(){
		$header['page'] = 'Output PDB Produksi Harga Konstan ';

		$data['pdb_harga_konstan'] = $this->Model_home->get_produksi_pdb_konstan();

		$i = 0;
		foreach ($data['pdb_harga_konstan'] as $key => $value) {
			$counter = 0;
			$nilai_tambah = 0;
			$produk_domestik_bruto = 0;

			
			foreach ($value as $key => $nilai) {
				$counter+=1;
				if($counter>1 && $counter<19){
					$nilai_tambah += $nilai;
				}
			}

			$data['pdb_harga_konstan'][$i]->nilai_tambah = $nilai_tambah;
			$data['pdb_harga_konstan'][$i]->produk_domestik_bruto = $nilai_tambah + $data['pdb_harga_konstan'][$i]->pajak_subsidi;

			if($i!=0){
				$data['pdb_harga_konstan'][$i]->pertumbuhan_ekonomi = (($data['pdb_harga_konstan'][$i]->produk_domestik_bruto/$data['pdb_harga_konstan'][$i-1]->produk_domestik_bruto)-1)*100;
			}else{
				$data['pdb_harga_konstan'][$i]->pertumbuhan_ekonomi = NULL;
			}
			
			$i+=1;
		}

 		$this->load->view('template/header',$header);
		$this->load->view('template/navbar');
		$this->load->view('output_pdb_produksi_harga_konstan',$data);
		$this->load->view('template/footer');
	}

	public function output_pdb_produksi_harga_berlaku(){
		$header['page'] = 'Output PDB Produksi Harga Berlaku ';

		$data['pdb_harga_berlaku'] = $this->Model_home->get_produksi_pdb_berlaku();

		$i = 0;
		foreach ($data['pdb_harga_berlaku'] as $key => $value) {
			$counter = 0;
			$nilai_tambah = 0;
			$produk_domestik_bruto = 0;

			
			foreach ($value as $key => $nilai) {
				$counter+=1;
				if($counter>1 && $counter<19){
					$nilai_tambah += $nilai;
				}
			}

			$data['pdb_harga_berlaku'][$i]->nilai_tambah = $nilai_tambah;
			$data['pdb_harga_berlaku'][$i]->produk_domestik_bruto = $nilai_tambah + $data['pdb_harga_berlaku'][$i]->pajak_subsidi;

			if($i!=0){
				$data['pdb_harga_berlaku'][$i]->pertumbuhan_ekonomi = (($data['pdb_harga_berlaku'][$i]->produk_domestik_bruto/$data['pdb_harga_berlaku'][$i-1]->produk_domestik_bruto)-1)*100;
			}else{
				$data['pdb_harga_berlaku'][$i]->pertumbuhan_ekonomi = NULL;
			}
			
			$i+=1;
		}

 		$this->load->view('template/header',$header);
		$this->load->view('template/navbar');
		$this->load->view('output_pdb_produksi_harga_berlaku');
		$this->load->view('template/footer');
	}

	public function output_pdb_pengeluaran(){
		$header['page'] = 'Output PDB Pengeluaran ';

 		$this->load->view('template/header',$header);
		$this->load->view('template/navbar');
		$this->load->view('output_pdb_pengeluaran');
		$this->load->view('template/footer');
	}
}
