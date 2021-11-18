<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Barang</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>

<body>
  <?php
  foreach ($stok->result() as $row) {
    $id = $row->id;
    $nama = $row->nama_barang;
    $jumlah = $row->jumlah_barang;
    $merk = $row->merk;
    $jenis = $row->jenis;
  ?>
  <?php }
  ?>
  <div class="container">
    <h1>Form Ubah Stok</h1>
    <div class="col-md-12">
      <form action="<?php echo base_url('stok/update'); ?>" method="POST">
        <div class="form-group">
          <input type="hidden" name="id" value="<?= $id ?>">
          <label>Nama</label>
          <input type="text" class="form-control" name="nama_barang" value="<?= $nama ?>">
        </div>
        <div class=" form-group">
          <label>Jumlah</label>
          <input type="text" class="form-control" name="jumlah_barang" value="<?= $jumlah ?>">
        </div>
        <div class=" form-group">
          <label>Merk</label>
          <input type="text" class="form-control" name="merk" value="<?= $merk ?>">
        </div>
        <div class="form-group">
          <label>jenis</label>
          <input type="text" class="form-control" name="jenis" value="<?= $jenis ?>">
        </div>
        <button type=" submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
</body>

</html>