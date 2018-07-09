<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Data Barang</h4>
            
            <p class="card-description">
               <code><?php echo anchor('Barang/add', 'Tambah', array('class' => 'btn btn-primary')) ?></code>
            </p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                Foto
                            </th>
                            <th>
                                Nama Barang
                            </th>
                            <th>
                                Harga Barang
                            </th>
                            <th>
                                Kategori
                            </th>
                            <th>
                                Stok
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
                        <?php $no=1+$this->uri->segment(3); foreach ($barang as $row): ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td class="py-1">
                                <img src="<?php echo base_url()?>uploads/barang/<?php echo $row->foto ?>" s alt="image" />
                            </td>
                            <td>
                                <?php echo $row->nama_barang;  ?>
                            </td>
                            <td>
                              
                                    <?php echo $row->harga_barang ?>
                               
                            </td>
                            <td>
                                
                                    <?php echo $row->nama_kategori ?>
                            </td>
                            <td>
                               
                                    <?php echo $row->qty ?>
                            </td>
                            <td>
                               <?php echo anchor('Barang/edit/'.$row->id_barang,'Edit',array('class'=>'btn btn-danger')) ?>
                            </td>
                            <td>
                              <?php echo anchor('Barang/hapus/'.$row->id_barang,'Hapus',array('class'=>'btn btn-success')) ?>
                           </td>
                        </tr>
                        <?php $no++; ?>
                        <?php endforeach; ?>
                        
                    </tbody>
                    
                </table>
                
<?php echo $pagination; ?>
                
            </div>
        </div>
    </div>
</div>

