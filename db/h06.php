<?php
require_once 'db_fnk.php';
require_once 'config.php';
require_once 'output.php';
// ühendus andmebaasi ikt serveriga
$ikt = connect(HOST, USER, PASS, DBNAME);
echo '<h1> Harjutus 06</h1>';
$sql = 'SELECT * FROM Kliendid';
$result = getData($sql, $ikt);
$tabeliPealkiri = array('Eesnimi', 'Perenimi', 'Kontakt', '');
tabelKustuta($result, array());
if(!empty($_GET['kustutaID'])) {
    $id = $_GET['kustutaID'];
    $sql = 'DELETE FROM Kliendid WHERE id="'. $id. '"';
    $result = query($sql, $ikt);
    if ($result !== false) {
        header('Location:'. $_SERVER['PHP_SELF']);
    }

}