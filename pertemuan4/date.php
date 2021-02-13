<?php

// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH Time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l", time() + 172800);
// echo date("l", time() + 60 * 60 * 24 * 3);
// echo date("l", time() - 60 * 60 * 24 * 3);

// mktime
// membuat detik dari 1 Januari 1970 sampai detik yang diinginkan
// mktime(0,0,0,0,0,0)
// mktime(jam, menit, detik, bulan, tanggal, tahun)
// echo date("l", mktime(0, 0, 0, 12, 26, 2000));

// strtotime
// echo strtotime("26 dec 2000");
// echo date("l", strtotime("26 dec 2000"));