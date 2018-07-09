<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body ">Edit Data pembelian
            <h4 class="card-title"></h4>
                <?php echo form_open_multipart('Data_pembelian/edit','class="form-sample"');
                       echo form_hidden('id_pembeli',$pembeli['id_pembeli']);
                ?>
                <p class="card-description">
                    Masukan Data Pembeli
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $pembeli['nama_lengkap']; ?>" name="nama_lengkap" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $pembeli['alamat'] ?>" name="alamat" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Negara</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $pembeli['alamat']; ?>" name="negara" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kode Pos</label>
                            <div class="col-sm-9">
                                <input type="number" value="<?php echo $pembeli['kode_pos']; ?>" name="kode_pos" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $pembeli['username']; ?>" name="username" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">password</label>
                            <div class="col-sm-4">
                                <div>
                                    <label>
                                        <input type="password" value="<?php echo $pembeli['password'] ?>" name="password" class="form-control">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Total Harga</label>
                            <div class="col-sm-9">
                                <input type="number" value="<?php echo $pembeli['total_harga'] ?>" name="total_harga" class="form-control">
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
                            <?php echo anchor('Data_pembelian','Kembali',array('class'=>'btn btn-info')) ?>
                            
                        </div>
                    </div>

                </div>
          <?php echo Form_close(); ?>
        </div>
    </div>
</div>