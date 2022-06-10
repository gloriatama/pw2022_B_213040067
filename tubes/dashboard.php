<?php 
session_start();
if($_SESSION['status_login'] != true){
  echo '<script>document.location.href="login.php"</script>';
}

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
  <i class="fa-solid fa-user-large"></i>

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="stylesheet.css?x=1">
  <title>Ni-Ke</title>
</head>
<body>
  <!-- Nav Bar -->
  <nav class="navbar navbar-expand-lg nav">
  <div class="container-fluid">
    <a class="navbar-brand my-0" href="dashboard.php">Ni-Ke</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profil.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="category.php">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produk.php">Produk</a>
        </li>
      </ul>
      <a href="logout.php"><button class="btn btn-outline-success" type="submit">Log Out</button></a>
    </div>
  </div>
</nav>
  <!-- End Nav Bar -->

  <!-- Dashboard -->
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="box">
      <h3>Selamat Datang, <?= $_SESSION['admin_g']->admin_nama ?> di Toko Ni-Ke</h3>
    </div>
    <small>Copyright &copy; 2020 - NiKe.</small>
  </div>
  </div>
  
</body>
</html>