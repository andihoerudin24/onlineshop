<?php

Class Kategori extends Ci_Controller {

    function __construct() {

        parent::__construct();
        $this->load->Model('Model_kategori');
    }

    function index() {
        $data['kategori']   = $this->db->get('tbl_kategori')->result();
        $this->template->load('templateadmin', 'kategori/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_kategori->add();
            $this->session->set_flashdata('berhasil', 'Sukses menambah kategori');
            redirect('kategori');
        } else {
            $this->template->load('templateadmin', 'kategori/add');
        }
    }
    
    
    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_kategori->edit();
            $this->session->set_flashdata('edit', 'Berhasil Edit kategori !!');
            redirect('Kategori');
        } else {
            $id = $this->uri->segment(3);
            $data['kategori']  = $this->db->get_where('tbl_kategori', array('id_kategori' => $id))->row_Array();
            $this->template->load('templateadmin', 'kategori/edit', $data);
        }
    }
    
    
    function hapus(){
        $id= $this->uri->segment(3);
        $this->db->where('id_kategori',$id);
        $this->db->delete('tbl_kategori');
        $this->session->set_flashdata('hapus', 'Berhasil Hapus Kategori !!');
        redirect('Kategori');
    }

}

?>