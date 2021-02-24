<?php
require "functions.php";

if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "
      <script>
        alert ('User berhasil ditambahkan');
      </script>
    ";
  } else {
    $conn = koneksi();
    echo mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>

<body>
  <h1>Halaman Registrasi</h1>

  <form action="" method="post">
    <ul type="none">
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus>
        </label>
      </li>
      <br>
      <li>
        <label>
          Password :
          <input type="password" name="password">
        </label>
      </li>
      <br>
      <li>
        <label>
          Konfirmasi Password :
          <input type="password" name="password2">
        </label>
      </li>
      <br>
      <li>
        <button type="submit" name="register">Daftar</button>
      </li>
    </ul>
  </form>

</body>

</html>