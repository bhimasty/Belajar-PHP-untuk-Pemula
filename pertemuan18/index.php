<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require "functions.php";

// pagination
// konfigurasi
$jumlahData = 2;
$totalData = count(query("SELECT * FROM buku"));
$jumlahHalaman = ceil($totalData / $jumlahData);
$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awalData = ($jumlahData * $halamanAktif) - $jumlahData;

$buku = query("SELECT * FROM buku LIMIT $awalData, $jumlahData");

// jika tombol cari ditekan
if (isset($_POST['cari'])) {
  $buku = cari($_POST['keyword']);

  $totalData = count($buku);
  $jumlahHalaman = ceil($totalData / $jumlahData);
  $halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
  $awalData = ($jumlahData * $halamanAktif) - $jumlahData;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan Keyword Pencarian">
    </label>
    <button type="submit" name="cari">Cari Data</button>
  </form>
  <br>

  <!-- navigasi -->
  <?php if ($halamanAktif > 1) : ?>
    <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
  <?php endif; ?>

  <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if ($i == $halamanAktif) : ?>
      <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color:red;"><?= $i; ?></a>
    <?php else : ?>
      <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
    <?php endif; ?>
  <?php endfor; ?>

  <?php if ($halamanAktif < $jumlahHalaman) : ?>
    <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
  <?php endif; ?>

  <br><br>

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

</body>

</html>