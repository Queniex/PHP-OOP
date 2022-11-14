<?php

class ContohStatic {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali.";
    }
}

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();

$obj = new ContohStatic;
echo $obj->halo();
echo "<br>";
echo $obj->halo();

echo "<hr>";

$obj2 = new ContohStatic;
echo $obj2->halo();
echo "<br>";
echo $obj2->halo();
?>