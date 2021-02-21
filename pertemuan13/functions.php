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

  // upload gambar
  $gambar = upload();
  if ($gambar === false) {
    return 0;
  }

  // query insert data
  $query = "INSERT INTO buku VALUES
    ('', '$isbn', '$judul', '$penulis', '$penerbit', '$gambar')
  ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function upload()
{
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah ada gambar yang diupload
  if ($error === 4) {
    echo "
      <script>
        alert ('Upload gambar terlebih dahulu');
      </script>
    ";
    return false;
  }

  // cek tipe file
  $ekstensiValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiValid)) {
    echo "
    <script>
    alert ('File yang Anda upload harus berekstensi jpg, jpeg, atau png!');
    </script>
    ";
    return false;
  }

  // cek jika ukuran gambar terlalu besar
  if ($ukuranFile > 1000000) {
    echo "
      <script>
        alert ('Ukuran gambar terlalu besar');
      </script>
    ";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  // generate nama baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= ".";
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
  return $namaFileBaru;
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
  $gambarLama = htmlspecialchars($data['gambarLama']);

  // Cek apakah user mengupload gambar baru
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

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

function cari($keyword)
{
  $query = "SELECT * FROM buku WHERE
            isbn LIKE '%$keyword%' OR
            judul LIKE '%$keyword%' OR
            penulis LIKE '%$keyword%' OR
            penerbit LIKE '%$keyword%'
  ";
  return query($query);
}
