<div class="col-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Masukan Nama Kategori</h4>
            <p class="card-description">

            </p>
            <?php  echo form_open('Kategori/add'); ?>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend bg-info">
                        <span class="input-group-text bg-transparent">
                            <i class="mdi mdi-shield-outline text-white"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="nama_kategori" placeholder="kategori" aria-label="Username" aria-describedby="colored-addon1">
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
                        <?php echo anchor('Kategori', 'Kembali', array('class' => 'btn btn-info')) ?>

                    </div>
                </div>
<?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>