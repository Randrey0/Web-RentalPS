<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Console extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    //manajemen Console
    public function index()
    {
        $data['judul'] = 'Data Console';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['console'] = $this->ModelConsole->getConsole()->result_array();
        $data['kategori'] = $this->ModelConsole->getKategori()->result_array();

        $this->form_validation->set_rules('nama_console', 'Nama Console', 'required|min_length[3]', [
            'required' => 'Nama Console harus diisi',
            'min_length' => 'Nama Console terlalu pendek'
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric', [
            'required' => 'Stok harus diisi',
            'numeric' => 'Yang anda masukan bukan angka'
        ]);

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        // $config['max_size'] = '3000';
        // $config['max_width'] = '1024';
        // $config['max_height'] = '1000';
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
            } if ($this->upload->do_upload('qris')) {
                $image = $this->upload->data();
                $qris = $image['file_name'];
            } else {
                $qris = '';
            }

            $data = [
                'nama_console' => $this->input->post('nama_console', true),
                'id_kategori' => $this->input->post('id_kategori', true),
                'stok' => $this->input->post('stok', true),
                'dipinjam' => 0,
                'dibooking' => 0,
                'harga_sewa' => $this->input->post('harga_sewa', true),
                 'game' => $this->input->post('game', true),
                'image' => $gambar,
                'qris' => $qris
            ];

            $this->ModelConsole->simpanConsole($data);
            redirect('console');
        }
    }

    public function hapusConsole()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelConsole->hapusConsole($where);
        redirect('console');
    }

    public function ubahConsole()
    {
        $data['judul'] = 'Ubah Data Console';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['console'] = $this->ModelConsole->consoleWhere(['id' => $this->uri->segment(3)])->result_array();
        $kategori = $this->ModelConsole->joinKategoriConsole(['console.id' => $this->uri->segment(3)])->result_array();
        foreach ($kategori as $k) {
            $data['id'] = $k['id_kategori'];
            $data['k'] = $k['kategori'];
        }
        $data['kategori'] = $this->ModelConsole->getKategori()->result_array();

        $this->form_validation->set_rules('nama_console', 'Nama Console', 'required|min_length[3]', [
            'required' => 'Nama Console harus diisi',
            'min_length' => 'Nama Console terlalu pendek'
        ]);
        $this->form_validation->set_rules('game', 'Game Tersedia', 'required|min_length[3]', [
            'required' => 'Game Tersedia harus diisi',
            'min_length' => 'Game Tersedia terlalu pendek'
        ]);
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required', [
            'required' => 'Nama pengarang harus diisi',
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric', [
            'required' => 'Stok harus diisi',
            'numeric' => 'Yang anda masukan bukan angka'
        ]);

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        // $config['max_size'] = '3000';
        // $config['max_width'] = '1024';
        // $config['max_height'] = '1000';
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
            } if ($this->upload->do_upload('qris')) {
                $image = $this->upload->data();
                unlink('assets/img/upload/' . $this->input->post('old_pict', TRUE));
                $qris = $image['file_name'];
            } else {
                $qris = $this->input->post('old_pict', TRUE);
            }

            $data = [
                'nama_console' => $this->input->post('nama_console', true),
                'game' => $this->input->post('game', true),
                'id_kategori' => $this->input->post('id_kategori', true),
                'harga_sewa' => $this->input->post('harga_sewa', true),
                'stok' => $this->input->post('stok', true),
                'image' => $gambar,
                'qris' => $qris
            ];

            $this->ModelConsole->updateConsole($data, ['id' => $this->input->post('id')]);
            redirect('console');
        }
    }

    //manajemen kategori
    public function kategori()
    {
        $data['judul'] = 'Kategori Console';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->ModelConsole->getKategori()->result_array();

        $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
            'required' => 'Nama Console harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('console/kategori', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kategori' => $this->input->post('kategori', TRUE)
            ];

            $this->ModelConsole->simpanKategori($data);
            redirect('console/kategori');
        }
    }

    public function ubahKategori()
    {
        $data['judul'] = 'Ubah Data Kategori';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->ModelConsole->kategoriWhere(['id' => $this->uri->segment(3)])->result_array();


        $this->form_validation->set_rules('kategori', 'Nama Kategori', 'required|min_length[3]', [
            'required' => 'Nama Kategori harus diisi',
            'min_length' => 'Nama Kategori terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('console/ubah_kategori', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'kategori' => $this->input->post('kategori', true)
            ];

            $this->ModelConsole->updateKategori(['id' => $this->input->post('id')], $data);
            redirect('console/kategori');
        }
    }

    public function hapusKategori()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelConsole->hapusKategori($where);
        redirect('console/kategori');
    }
}
