<?php
function segitiga($alas,$tinggi){
    return 0.5*$alas*$tinggi;
}
$alas = 15;
$tinggi = 10;
echo "Luas Segitiga dengan alas $alas dan Tinggi $tinggi adalah  = ";
echo segitiga($alas,$tinggi);