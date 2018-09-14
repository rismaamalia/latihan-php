<?php
function persegipanjang($panjang,$lebar){
    return $panjang*$lebar;
}
$panjang = 15;
$lebar = 10;
echo "Luas Persegi panjang dengan panjang $panjang dan lebar $lebar = ";
echo persegipanjang($panjang,$lebar);