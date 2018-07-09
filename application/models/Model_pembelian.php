<?php

Class Model_pembelian extends Ci_Model {

    function add() {

        $data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'alamat' => $this->input->post('alamat'),
            'negara' => $this->input->post('negara'),
            'kode_pos' => $this->input->post('kode_pos'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'total_harga' => $this->input->post('total_harga')
        );
        $this->db->insert('pembeli', $data);
    }

    function edit() {


        $data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'alamat' => $this->input->post('alamat'),
            'negara' => $this->input->post('negara'),
            'kode_pos' => $this->input->post('kode_pos'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'total_harga' => $this->input->post('total_harga')
        );
        $id = $this->input->post('id_pembeli');
        $this->db->where('id_pembeli', $id);
        $this->db->update('pembeli', $data);
    }

    function register() {
        $data = array(
                    'nama_lengkap' => $this->input->post('nama_lengkap'),
                    'alamat' => $this->input->post('alamat'),
                    'negara' => $this->input->post('negara'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password'))
                  
        );
       $session=  $this->session->set_userdata($data);
         $this->db->insert('pembeli',$data);
         return $this->db->insert_id();
        $id_barang= $this->input->post('id_barang');
        $this->session->set_userdata(array('id_barang'=>$id_barang));
                
       
        
    }
    
    function transaksi($id,$id_barang){
        $data=array(
            'id_pembeli'=>$id,
            'id_barang'=>$id_barang,
            'qty'=> $this->session->userdata('jumlah'),   
        );
        $this->db->insert('tbl_transaksi',$data);
        $this->session->set_userdata($data);
    }
    
    

}

?>