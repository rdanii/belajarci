<body>
  <div class="container" style="margin-top: 50px;">
    <a class="btn btn-info" href="<?php echo base_url('barang/addBarang'); ?>">Tambah Barang</a>

    <br>
    <br><br>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Barang</th>
              <th>Harga</th>
              <th>Kategori</th>
              <th>Jumlah</th>
              <th>Merk</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($barang->result() as $row) {
            ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row->nama_barang ?></td>
                <td><?php echo $row->harga ?></td>
                <td><?php echo $row->kategori ?></td>
                <td><?php echo $row->jumlah_barang ?></td>
                <td><?php echo $row->merk ?></td>
                <td><a class="btn btn-warning" href="<?php echo base_url('barang/ubahBarang/' . $row->id); ?>">Ubah Barang</a></td>
              </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>