<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/smallnavbar'); ?>
<?php $this->load->view('layouts/navbar'); ?>
<?php
if ($this->session->flashdata('hapus')) {
    echo "<div class='alert alert-danger'>";
    echo $this->session->flashdata('hapus');
    echo "</div>";
}
?>
<div class="cart-items">
    <div class="container">
        <div class="ci-tbl row">
            <div class="col-md-12">
                <table class="cart-tbl table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>PICTURE</td>
                            <td>HARGA</td>
                            <td>QUANTITY</td>
                            <td>KATEGORI</td>
                            <td>MENU</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no=1;
                        foreach ($barang as $row):?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><img src="<?php echo base_url()?>uploads/barang/<?php echo $row->foto; ?>" class="img-responsive" /></td>
                            <td><p><?php echo "Rp.".$row->harga_barang;  ?> </p></td>
                            <td><p><?php echo $row->qty; ?></p></td>
                            <td><p><?php echo $row->nama_kategori; ?></p></td>
                            <td><p><a href="<?php echo site_url('Welcome/cancel/'.$row->id_transaksi) ?>" class="cart-remove"><span class="fa fa-remove"></span></a></p></td>
                        </tr>
                        <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php echo anchor('Welcome/finis','CHEKOUT',array('class'=>'btn btn-checkout pull-right',)) ?>
                <?php echo anchor('Welcome','BACK SHOPPING',array('class'=>'btn btn-shopping pull-right',)) ?>
                
            </div>
        </div>
    </div>
</div><!-- cart items -->
