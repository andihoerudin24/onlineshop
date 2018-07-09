<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/smallnavbar'); ?>
<?php $this->load->view('layouts/navbar'); ?>
<?php
if ($this->session->flashdata('sukses')) {
    echo "<div class='alert alert-info'>";
    echo $this->session->flashdata('sukses');
    echo "</div>";
}
?>
<div class="sitemap container">
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome') ?>">HOME</a></li>
        <li class="active">CHECKOUT</li>
    </ol>
</div><!-- container breadchumb -->
<div class="checkout-page">
    <div class="container">
        <div class="row" style="margin-bottom: 70px;">   
            <div class="col-md-1">
            </div>
            <?php
            $id = $this->session->userdata('id_pembeli');
            $this->db->select('SUM(qty) as total');
            $this->db->select('SUM(harga_barang) as harga');
            $this->db->from('v_chek');
            $this->db->where('id_pembeli', $id);
            $sum = $this->db->get()->row()->total;
            $this->db->select('SUM(harga_barang) as harga');
            $this->db->from('v_chek');
            $this->db->where('id_pembeli', $id);
            $total = $this->db->get()->row()->harga;
            $count=$sum*$total
            ?>
            <div class="col-md-11">
                <h3>INVOICE </h3>
                <h4>Total Pembayaran: <span style="color: #e74c3c;"><?php  echo $count; ?></span></h4>
            </div>
        </div><!-- row -->
        <div class="form-pembeli row">
            <div class="col-md-6">
                <div class="col-md-1">
                </div>
                <div class="col-md-11">
                    <?php echo form_open('Welcome/finis','class="form-horizontal"') ;
                          echo form_hidden('total_harga',$count);
                    ?>
                   
                        <div class="form-group">
                            <label class="col-sm-4 control-label">NAMA LENGKAP</label>
                            <div class="col-sm-8">
                                <input type="text" readonly="" class="form-control"  value="<?php echo $chek['username'] ?>"placeholder="Masukan Nama Lengkapmu ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">ADDRESS</label>
                            <div class="col-sm-8">
                                <textarea class="form-control"  rows="3" placeholder="Masukan Alamat lengkapmu"><?php echo $chek['alamat'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">COUNTRY</label>
                            <div class="col-sm-8">
                                <input type="text" value="<?php echo $chek['negara'] ?>" class="form-control"  placeholder="Masukan Negara Bagianmu">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">ZIP PORTAL / KODE POS</label>
                            <div class="col-sm-8">
                                <input type="number" value="<?php echo $chek['kode_pos'] ?>" class="form-control"  placeholder="Masukan Kode POS">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="submit" class="btn-submit pull-right btn btn-default">SUBMIT</button>
                            </div>
                        </div>
                    <?php echo form_close() ?>
                </div>
            </div>
            <div class="col-md-6">
                <h4 style="font-weight: bold; margin-top: 0; margin-bottom: 30px;">INFO LAINNYA:</h4>
                <p>
                <?php echo $chek['info']  ?>      
                </p>
            </div>
        </div>
    </div><!-- container -->
</div><!-- checkout page -->
