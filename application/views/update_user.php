<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>

<body>
  <?php
  foreach ($user->result() as $row) {
    $id = $row->id;
    $username = $row->username;
    $nama = $row->nama;
    $password = $row->password;
    $email = $row->email;
  ?>
  <?php }
  ?>
  <div class="container">
    <h1>Form Ubah user</h1>
    <div class="col-md-12">
      <form action="<?php echo base_url('user/update'); ?>" method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" name="username" value="<?= $username ?>">
        </div>
        <div class="form-group">
          <label>Nama</label>
          <input type="text" class="form-control" name="nama" value="<?= $nama ?>">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" value="<?= $password ?>">
        </div>
        <div class="form-group">
          <label>email</label>
          <input type="email" class="form-control" name="email" value="<?= $email ?>">
        </div>
        <button type=" submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
</body>

</html>