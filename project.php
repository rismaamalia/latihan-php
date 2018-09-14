<?php
$harry = 50000;
$food = 25000;
$drink = 10000;
$Sisa = $harry - $food -$drink;
echo "Uang Harry : $harry";
echo "<br> Makanan Harry : $food";
echo "<br> Minuman Harry : $drink";
echo "<br> Sisa Uang Harry  <b> $Sisa </b>";
if($Sisa >= 0){
    echo "<br> Harry Hemat";
}else{
    echo "<br> Harry Boros";
}
?>