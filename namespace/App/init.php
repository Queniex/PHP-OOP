<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

spl_autoload_register(function( $class ){
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'Produk/' . $class . '.php'; // Akan menghasilkan Produk/Namespace sedangkan hanya dibutuhkan Produk/NamaClass.
});

// Ditulis 2x karena pada file Produk tidak menyimpan file service, alias mereka merupakan 2 file berbeda
spl_autoload_register(function( $class ){
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'Service/' . $class . '.php';
});

?>