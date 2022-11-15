<?php

// sebuah indentifier untuk menyimpan nilai
// nilai tidak dapat berubah

// define () -> Tidak bisa disimpan d dlm class, harus disimpan scr global
define('NAMA', 'Quenie Salbiyah'); // usahakan menulis nama konstanta menggunakan huruf besar semua
echo NAMA;
echo "<br>";

// const -> bisa dimasukkan ke dalam class
const UMUR = 19;
echo UMUR;
echo "<hr>";

class Coba {
    const NAMA = 'Quenie Salbiyah';
}
echo Coba::NAMA;
echo "<hr>";

// Magic Constant
echo __LINE__; // menampilkan baris line ini ditulis
echo __FILE__; // menampilkan letak file
echo __FUNCTION__; // menampilkan sedang berada d function mana
// dll.

?>