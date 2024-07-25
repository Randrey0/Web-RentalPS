<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Laporan extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
   }
   // console
   public function laporan_console()
   {
      $data['judul'] = 'Laporan Data Console';
      $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
      $data['console'] = $this->ModelConsole->getConsole()->result_array();
      $data['kategori'] = $this->ModelConsole->getKategori()->result_array();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('console/laporan_console', $data);
      $this->load->view('templates/footer');
   }

   public function cetak_laporan_console()
   {
      $data['console'] = $this->ModelConsole->getConsole()->result_array();
      $data['kategori'] = $this->ModelConsole->getKategori()->result_array();

      $this->load->view('console/laporan_print_console', $data);
   }
   public function laporan_console_pdf()
   {
      $data['console'] = $this->ModelConsole->getConsole()->result_array();
      // $this->load->library('dompdf_gen');
      $sroot = $_SERVER['DOCUMENT_ROOT'];
      include $sroot . "/rental-ps/application/third_party/dompdf/autoload.inc.php";
      $dompdf = new Dompdf\Dompdf();
      $this->load->view('console/laporan_pdf_console', $data);
      $paper_size = 'A4'; // ukuran kertas
      $orientation = 'landscape'; //tipe format kertas potrait atau landscape
      $html = $this->output->get_output();
      $dompdf->set_paper($paper_size, $orientation);
      //Convert to PDF
      $dompdf->load_html($html);
      $dompdf->render();
      $dompdf->stream("laporan_data_console.pdf", array('Attachment' => 0));
      // nama file pdf yang di hasilkan
   }


   public function export_excel()
   {
      $data = array('title' => 'Laporan Console', 'console' => $this->ModelConsole->getConsole()->result_array());
      $this->load->view('console/export_excel_console', $data);
   }
   //end Console

   // member
   public function laporan_member()
   {
      $data['judul'] = 'Laporan Data Member';
      $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
      $this->db->where('role_id', 2);
      $data['member'] = $this->ModelUser->getMember()->result_array();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/laporan_member', $data);
      $this->load->view('templates/footer');
   }

   public function cetak_laporan_member()
   {
      $data['judul'] = 'Laporan Data Member';
      $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
      $this->db->where('role_id', 2);
      $data['member'] = $this->ModelUser->getMember()->result_array();

      $this->load->view('user/laporan_print_member', $data);
   }
   public function laporan_member_pdf()
   {
      $data['judul'] = 'Laporan Data Member';
      $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
      $this->db->where('role_id', 2);
      $data['member'] = $this->ModelUser->getMember()->result_array();
      // $this->load->library('dompdf_gen');
      $sroot = $_SERVER['DOCUMENT_ROOT'];
      include $sroot . "/rental-ps/application/third_party/dompdf/autoload.inc.php";
      $dompdf = new Dompdf\Dompdf();
      $this->load->view('user/laporan_pdf_member', $data);
      $paper_size = 'A4'; // ukuran kertas
      $orientation = 'landscape'; //tipe format kertas potrait atau landscape
      $html = $this->output->get_output();
      $dompdf->set_paper($paper_size, $orientation);
      //Convert to PDF
      $dompdf->load_html($html);
      $dompdf->render();
      $dompdf->stream("laporan_data_console.pdf", array('Attachment' => 0));
      // nama file pdf yang di hasilkan
   }


   public function export_excel_member()
   {
      $data['judul'] = 'Laporan Data Member';
      $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
      $this->db->where('role_id', 2);
      $data = array('title' => 'Laporan Member', 'member' => $this->ModelUser->getMember()->result_array());
      $this->load->view('user/export_excel_member', $data);
   }
   // end member
   // pinjam
   public function laporan_pinjam()
   {
      $data['judul'] = 'Laporan Data Sewa';
      $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
      $data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d,console b,user u where d.id_console=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar', $data);
      $this->load->view('pinjam/laporan-pinjam', $data);
      $this->load->view('templates/footer');
   }
   public function laporan_pinjam_pdf()
   {
      $data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d,console b,user u where d.id_console=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array();
      // $this->load->library('dompdf_gen');
      $sroot = $_SERVER['DOCUMENT_ROOT'];
      include $sroot . "/rental-ps/application/third_party/dompdf/autoload.inc.php";
      $dompdf = new Dompdf\Dompdf();
      $this->load->view('pinjam/laporan-pdf-pinjam', $data);
      $paper_size = 'A4'; // ukuran kertas
      $orientation = 'landscape'; //tipe format kertas potrait atau landscape
      $html = $this->output->get_output();
      $dompdf->set_paper($paper_size, $orientation);
      //Convert to PDF
      $dompdf->load_html($html);
      $dompdf->render();
      $dompdf->stream("laporan data peminjaman.pdf", array('Attachment' => 0));
      // nama file pdf yang di hasilkan
   }

   public function cetak_laporan_pinjam()
   {
      $data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d,console b,user u where d.id_console=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array();
      $this->load->view('pinjam/laporan-print-pinjam', $data);
   }

   public function export_excel_pinjam()
   {
      $data = array('title' => 'Laporan Data Peminjaman Console', 'laporan' => $this->db->query("select * from pinjam p,detail_pinjam d, console b,user u where d.id_console=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array());
      $this->load->view('pinjam/export-excel-pinjam', $data);
   }

   // end pinjam
   // end pinjam

}
