<?php
Class Model_history extends Ci_Model{
    
    
    function update($foto){
        
        $data=array(
            'bukti_pembayaran'=>$foto
        );
        $user_id= $this->session->userdata('id_pembeli');
        $this->db->where('id_pembeli',$user_id);
        $this->db->update('tbl_transaksi',$data);
    }
    
}


?>