<?php 
// $_GET
$buku = [
  [
    "judul" => "The Lord of the Rings", 
    "pengarang" => "J.R.R. Tolkien",
    "tebal" => "512 halaman",
    "tahun_terbit" => "2002",
    "gambar" => "lord.jpg"
  ],
  [
    "judul" => "The Kite Runner", 
    "pengarang" => "Khaled Hosseini",
    "tebal" => "317 halaman",
    "tahun_terbit" => "2003",
    "gambar" => "kite.jpg"
  ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>
<body>
  <h1>Daftar Buku</h1>
  <ul>
    <?php foreach( $buku as $bk ) : ?>
      <li>
        <a href="latihan2.php?judul=<?= $bk["judul"]; ?>&pengarang=<?= $bk["pengarang"]; ?>&tebal=<?= $bk["tebal"]; ?>&tahun_terbit=<?= $bk["tahun_terbit"]; ?>&gambar=<?= $bk["gambar"]; ?>"><?= $bk["judul"]; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>

