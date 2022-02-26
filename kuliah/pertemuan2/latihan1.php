<?php 

//Pertemuan 2, belajar sintaks PHP
// NILAI 
// ANGKA (interger), tulisan string), true/false (boolean)
echo 10; //integer
echo '<br>';
echo 'Gloria'; //string
echo '<br>';
echo false; //boolean null
echo '<hr>';

// VARIABEL 
// Tempat menampung NILAI 
// awali dengan tanda $, nama nya bebas
// boleh mengandung angka, tidak boleh diawali angka
// tidak boleh ada spasi, diganti dengan underscore
$nama = 'Gloria';
echo $nama;
echo '<hr>';

// STRING
// '',"
$hari = 'Sabtu';
echo $hari;
echo "<br>";
echo 'Sandhika: "Hallo, Semua!"';
echo '<br>';
// Escape Character
// \
echo 'Sandhika: "Selamat hari jum\'at"';
echo '<br>';
echo "Sandhika: \"Selamat hari jum'at\"";
echo '<br>';
// INTERPOLASI
// Mencetak langsung isi variabel
// hanya bisa oleh ""
echo "Halo, nama saya $nama";
echo '<br>';
echo 'Halo, nama saya $nama';
echo '<hr>';

// Concat / Penggabung String
// .
$nama_depan = 'Gloria';
$nama_belakang = 'Rustama';
echo $nama_depan . " " . $nama_belakang;
echo '<br>';
echo 'Sandhika: "Selamat ' . "hari Jum'at\"";
echo '<hr>';
// OPERATOR 
// Aritmatika
// +, -, *, /, % (modulo / modulus / sisa bagi)
echo 1 + 1;
echo '<br>';
echo 'Hasil dari 1+1 adalah' . " " . 1 + 1;
echo '<br>';
echo 1 + 2 * 3 - 4; //KaBaTaKu
echo '<br>';
echo 10 % 5;
echo '<br>';
echo 1 + '1' + 1;
echo '<hr>';

// Perbandingan 
// <, >, <=, >=, ==, !=
echo 1 < 5;
echo '<br>';
echo 1 == 1;
echo '<hr>';

// Identitas / Strict Comparison
// ===, !==
echo 1 === "1";

// Increment / Decrement
// tambah / kurang 1
// ++, --
$x = 10;
echo ++$x;
echo '<br>';
echo $x++;

?>