<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>TAMBAH PRODUK</h2>
    <br />
<form method ="POST" anctype="multipart">
   <div class="from-group">
    <label>NAMA PRODUK</label>
    <input type="text" name="namaproduk" class="form-control">
</div>
<div class="from-group">
    <label>HARGA</label>
    <input type="number" name="hargaproduk" class="form-control">
</div>

<div class="from-group">
    <label>FOTO PRODUK</label>
    <input type="file" name="fotoproduk" class="form-control">
</div>

<div class="from-group">
    <label>DESKRIPSI</label>
    <textarea name="deskripsiproduk" rows="5" class="form-control"></textarea>  
</div>
<input type="submit" name="simpan" value="simpan" class="btn btn-primary btn-lg"></input>

<?php
if (isset($_POST["simpan"])) {
    $namap = $_POST["namaproduk"];
    $harga = $_POST["hargaproduk"];
    $deskripsi = $_POST["deskripsiproduk"];

    $nama = $_FILES["fotoproduk"]["name"];
    $lokasi = $_FILES["fotoproduk"]["tmp_name"];
    move_uploaded_file($lokasi, "../foto/". $nama);
    $disimpen = $koneksi->query("INSERT INTO produk 
            (nama_produk,harga_produk,foto_produk,deskripsi_produk)
            VALUES('$namap','$harga','$nama','$deskripsi')");	

    if($disimpen){echo '<div class="alert alert-info">DATA TERSIMPAN</div>';}
    else{ echo '<div class="alert alert-info">DATA TIDAK TERSIMPAN</div>'; }
    #echo '<meta http-equiv="refresh" content="1;index.php?hal=produk">';
}



?>
</body>
</html>