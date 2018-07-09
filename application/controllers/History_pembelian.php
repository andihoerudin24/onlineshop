<?php
Class History_pembelian extends Ci_Controller{
    
    
    function __construct() {
        parent::__construct();
        $this->load->Model('Model_history');
    }
            
    function index(){
        $user_id          = $this->session->userdata('id_pembeli');
        if (!empty($user_id)) {
          $data['history']= $this->db->get_where('v_penjualan',array('id_pembeli'=>$user_id))->result();
          $this->template->load('templateadmin','history_pembelian/list',$data);
        }else{
         $data['history'] = $this->db->get('v_penjualan')->result();
         $this->template->load('templateadmin','history_pembelian/list',$data);
        }
        
    }
    
    function bukti(){
        if (isset($_POST['submit'])) {
            $upload= $this->upload();
            $this->Model_history->update($upload);
            $this->session->set_flashdata('berhasil', 'Sukses upload Bukti Pembayaran');
            redirect('History_pembelian');
        }
        
    }
            
    
    
        
    function upload() {
        $config['upload_path']   = './uploads/bukti';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 5000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

    
}


?>