<?php

class Produk{
    // property
    public $judul, // oleh karena itu, visibility penting agar tidak mudah menambahkan suatu property scr asal.
           $penulis,
           $penerbit,
           $harga;

    // bisa diberikan default
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga") { 
        // Menggunakan underscore, karena konstruktor merupakan magic method yg dimiliki php.

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    } // ini akan selalu dijalankan, setiap melakukan instansiasi kelas.
    
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

class CetakInfoProduk{
    public function cetak(Produk $produk) { // parameter hanya menerima dari kelas Produk
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})" ;
        return $str;
    }
}

// Membuat instansiasi
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

echo "Komik : " . $produk1->getlabel();
echo "<hr>";
echo "Game : " . $produk2->getlabel();
echo "<hr>";

$infoProduk = new CetakInfoProduk;
echo $infoProduk->cetak($produk1);

?>