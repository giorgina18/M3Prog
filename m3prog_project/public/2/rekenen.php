<?php 

$getal = 1785.23;
$afgerond1 = 1785;
echo" Als je {$getal} krijgt is het hele getal afgerond op {$afgerond1}";

$getal2 = 1652.348;
$afgerond2 = 1652;
echo"<br> Als je {$getal2} krijgt is het hele getal afgerond op {$afgerond2}";

$nummer1 = rand(1, 20);
$nummer2 = rand(1, 20);
$nummer3 = rand(1, 20);
$nummer4 = ($nummer1 + $nummer2);
$nummer5 = ($nummer4 / $nummer3);
echo "<br>$nummer1 + $nummer2 is $nummer4 ";
echo "$nummer4 gedeeld door $nummer3 is $nummer5";
?>