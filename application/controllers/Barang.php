<?php

Class Barang extends Ci_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_barang');
        
        $this->load->library('pagination');
    }

    function index() {
         $config['base_url']         = site_url('Barang/index');
        $config['total_rows']       = $this->Model_barang->br()->num_rows();
        $config['per_page']         = 8;
        $config["uri_segment"]      = 3;
        $choice                     = $config["total_rows"] / $config["per_page"];
        $config["num_links"]        = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        ='Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     ='<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page']               = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination']         = $this->pagination->create_links();
        $data['barang'] = $this->Model_barang->join_br($config["per_page"], $data['page'])->result();
        $this->template->load('templateadmin', 'barang/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $upload          = $this->upload();
            $this->Model_barang->add($upload);
            $this->session->set_flashdata('berhasil', 'Sukses menambah barang');
            redirect('Barang');
        } else {
            $this->template->load('templateadmin', 'barang/add');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $upload            = $this->upload();
            $this->Model_barang->edit($upload);
            $this->session->set_flashdata('edit', 'Berhasil Edit Barang !!');
            redirect('Barang');
        } else {
            $id = $this->uri->segment(3);
            $data['barang']     = $this->db->get_where('tbl_barang', array('id_barang' => $id))->row_Array();
            $this->template->load('templateadmin', 'barang/edit', $data);
        }
    }
    
    function hapus(){
        $id= $this->uri->segment(3);
        $this->db->where('id_barang',$id);
        $this->db->delete('tbl_barang');
        $this->session->set_flashdata('hapus', 'Berhasil Di Hapus Ya !!');
        redirect('Barang');
    }
    
 
    
    function upload() {
        $config['upload_path'] = './uploads/barang';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 5000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>