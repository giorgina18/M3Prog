<?php 

// *voorbeeld 
    // strlen() geeft de lengte van een string terug
    //$naam = "Duurzaam Huis"; 
    //$lengte = strlen($naam);
 //*   echo "De lengte  " . $naam . " is: " . $lengte;



// strtouppers//

$str = "me vriend houd van te sporten";
$str = strtoupper($str);
echo $str; 



//strops//

$mystring = 'monkey';
$findme   = 'm';
$pos = strpos($mystring, $findme);


if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}




 // file exist //


$filename = '/path/to/m3prog_project';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}





?>