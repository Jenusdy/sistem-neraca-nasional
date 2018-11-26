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
}
