<?php
require_once 'db_fnk.php';
require_once 'config.php';
require_once 'output.php';
// ühendus andmebaasi ikt serveriga
$ikt = connect(HOST, USER, PASS, DBNAME);
// näitame otsingu vormi
otsinguvorm();
// kastamine vormi kaudu tulnud andmeid
if(isset($_GET['otsi'])) {
    $otsi = $_GET['otsi'];
    // koostame  antud andmete otsingu päring
    $sql = 'SELECT 2015,Kool FROM koolid2015 WHERE Kool LIKE "%'.$otsi.'%"';
    // saadame päringu andmebaasi
    $result = getData($sql, $ikt);
    if ($result !==false) {
        $pealkirjad = array('2015', 'Kool');
        tabel($result, $pealkirjad);
    }else {
        echo 'Tuleb täpsustada otsing';
    }
}

