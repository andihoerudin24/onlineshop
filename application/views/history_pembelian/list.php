<div class="col-lg-4 grid-margin stretch-card">
    <div class="card">
        <?php echo form_open_multipart('History_pembelian/bukti'); ?>
        <div class="card-body">
            <h4 class="card-title">Upload Bukti Pembayaran</h4>
            <input type="file" name="userfile" class="form-control">
            <button type="submit" name="submit" class="btn btn-info btn-fw">
             <i class="mdi mdi-upload"></i>Upload</button>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">History Pembelian</h4>
            <p class="card-description">

            </p>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Nama Kategori</th>
                            <th>Alamat</th>
                            <th>Harga Barang</th>
                            <th>Foto</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($history as $row): ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->nama_barang; ?></td>
                                <td><?php echo $row->nama_kategori; ?></td>
                                <td><?php echo $row->alamat; ?></td>
                                <td><?php echo $row->harga_barang; ?></td>
                                <td class="py-1">
                                    <img src="uploads/barang/<?php echo $row->foto ?>" alt="image" />
                                </td>
                                <td>
                                    <?php
                                    if ($row->status == 1) {
                                        echo "<label class='badge badge-success'>Completed</label>";
                                    } else {
                                        echo "<label class='badge badge-danger'>Pending</label>";
                                    }
                                    ?>
                                </td>
                            </tr>
    <?php $no++; ?>
<?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>