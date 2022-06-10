<?php 
  session_start();
  include 'db.php';

  $produk = mysqli_query($conn, "SELECT * FROM product WHERE product_id = '".$_GET['id']."'");
  $p = mysqli_fetch_object($produk);
  
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
  <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="stylesheet.css?=1">
  <title>Ni-Ke | Edit Product</title>
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
    <h3>Edit Product</h3>
    <div class="box">
      <form action="" method="POST" enctype="multipart/form-data">
        <select class="input-control" name="category" required>
          <option value="">---Pilih---</option>
          <?php 
            $category = mysqli_query($conn, "SELECT * FROM category ORDER BY category_id DESC");
            while($a = mysqli_fetch_array($category)) {
          ?>
            <option value="<?= $a['category_id'] ?>" <?= ($a['category_id'] == $p->category_id)? 'selected':''; ?>><?= $a['category_name']; ?></option>
          <?php } ?>
        </select>
        <br />
        <input type="text" name="nama" class="input-control" placeholder="Nama Produk" value="<?= $p->product_name ?>" required><br />
        <input type="text" name="harga" class="input-control" placeholder="Harga" value="<?= $p->product_price ?>" required><br />

        <img src="img/<?= $p->product_image ?>" width="100px" class="input-control">
        <input type="hidden" name="foto" value="<?= $p->product_image ?>">
        <input type="file" name="gambar" class="input-control"><br />
        <textarea name="deskripsi" class="input-control" placeholder="Deskripsi"><?= $p->product_description ?></textarea><br />
        <select class="input-control" name="status">
          <option value="">---Pilih---</option>
          <option value="1" <?= ($p->product_status == 1)? 'selected':''; ?> >Aktif</option>
          <option value="0" <?= ($p->product_status == 0)? 'selected':''; ?>>Tidak Aktif</option>
        </select>
        <input type="submit" name="submit" value="Ubah" class="btn btn-info">
      </form>
        <?php
          if(isset($_POST['submit'])) {

          // data inputan dari form
            $category   = $_POST['category'];
            $nama       = $_POST['nama'];
            $harga      = $_POST['harga'];
            $deskripsi  = $_POST['deskripsi'];
            $status     = $_POST['status'];
            $foto       = $_POST['foto'];

          // data gambar yang baru
            $filename = $_FILES['gambar']['name'];
            $tmp_name = $_FILES['gambar']['tmp_name'];

            $type1 = explode('.', $filename);
            $type2 = $type1[1];

            $newname = 'produk'.time().'.'.$type2;

            $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

          // jika admin ganti gambar 
            if($filename != '') {
              if(!in_array($type2, $tipe_diizinkan)) {
                echo "<script>alert('Format file tidak diizinkan!')</script>";
              }else{
                unlink('./img/'.$foto);
                move_uploaded_file($tmp_name, './img/'.$newname);
                $namagambar = $newname;
              }
            }else{
              // jika admin tidak ganti gambar
              $namagambar = $foto;
            }
            $update = mysqli_query($conn, "UPDATE product SET
                                    category_id = '".$category."',
                                    product_name = '".$nama."',
                                    product_price = '".$harga."',
                                    product_description = '".$deskripsi."',
                                    product_image = '".$namagambar."',
                                    product_status = '".$status."'
                                    WHERE product_id = '".$p->product_id."'
                                  ");

            if($update) {
              echo '<script>alert("Ubah Data Berhasil")</script>';
              echo '<script>document.location.href="produk.php"</script>';
            } else {
              echo 'Gagal'.mysqli_error($conn);
            }
          }
          ?>
    </div>
  </div>
</div>
  <script>
    CKEDITOR.replace( 'deskripsi' );
  </script>
</body>
</html>