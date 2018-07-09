  
<nav class="big-navbar navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="<?php echo site_url('Welcome') ?>">HOME</a></li>
                <?php 
                    $kategori=$this->db->get('tbl_kategori')->result();
                    foreach ($kategori as $row):     
                 ?>
                <li><a href="<?php echo site_url('Welcome/'.$row->nama_kategori) ?>"><?php echo $row->nama_kategori; ?></a></li>
                <?php endforeach; ?>
                <li><a href="<?php echo site_url('Welcome') ?>">OTHER</a></li>
            </ul>
            <ul class="visible-xs nav navbar-nav navbar-left">
                <li><a href="#">MY ACCOUNT</a></li>
                <li><a href="#">MY CART</a></li>
                <li><a href="#">MY WISHLIST</a></li>
                <li><a href="#">CHECKOUT</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LANGUAGE: INDONESIA &nbsp;<span class="fa fa-chevron-down"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">ENGLAND</a></li>
                        <li><a href="#">FRANCE</a></li>
                        <li><a href="#">EURO</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CURRENCY: IDR &nbsp;<span class="fa fa-chevron-down"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">USD</a></li>
                        <li><a href="#">FR</a></li>
                        <li><a href="#">EU</a></li>
                    </ul>
                </li>
            </ul>
            <a class="hidden-xs" href="#"><img src="<?php echo base_url() ?>front/img/logo-ayostore.png" style="margin-left: 80px; margin-top: 10px;"></a>
            <form method="POST" action="" class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="bn-search form-control" placeholder="Search">
                </div>
                <a href="<?php echo site_url('Welcome/lihat') ?>" class="btn btn-cart"><i class="fa fa-shopping-cart fa-lg"></i> 
                    <?php
                        $id=$this->session->userdata('id_pembeli');
                         $this->db->select('SUM(qty) as total');
                         $this->db->from('v_penjualan');
                         $this->db->where('id_pembeli',$id);
                      $sum=$this->db->get()->row()->total;
                      if ($sum>0) {
                            echo "<span class='badge badge-primary'>$sum</span>";
                        }else{
                            echo "<span class='badge badge-primary'>0</span>";
                    
                        }
                       
                    ?>

                </a>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>