<?php

// membuat method child menimpa method parent

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
        // $this->jmlHalaman = $jmlHalaman;
        // $this->wktMain = $wktMain;

    } // ini akan selalu dijalankan, setiap melakukan instansiasi kelas.
    
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

}

class Komik extends Produk{
public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : " .  parent::getInfoProduk() . "- {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk{
public $wktMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $wktMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktMain = $wktMain;
    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . "~ {$this->wktMain} Jam.";
        return $str;
    }
}

// Membuat instansiasi
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<hr>";
echo $produk2->getInfoProduk();

?>