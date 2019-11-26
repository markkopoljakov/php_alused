<?php
$kera = $_GET['t1'];
$kõrgus = $_GET['t2'];
$raadius = $_GET['t3'];
$skorgus = $_GET['t4'];
$sraadius = $_GET['t5'];
echo 'Kera Raadius'.'Kera ruumala:'.(4/3*3.14*($kera*$kera*$kera)).'<br>';
echo 'Koonuse Raadius: '.$raadius.' Ja '.' Koonuse Kõrgus: '.$kõrgus. ' Koonuse ruumala: '.(1/3*3.14*pow($raadius, 2)*$kõrgus).'<br>';
echo 'Silindri Raadius: '.$sraadius.' Ja '.' Silindri Kõrgus: '.$skorgus. ' Silindri ruumala: '.(3.14*pow($sraadius, 2)*$skorgus).'<br>';

?>