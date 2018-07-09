<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body ">Edit Transaksi
            <h4 class="card-title"></h4>
                <?php echo form_open_multipart('Transaksi_penjualan/edit','class="form-sample"');
                echo form_hidden('id_transaksi',$penjualan['id_transaksi']);
                ?>
                <p class="card-description">
                   Edit Ttansaksi Penjualan
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Barang</label>
                            <div class="col-sm-9">
                                  <?php echo cmb_dinamis('nama_barang','tbl_barang','nama_barang','id_barang',$penjualan['nama_barang']) ?>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga Barang</label>
                            <div class="col-sm-9">
                                <input type="number" readonly="" name="harga_barang" value="<?php echo $penjualan['harga_barang'] ?>" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <select name="status" class="form-control">
                                    <option value="0">Belum DI Proses</option>
                                    <option value="1">Sudah Proses</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">username</label>
                            <div class="col-sm-9">
                                <input type="text" readonly="" value="<?php echo $penjualan['username'] ?>" name="username" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">qty</label>
                            <div class="col-sm-4">
                                <div>
                                    <label>
                                        <input type="number" value="<?php echo $penjualan['qty'] ?>" name="qty" class="form-control">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                            
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="form-group row">
                            <?php echo anchor('Transaksi_penjualan','Kembali',array('class'=>'btn btn-info')) ?>
                            
                        </div>
                    </div>

                </div>
          <?php echo Form_close(); ?>
        </div>
    </div>
</div>