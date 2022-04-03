<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["judul"]) || 
    !isset($_GET["pengarang"]) || 
    !isset($_GET["tebal"]) ||
    !isset($_GET["tahun_terbit"]) || 
    !isset($_GET["gambar"])) {
      // redirect
      header("Location: latihan1.php");
      exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Buku</title>
</head>
<body>
  <ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>" width="80px"></li>
    <li><?= $_GET["judul"]; ?></li>
    <li><?= $_GET["pengarang"]; ?></li>
    <li><?= $_GET["tebal"]; ?></li>
    <li><?= $_GET["tahun_terbit"]; ?></li>
  </ul>
  <a href="latihan1.php">Kembali Ke Daftar Buku</a>
</body>
</html>