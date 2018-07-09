<?php

Class Model_barang extends Ci_Model {

    function get_barang($limit, $start) {
        $query = $this->db->get('tbl_barang', $limit, $start);
        return $query;
    }

    function join($limit, $start) {
        $id= $this->uri->segment(2);
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori=tbl_barang.id_kategori');
        $this->db->where('tbl_kategori.nama_kategori',$id);
        $this->db->limit($limit, $start);
        $this->db->count_all();
        $query = $this->db->get();
       return $query;
        
    }
    
    
    
    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori=tbl_barang.id_kategori');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
       return $query;
        
    }
    
    
    
    function br() {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori=tbl_barang.id_kategori');
        $query = $this->db->get();
       return $query;
        
    }
    function paging(){
        $id= $this->uri->segment(2);
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori=tbl_barang.id_kategori');
        $this->db->where('tbl_kategori.nama_kategori',$id);
        $query = $this->db->get();
       return $query;
    }
            
        
    function add($foto) {

        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'harga_barang' => $this->input->post('harga_barang'),
            'id_kategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi'),
            'foto' => $foto,
            'qty' => $this->input->post('qty'),
            'info' => $this->input->post('info')
        );
        $this->db->insert('tbl_barang', $data);
    }

    function edit($foto) {
        if (empty($foto)) {
            $data = array(
                'nama_barang' => $this->input->post('nama_barang'),
                'harga_barang' => $this->input->post('harga_barang'),
                'id_kategori' => $this->input->post('kategori'),
                'deskripsi' => $this->input->post('deskripsi'),
                'qty' => $this->input->post('qty'),
                'info' => $this->input->post('info')
            );
            $id = $this->input->post('id_barang');
            $this->db->where('id_barang', $id);
            $this->db->update('tbl_barang', $data);
        } else {
            $data = array(
                'nama_barang' => $this->input->post('nama_barang'),
                'harga_barang' => $this->input->post('harga_barang'),
                'id_kategori' => $this->input->post('kategori'),
                'deskripsi' => $this->input->post('deskripsi'),
                'foto' => $foto,
                'qty' => $this->input->post('qty'),
                'info' => $this->input->post('info')
            );
            $id = $this->input->post('id_barang');
            $this->db->where('id_barang', $id);
            $this->db->update('tbl_barang', $data);
        }
    }

}

?>