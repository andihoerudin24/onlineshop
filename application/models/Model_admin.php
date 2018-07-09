<?php
Class Model_admin extends CI_Model{
    
    
    function chek_login($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $admin=$this->db->get('admin')->row_Array();
        return $admin;
    }
}



?>