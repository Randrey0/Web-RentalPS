<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model yang diperlukan
        $this->load->model('search_model');
    }

    public function results() {
        $query = $this->input->get('query');
        $data['results'] = $this->search_model->searchData($query);

        // Load view untuk menampilkan hasil pencarian
        $this->load->view('search_results', $data);
    }

}
