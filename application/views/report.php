
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Table V01</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="<?php echo base_url() ?>report/image/png" href="<?php echo base_url() ?>report/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>report/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>report/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>report/vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>report/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>report/vendor/perfect-scrollbar/perfect-scrollbar.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>report/css/util.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>report/css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>

        <div class="limiter">
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100">
                        <table>
                            <thead>
                                <tr class="table100-head">
                                    <th class="column1">Tanggal</th>
                                    <th class="column2">Nama</th>
                                    <th class="column3">Harga</th>
                                    <th class="column4">Kategori</th>
                                    <th class="column5">Quantity</th>
                                    <th class="column6">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total=0; foreach($report as $row): ?>
                                <tr>
                                    <td class="column1"><?php echo $row->tanggal; ?></td>
                                    <td class="column2"><?php echo $row->username; ?></td>
                                    <td class="column3"><?php echo $row->harga_barang;?></td>
                                    <td class="column4"><?php echo $row->nama_kategori ?></td>
                                    <td class="column5"><?php echo $row->qty ?></td>
                                    <td class="column6"><?php echo $total=$row->qty*$row->harga_barang ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




        <!--===============================================================================================-->	
        <script src="<?php echo base_url() ?>report/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() ?>report/vendor/bootstrap/js/popper.js"></script>
        <script src="<?php echo base_url() ?>report/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() ?>report/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() ?>report/js/main.js"></script>

    </body>
</html>