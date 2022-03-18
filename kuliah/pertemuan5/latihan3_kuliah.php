<?php 
$mahasiswa = [
  ["Gloria Rustama", "213040067", "gloriarustama@gmail.com", "Teknik Informatika"],
  ["Putri Legiana", "213040039", "putrilegiani@gmail.com", "Teknik Informatika"],
  ["Najwa", "213040041", "najwa@gmail.com", "Teknik Informatika"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 3</title>
</head>
<body>
  <?php foreach($mahasiswa as $mhs) { ?>
  <ul>
    <li>Nama: <?php echo $mhs[0] ?></li>
    <li>NPM: <?php echo $mhs[1] ?></li>
    <li>Email: <?php echo $mhs[2] ?></li>
    <li>Jurusan:  <?php echo $mhs[3] ?></li>
  </ul>
  <?php } ?>
</body>
</html>