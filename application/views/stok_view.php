<body>
  <div class="container" style="margin-top: 50px;">
    <a class="btn btn-info" href="<?php echo base_url('stok/addstok'); ?>">Tambah Stok</a>
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
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 0;
            foreach ($tampil_stok->result() as $row) {
              $no++; ?>
              <tr>
                <td><?= $no ?></td>
                <td><?= $row->nama_barang ?></td>
                <td><?= $row->jumlah_barang ?></td>
                <td><?= $row->merk ?></td>
                <td><?= $row->jenis ?></td>
                <td><a class="btn btn-warning" href="<?php echo base_url('stok/ubahStok/' . $row->id); ?>">Ubah Stok</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>