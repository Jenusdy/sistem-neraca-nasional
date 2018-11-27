<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model {

	public function get_produksi_pdb_berlaku(){
		return $this->db->get('pdb_produksi_hberlaku')->result();
	}

	public function get_produksi_pdb_konstan(){
		return $this->db->get('pdb_produksi_hkonstan')->result();
	}

	public function get_pdb_pengeluaran(){
		return $this->db->get('pdb_pengeluaran')->result();
	}

	public function insert_data_pdb_pengeluaran($data){
		if($this->db->insert('pdb_pengeluaran', $data)){
			return true;			
		}
	}

	public function check_tahun($tahun,$tabel_name){
		$this->db->where('tahun',$tahun);
		return $this->db->get($tabel_name)->result();
	}

	public function insert_data_pdb_produksi_harga_konstan($data){
		if($this->db->insert('pdb_produksi_hkonstan',$data)){
			return true;
		}
	}
}

