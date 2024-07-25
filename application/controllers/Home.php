 <?php
     class Home extends CI_Controller
     {
          function __construct()
          {
               parent::__construct();
          }
          public function index()
          {
               $data = ['judul' => "Katalog Console", 'console' => $this->ModelConsole->getConsole()->result(),];
               //jika sudah login dan jika belum login
               if ($this->session->userdata('email')) {
                    $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();;
                    $data['user'] = $user['nama'];
                    $this->load->view('templates/templates-user/header', $data);
                    $this->load->view('console/daftarconsole', $data);
                    $this->load->view('templates/templates-user/modal');
                    $this->load->view('templates/templates-user/footer', $data);
               } else {
                    $data['user'] = 'Pengunjung';
                    $this->load->view('templates/templates-user/header', $data);
                    $this->load->view('console/daftarconsole', $data);
                    $this->load->view('templates/templates-user/modal');
                    $this->load->view('templates/templates-user/footer', $data);
               }
          }

          public function detailConsole()
          {

               $id = $this->uri->segment(3);
               $console = $this->ModelConsole->joinKategoriConsole(['console.id' => $id])->result();
               $data['user'] = "Pengunjung";
               $data['title'] = "Detail Console";
               foreach ($console as $fields) {
                    $data['judul'] = $fields->nama_console;
                    $data['kategori'] = $fields->kategori;
                    $data['gambar'] = $fields->image;
                    $data['dipinjam'] = $fields->dipinjam;
                    $data['dibooking'] = $fields->dibooking;
                    $data['stok'] = $fields->stok;
                    $data['game'] = $fields->game;
                    $data['harga_sewa'] = $fields->harga_sewa;
                    $data['id'] = $id;
               }
               $this->load->view('templates/templates-user/header', $data);
               $this->load->view('console/detail-console', $data);
          }

          public function aboutus()
          {
               $data['judul'] = 'About Us';
               $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

               foreach ($user as $a) {
                    $data = [
                         'image' => $user['image'],
                         'user' => $user['nama'],
                         'email' => $user['email'],
                         'alamat' => $user['alamat'],
                         'no_telpon' => $user['no_telpon'],
                         'tanggal_input' => $user['tanggal_input'],
                    ];
               }

               $this->load->view('templates/templates-user/header', $data);
               $this->load->view('console/aboutus', $data);
               $this->load->view('templates/templates-user/modal');
          }
     }
