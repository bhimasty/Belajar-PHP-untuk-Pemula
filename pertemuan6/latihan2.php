<?php
// $mahasiswa = [
//   ["Pasha", "001", "pasha@gmail.com", "Teknik Informatika"],
//   ["Lili", "002", "lili@gmail.com", "Teknik Sipil"],
//   ["Hana", "003", "hana@gmail.com", "Teknik Industri"]
// ];

// Array Asosiatif
// key-nya adalah string yang kita buat sendiri
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
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li><?= "NIM : $mhs[nim]"; ?></li>
      <li><?= "Nama : $mhs[nama]"; ?></li>
      <li><?= "Email : $mhs[email]"; ?></li>
      <li><?= "Jurusan : $mhs[jurusan]"; ?></li>
      <li>
        Tugas :
        <?php foreach ($mhs['tugas'] as $tugas) {
          echo "$tugas ";
        } ?>
      </li>
      <li>
        <img src="img/<?= $mhs['gambar']; ?>" alt="">
      </li>
    </ul>
  <?php endforeach; ?>

</body>

</html>