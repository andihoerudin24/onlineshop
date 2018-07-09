<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Line chart</h4>
                    <canvas id="lineChart" style="height:250px"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Bar chart</h4>
                    <canvas id="barChart" style="height:230px"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Penjualan</h4>
            <p class="card-description">
                Status
                <code>Hijau Sudah Di Bayar Merah belum DI bayar</code>
            </p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                Nama Barang
                            </th>
                            <th>
                                Harga Barang
                            </th>
                            <th>
                                Nama kategori                            
                            </th>
                            <th>
                                Foto
                            </th>
                            <th>
                               Status
                            </th>
                            
                            <th>
                               Username
                            </th>
                            
                            <th>
                               Jumlah Beli
                            </th>
                            
                            <th>
                               Total
                            </th>
                            <th>
                                Edit
                            </th>
                            <th colspan="2">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($penjualan as $row): ?>
                        <tr>
                            <td>
                                <?php echo $no; ?>
                            </td>
                            
                            <td>
                                <?php echo $row->nama_barang  ?>
                            </td>
                            
                            <td>
                                    <?php echo $row->harga_barang  ?>
                            </td>
                            
                            <td>
                                    <?php echo $row->nama_kategori  ?>
                            </td>
                            <td class="py-1">
                                <img src="uploads/barang/<?php echo $row->foto ?>" alt="image" />
                            </td>
                            <td>
                                <div class="progress">
                                    <?php if($row->status==0) {
                         echo "<div class='progress-bar bg-danger' role='progressbar' style='width: 100%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>";
                                     } else {
                         echo "<div class='progress-bar bg-success' role='progressbar' style='width: 100%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>";
                       
                                     }?>
                                </div>
                            </td>
                            <td>
                                <?php echo $row->username;  ?>
                            </td>
                            
                            <td>
                                <?php echo $row->qty;  ?>
                            </td>
                            <td>
                                <?php echo $total= $row->qty*$row->harga_barang;  ?>
                            </td> 
                            <td>
                                <?php echo anchor('Transaksi_penjualan/edit/'.$row->id_transaksi,'Edit',array('class'=>'btn btn-primary')) ?>
                            </td>
                            
                            <td>
                                <?php echo anchor('Transaksi_penjualan/hapus/'.$row->id_transaksi,'Hapus',array('class'=>'btn btn-danger')) ?>
                            </td>
                            
                            <td>
                                <?php echo anchor('Transaksi_penjualan/Donwload/'.$row->id_transaksi,'Bukti',array('class'=>'btn btn-info')) ?>
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