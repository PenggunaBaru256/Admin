<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>TAMBAH PELANGGAN</h2>
    <br />
    <form method ="POST">
        
   <div class="from-group">
    <label>NAMA Pelanggan</label>
    <input type="text" name="nama" class="form-control">
</div>

<div class="from-group">
    <label> email</label>
    <input type="number" name="email" class="form-control">
</div>

<div class="from-group">
    <label>NO HP</label>
    <input type="number" name="hp" class="form-control">
</div>

<div class="from-group">
    <label>Alamat</label>
    <input type="number" name="alamat" class="form-control">
</div>

    <input type="submit" name="simpan" value="simpan" class="btn btn-primary btn-lg"></input>
</from>

<?php
  if (isset($_POST["simpan"])) {
      $disimpen = $koneksi->query("INSERT INTO pelanggan 
            (nama_pelanggan,email,nomor_hp,alamat)
            VALUES('$_POST[nama]','$_POST[email]','$_POST[hp]','$_POST[alamat]',)
    ");
   if($disimpan){echo '<div class="alert alert-info">DATA TERSIMPAN</div>';}
   else{ echo '<div class="alert alert-info">DATA TIDAK TERSIMPAN</div>'; }
}

?>




</body>
</html>