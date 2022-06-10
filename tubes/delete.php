<?php 
include 'db.php';

if(isset($_GET['idc'])) {
  $delete = mysqli_query($conn, "DELETE FROM category WHERE category_id = '".$_GET['idc']."'");
  echo '<script>document.location.href="category.php"</script>';
}

if(isset($_GET['idpro'])) {
  $produk = mysqli_query($conn, "SELECT product_image FROM product WHERE product_id = '".$_GET['idpro']."'");
  $p = mysqli_fetch_object($produk);

  unlink('./img/'.$p->product_image);

  $delete = mysqli_query($conn, "DELETE FROM product WHERE product_id = '".$_GET['idpro']."'");
  echo '<script>document.location.href="produk.php"</script>';
}


?>