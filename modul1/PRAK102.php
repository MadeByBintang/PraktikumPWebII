<?php
$alas = 8.9;
$tinggiSegitiga = 14.7;
$tinggiPrisma = 5.4;

$luasAlas = 0.5 * $alas * $tinggiSegitiga;

$volume = $luasAlas * $tinggiPrisma;

echo number_format($volume, 3, ',') . " m3";
