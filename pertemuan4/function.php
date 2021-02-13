<?php
function salam($waktu = "Datang", $nama = "Admin")
{
  return "Selamat $waktu, $nama";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function</title>
</head>

<body>
  <h1><?= salam(); ?></h1>
  <h1><?= salam("Siang", "Pasha Bhimasty"); ?></h1>
</body>

</html>