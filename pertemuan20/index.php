<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require "functions.php";
$buku = query("SELECT * FROM buku");

// jika tombol cari ditekan
if (isset($_POST['cari'])) {
  $buku = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    .loader {
      width: 100px;
      position: absolute;
      top: 120px;
      left: 300px;
      z-index: -1;
      display: none;
    }
  </style>

  <title>Halaman Admin</title>
</head>

<body>
  <a href="logout.php">Logout</a>
  <h1>Daftar Buku</h1>

  <a href="tambah.php">Tambah Data Buku</a>
  <br><br>

  <form action="" method="post">
    <label>
      Keyword :
      <input type="text" name="keyword" id="keyword" size="30" autofocus placeholder="Masukkan Keyword Pencarian">
    </label>
    <button type="submit" name="cari" id="tombolCari">Cari Data</button>

    <img src="img/loader.gif" class="loader">
  </form>
  <br>

  <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>ISBN</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
      </tr>
      <?php $i = 1;
      foreach ($buku as $row) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a> |
            <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
          </td>
          <td><img src="img/<?= $row['gambar']; ?>" alt=""></td>
          <td><?= $row['isbn']; ?></td>
          <td><?= $row['judul']; ?></td>
          <td><?= $row['penulis']; ?></td>
          <td><?= $row['penerbit']; ?></td>
        </tr>
      <?php $i++;
      endforeach; ?>
    </table>
  </div>

  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>