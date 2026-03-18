<?php
$MSG = "Sua média é:";
$nome = "User";
$M1 = 7;
$M2 = 7;
$M3 = 4;
$media = 0;
$media = ( ($M1 + $M2 + $M3) /3 );

if ($media >=9) {

echo "MB";

}

if ($media < 8 && $media >= 7) {

echo "b";

}

if ($media < 7 && $media >= 4) {

echo "r";

}

if ($media < 4 && $media >=1) {

echo "i";

}

if ($media <=0 ) {

echo "NA";

}