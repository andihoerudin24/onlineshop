
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Develop By Andi Hoerudin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/css/vendor.bundle.addons.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png" />
    </head>

    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                    <a class="navbar-brand brand-logo" href="index.html">
                        <img src="<?php echo base_url() ?>assets/images/logo.svg" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="index.html">
                        <img src="<?php echo base_url() ?>assets/images/logo-mini.svg" alt="logo" />
                    </a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center">

                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown d-none d-xl-inline-block">
                            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <span class="profile-text"><?php echo $this->session->userdata('username') ?></span>
                                <img class="img-xs rounded-circle" src="<?php echo base_url() ?>assets/images/faces/face1.jpg" alt="Profile image">
                            </a>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="icon-menu"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item nav-profile">
                            <div class="nav-link">
                                <div class="user-wrapper">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url() ?>assets/images/faces/face1.jpg" alt="profile image">
                                    </div>
                                    <div class="text-wrapper">
                                        <p class="profile-name"><?php echo $this->session->userdata('username') ?></p>
                                        <div>
                                            <?php 
                                            if ($this->session->userdata('level')==1) {
                                             echo "<small class='designation text-muted'>Pembeli</small>";   
                                            } else {
                                            echo "<small class='designation text-muted'>Manajer</small>";    
                                            }
                                            ?>
                                            <span class="status-indicator online"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php if ($this->session->userdata('level')==1) {?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('History_pembelian'); ?> ">
                                <i class="menu-icon mdi mdi-home-outline"></i>
                                <span class="menu-title">History Pembelian</span>
                            </a>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('Admin/logout'); ?> ">
                                <i class="menu-icon mdi mdi-logout"></i>
                                <span class="menu-title">Logout</span>
                            </a>
                        </li>
                        <?php } else {?>
                        
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('Barang'); ?> ">
                                <i class="menu-icon mdi mdi-television"></i>
                                <span class="menu-title">Barang</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('Kategori'); ?> ">
                                <i class="menu-icon mdi mdi-account"></i>
                                <span class="menu-title">Kategori</span>
                            </a>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('Transaksi_penjualan'); ?> ">
                                <i class="menu-icon mdi mdi-shield-outline"></i>
                                <span class="menu-title">Transaksi Penjualan</span>
                            </a>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('History_pembelian'); ?> ">
                                <i class="menu-icon mdi mdi-home-outline"></i>
                                <span class="menu-title">History Pembelian</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('Data_pembelian'); ?> ">
                                <i class="menu-icon mdi mdi-account-outline"></i>
                                <span class="menu-title">Data Pembeli</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('Admin/logout'); ?> ">
                                <i class="menu-icon mdi mdi-logout"></i>
                                <span class="menu-title">Logout</span>
                            </a>
                        </li>
                        
                         <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('Admin/Report'); ?> ">
                                <i class="menu-icon mdi mdi-file-document"></i>
                                <span class="menu-title">Laporan Penjualan</span>
                            </a>
                        </li>
                    </ul>
                        <?php }?>
                </nav>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                         <?php
                        if ($this->session->flashdata('berhasil')) {
                            echo "<div class='alert alert-info'>";
                            echo $this->session->flashdata('berhasil');
                            echo "</div>";
                        } elseif ($this->session->flashdata('hapus')) {
                            echo "<div class='alert alert-danger'>";
                            echo $this->session->flashdata('hapus');
                            echo "</div>";
                        } elseif ($this->session->flashdata('edit')) {
                            echo "<div class='alert alert-warning'>";
                            echo $this->session->flashdata('edit');
                            echo "</div>";
                        }
                        ?>
                        <?php echo $contents; ?>
                       

                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="container-fluid clearfix">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                                <a href="http://tutorkomputer.com/" target="_blank">Team tutor</a>. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
                                <i class="mdi mdi-heart text-danger"></i>
                            </span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="<?php echo base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/js/vendor.bundle.addons.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="<?php echo base_url() ?>assets/js/off-canvas.js"></script>
        <script src="<?php echo base_url() ?>assets/js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="<?php echo base_url() ?>assets/js/dashboard.js"></script>
        <!-- End custom js for this page-->
        
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url() ?>assets/js/chart.js"></script>
    </body>

</html>