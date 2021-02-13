<?php
$mahasiswa = [
  ["Pasha", "L200180123", "Informatika", "pasha@gmail.com"],
  ["Hana", "L200180123", "Informatika", "pasha@gmail.com"],
  ["Ineke", "L200180123", "Informatika", "pasha@gmail.com"],
  ["Arini", "L200180123", "Informatika", "pasha@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <li><?= $mhs[0]; ?></li>
      <li><?= $mhs[1]; ?></li>
      <li><?= $mhs[2]; ?></li>
      <li><?= $mhs[3]; ?></li>
      <br>
    <?php endforeach; ?>
  </ul>
</body>

</html>