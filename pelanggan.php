<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<thead>
        <tr>
        <th>No</th>
        <th>nama pelanngan</th>
        <th>email </th>
        <th>nomor hp </th>
        <th>alamat</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $nomor = 1;
    $ambilpelanggan = $koneksi->query("SELECT * FROM pelanggan");
    while ($pecahpelanggan = $ambilpelanggan->fetch_assoc()){
    ?>


<tr>
    <td><?php echo $nomor; ?></td>
    <td><?php echo $pecahpelanggan['nama_pelangan'] ?></td>
    <td><?php echo $pecahpelanggan['email'] ?></td>
    <td><?php echo $pecahpelanggan['nomor_hp'] ?></td>
    <td><?php echo $pecahpelanggan['alamat'] ?></td>
    <td>x</td>
</tr>

<?php
$nomor++;
    }
?>
<a href="index.php?hal=tambahpelanggan" class="btn btn-warning btn-lg">TAMBAH PELANGGAN</a>

</body>
</html>