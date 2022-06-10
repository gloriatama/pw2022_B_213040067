<?php 
require 'db.php';

if(isset($_POST['register'])) {
  if(registrasi($_POST) > 0) {
    echo "<script>
            alert('Username baru berhasil ditambahkan!');
            document.location.href = 'register.php';
          </script>";
  }else{
    echo mysqli_error($conn);
  }
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
  <i class="fa-solid fa-arrow-left"></i>

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="stylesheet.css?x=1">
  <title>Ni-Ke | Register</title>
</head>

<body>
  <div class="login-page">
    <div class="register">
      <a href="login.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon"><path d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z"/></svg></a>
      <h2 class="title-login">REGISTER</h2>
      <form action="" method="POST" autocomplete="off">
        <ul>
          <li class="form">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" autofocus autocomplete="off" required>
          </li>

          <li class="form">
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" id="fullname" required>
          </li>

          <li class="form">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" autofocus autocomplete="off" required>
          </li>

          <li class="form">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
          </li>

          <li class="form">
            <label for="verify">Confirm Password</label>
            <input type="password" name="verify" id="verify" required>
          </li>

            <br>
            <input type="submit" name="register" class="btn btn-primary button-login" value="Register">

        </ul>
      </form>
    </div>
  </div>
</body>

</html>