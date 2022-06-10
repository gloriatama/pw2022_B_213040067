<?php 
  session_start();
  require 'db.php';
  if($_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>';
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
  <link rel="stylesheet" type="text/css" href="stylesheet.css?=1">
  <title>Ni-Ke | Category</title>
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
      <form class="d-flex">
        <input type="text" placeholder="Search" class="form-control me-2">
        <input type="submit" value="Search" class="btn btn-outline-success">
      </form>
      <a href="logout.php"><button class="btn btn-outline-success" type="submit">Log Out</button></a>
    </div>
  </div>
</nav>
  <!-- End Nav Bar -->

  <!-- Category Section -->
  <div class="container-fluid pt-3" style="width: 98%;">
  <table class="table">
    <a href="tambah_category.php"><input type="submit" value="Tambah Category" class="btn btn-outline-success"></a>
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Category</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no = 1;
    $category = mysqli_query($conn, "SELECT * FROM category ORDER BY category_id DESC");
    if(mysqli_num_rows($category) > 0){
    while($row = mysqli_fetch_array($category)) {
    ?>
    <tr>
      <th scope="row"><?= $no++; ?></th>
      <td><?= $row['category_name']; ?></td>
      <td>
        <a href="edit-category.php?id=<?= $row['category_id'] ?>" class="btn btn-info">Edit</a>
        <a href="delete.php?idc=<?= $row['category_id'] ?>" onclick="return confirm('Anda Yakin?')" class="btn btn-info">Delete</a>
      </td>
    </tr>
    <?php }}else{ ?>
      <tr>
        <td>Tidak ada data</td>
      </tr>
    <?php } ?>
  </tbody>
</table>
  </div>

</body>
</html>