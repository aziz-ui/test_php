<?php

$name = 'Joe';
$weightKg=90;
$heightCm=187;

$heightm = (float)($heightCm)/100;

echo $heightm;
$heigthsquare= $heightm*$heightm;
echo '<br>';
echo $heigthsquare;

$bmi = $weightKg / $heigthsquare;
echo '<br>';
echo $bmi;


 ?>
