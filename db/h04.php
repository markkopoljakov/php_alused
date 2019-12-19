<?php
require_once 'db_fnk.php';
require_once 'config.php';
require_once 'output.php';
// ühendus andmebaasi ikt serveriga
$ikt = connect(HOST, USER, PASS, DBNAME);
// päring
$sql = 'INSERT INTO Kliendid SET '.
    'enimi="Karu" ,'.
     'pnimi="Poeg" ,'.
     'kontakt="karu.poeg@puhh.com" ';
// salvestamine andmed andmebaasi
$result = query($sql, $ikt);
if ($result) {
    echo 'Andmebaasi on lisatud'. mysqli_affected_rows($ikt). 'ridu<br>';
    echo 'Viimane muudetud id on'. mysqli_insert_id($ikt).'<br>';
}