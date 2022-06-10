<?php 
error_reporting(0);
include 'db.php';

$produk = mysqli_query($conn, "SELECT * FROM product WHERE product_id = '".$_GET['id']."'");
$p = mysqli_fetch_object($produk);
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
  <i class="fa-solid fa-cart-shopping"></i>

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="stylesheet.css?x=1">
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
        <input type="text" name="search" placeholder="Search" class="form-control me-2" value="<?= $_GET['search'] ?>">
        <input type="hidden" name="cate" value="<?= $_GET['cate'] ?>">
        <input type="submit" name="cari" value="Search" class="btn btn-outline-success">
      </form>
      <a href="login.php"><button class="btn btn-outline-success" type="submit">Log In</button></a>
    </div>
  </div>
</nav>
  <!-- End Nav Bar -->

  <!-- Detail Product -->
  <div class="detail-product">
    <div class="container-small px-5 py-4">
      <h2>Detail Product</h2>
      <div class="box justify-content-center text-center">
          <div class="col-2">
            <img src="img/<?= $p->product_image ?>" width="100%">
          </div>
          <div class="col-2">
            <h4><?= $p->product_name; ?></h4>
            <h4>Rp. <?= number_format($p->product_price); ?></h4>
            <p>Deskripsi: <br />
              <?= $p->product_description; ?>
            </p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z"/></svg>
            <a href="#"><button class="btn btn-outline-success" type="submit">Add Cart</button></a>
          </div>
        </div>
    </div>
  </div>
  <!-- End Detail Product -->

</body>
</html>