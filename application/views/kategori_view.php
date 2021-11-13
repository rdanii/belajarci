<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan Kategori</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            foreach ($tampil_kategori->result() as $row) {
                $no++; ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row->kategori ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>