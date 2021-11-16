<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampilkan Barang</title>
</head>
<body>
  <h1>Coba Integrasi Controller ke View</h1>
  <br>
  
  <p>ini adalah hasil judul dari controller -> <?php echo $judul ?></p>
  
  <p>ini adalah hasil isi dari controller -> <?php echo $isi ?></p>

  <table border="1px">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Merk</th>
        <th>Harga</th>
        <th>Kategori</th>
        <th>Jumlah</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 0;
      foreach($tampil_barang->result() as $row){
        $no++; ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $row->nama_barang ?></td>
          <td><?= $row->merk ?></td>
          <td><?= $row->harga ?></td>
          <td><?= $row->kategori ?></td>
          <td><?= $row->jumlah_barang ?></td>
        </tr>

      <?php } ?>
      
    </tbody>
  </table>


</body>
</html>