<?php
// cek apakah tombol submit sudah ditekan
if (isset($_POST['submit'])) {

  // cek username dan password
  if ($_POST['username'] == "admin" && $_POST['password'] == "123") {

    // jika benar redirect ke halaman admin
    header("Location: admin.php");
    exit;
  } else {
    // jika salah, tampilkan pesan kesalahan
    $error = true;
  }
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
  <h1>Login Admin</h1>

  <?php if (isset($error)) : ?>
    <b>
      <p style="color: red;">Username atau Password Salah</p>
    </b>
  <?php endif; ?>

  <ul>
    <form action="" method="post">
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
        <button type="submit" name="submit">Login</button>
      </li>
    </form>
  </ul>

</body>

</html>