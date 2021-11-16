
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
