<?php

require_once __DIR__ . '/vendor/autoload.php';

require "functions.php";
$buku = query("SELECT * FROM buku");

$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/print.css">
  <title>Daftar Buku</title>
</head>
<body>
  <h1 align="center">Daftar Buku</h1>
  <table border="1" cellpadding="10" cellspacing="0" align="center">
      <tr>
        <th>No.</th>
        <th>Gambar</th>
        <th>ISBN</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
      </tr>';

$i = 1;
foreach ($buku as $row) {
  $html .=
    '<tr>
    <td>' . $i++ . '</td>
    <td><img src="img/' . $row['gambar'] . '"></td>
    <td>' . $row['isbn'] . '</td>
    <td>' . $row['judul'] . '</td>
    <td>' . $row['penulis'] . '</td>
    <td>' . $row['penerbit'] . '</td>
  </tr>';
}

$html .= '</table>
</body>
</html>
';

$mpdf->WriteHTML($html);
$mpdf->Output('Daftar Buku.pdf', \Mpdf\Output\Destination::INLINE);
