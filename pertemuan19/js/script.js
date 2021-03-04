// ambil elemen yang dibutuhkan
$keyword = document.getElementById('keyword');
$tombolCari = document.getElementById('tombolCari');
$container = document.getElementById('container');

// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function () {

  // Buat objek ajax
  var xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  }

  // eksekusi ajax
  xhr.open('GET', 'ajax/buku.php?keyword=' + keyword.value, true);
  xhr.send();

});
