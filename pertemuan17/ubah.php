<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require "functions.php";

// ambil data di URL
$id = $_GET['id'];

// query data buku berdasarkan id
$buku = query("SELECT * FROM buku WHERE id = '$id'")[0];

// cek apakah tombol submit sudah ditekan
if (isset($_POST['submit'])) {

  // cek apakah data berhasil diubah
  if (ubah($_POST) > 0) {
    echo "
      <script>
        alert ('Data berhasil diubah');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert ('Data gagal diubah');
      document.location.href = 'index.php';
    </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data</title>
</head>

<body>
  <h1>Ubah Data Buku</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <ul type="none">
      <input type="hidden" name="id" value="<?= $buku['id']; ?>">
      <input type="hidden" name="gambarLama" value="<?= $buku['gambar']; ?>">
      <li>
        <label>
          ISBN :
          <input type="text" name="isbn" value="<?= $buku['isbn']; ?>">
        </label>
      </li><br>
      <li>
        <label>
          Judul :
          <input type="text" name="judul" value="<?= $buku['judul']; ?>">
        </label>
      </li><br>
      <li>
        <label>
          Penulis :
          <input type="text" name="penulis" value="<?= $buku['penulis']; ?>">
        </label>
      </li><br>
      <li>
        <label>
          Penerbit :
          <input type="text" name="penerbit" value="<?= $buku['penerbit']; ?>">
        </label>
      </li><br>
      <li>
        <label>
          Gambar :
          <input type="file" name="gambar">
          <br>
          <img src="img/<?= $buku['gambar']; ?>" alt="">
        </label>
      </li><br>
      <li>
        <button type="submit" name="submit">Ubah Data</button>
      </li>
    </ul>
  </form>

</body>

</html>