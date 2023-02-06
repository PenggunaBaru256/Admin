<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PAK MILIH NDI</h1>
    <P> PILIH KABEH YO RAPO RAPO</P>
    <table class="table">

    <thead>
        <tr>
        <th>No</th>
        <th>nama produk</th>
        <th>harga produk</th>
        <th>foto produk</th>
        <th>deskripsi</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $nomor = 1;
    $ambilproduk = $koneksi->query("SELECT * FROM produk");
    while ($pecahproduk = $ambilproduk->fetch_assoc()){
    ?>


<tr>
    <td><?php echo $nomor; ?></td>
    <td><?php echo $pecahproduk['nama_produk'] ?></td>
    <td><?php echo $pecahproduk['harga_produk'] ?></td>
    <td><img src="fotoproduk"><?php echo $pecahproduk['foto_produk'] ?></td>
    <td><?php echo $pecahproduk['deskripsi_produk'] ?></td>
    <td>x</td>
</tr>

<?php
	$nomor++; 
		}
	?>

<a href="index.php?hal=tambahproduk" class="btn btn-warning btn-lg">TAMBAH PRODUK</a>

</tbody>
</body>
</html>