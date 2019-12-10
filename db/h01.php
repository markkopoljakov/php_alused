<?php
// Lisame andmebaasitöötlus funktsioonid
require_once 'db_fnk.php';
require_once 'config.php';
// ühendus andmebaasi ikt serveriga
$ikt = connect(HOST, USER, PASS, DBNAME);
//tabeli ümbernimetamine
$sql = 'select kool, kokku from koolid2015';
$result = getData($sql, $ikt);
echo '<pre>';
print_r($result);
