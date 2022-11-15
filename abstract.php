<?php

// Tidak dapat di-instansiasi, mendefinisikan interface untuk kelas lain yang menjadi turunannya
// Berperan sebagai kerangka untuk kelas turunannnya
// Memiliki minimal 1 method
// Merupakan cara menerapkan Polimorphism

Abstract class Produk{
    // property
    Private $judul, // oleh karena itu, visibility penting agar tidak mudah menambahkan suatu property scr asal.
            $penulis,
            $penerbit;
           
    protected $harga, 
              $diskon;

    // bisa diberikan default
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga") { 
        // Menggunakan underscore, karena konstruktor merupakan magic method yg dimiliki php.

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    } // ini akan selalu dijalankan, setiap melakukan instansiasi kelas.
    
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100); 
    }

    public function setJudul($judul) {
        if( !is_string($judul) ){
            throw new Exception("Judul harus string!");
        }
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduk();

    public function getInfo() {
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

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk() {
        $str = "Komik : " .  $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk{
public $wktMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $wktMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktMain = $wktMain;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk() {
        $str = "Game : " . $this->getInfo() . " ~ {$this->wktMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk (produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}

// Membuat instansiasi
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk1);
echo $cetakProduk->cetak();
?>