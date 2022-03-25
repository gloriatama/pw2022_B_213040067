<?php 
// $mahasiswa = [
//   ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id", "Teknik Informatika"],
//   ["Doddy Ferdiansyah", "033040001", "doody@gmail.com", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
  ],
  [
    "judul" => "Slaughterhouse-Five", 
    "pengarang" => "Kurt Vonnegut",
    "tebal" => "412 halaman",
    "tahun_terbit" => "2004",
    "gambar" => "slaughterhouse.jpg"
  ],
  [
    "judul" => "Wuthering Heights", 
    "pengarang" => "Emily Bronte",
    "tebal" => "324 halaman",
    "tahun_terbit" => "1847",
    "gambar" => "WUTHERING.jpg"
  ],
  [
    "judul" => "Fahrenheit 451", 
    "pengarang" => "Ray Bradbury",
    "tebal" => "316 halaman",
    "tahun_terbit" => "1953",
    "gambar" => "fahrenheit.jpg"
  ],
  [
    "judul" => "Uncanny Valley", 
    "pengarang" => "Anna Wiener",
    "tebal" => "386 halaman",
    "tahun_terbit" => "1970",
    "gambar" => "uncany.jpg"
  ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

  <?php foreach($buku as $bk) : ?>
    <ul>
      <li>
        <img src="img/<?= $bk["gambar"]; ?>" width="60px">
      </li>
      <li>Judul : <?= $bk["judul"]; ?></li>
      <li>Pengarang : <?= $bk["pengarang"]; ?></li>
      <li>Tebal : <?= $bk["tebal"]; ?></li>
      <li>Tahun terbit : <?= $bk["tahun_terbit"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>
</html>

