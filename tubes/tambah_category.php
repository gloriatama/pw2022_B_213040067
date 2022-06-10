<?php 
  include 'db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
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
  <title>Ni-Ke | Add Category</title>
</head>
<body>
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

<!-- Profil -->
<div class="profil">
  <div class="container-fluid">
    <h3>Add Category</h3>
    <div class="box">
      <form action="" method="POST">
        <input type="text" name="nama" placeholder="Category Name" class="input-control" required>
        <br />
        <input type="submit" name="submit" value="Tambah" class="btn btn-info">
        <?php
          if(isset($_POST['submit'])) {
            $nama = ucwords($_POST['nama']);
            $insert = mysqli_query($conn, "INSERT INTO category VALUES (
            null, '".$nama."')");
            if($insert) {
              echo "<script>
                      alert('Tambah Category berhasil!');
                      document.location.href = 'category.php';
                     </script>";
            }else{
              echo 'gagal' .mysqli_error($conn);
            }
          }
          ?>
      </form>
    </div>
  </div>
</div>

</body>
</html>