

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
              <th>Nama Pengguna</th>
              <th>Email</th>
              <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($user->result() as $row) {
            ?>
              <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->nama ?></td>
                <td><?php echo $row->email ?></td>
                <td><?php echo $row->username ?></td>
              </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
