<body>
  <div class="container" style="margin-top: 50px;">
    <a class="btn btn-info" href="<?php echo base_url('user/addUser'); ?>">Tambah Pengguna</a>
    <br>
    <br><br>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Username</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 0;
            foreach ($user->result() as $row) {
            ?>
              <tr>
                <td><?php echo ++$no ?></td>
                <td><?php echo $row->username ?></td>
                <td><?php echo $row->nama ?></td>
                <td><?php echo $row->email ?></td>
                <td><a class="btn btn-warning" href="<?= base_url('user/ubahuser/') . $row->id ?>">Ubah User</a></td>
              </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>