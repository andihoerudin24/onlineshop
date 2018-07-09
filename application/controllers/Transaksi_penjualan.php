<?php

Class Transaksi_penjualan extends Ci_controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_penjualan');
    }

    function index() {
        $data['penjualan']    = $this->db->query("SELECT pm.id_pembeli,ts.qty,ts.id_transaksi,tb.nama_barang,tb.harga_barang,tk.nama_kategori,tb.foto,ts.status,pm.alamat,pm.username,pm.password FROM tbl_transaksi as ts, tbl_barang as tb,tbl_kategori as tk, pembeli as pm WHERE ts.id_pembeli=pm.id_pembeli AND tb.id_kategori=tk.id_kategori AND ts.id_barang=tb.id_barang")->result();
        $this->template->load('templateadmin', 'transaksi_penjualan/list', $data);
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_penjualan->edit();
            $this->session->set_flashdata('edit', 'Berhasil Edit Transaksi !!');
            redirect('Transaksi_penjualan');
        } else {
            $id = $this->uri->segment(3);
            $data['penjualan'] = $this->db->get_where('v_penjualan', array('id_transaksi' => $id))->row_Array();
            $this->template->load('templateadmin', 'transaksi_penjualan/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(3);
        $this->db->where('id_transaksi', $id);
        $this->db->delete('tbl_transaksi');
        $this->session->set_flashdata('hapus', 'Berhasil Di Hapus !!');
        redirect('Transaksi_penjualan');
    }
    function Donwload() {
        $this->load->helper('download');
        $id = $this->uri->segment(3);
        $data = $this->db->get_where('tbl_transaksi', array('id_transaksi' => $id))->result();
        foreach ($data as $row) {
            $nama_file = $row->bukti_pembayaran;
        }
        force_download('uploads/bukti/' . $nama_file, NULL);
    }


}

?>