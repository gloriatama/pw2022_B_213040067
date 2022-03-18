<?php 
// Array Multidimensi
// Array di dalam array
$myArray = [100, "Gloria", true, [1,2,3]];
echo $myArray[3][1];
echo "<hr>";

$angka = [
  [1,2,3], 
  [4,5,6], 
  [7,[8],9]
];
echo $angka[2][1][0];


?>