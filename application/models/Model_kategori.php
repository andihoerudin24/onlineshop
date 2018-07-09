<?php

Class Model_kategori extends Ci_Model {

    function add() {

        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori'),
           
        );
        $this->db->insert('tbl_kategori', $data);
    }

    function edit() {
            $data = array(
                'nama_kategori' => $this->input->post('nama_kategori'),
          );
            $id = $this->input->post('id_kategori');
            $this->db->where('id_kategori', $id);
            $this->db->update('tbl_kategori', $data);
        }
    

}

?>