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

function tambah($data)
{
  $conn = koneksi();

  // ambil data dari form
  $isbn = htmlspecialchars($data['isbn']);
  $judul = htmlspecialchars($data['judul']);
  $penulis = htmlspecialchars($data['penulis']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $gambar = htmlspecialchars($data['gambar']);

  // query insert data
  $query = "INSERT INTO buku VALUES
    ('', '$isbn', '$judul', '$penulis', '$penerbit', '$gambar')
  ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE id = '$id'");
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  // ambil data dari form
  $id = htmlspecialchars($data['id']);
  $isbn = htmlspecialchars($data['isbn']);
  $judul = htmlspecialchars($data['judul']);
  $penulis = htmlspecialchars($data['penulis']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $gambar = htmlspecialchars($data['gambar']);

  // query insert data
  $query = "UPDATE buku SET
            isbn = '$isbn',
            judul = '$judul',
            penulis = '$penulis',
            penerbit = '$penerbit',
            gambar = '$gambar'
            WHERE id = '$id'
  ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
