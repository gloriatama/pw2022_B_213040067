<?php 
  require 'db.php';
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
  <link rel="stylesheet" type="text/css" href="stylesheet.css?x=1">
  <title>Ni-Ke | Add Product</title>
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

<!-- Tambah Produk -->
<div class="profil">
<div class="container-fluid">
    <h3>Add Product</h3>
    <div class="box">
      <form action="" method="POST" enctype="multipart/form-data">
        <select class="input-control" name="category" required>
          <option >--Pilih--</option>
            <?php 
            $category = mysqli_query($conn, "SELECT * FROM category ORDER BY category_id DESC");
            while($a = mysqli_fetch_array($category)) {
            ?>
          <option value="<?= $a['category_id'] ?>"><?= $a['category_name']; ?></option>
          <?php } ?>
          </select><br />
        <input type="text" name="nama" placeholder="Product Name" class="input-control" required><br />
        <input type="text" name="harga" class="input-control" placeholder="Harga" required><br />
        <input type="file" name="gambar" class="input-control" required><br />
        <textarea name="deskripsi" class="input-control" placeholder="Deskripsi" style="margin: 15px;"></textarea><br />
        <select class="input-control" name="status">
          <option value="">--Pilih--</option>
          <option value="1">Aktif</option>
          <option value="0">Tidak Aktif</option>
        </select><br />
        <input type="submit" name="submit" value="Tambah" class="btn btn-info">
        <?php
          if(isset($_POST['submit'])) {
            // print_r($_FILES['gambar']);
            // menampung inputan dari form
              $category   = $_POST['category'];
              $nama       = $_POST['nama'];
              $harga      = $_POST['harga'];
              $deskripsi  = $_POST['deskripsi'];
              $status     = $_POST['status'];

            // menampung data file yang diupload 
              $filename = $_FILES['gambar']['name'];
              $tmp_name = $_FILES['gambar']['tmp_name'];

              $type1 = explode('.', $filename);
              $type2 = $type1[1];

              $newname = 'produk'.time().'.'.$type2;

            // menampung data format yang diizinkan 
              $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

            // validasi format file
              if(!in_array($type2, $tipe_diizinkan)) {
                // jika format file tidak ada didalam tipe diizinkan
                echo '<script>alert("Format file tidak diizinkan!")</script>';
              }else{
                // Jika format file sesuai dengan yang ada di dalam array tipe diizinkan
                // proses upload file sekaligus insert ke database
                move_uploaded_file($tmp_name, './img/'.$newname);

                $insert = mysqli_query($conn, "INSERT INTO product VALUES (
                            null, 
                            '".$category."',
                            '".$nama."',
                            '".$harga."',
                            '".$deskripsi."',
                            '".$newname."',
                            '".$status."'
                          )");

                if($insert) {
                  echo '<script>alert("Simpan Data Berhasil")</script>';
                  echo '<script>document.location.href="produk.php"</script>';
                }else{
                  echo 'gagal' . mysqli_error($conn);
                  }
                }
          }
          ?>
      </form>
    </div>
  </div>
  
</div>
  <script>
    CKEDITOR.replace( 'deskripsi' );
  </script>
</body>
</html>