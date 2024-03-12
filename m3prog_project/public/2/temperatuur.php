<?php
// fahrenheit naar celsius 
$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} Graden Fahrenheit = {$celsius} graden Fahrenheit. <br/>";

// celsius naar Fahrenheit
$celsius = 30;
$fahrenheit = ($celsius * 1.8)+32;
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";

// celsius naar kelvin
$celsius = 30;
$kelvin = ($celsius = 273.15);
echo "{$celsius} graden Celsius = {$kelvin} graden Kelvin. <br/>";

// kevin naar Fahrenheit
$kelvin = 295;
$fahrenheit = ($kelvin*1.8) - 459.7;
echo "{$kelvin} graden Kelvin = {$fahrenheit} graden Fahrenheit. <br/>";
?>