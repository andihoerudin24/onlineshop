<?php
Class Dashboard extends Ci_controller{
    
    function index() {
        $data['report']= $this->db->query("SELECT ts.tanggal,pm.id_pembeli,ts.qty,ts.id_transaksi,tb.nama_barang,tb.harga_barang,tk.nama_kategori,tb.foto,ts.status,pm.alamat,pm.username,pm.password FROM tbl_transaksi as ts, tbl_barang as tb,tbl_kategori as tk, pembeli as pm WHERE ts.id_pembeli=pm.id_pembeli AND tb.id_kategori=tk.id_kategori AND ts.id_barang=tb.id_barang")->result();
        $this->template->load('templateadmin','admin/dashboard',$data);
    }
}


?>