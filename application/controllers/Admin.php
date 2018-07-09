<?php

Class Admin extends CI_Controller {

     function __construct() {
        parent::__construct();
        $this->load->Model('Model_admin');
        $this->load->Model('Model_penjualan');
       
    }
    function index() {
        $this->load->view('admin/login');
    }

    function login() {
        if (isset($_POST['submit'])) {
            $username             = $this->input->post('username');
            $password             = md5($this->input->post('password'));
            $chek                 = $this->Model_admin->chek_login($username,$password);
            $chek_pembeli         = $this->Model_penjualan->chek_login($username,$password);
            if (!empty($chek)) {
                $this->session->set_userdata($chek);
                redirect('Dashboard');
            } elseif (!empty($chek_pembeli)) {
                $this->session->set_userdata($chek_pembeli);
                $this->session->set_userdata(array('level' => 1));
                redirect('Dashboard');
            }else{
                $this->session->set_flashdata('salah', 'WAH BERAT BOS USERNAME DAN PASSWORD NYA SALA YA BOS !!');
                $this->load->view('Admin/login');
            }
        } else {
            $this->load->view('Admin/login');
        }
    }
    
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('Admin');
    }
    
    function Report(){
        $data['report']= $this->db->query("SELECT ts.tanggal,pm.id_pembeli,ts.qty,ts.id_transaksi,tb.nama_barang,tb.harga_barang,tk.nama_kategori,tb.foto,ts.status,pm.alamat,pm.username,pm.password FROM tbl_transaksi as ts, tbl_barang as tb,tbl_kategori as tk, pembeli as pm WHERE ts.id_pembeli=pm.id_pembeli AND tb.id_kategori=tk.id_kategori AND ts.id_barang=tb.id_barang")->result();
        $this->load->view('report',$data);
    }

}

?>