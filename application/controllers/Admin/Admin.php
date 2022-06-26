<?php
class Admin extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url;
			redirect($url);
		}
	}
	function index(){
		$this->load->view('Admin/Templates/header.php');
		$this->load->view('Admin/Templates/menu.php');
		$this->load->view('Admin/index.php');
		$this->load->view('Admin/Templates/footer.php');

	}

	function data_makanan(){
		$this->load->model('M_Makanan');
		$data['tbl_makanan'] = $this->M_Makanan->tampil_data()->result();
		$this->load->view('Admin/Templates/header.php');
		$this->load->view('Admin/Templates/menu.php');
		$this->load->view('Admin/data_makanan.php', $data);
		$this->load->view('Admin/Templates/footer.php');
	}
	function data_makanan_input(){
		$this->load->view('Admin/Templates/header.php');
		$this->load->view('Admin/Templates/menu.php');
		$this->load->view('Admin/data_makanan_input.php');
		$this->load->view('Admin/Templates/footer.php');
	}
	function data_makanan_input_aksi(){
		$kd = $this->input->POST('kd_makanan');
		$nama = $this->input->POST('nm_makanan');
		$modal = $this->input->POST('modal');
		$harga = $this->input->POST('harga_jual');

		$data = array(
			'kd_makanan' => $kd,
			'nm_makanan' => $nama,
			'modal' => $modal,
			'harga_jual' => $harga
		);

		$this->load->model('M_Makanan');
		$this->M_Makanan->input_data($data,'tbl_makanan');
		redirect('Admin/Admin/data_makanan');
	}
	function data_makanan_edit($id_makanan){
		$where = array('id_makanan'=>$id_makanan);
		$this->load->model('M_Makanan');
		$data['tbl_makanan']=$this->M_Makanan->view_data($where,'tbl_makanan')->result();
		$this->load->view('Admin/Templates/header.php');
		$this->load->view('Admin/Templates/menu.php');
		$this->load->view('Admin/data_makanan_edit.php', $data);
		$this->load->view('Admin/Templates/footer.php');
	}
	function data_makanan_edit_aksi(){
		$id = $this->input->POST('id_makanan');
		$kd = $this->input->POST('kd_makanan');
		$nama = $this->input->POST('nm_makanan');
		$modal = $this->input->POST('modal');
		$harga = $this->input->POST('harga_jual');

		$data = array(
			'kd_makanan' => $kd,
			'nm_makanan' => $nama,
			'modal' => $modal,
			'harga_jual' => $harga
		);

		$where = array(
			'id_makanan' => $id
		);

		$this->load->model('M_Makanan');
		$this->M_Makanan->update_data($where, $data,'tbl_makanan');
		redirect('Admin/Admin/data_makanan');
	}
	function data_makanan_delete($id_makanan){
		$where = array('id_makanan' => $id_makanan);
		$this->load->model('M_Makanan');
		$this->M_Makanan->delete_data($where,'tbl_makanan');
		redirect('Admin/Admin/data_makanan');
	}

	function data_minuman(){
		$this->load->model('M_Minuman');
		$data['tbl_minuman'] = $this->M_Minuman->tampil_data()->result();
		$this->load->view('Admin/Templates/header.php');
		$this->load->view('Admin/Templates/menu.php');
		$this->load->view('Admin/data_minuman.php', $data);
		$this->load->view('Admin/Templates/footer.php');
	}
	function data_minuman_input(){
		$this->load->view('Admin/Templates/header.php');
		$this->load->view('Admin/Templates/menu.php');
		$this->load->view('Admin/data_minuman_input.php');
		$this->load->view('Admin/Templates/footer.php');
	}
	function data_minuman_input_aksi(){
		$kd = $this->input->POST('kd_minuman');
		$nama = $this->input->POST('nm_minuman');
		$modal = $this->input->POST('modal');
		$harga = $this->input->POST('harga_jual');

		$data = array(
			'kd_minuman' => $kd,
			'nm_minuman' => $nama,
			'modal' => $modal,
			'harga_jual' => $harga
		);

		$this->load->model('M_Minuman');
		$this->M_Minuman->input_data($data,'tbl_minuman');
		redirect('Admin/Admin/data_minuman');
	}
	function data_minuman_edit($id_minuman){
		$where = array('id_minuman'=>$id_minuman);
		$this->load->model('M_Minuman');
		$data['tbl_minuman']=$this->M_Minuman->view_data($where,'tbl_minuman')->result();
		$this->load->view('Admin/Templates/header.php');
		$this->load->view('Admin/Templates/menu.php');
		$this->load->view('Admin/data_minuman_edit.php', $data);
		$this->load->view('Admin/Templates/footer.php');
	}
	function data_minuman_edit_aksi(){
		$id = $this->input->POST('id_minuman');
		$kd = $this->input->POST('kd_minuman');
		$nama = $this->input->POST('nm_minuman');
		$modal = $this->input->POST('modal');
		$harga = $this->input->POST('harga_jual');

		$data = array(
			'kd_minuman' => $kd,
			'nm_minuman' => $nama,
			'modal' => $modal,
			'harga_jual' => $harga
		);

		$where = array(
			'id_minuman' => $id
		);

		$this->load->model('M_Minuman');
		$this->M_Minuman->update_data($where, $data,'tbl_minuman');
		redirect('Admin/Admin/data_minuman');
	}
	function data_minuman_delete($id_minuman){
		$where = array('id_minuman' => $id_minuman);
		$this->load->model('M_Minuman');
		$this->M_Minuman->delete_data($where,'tbl_minuman');
		redirect('Admin/Admin/data_minuman');
	}


	function gallery(){

		$this->load->view('Admin/Templates/header.php');
		$this->load->view('Admin/Templates/menu.php');
		$this->load->view('Admin/gallery.php');
		$this->load->view('Admin/Templates/footer.php');
	}


	function laporan_minuman(){
		$this->db->select('*');
        $this->db->from('tbl_psn_minuman');
        $this->db->join('tbl_minuman', 'tbl_minuman.id_minuman = tbl_psn_minuman.id_minuman');
        $data['tbl_psn_minuman']=$this->db->get()->result();
		$this->load->view('Admin/Templates/header.php');
		$this->load->view('Admin/Templates/menu.php');
		$this->load->view('Admin/laporan_minuman.php', $data);
		$this->load->view('Admin/Templates/footer.php');
	}

	function laporan_makanan(){
		$this->db->select('*');
        $this->db->from('tbl_psn_makanan');
        $this->db->join('tbl_makanan', 'tbl_makanan.id_makanan = tbl_psn_makanan.id_makanan');
        $data['tbl_psn_makanan']=$this->db->get()->result();
		$this->load->view('Admin/Templates/header.php');
		$this->load->view('Admin/Templates/menu.php');
		$this->load->view('Admin/laporan_makanan.php', $data);
		$this->load->view('Admin/Templates/footer.php');
	}

	function cetak_laporan_minuman(){
		$this->db->select('*');
        $this->db->from('tbl_psn_minuman');
        $this->db->join('tbl_minuman', 'tbl_minuman.id_minuman = tbl_psn_minuman.id_minuman');
        $data['tbl_psn_minuman']=$this->db->get()->result();
		$this->load->view('Admin/cetak_laporan_minuman.php', $data);
	}

	function cetak_laporan_makanan(){
		$this->db->select('*');
        $this->db->from('tbl_psn_makanan');
        $this->db->join('tbl_makanan', 'tbl_makanan.id_makanan = tbl_psn_makanan.id_makanan');
        $data['tbl_psn_makanan']=$this->db->get()->result();
		$this->load->view('Admin/cetak_laporan_makanan.php', $data);
	}

	function cetak_data_minuman(){
		$this->db->select('*');
        $this->db->from('tbl_minuman');
        $data['tbl_minuman']=$this->db->get()->result();
		$this->load->view('Admin/cetak_data_minuman.php', $data);
	}

	function cetak_data_makanan(){
		$this->db->select('*');
        $this->db->from('tbl_makanan');
        $data['tbl_makanan']=$this->db->get()->result();
		$this->load->view('Admin/cetak_data_makanan.php', $data);
	}

		
} 