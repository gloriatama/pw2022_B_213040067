<?php 
  session_start();
  include 'db.php';
  if($_SESSION['status_login'] != true) {
    echo '<script>document.location.href="login.php"</script>';
  }
  $query = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = '".$_SESSION['id']."' ");
  $d = mysqli_fetch_object($query);
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
  <title>Ni-Ke | Profil</title>
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
    <h2>Profil Anda</h2>
    <div class="box">
      <form action="" method="POST">
        <input type="text" name="nama" placeholder="Full Name" class="input-control" value="<?= $d->admin_nama ?>" required><br />
        <input type="text" name="user" placeholder="Username" class="input-control" value="<?= $d ->username ?>" required><br />
        <input type="text" name="telp" placeholder="No. Telp" class="input-control" value="<?= $d->admin_telp ?>" required><br />
        <input type="email" name="email" placeholder="Email" class="input-control" value="<?= $d->admin_email ?>" required><br />
        <input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?= $d->admin_alamat ?>" required><br />
        <input type="submit" name="submit" value="Ubah Profil" class="btn btn-info">

      </form>
      <?php 
        if(isset($_POST['submit'])) {
          $nama   = $_POST['nama'];
          $user   = $_POST['user'];
          $telp   = $_POST['telp'];
          $email  = $_POST['email'];
          $alamat = $_POST['alamat'];

          $update = mysqli_query($conn, "UPDATE admin SET 
                          admin_nama = '".$nama."',
                          username = '".$user."',
                          admin_telp = '".$telp."',
                          admin_email = '".$email."',
                          admin_alamat = '".$alamat."'
                          WHERE admin_id = '".$d->admin_id."'
                          ");
          if($update) {
            echo '<script>alert("Ubah data berhasil!")</script>';
            echo '<script>document.location.href="profil.php"</script>';
          } else {
            echo 'Gagal '. mysqli_error($conn);
          }
        }
      ?>
    </div>

    <h2>Ubah Password</h2>
    <div class="box">
      <form action="" method="POST">
        <input type="password" name="pass1" placeholder="Password Baru" class="input-control" required><br />
        <input type="password" name="pass2" placeholder="Konfirmasi Password Baru" class="input-control" required><br />
        <input type="submit" name="ubh_pass" value="Ubah Password" class="btn btn-info">

      </form>
      <?php 
        if(isset($_POST['ubh_pass'])) {
          $pass1   = $_POST['pass1'];
          $pass2   = $_POST['pass2'];

          if($pass1 != $pass2) {
            echo '<script>alert("Password Anda tidak sesuai!")</script>';
          } else {
            $ubhpass = mysqli_query($conn, "UPDATE admin SET 
                          password = '".MD5($pass1)."'
                          WHERE admin_id = '".$d->admin_id."'
                          ");

            if($ubhpass) {
              echo '<script>alert("Ubah password berhasil!")</script>';
              echo '<script>document.location.href="profil.php"</script>';
            } else {
              echo 'Gagal'. mysqli_error($conn);
            }
          }
        }
      ?>
    </div>
  </div>
</div>

</body>
</html>