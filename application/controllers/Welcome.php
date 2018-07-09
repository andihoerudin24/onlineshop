<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->Model('Model_barang');
        $this->load->Model('Model_pembelian');
        $this->load->Model('Model_penjualan');
    }

    public function index() {
        $config['base_url']         = site_url('Welcome/index');
        $config['total_rows']       = $this->db->count_all('tbl_barang');
        $config['per_page']         = 8;
        $config["uri_segment"]      = 3;
        $choice                     = $config["total_rows"] / $config["per_page"];
        $config["num_links"]        = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        ='Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     ='<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page']               = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['data']               = $this->Model_barang->get_barang($config["per_page"], $data['page']);
        $data['pagination']         = $this->pagination->create_links();
        $this->load->view('template', $data);
    }
    
    
    function WOMEN(){
        $config['base_url']         = site_url('Welcome/WOMEN');
        $config['total_rows']       = $this->Model_barang->paging()->num_rows();
        $config['per_page']         = 8;
        $config["uri_segment"]      = 3;
        $choice                     = $config["total_rows"] / $config["per_page"];
        $config["num_links"]        = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        ='Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     ='<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page']               = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination']         = $this->pagination->create_links();
        $data['data']               = $this->Model_barang->join($config["per_page"], $data['page']);
        $this->load->view('template', $data);        
        
    }
    
    
    function MAN(){
        $config['base_url']         = site_url('Welcome/index');
        $config['total_rows']       = $this->Model_barang->paging()->num_rows();
        $config['per_page']         = 8;
        $config["uri_segment"]      = 3;
        $choice                     = $config["total_rows"] / $config["per_page"];
        $config["num_links"]        = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        ='Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     ='<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page']               = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination']         = $this->pagination->create_links();
        $id                         = $this->uri->segment(2);
        $this->db->select('*');
            $this->db->from('tbl_barang');
            $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori=tbl_barang.id_kategori');
            $this->db->where('tbl_kategori.nama_kategori',$id);
         $data['data']=$this->db->get();
         $this->load->view('template', $data);        
        
    }
    
     function ACCESSORIES(){
        $config['base_url']         = site_url('Welcome/index');
        $config['total_rows']       = $this->Model_barang->paging()->num_rows();
        $config['per_page']         = 8;
        $config["uri_segment"]      = 3;
        $choice                     = $config["total_rows"] / $config["per_page"];
        $config["num_links"]        = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        ='Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     ='<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page']               = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination']         = $this->pagination->create_links();
        $id                         = $this->uri->segment(2);
        $this->db->select('*');
            $this->db->from('tbl_barang');
            $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori=tbl_barang.id_kategori');
            $this->db->where('tbl_kategori.nama_kategori',$id);
         $data['data']=$this->db->get();
         $this->load->view('template', $data);        
        
    }
        
    function detail() {
        $id                      = $this->uri->segment(3);
        $data['detail']          = $this->db->get_where('tbl_barang', array('id_barang' => $id))->row_array();
        $this->session->set_flashdata('berhasil', 'Sukses Barang Berhasil Dimasukan kedalam Keranjang Belanja Silahkan Registrasi');
        $this->load->view('front/detail', $data);
    }

    function chekout() {
        if (isset($_POST['submit'])) {
            $this->session->set_userdata(array('jumlah'  => $this->input->post('jumlah')));
            $id_barang                                   = $this->input->post('id_barang');
            $username                                    = $this->session->userdata('username');
            $password                                    = $this->session->userdata('password');
            $id_pembeli                                  = $this->session->userdata('id_pembeli');
            $chek = $this->Model_penjualan->chek_login($username, $password);
            if (!empty($chek)) {
                $this->Model_pembelian->transaksi($id_pembeli, $id_barang);
                $this->db->where('id_pembeli', $id_pembeli);
                $data['barang']                          = $this->db->get('v_penjualan')->result();
                $this->load->view('cart/list', $data);
            } else {
                $barang['id_barang'] = $id_barang;
                $this->load->view('register/list', $barang);
            }
        }
    }
    
    function lihat(){
            $this->session->set_userdata(array('jumlah'  => $this->input->post('jumlah')));
            $id_barang                                   = $this->input->post('id_barang');
            $username                                    = $this->session->userdata('username');
            $password                                    = $this->session->userdata('password');
            $id_pembeli                                  = $this->session->userdata('id_pembeli');
            $chek = $this->Model_penjualan->chek_login($username, $password);
            if (!empty($chek)) {
                $this->db->where('id_pembeli', $id_pembeli);
                $data['barang']                          = $this->db->get('v_penjualan')->result();
                $this->load->view('cart/list', $data);
            } 
                
    }
    
    function register() {
        if (isset($_POST['submit'])) {
            $id                          = $this->Model_pembelian->register();
            $id_barang                   = $this->input->post('id_barang');
            $this->Model_pembelian->transaksi($id, $id_barang);
            $id_pembeli                  = $this->session->userdata('id_pembeli');
            $this->db->where('id_pembeli', $id_pembeli);
            $data['barang']              = $this->db->get('v_penjualan')->result();
            $this->load->view('cart/list', $data);
        } else {
            $data['barang']              = $this->db->get('v_penjualan') - result();
            $this->load->view('register/list', $data);
        }
    }

    function cancel() {
        $id                              =$this->uri->segment(3);
        $this->db->where('id_transaksi', $id);
        $this->db->delete('tbl_transaksi');
        $this->session->set_flashdata('hapus', 'Barang Berhasil Dihapus');
        $id_pembeli                      =$this->session->userdata('id_pembeli');
        $this->db->where('id_pembeli', $id_pembeli);
        $data['barang']                  = $this->db->get('v_penjualan')->result();
        $this->load->view('cart/list', $data);
    }

    function finis() {

        if (isset($_POST['submit'])) {
            $data=array(
                'total_harga'=> $this->input->post('total_harga'),
            );
            $id= $this->session->userdata('id_pembeli');
            $this->db->where('id_pembeli',$id);
            $this->db->update('pembeli',$data);
            $this->session->set_flashdata('sukses', 'Transaksi Berhasil Silahkan Klik Selesai Dan Login Menggunakan Menu My ACCONT Untuk Melihat Status Transaksi');
            $this->session->sess_destroy();
            redirect('Welcome');
            
        } else {
            $id                     =$this->session->userdata('id_pembeli');
            $this->db->select('*');
            $this->db->from('tbl_barang');
            $this->db->from('pembeli');
            $this->db->join('tbl_transaksi', 'tbl_transaksi.id_pembeli=pembeli.id_pembeli', 'tbl_transaksi.id_barang=tbl_barang.id_barang', "and id_pembeli=$id");
            $this->db->where('tbl_transaksi.id_pembeli', $id);
            $data['chek']           =$this->db->get()->row_array();
            $this->load->view('finis/list', $data);
        }
    }
    

}
