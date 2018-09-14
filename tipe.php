<?php
$nim = "7807754";
$nama = 'Reynaldi Continenta Putra';
$umur = 5;
$nilai = 95.25;
$status = true;
echo "NIM : $nim <br>";
echo "Nama : $nama <br>";
print "Umur : $umur <br>";
printf("Nilai : %.3f<br>", $nilai);
if ($status) {
    echo "Status : Aktif";
} else {
    echo "Status : Tidak Aktif";
}
?>