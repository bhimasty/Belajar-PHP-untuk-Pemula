<?php
require "../functions.php";

$keyword = $_GET['keyword'];
$query = "SELECT * FROM buku WHERE
            isbn LIKE '%$keyword%' OR
            judul LIKE '%$keyword%' OR
            penulis LIKE '%$keyword%' OR
            penerbit LIKE '%$keyword%'
        ";
$buku = query($query);
?>

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
