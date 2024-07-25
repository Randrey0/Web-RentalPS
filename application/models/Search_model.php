<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {

    public function searchData($query) {
        // Lakukan proses pencarian berdasarkan query yang diberikan
        // Misalnya, mengambil data dari tabel 'produk' berdasarkan kolom 'nama_produk'

        $this->db->like('nama_produk', $query);
        $result = $this->db->get('produk');

        return $result->result();
    }

}
