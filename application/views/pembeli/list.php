<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Data Barang</h4>
            <p class="card-description">
               <code><?php echo anchor('Data_pembelian/add', 'Tambah', array('class' => 'btn btn-primary')) ?></code>
            </p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                Nama Pembeli
                            </th>
                            <th>
                                Alamat
                            </th>
                            <th>
                                Negara
                            </th>
                            <th>
                                Kode pos
                            </th>
                            
                            <th>
                                Total Belanja
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
                        <?php $no=1; foreach ($pembeli as $row): ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td class="py-1">
                                <?php echo $row->nama_lengkap; ?>
                            </td>
                            <td>
                                <?php echo $row->alamat;  ?>
                            </td>
                            <td>
                              
                               <?php echo $row->negara ?>
                               
                            </td>
                            <td>
                               
                                    <?php echo $row->kode_pos ?>
                            </td>
                            
                            <td>
                               
                                    <?php echo $row->total_harga ?>
                            </td>
                            <td>
                               <?php echo anchor('Data_pembelian/edit/'.$row->id_pembeli,'Edit',array('class'=>'btn btn-danger')) ?>
                            </td>
                            <td>
                              <?php echo anchor('Data_pembelian/hapus/'.$row->id_pembeli,'Hapus',array('class'=>'btn btn-success')) ?>
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