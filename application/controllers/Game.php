<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Game extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    //manajemen Game
    public function index()
    {
        $data['judul'] = 'Data Game';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['game'] = $this->ModelGame->getGame()->result_array();


        $this->form_validation->set_rules('nama_game', 'Nama Game', 'required|min_length[3]', [
            'required' => 'Nama Game harus diisi',
            'min_length' => 'Nama Game terlalu pendek'
        ]);

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('console/index', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }

            $data = [
                'nama_game' => $this->input->post('nama_game', true),
                'image' => $gambar
            ];

            $this->ModelGame->simpanGame($data);
            redirect('game');
        }
    }

    public function hapusGame()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelConsole->hapusGame($where);
        redirect('game');
    }

    public function ubahConsole()
    {
        $data['judul'] = 'Ubah Data Game';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['game'] = $this->ModelGame->gameWhere(['id' => $this->uri->segment(3)])->result_array();
       
        $this->form_validation->set_rules('nama_game', 'Nama Game', 'required|min_length[3]', [
            'required' => 'Nama Game harus diisi',
            'min_length' => 'Nama Game terlalu pendek'
        ]);

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();

        //memuat atau memanggil library upload
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('console/ubah_console', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                unlink('assets/img/upload/' . $this->input->post('old_pict', TRUE));
                $gambar = $image['file_name'];
            } else {
                $gambar = $this->input->post('old_pict', TRUE);
            }

            $data = [
                'nama_console' => $this->input->post('nama_console', true),
                'id_kategori' => $this->input->post('id_kategori', true),
                'stok' => $this->input->post('stok', true),
                'image' => $gambar
            ];

            $this->ModelConsole->updateConsole($data, ['id' => $this->input->post('id')]);
            redirect('console');
        }
    

}
