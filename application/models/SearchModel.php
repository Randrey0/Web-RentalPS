<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchModel extends CI_Model {

	public function ambil_data($keyword=null){
		$this->db->select('*');
		$this->db->from('tbl_data');
		if(!empty($keyword)){
			$this->db->like('nama_barang',$keyword);
		}
		return $this->db->get()->result_array();
	}

}