<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                        <p class="mb-0 text-right">Total Penjualan</p>
                        <?php $data=$this->db->count_all('v_penjualan'); ?>
                        <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0"><?php echo $data ?></h3>
                        </div>
                    </div>
                </div>
                <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                        <p class="mb-0 text-right">Jumalah Barang</p>
                         <?php $data=$this->db->count_all('tbl_barang'); ?>
                        <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0"><?php echo $data ?></h3>
                        </div>
                    </div>
                </div>
                <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <i class="mdi mdi-poll-box text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                        <p class="mb-0 text-right">Jumlah Kategori</p>
                         <?php $data=$this->db->count_all('tbl_kategori'); ?>
                        <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0"><?php echo $data ?></h3>
                        </div>
                    </div>
                </div>
                <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> 
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                        <p class="mb-0 text-right">Employees</p>
                        <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0">246</h3>
                        </div>
                    </div>
                </div>
                <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales
                </p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nama Semua Pembeli</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>
                                    nama
                                </th>
                                <th>
                                    Harga
                                </th>
                                <th>
                                    Ktegori
                                </th>
                                <th>Qty</th>
                                <th>
                                    Total
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                                <?php $total=0; foreach($report as $row): ?>
                                <tr>
                                    <td ><?php echo $row->tanggal; ?></td>
                                    <td ><?php echo $row->username; ?></td>
                                    <td ><?php echo $row->harga_barang;?></td>
                                    <td ><?php echo $row->nama_kategori ?></td>
                                    <td ><?php echo $row->qty ?></td>
                                    <td ><?php echo $total=$row->qty*$row->harga_barang ?></td>
                                </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
