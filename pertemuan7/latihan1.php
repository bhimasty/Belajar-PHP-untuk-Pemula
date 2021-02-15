<?php
// SUPERGLOBALS
// variable global milik PHP
// merupakan array asosiatif

// $_GET
$mahasiswa = [
  ["nama" => "Pasha Bhimasty", "nim" => "001", "email" => "pasha@gmail.com", "jurusan" => "Teknik Informatika", "tugas" => [80, 85, 90], "gambar" => "pasha.jpg"],
  ["nama" => "Hana Yaa", "nim" => "002", "email" => "hana@gmail.com", "jurusan" => "Teknik Industri", "tugas" => [81, 86, 89], "gambar" => "hana.jpg"]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Array Asosiatif</title>
</head>

<body>

  <h1>Daftar Mahasiswa</h1>
  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <li><a href="latihan2.php?nama=<?= $mhs['nama']; ?>&nim=<?= $mhs['nim']; ?>&email=<?= $mhs['email']; ?>&jurusan=<?= $mhs['jurusan']; ?>&gambar=<?= $mhs['gambar']; ?>"><?= $mhs['nama']; ?></a></li>
    <?php endforeach; ?>
  </ul>

</body>

</html>