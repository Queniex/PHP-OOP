<?php

class Produk{
    // property
    public $judul, // oleh karena itu, visibility penting agar tidak mudah menambahkan suatu property scr asal.
           $penulis,
           $penerbit,
           $harga;

    // public function sayHello(){
    //     return "Hello World!";
    // }
    
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

$produk1 = new Produk();
$produk2 = new Produk();

// Memberikan inisialisasi nilai terhadap property :
$produk1->judul = "Batman";
//var_dump($produk1);

$produk2->tambahProperty = "test"; // walau tidak ada, akan otomatis d tambahkan (hati - hati<3).
//var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();
echo "Komik : ";
echo $produk3->getlabel();

$produk3 = new Produk();
$produk3->judul = "Uncharted";
$produk3->penulis = "Neil Druckmann";
$produk3->penerbit = "Sony Computer";
$produk3->harga = 250000;

echo "<hr>";
echo "Game : ";
echo $produk3->getlabel();

?>