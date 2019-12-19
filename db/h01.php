<?php
// Lisame andmebaasitöötlus funktsioonid
require_once 'db_fnk.php';
require_once 'config.php';
require_once 'output.php';
// ühendus andmebaasi ikt serveriga
$ikt = connect(HOST, USER, PASS, DBNAME);
//tabeli ümbernimetamine
$sql = 'select kool, kokku from koolid2015';
$result = getData($sql, $ikt);
$tabelipealkiri = array('Kool', '2015');
tabel($result, $tabelipealkiri);
