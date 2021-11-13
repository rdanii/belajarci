<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan Barang</title>
</head>

<body>
    <h1>Coba integrasi controller ke view</h1>
    <br>
    <p>Ini hasil judul dari controllers ---> <?= $judul ?></p>
    <p>Ini hasil judul dari controllers ---> <?= $isi ?></p>

    <table border="1">
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
            foreach ($tampil_barang->result() as $row) {
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