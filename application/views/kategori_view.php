<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Kategori</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>

<body>
  <div class="container" style="margin-top: 50px;">
    <a class="btn btn-info" href="<?php echo base_url('kategori/addkategori'); ?>">Tambah Kategori</a>
    <br>
    <br><br>
    <div class="row">
      <div class="col-md-6">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Kategori</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($kategori->result() as $row) {
            ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row->kategori ?></td>
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