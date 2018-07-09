<?php
Class Model_penjualan extends CI_Model{
    
    
    function chek_login($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $penjualan=$this->db->get('pembeli')->row_Array();
        return $penjualan;
    }
    
    function edit() {
            $data = array(
                'id_barang' => $this->input->post('nama_barang'),
                'status'    => $this->input->post('status'),
                'qty'       => $this->input->post('qty')
            );
            $id             = $this->input->post('id_transaksi');
            $this->db->where('id_transaksi', $id);
            $this->db->update('tbl_transaksi', $data);
        } 

}



?>