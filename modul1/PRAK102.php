<?php
$tinggiAlas = 5.4;
$sisi = 7.9;
$luasAlas = (sqrt(3) / 4) * pow($sisi, 2);
$volumePrisma = $luasAlas * $tinggiAlas;

echo number_format($volumePrisma,3)." m³";
?>