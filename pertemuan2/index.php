<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print : mencetak string
// print_ r : mencetak array
// var_dump : melihat isi dari variabel, menampilkan tipe data dan panjang data

/*
echo ("Pasha Bhimasty");
echo "<br>";
print("Pasha Bhimasty");
echo "<br>";
print_r("Pasha Bhimasty");
echo "<br>";
var_dump("Pasha Bhimasty");
echo "<br>";
*/

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Pasha Bhimasty";

// Operator
// Aritmatika ( + - * / % )
// $x = 10;
// $y = 20;
// echo $x + $y;

// Penggabung String / Concatenation / Concat ( . )
// $nama_depan = "Pasha";
// $nama_belakang = "Bhimasty";
// echo $nama_depan . " " . $nama_belakang;

// Assignment ( =  +=  -=  *=  /=  %=  .=)
// $x = 2;
// $x /= 5;
// echo $x;
// $nama = "Pasha";
// $nama .= " Bhimasty";
// echo $nama;

// Perbandingan ( <  >  <=  >=  ==  !=)
var_dump(1 == "1"); // hasilnya true karena hanya mengecek nilainya, bukan tipe datanya

// Identitas ( ===  !== )
var_dump(1 === "1"); // hasilnya false karena mengecek tipe datanya juga

// Logika ( AND &&   OR ||   NOT ! )
var_dump(10 > 5  &&  10 % 2 == 1);

?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar PHP</title>
</head>

<body>
  <h1>
    Hallo, Selamat Datang -->
<?php
// echo '$nama ';
// echo "$nama";
?>
<!-- </h1>

  <p> -->
<?php // echo "ini adalah paragraf"; 
?>
<!-- </p> -->

<?php
// echo "<h1>Hallo, Selamat Datang Pasha</h1>";
?>
<!-- </body>

</html> -->