<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Kategori Barang</h4>
            <p class="card-description">

                <code><?php echo anchor('Kategori/add', 'Tambah', array('class' => 'btn btn-success')) ?></code>
            </p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                Nama Kategori
                            </th>
                            <th>
                               Aksi Edit
                            </th>
                            <th>
                                Aksi Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($kategori as $row):   ?>
                        <tr>
                            <td>
                                <?php  echo $no;  ?>
                            </td>
                            <td>
                                <?php echo $row->nama_kategori ?>
                            </td>
                            <td>
                                <?php echo anchor('Kategori/edit/'.$row->id_kategori,'Edit',array('class'=>'btn btn-primary')) ?>
                            </td>
                            <td>
                                 <?php echo anchor('Kategori/hapus/'.$row->id_kategori,'Hapus',array('class'=>'btn btn-danger')) ?>
                           </td>
                        </tr>
                        <?php $no++; ?>
                        <?php  endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>