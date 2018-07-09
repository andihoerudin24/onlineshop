<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">Edit Barang
            <h4 class="card-title"></h4>
                <?php echo form_open_multipart('Barang/edit','class="form-sample"');
                      echo form_hidden('id_barang',$barang['id_barang']);
                       ?>
                <p class="card-description">
                    Edit Data Barang
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text"  value="<?php echo $barang['nama_barang'] ?>"  name="nama_barang" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga Barang</label>
                            <div class="col-sm-9">
                                <input type="number" value="<?php echo $barang['harga_barang'] ?>" name="harga_barang" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kategori</label>
                            <div class="col-sm-9">
                                <?php echo cmb_dinamis('kategori', 'tbl_kategori', 'nama_kategori', 'id_kategori',$barang['id_kategori']) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea name="deskripsi" class="form-control"><?php echo $barang['deskripsi']; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-9">
                                <input type="file" name="userfile" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">qty</label>
                            <div class="col-sm-4">
                                <div>
                                    <label>
                                        <input type="number" name="qty" value="<?php echo $barang['qty'] ?>" class="form-control">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Info Barang</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="info"><?php echo $barang['info'] ?></textarea>
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
                            <?php echo anchor('Barang','Kembali',array('class'=>'btn btn-info')) ?>
                            
                        </div>
                    </div>

                </div>
          <?php echo Form_close(); ?>
        </div>
    </div>
</div>