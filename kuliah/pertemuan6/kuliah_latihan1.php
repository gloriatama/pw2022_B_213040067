<?php 
// Array Associative 
// Array yang indexnya berupa string yang berpasangan / berasosiasi dengan nilainya

$mahasiswa = [
  [
    "nama" => "Gloria Rustama", 
    "npm" => "213040067", 
    "email" => "gloriarustama@gmail.com", 
    "jurusan" => "Teknik Informatika"
  ],
  [
    "nama" =>"Putri Legiana", 
    "npm" => "213040039", 
    "email" => "putrilegiani@gmail.com", 
    "jurusan" => "Teknik Informatika"],
  [
    "nama" => "Najwa", 
    "npm" => "213040041", 
    "email" => "najwa@gmail.com", 
    "jurusan" => "Teknik Informatika",
  ]
];

// var_dump($mahasiswa[2]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
  <ul>
    <li>Nama: <?= $mhs["nama"] ?></li>
    <li>NPM: <?php echo $mhs["npm"] ?></li>
    <li>Email: <?php echo $mhs["email"] ?></li>
    <li>Jurusan:  <?php echo $mhs["jurusan"] ?></li>
  </ul>
<?php } ?>
