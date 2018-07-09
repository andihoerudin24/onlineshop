<?php

Class Data_pembelian extends Ci_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_pembelian');
    }

    function index() {
        $data['pembeli'] = $this->db->get('pembeli')->result();
        $this->template->load('templateadmin', 'pembeli/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_pembelian->add();
            $this->session->set_flashdata('berhasil', 'Sukses menambah data pembeli');
            redirect('Data_pembelian');
        } else {
            $this->template->load('templateadmin', 'pembeli/add');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_pembelian->edit();
            $this->session->set_flashdata('edit', 'Berhasil Edit Data Pembeli !!');
            redirect('Data_pembelian');
        } else {
            $id = $this->uri->segment(3);
            $data['pembeli'] = $this->db->get_where('pembeli', array('id_pembeli' => $id))->row_Array();
            $this->template->load('templateadmin', 'pembeli/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(3);
        $this->db->where('id_pembeli', $id);
        $this->db->delete('pembeli');
        $this->session->set_flashdata('hapus', 'Berhasil Di Hapus !!');
        redirect('Data_pembelian');
    }


}

?>