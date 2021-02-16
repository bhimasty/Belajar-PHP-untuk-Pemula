<?php
// koneksi ke database
function koneksi()
{
  return mysqli_connect("localhost", "root", "", "phpdasar");
}

function query($query)
{
  // ambil data dari tabel buku / query data buku
  $result = mysqli_query(koneksi(), $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
