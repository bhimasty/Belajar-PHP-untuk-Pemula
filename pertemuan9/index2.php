<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel buku / query data buku
$result = mysqli_query($conn, "SELECT * FROM buku");
if (!$result) {
  echo mysqli_error($conn);
}

// ambil data buku dari object $result / fetch
// mysqli_fetch_row(); mengembalikan array numerik
// mysqli_fetch_assoc(); mengembalikan array asosiatif
// mysqli_fetch_array(); mengembalikan keduanya 
// mysqli_fetch_object();

// $buku = mysqli_fetch_assoc($result);
// var_dump($buku);

// Konsep PDO
// $buku = mysqli_fetch_object($result);
// var_dump($buku->judul)
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>
  <h1>Daftar Buku</h1>

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
    while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="">Ubah</a> |
          <a href="">Hapus</a>
        </td>
        <td><img src="img/<?= $row['gambar']; ?>" alt=""></td>
        <td><?= $row['isbn']; ?></td>
        <td><?= $row['judul']; ?></td>
        <td><?= $row['penulis']; ?></td>
        <td><?= $row['penerbit']; ?></td>
      </tr>
    <?php $i++;
    endwhile; ?>
  </table>

</body>

</html>