<?php 

$afstand = 930;
$prijs_liter =1.89;
$treinreis = 60;
$tankInHoud = 50;

$liter = 62;
$tanken = 2;
$kosten = 117.18;

echo " <br>het totale afstand is $afstand";
echo " <br>het totale  prijs $kosten is";
echo " <br>het aantal liter  $liter dat je verbtuikt";
echo " <br>het aantal keren dat je moet tanken is $tanken";

if($treinreis > $kosten){
echo "<br> ik ga met de trein";
} else if ($treinreis <  $kosten)
echo "<br> ik ga met de auto";

?>