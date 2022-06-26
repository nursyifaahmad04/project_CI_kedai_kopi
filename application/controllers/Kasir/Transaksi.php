<?php
Class Transaksi extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->Model('M_Minuman');
    }



    public function index()
    {
        $this->load->model('M_Minuman');
        $data['tbl_minuman'] = $this->M_Minuman->tampil_data()->result();
        $this->db->select('*');
        $this->db->from('tbl_psn_minuman');
        $this->db->join('tbl_minuman', 'tbl_minuman.id_minuman = tbl_psn_minuman.id_minuman');
        $this->db->where('status',0);
        $data['tbl_psn_minuman']=$this->db->get()->result();
        $this->load->view('Kasir/Templates/header.php');
        $this->load->view('Kasir/Templates/menu.php');
        $this->load->view('Kasir/menu_minuman.php', $data);
        $this->load->view('Kasir/Templates/footer.php');

    }

    public function add()
    {
        $data=[
            'id_minuman'    => $this->input->post('id_minuman'),
            'qty'         => $this->input->post('qty')
        ];
        $this->db->insert('tbl_psn_minuman',$data);
        redirect('Kasir/Transaksi');
    }

    function cancel($id_psn_minuman){
        $where = array('id_psn_minuman' => $id_psn_minuman);
        $this->load->model('M_Minuman');
        $this->M_Minuman->delete_data($where,'tbl_psn_minuman');
        redirect('Kasir/Transaksi');
    }

    public function selesai()
    {
        $update=[
            'status'=>1
        ];
        $this->db->where('status',0);
        $this->db->update('tbl_psn_minuman',$update);
        redirect('Kasir/Transaksi');
    }
    
}
?>