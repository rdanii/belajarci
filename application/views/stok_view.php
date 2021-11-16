<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Stok</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>

<body>
  <div class="container" style="margin-top: 50px;">
    <a class="btn btn-info" href="<?php echo base_url('stok/addStok'); ?>">Tambah Stok</a>
    <br>
    <br><br>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Barang</th>
              <th>Jumlah</th>
              <th>Merk</th>
              <th>Jenis</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($stok->result() as $row) {
            ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row->nama_barang ?></td>
                <td><?php echo $row->jumlah_barang ?></td>
                <td><?php echo $row->merk ?></td>
                <td><?php echo $row->jenis ?></td>
              </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
</body>

</html>