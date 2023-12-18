<?php
require 'connection.php';
$mahasiswa = mysqli_query($conn, "SELECT * FROM mhs2");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Utama</h1>
    <h2>Data Mahasiswa</h2>
    <div class="link>
    <a href="TambahData.php">TambahData</a>
    <table style="text-align:left ;border:1px solid;border-collapse:collapse">
    <tr>
        <th style="border :1px solid;padding:10px;text -alingn:center">No</th>
        <th style="border :1px solid;padding:10px;text -alingn:center">Nim</th>
        <th style="border :1px solid;padding:10px;text -alingn:center">Nama</th>
        <th style="border :1px solid;padding:10px;text -alingn:center">Jenis Kelamin</th>
        <th style="border :1px solid;padding:10px;text -alingn:center">Prodi</th>
        <th style="border :1px solid;padding:10px;text -alingn:center">Alamat</t>
</tr>
    <?php
    $no = 0;
        foreach ($mahasiswa as $mhs) {
            $no++;?>
            <tr>
           <td style="border:1px solid; padding:10px;text-alingn:center"><? $no?></td>
           <td style="border:1px solid; padding:10px;text-alingn:center"><? $mhs['nim']?></td>
           <td style="border:1px solid; padding:10px;text-alingn:center"><? $mhs['nama']?></td>
           <td style="border:1px solid; padding:10px;text-alingn:center"><? $mhs['jk']?></td>
           <td style="border:1px solid; padding:10px;text-alingn:center"><? $mhs['prodi']?></td>
           <td style="border:1px solid; padding:10px;text-alingn:center"><? $mhs['alamat']?></td>
           
           
        <?php}
        ?>
</body>
</html>