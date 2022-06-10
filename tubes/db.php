<?php 
  $conn = mysqli_connect('localhost', 'root', '', 'pw2022_b_213040067') or die('KONEKSI GAGAL');




function registrasi($data) {
  $conn = mysqli_connect('localhost', 'root', '', 'pw2022_b_213040067') or die('KONEKSI GAGAL');
  $username = htmlspecialchars(strtolower($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $verify = mysqli_real_escape_string($conn, $data['verify']);

  // Jika Username atau password kosong
  if(empty($username) || empty($password) || empty($verify)) {
    echo "<script>
            alert('Username / Password tidak boleh kosong!');
            document.location.href = 'register.php';
          </script>";
    return false;
  }
  // Jika Username sudah ada
  if(mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'")) {
    echo "<script>
            alert('Username sudah terdaftar!');
            document.location.href = 'register.php';
          </script>";
    return false;
  }
  // Jika konfirmasi password tidak sesuai
  if($password !== $verify) {
    echo "<script>
            alert('Konfirmasi password tidak sesuai!');
            document.location.href = 'register.php';
          </script>";
    return false;
  }
  // Jika password > 5 digit
  if(strlen($password) < 5) {
    echo "<script>
            alert('Password Anda terlalu pendek!');
            document.location.href = 'register.php';
          </script>";
    return false;
  }
  
  // menambahkan user baru ke database
  mysqli_query($conn, "INSERT INTO admin VALUES('', '$username', '$password')");
  return mysqli_affected_rows($conn);
}
  

?>