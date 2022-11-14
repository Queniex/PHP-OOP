<?php

class Produk{
    // property
    public $judul, // oleh karena itu, visibility penting agar tidak mudah menambahkan suatu property scr asal.
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $wktMain;

    // bisa diberikan default
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0, $wktMain = 0) { 
        // Menggunakan underscore, karena konstruktor merupakan magic method yg dimiliki php.

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->wktMain = $wktMain;

    } // ini akan selalu dijalankan, setiap melakukan instansiasi kelas.
    
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }

}

class Komik extends Produk{
    public function getInfoKomik() {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk{
    public function getInfoGame() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->wktMain} Jam.";
        return $str;
    }
}

// Membuat instansiasi
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);

echo "Komik : " . $produk1->getInfoKomik();
echo "<hr>";
echo "Game : " . $produk2->getInfoGame();

?>