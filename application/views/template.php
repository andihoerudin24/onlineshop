<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/smallnavbar'); ?>
<?php $this->load->view('layouts/navbar'); ?>
<?php $this->load->view('layouts/banner'); ?>
<?php $this->load->view('layouts/homepage'); ?>
<div class="content-homepage">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="header-title">NEW ARRIVAL</h3>
            </div>
            <div class="col-md-6">
                <ul class="menu-right nav pull-right">
                <?php 
                    $kategori=$this->db->get('tbl_kategori')->result();
                    foreach ($kategori as $row):     
                 ?>
                    <li><a href="<?php echo site_url('Welcome/'.$row->nama_kategori) ?>"><?php echo $row->nama_kategori; ?></a>
                <?php endforeach; ?>
                    <li><a href="#"><span class="fa fa-th-list"></span></a>
                    <li><a href="#"><span class="fa fa-th-large"></span></a>
                        </div>
                        </div>

                        <div class="row">
                            <?php foreach ($data->result() as $row): ?>
                                <div class="ch-produk-item col-md-3">
                                    <span class="badge-item">SALE</span>
                                    <div class="link-action">
                                        <a href="<?php echo site_url('Welcome/detail/' . $row->id_barang) ?>" class="btn-cart btn"><span class="fa fa-shopping-cart"></span> ADD TO CART</a>
                                        <a href="<?php echo site_url('Welcome/detail/' . $row->id_barang) ?>" class="btn-view btn"><span class="fa fa-eye"></span></a>
                                        <a href="<?php echo site_url('Welcome/detail/' . $row->id_barang) ?>" class="btn-like btn"><span class="fa fa-heart"></span></a>
                                    </div>
                                    <img class="img-produk-item img-responsive" src="<?php echo base_url() ?>uploads/barang/<?php echo $row->foto; ?>" />
                                    <a href="#"><h4 class="text-center"><?php echo $row->nama_barang ?></h4></a>
                                    <p class="text-center"><?php echo $row->harga_barang ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                   </div>
           </div><!-- content-homepage -->
<?php echo $pagination; ?>
<?php $this->load->view('layouts/footer'); ?>
  


