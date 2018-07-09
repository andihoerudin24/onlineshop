<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/smallnavbar'); ?>
<?php $this->load->view('layouts/navbar'); ?>
<?php
if ($this->session->flashdata('berhasil')) {
    echo "<div class='alert alert-info'>";
    echo $this->session->flashdata('berhasil');
    echo "</div>";
}
?>
<div class="checkout-page">
    <div class="container">
        <!-- Form Name -->
        <legend><center><h2><b>Registration Form</b></h2></center></legend><br>
        <?php 
            echo form_open('Welcome/register');
            echo form_hidden('id_barang',$id_barang);
        ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Nama Lengkap</label>  
                    <div class="inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="nama_lengkap" placeholder="First Name" class="form-control"  type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" >Alamat</label> 
                    <div class="inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <textarea class="form-control" name="alamat"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class=" control-label" >Negara</label> 
                    <div class="inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-btc"></i></span>
                            <input name="negara" placeholder="negara" class="form-control"  type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class=" control-label" >Kode Pos</label> 
                        <div class="inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-apple"></i></span>
                                <input name="kode_pos" class="form-control"  type="number">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class=" control-label" >Username</label> 
                        <div class="inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="username" placeholder="username" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class=" control-label" >Password</label> 
                        <div class="inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
                                <input name="password" placeholder="password" class="form-control"  type="password">
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-dark">
                    <div class="jumbotron">
                        <h1>INFORMASI</h1>
                        <p>Untuk Melakukan Pembelian Di Toko Online Kami Anda Harus Daftar Terlebih Dahulu</p>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <p><button type="submit" name="submit" class="btn btn-danger btn-lg" href="#" role="button">Daftar</button></p>
            </div>
        </div>
<?php echo form_Close(); ?>

