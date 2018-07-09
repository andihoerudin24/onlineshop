
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Develop By Andi</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/iconfonts/puse-icons-feather/feather.css">
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
            <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
                <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                    <div class="row w-100">
                        <div class="col-lg-4 mx-auto">
                            <?php
                            if ($this->session->flashdata('salah')) {
                                echo "<div class='alert alert-danger'>";
                                echo $this->session->flashdata('salah');
                                echo "</div>";
                            }
                            ?>
                            <div class="auto-form-wrapper">

                                <?php echo form_open('Admin/login'); ?>
                                <div class="form-group">
                                    <label class="label">Username</label>
                                    <div class="input-group">
                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label">Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password" class="form-control" placeholder="*********">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                                </div>
                                <div class="form-group d-flex justify-content-between">
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" checked> Keep me signed in
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-block g-login">
                                        <img class="mr-3" src="<?php echo base_url() ?>assets/images/file-icons/icon-google.svg" alt="">Log in with Google</button>
                                </div>
                                <div class="text-block text-center my-3">

                                </div>
                                <?php echo form_close(); ?>
                            </div>
                            <ul class="auth-footer">

                            </ul>
                            <p class="footer-text text-center">copyright © 2018 Tutor Team.</p>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="<?php echo base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/js/vendor.bundle.addons.js"></script>
        <!-- endinject -->
        <!-- inject:js -->
        <script src="<?php echo base_url() ?>assets/js/off-canvas.js"></script>
        <script src="<?php echo base_url() ?>assets/js/hoverable-collapse.js"></script>
        <script src="<?php echo base_url() ?>assets/js/misc.js"></script>
        <script src="<?php echo base_url() ?>assets/js/settings.js"></script>
        <script src="<?php echo base_url() ?>assets/js/todolist.js"></script>
        <!-- endinject -->
    </body>

</html>