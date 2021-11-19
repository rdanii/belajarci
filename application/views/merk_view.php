<body>
  <div class="container" style="margin-top: 50px;">
    <a class="btn btn-info" href="<?php echo base_url('merk/addmerk'); ?>">Tambah Merk</a>
    <br>
    <br><br>
    <div class="row">
      <div class="col-md-6">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Merk</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($merk->result() as $row) {
            ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row->merk ?></td>
                <td><a class="btn btn-warning" href="<?= base_url('merk/ubahmerk/') . $row->id ?>">Ubah Merk</a></td>
              </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>