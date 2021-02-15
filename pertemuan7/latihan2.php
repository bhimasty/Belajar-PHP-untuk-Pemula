<?php
// cek apakah tidak ada data di URL
if (!isset($_GET['nama']) || !isset($_GET['nim']) || !isset($_GET['email']) || !isset($_GET['jurusan']) || !isset($_GET['gambar'])) {
  header("Location: latihan1.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
</head>

<body>
  <h1>Detail Mahasiswa</h1>
  <ul>
    <li><img src="img/<?= $_GET['gambar']; ?>" alt=""></li>
    <li><?= $_GET['nama']; ?></li>
    <li><?= $_GET['nim']; ?></li>
    <li><?= $_GET['email']; ?></li>
    <li><?= $_GET['jurusan']; ?></li>
  </ul>

  <br><br>
  <a href="latihan1.php">Kembali ke Daftar Mahasiswa</a>
</body>

</html>