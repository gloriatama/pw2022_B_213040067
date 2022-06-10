<?php 
include 'db.php';
$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_alamat FROM admin WHERE admin_id = 1");
$k = mysqli_fetch_object($kontak);

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
  <i class="fa-solid fa-align-justify"></i>

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="stylesheet.css?x=1">
  <title>Ni-Ke</title>
</head>
<body>
  <!-- Nav Bar -->
  <nav class="navbar navbar-expand-lg nav" style="color: #000;">
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
      <form action="product.php" class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <a href="login.php"><button class="btn btn-outline-success" type="submit">Log In</button></a>
    </div>
  </div>
</nav>
  <!-- End Nav Bar -->

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid ms-5 ps-5">
    <div class="container bd-grid d-flex justify-content-evenly ms-5">
      <div class="home">
        <div class="shape" style="margin-left:30px;"></div>
        <img src="img/bg.png" class="home-img">
      </div>

      <div class="home-data">
        <h1 class="home-title">
          Find Your Shoes <br/>
          Your Perfect Shoes
        </h1>
        <p class="home-script">Your Size•Your Design•Your Style</p>
        <a href="product.php"><button class="btn btn-outline-success" type="submit">Shop Now</button></a>
      </div>
    </div>
  </div>
  <!-- End Jumbotron -->

  <!-- Category Section -->
  <div class="category_container">
    <div class="container">
      <h2 class="justify-content-center text-center">Category</h2>
    <div class="row d-flex justify-content-evenly">
      <div class="box" style="margin: 15px;">
        <?php 
          $category = mysqli_query($conn, "SELECT * FROM category ORDER BY category_id DESC"); 
          if(mysqli_num_rows($category) > 0){
            while($c = mysqli_fetch_array($category)){
        ?>
        <a href="product.php?cate=<?= $c['category_id'] ?>">
          <div class="col-5">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96zM416 352H32C14.33 352 0 337.7 0 320C0 302.3 14.33 288 32 288H416C433.7 288 448 302.3 448 320C448 337.7 433.7 352 416 352zM0 192C0 174.3 14.33 160 32 160H416C433.7 160 448 174.3 448 192C448 209.7 433.7 224 416 224H32C14.33 224 0 209.7 0 192zM416 480H32C14.33 480 0 465.7 0 448C0 430.3 14.33 416 32 416H416C433.7 416 448 430.3 448 448C448 465.7 433.7 480 416 480z"/></svg>
            <p><?= $c['category_name']; ?></p>
          </div>
          <?php }}else{ ?>
          <p>Category tidak Ada</p>
          <?php } ?>
      </div>
      </div>
    </div>
  </div>

  <!-- Best Seller -->
  <div class="category_container">
    <div class="container">
      <h2 class="justify-content-center text-center">Product Best Seller</h2>
    <div class="row d-flex justify-content-evenly">
      <div class="box">
        <?php 
          $produk = mysqli_query($conn, "SELECT * FROM product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8");
          if(mysqli_num_rows($produk) > 0){
            while($p = mysqli_fetch_array($produk)){
        ?>
        <a href="detail-product.php?id=<?= $p['product_id'] ?>">
          <div class="col-4">
            <img src="img/<?= $p['product_image'] ?>">
            <p class="name"><?= $p['product_name'] ?></p>
            <p class="price">Price: Rp. <?= number_format($p['product_price']); ?></p>
          </div>
        </a>
        <?php }}else{ ?>
            <p>Product Tidak Ada</p>
          <?php } ?>
      </div>
      </div>
    </div>
    <br>
    <br>
  </div>

  <!-- Footer -->
  <div class="footer text-center">
    <div class="small-container p-5">
      <h4>Alamat</h4>
      <p><?= $k->admin_alamat; ?></p>
      <h4>Email</h4>
      <p><?= $k->admin_email; ?></p>
      <h4>No. Hp</h4>
      <p><?= $k->admin_telp; ?></p>
      <small>Copyright &copy; 2020 - NiKe.</small>
    </div>
  </div>

</body>
</html>