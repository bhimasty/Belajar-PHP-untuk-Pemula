<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require "functions.php";

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {
    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {

      // set session
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }

  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <a href="registrasi.php">Daftar</a>

  <h1>Halaman Login</h1>

  <?php if (isset($error)) : ?>
    <p style="color: red; font-style: italic">Username atau Password Salah</p>
  <?php endif; ?>

  <form action="" method="post">
    <ul type="none">
      <li>
        <label>
          Username :
          <input type="text" name="username">
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
        <button type="submit" name="login">Login</button>
      </li>
    </ul>
  </form>

</body>

</html>