<?php
// array
// variable yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index yang dimulai dari 0

// membuat array
// cara lama (sebelum php 5.4)
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu");
// cara baru (setelah php 5.4)
$bulan = ["Januari", "Februari", "Maret", "April", "Mei"];
$arr1 = [123, "Pasha Bhimasty", false];

// Menampilkan array
// Menggunakan var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// Menampilkan 1 elemen pada array
// echo $arr1[1];
// echo "<br>";
// echo $bulan[3];

// Menambahkan elemen baru pada array
$bulan[] = "Juni";
$bulan[] = "Juli";
var_dump($bulan);
