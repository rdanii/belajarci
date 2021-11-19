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
              <th>Aksi</th>
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
                <td><a class="btn btn-warning" href="<?= base_url('kategori/ubahKategori/' . $row->id) ?>">Ubah Kategori</a></td>
              </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>