<?php
class Kasir extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url;
			redirect($url);
		}
	}
	function index(){
		$this->load->view('Kasir/Templates/header.php');
		$this->load->view('Kasir/Templates/menu.php');
		$this->load->view('Kasir/index.php');
		$this->load->view('Kasir/Templates/footer.php');

	}
	function gallery(){
		$this->load->view('Kasir/Templates/header.php');
		$this->load->view('Kasir/Templates/menu.php');
		$this->load->view('Kasir/gallery.php');
		$this->load->view('Kasir/Templates/footer.php');

	}

	function laporan_minuman(){
		$this->db->select('*');
        $this->db->from('tbl_psn_minuman');
        $this->db->join('tbl_minuman', 'tbl_minuman.id_minuman = tbl_psn_minuman.id_minuman');
        $data['tbl_psn_minuman']=$this->db->get()->result();
		$this->load->view('Kasir/Templates/header.php');
		$this->load->view('Kasir/Templates/menu.php');
		$this->load->view('Kasir/laporan_minuman.php', $data);
		$this->load->view('Kasir/Templates/footer.php');
	}

	function laporan_makanan(){
		$this->db->select('*');
        $this->db->from('tbl_psn_makanan');
        $this->db->join('tbl_makanan', 'tbl_makanan.id_makanan = tbl_psn_makanan.id_makanan');
        $data['tbl_psn_makanan']=$this->db->get()->result();
		$this->load->view('Kasir/Templates/header.php');
		$this->load->view('Kasir/Templates/menu.php');
		$this->load->view('Kasir/laporan_makanan.php', $data);
		$this->load->view('Kasir/Templates/footer.php');
	}

	function cetak_laporan_minuman(){
		$this->db->select('*');
        $this->db->from('tbl_psn_minuman');
        $this->db->join('tbl_minuman', 'tbl_minuman.id_minuman = tbl_psn_minuman.id_minuman');
        $data['tbl_psn_minuman']=$this->db->get()->result();
		$this->load->view('Kasir/cetak_laporan_minuman.php', $data);
	}

	function cetak_laporan_makanan(){
		$this->db->select('*');
        $this->db->from('tbl_psn_makanan');
        $this->db->join('tbl_makanan', 'tbl_makanan.id_makanan = tbl_psn_makanan.id_makanan');
        $data['tbl_psn_makanan']=$this->db->get()->result();
		$this->load->view('Kasir/cetak_laporan_makanan.php', $data);
	}

	
	
} 