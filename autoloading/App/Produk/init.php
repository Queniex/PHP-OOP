<?php

spl_autoload_register(function( $class ){
    require_once 'App/Produk/' . $class . '.php';
});

?>