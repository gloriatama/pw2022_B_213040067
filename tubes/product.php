<?php 
error_reporting(0);
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

  <!-- Boostrap Icon -->
  <i class="fa-solid fa-shoe-prints"></i>

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <title>Ni-Ke</title>
</head>
<body>
  <!-- Nav Bar -->
  <nav class="navbar navbar-expand-lg nav">
  <div class="container-fluid">
    <a class="navbar-brand my-0" href="index.php">Ni-Ke</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product.php">Produk</a>
        </li>
      </ul>
      <form action="product.php" class="d-flex">
        <input type="text" name="search" placeholder="Search" class="form-control me-2" value="<?= $_GET['search'] ?>" autocomplete="off" autofocus>
        <input type="hidden" name="cate" value="<?= $_GET['cate'] ?>">
        <input type="submit" name="cari" value="Search" class="btn btn-outline-success">
      </form>
      <a href="login.php"><button class="btn btn-outline-success" type="submit">Log In</button></a>
    </div>
  </div>
</nav>
  <!-- End Nav Bar -->

  <!-- Product -->
  <div class="category_container">
    <div class="container">
      <h2 class="justify-content-center text-center">Product</h2>
    <div class="row d-flex justify-content-evenly">
      <div class="box">
        <?php
          if($_GET['search'] != '' || $_GET['cate'] != '' ){
            $where = "AND product_name LIKE '%".$_GET['search']."%' AND category_id LIKE '%".$_GET['cate']."%' ";
          }
          $produk = mysqli_query($conn, "SELECT * FROM product WHERE product_status = 1 $where ORDER BY product_id DESC");
          if(mysqli_num_rows($produk) > 0){
            while($p = mysqli_fetch_array($produk)){
        ?>
        <a href="detail-product.php?id=<?= $p['product_id'] ?>">
          <div class="col-4">
            <img src="img/<?= $p['product_image'] ?>">
            <p><?= $p['product_name'] ?></p>
            <p>Price: Rp. <?= number_format($p['product_price']); ?></p>
          </div>
          </a>
        <?php }}else{ ?>
            <p>Product Tidak Ada</p>
          <?php } ?>
      </div>
      </div>
    </div>
  </div>

</body>
</html>