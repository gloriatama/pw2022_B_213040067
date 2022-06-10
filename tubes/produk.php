<?php 
  error_reporting(0);
  session_start();
  require 'db.php';
  if($_SESSION['status_login'] != true) {
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
  <link rel="stylesheet" type="text/css" href="stylesheet.css?=1">
  <title>Ni-Ke | Product</title>
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
      <form action="produk.php" class="d-flex">
        <input type="text" name="search" placeholder="Search" class="form-control me-2"  value="<?= $_GET['search'] ?>" >
        <input type="hidden" name="cate" value="<?= $_GET['cate'] ?>">
        <input type="submit" name="cari" value="Search" class="btn btn-outline-success">
      </form>
      <a href="logout.php"><button class="btn btn-outline-success" type="submit">Log Out</button></a>
    </div>
  </div>
</nav>
  <!-- End Nav Bar -->

  <!-- Product Section -->
  <div class="container-fluid pt-3" style="width: 98%;">
  <table class="table">
    <a href="tambah_produk.php"><input type="submit" value="Tambah Produk" class="btn btn-outline-success"></a>
  <thead>
    <tr col-8>
      <th scope="col">No.</th>
      <th scope="col">Category</th>
      <th scope="col" class="colom">Nama Produk</th>
      <th scope="col" class="colom">Harga</th>
      <th scope="col" class="colom">Deskripsi</th>
      <th scope="col" class="colom">Gambar</th>
      <th scope="col" class="colom">Status</th>
      <th scope="col" class="colom">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    if($_GET['search'] != '' || $_GET['cate'] != '' ){
      $where = "AND product_name LIKE '%".$_GET['search']."%' AND category_id LIKE '%".$_GET['cate']."%' ";
    }
    $no = 1;
    $produk = mysqli_query($conn, "SELECT * FROM product LEFT JOIN category USING (category_id) WHERE product_status = 1 $where ORDER BY product_id DESC");
    if(mysqli_num_rows($produk) > 0) {
    while($row = mysqli_fetch_array($produk)) {
    ?>
    <tr>
      <th scope="row"><?= $no++; ?></th>
      <td><?= $row['category_name']; ?></td>
      <td><?= $row['product_name']; ?></td>
      <td>Rp. <?= number_format($row['product_price']) ?></td>
      <td><?= $row['product_description']; ?></td>
      <td><a href="img/<?= $row['product_image'] ?>"><img src="img/<?= $row['product_image'] ?>" width="100px"></a></td>
      <td><?= ($row['product_status'] == 0)? 'Tidak Aktif':'Aktif'; ?></td>
      <td>
        <a href="edit-produk.php?id=<?= $row['product_id'] ?>" class="btn btn-info mb-1">Edit</a>
        <a href="delete.php?idpro=<?= $row['product_id']  ?>" onclick="return confirm ('Anda Yakin?')" class="btn btn-info">Delete</a>
      </td>
    </tr>
    <?php }} else{ ?>
      <tr>
        <td colspan="8">Tidak ada data</td>
      </tr>
      <?php } ?>
  </tbody>
</table>
  </div>

</body>
</html>