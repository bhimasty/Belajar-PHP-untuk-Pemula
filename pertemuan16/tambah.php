<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require "functions.php";

// cek apakah tombol submit sudah ditekan
if (isset($_POST['submit'])) {

  // var_dump($_POST);
  // var_dump($_FILES);
  // die;

  // cek apakah data berhasil ditambahkan
  if (tambah($_POST) > 0) {
    echo "
      <script>
        alert ('Data berhasil ditambahkan');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert ('Data gagal ditambahkan');
        document.location.href = 'tambah.php';
      </script>
    ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>

<body>
  <h1>Tambah Data Buku</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <ul type="none">
      <li>
        <label>
          ISBN :
          <input type="text" name="isbn">
        </label>
      </li><br>
      <li>
        <label>
          Judul :
          <input type="text" name="judul">
        </label>
      </li><br>
      <li>
        <label>
          Penulis :
          <input type="text" name="penulis">
        </label>
      </li><br>
      <li>
        <label>
          Penerbit :
          <input type="text" name="penerbit">
        </label>
      </li><br>
      <li>
        <label>
          Gambar :
          <input type="file" name="gambar">
        </label>
      </li><br>
      <li>
        <button type="submit" name="submit">Tambah Data</button>
      </li>
    </ul>
  </form>

</body>

</html>