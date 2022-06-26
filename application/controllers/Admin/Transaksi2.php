<?php
Class Transaksi2 extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->Model('M_Makanan');
    }



    public function index()
    {
        $this->load->model('M_Makanan');
        $data['tbl_makanan'] = $this->M_Makanan->tampil_data()->result();
        $this->db->select('*');
        $this->db->from('tbl_psn_makanan');
        $this->db->join('tbl_makanan', 'tbl_makanan.id_makanan = tbl_psn_makanan.id_makanan');
        $this->db->where('status',0);
        $data['tbl_psn_makanan']=$this->db->get()->result();
        $this->load->view('Admin/Templates/header.php');
        $this->load->view('Admin/Templates/menu.php');
        $this->load->view('Admin/menu_makanan.php', $data);
        $this->load->view('Admin/Templates/footer.php');

    }

    public function add()
    {
        $data=[
            'id_makanan'    => $this->input->post('id_makanan'),
            'qty'         => $this->input->post('qty')
        ];
        $this->db->insert('tbl_psn_makanan',$data);
        redirect('Admin/Transaksi2');
    }

    function cancel($id_psn_makanan){
        $where = array('id_psn_makanan' => $id_psn_makanan);
        $this->load->model('M_Makanan');
        $this->M_Makanan->delete_data($where,'tbl_psn_makanan');
        redirect('Admin/Transaksi2');
    }

    public function selesai()
    {
        $update=[
            'status'=>1
        ];
        $this->db->where('status',0);
        $this->db->update('tbl_psn_makanan',$update);
        redirect('Admin/Transaksi2');
    }
}
?>