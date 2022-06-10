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
  <title>Ni-Ke | Log In</title>
</head>

<body>
  <div class="login-page d-flex justify-content-center align-items-center">
    <div class="login-reg">
      <a href="./"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon"><path d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z"/></svg></a>
      <h2 class="title-login">LOGIN</h2>
      <form action="" method="POST">
        <ul>
          <li class="form">
            <label for="user">Username</label>
            <input type="text" name="user" id="user" autofocus autocomplete="off" required>
          </li>
          <li class="form">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
          </li>
          <li class="remember">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember Me</label>
          </li>
          <li>
            <button type="submit" class="btn btn-primary" name="submit" value="Login">Log In</button>
          </li>
          <li>
            <p>Don't have an account? <a href="register.php">Register</a></p>
          </li>
        </ul>
      </form>
      <?php 
        if(isset($_POST['submit'])) {
          session_start();
          include 'db.php';

          $user       = mysqli_real_escape_string($conn, $_POST['user']);
          $password   = mysqli_real_escape_string($conn, $_POST['password']);

          $cek = mysqli_query($conn, "SELECT * FROM admin WHERE username = '".$user."' AND password = '".MD5($password)."'");
          if(mysqli_num_rows($cek) > 0) {
            $d = mysqli_fetch_object($cek);
            $_SESSION['status_login'] = true;
            $_SESSION['admin_g'] = $d;
            $_SESSION['id'] = $d->admin_id;
            echo '<script>document.location.href="dashboard.php"</script>';
          }else{
            echo '<script>alert("Username atau Password Anda salah!")</script>';
          }
        }
      ?>
    </div>
  </div>
</body>

</html>