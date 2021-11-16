<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan Stok</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Merk</th>
                <th>Jenis</th>
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
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>