<?php namespace App\Produk;

Abstract class Produk{
    // property
    protected $judul, // oleh karena itu, visibility penting agar tidak mudah menambahkan suatu property scr asal.
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

?>