<?php
require_once 'db_fnk.php';
require_once 'config.php';
require_once 'output.php';
// ühendus andmebaasi ikt serveriga
$ikt = connect(HOST, USER, PASS, DBNAME);
echo '<h1> Harjutus 07</h1>';
$sql = 'SELECT * FROM Kliendid';
$result = getData($sql, $ikt);
$tabeliPealkiri = array('Eesnimi', 'Perenimi', 'Kontakt', '');
tabelKustutaMuuda($result, $tabeliPealkiri);
if(!empty($_GET['kustutaID'])) {
    $id = $_GET['kustutaID'];
    $sql = 'DELETE FROM Kliendid WHERE id="'. $id. '"';
    $result = query($sql, $ikt);
    if ($result !== false) {
        header('Location:'. $_SERVER['PHP_SELF']);
    }


}
if (!empty($_GET['MuudaID'])){
    $id = $_GET['MuudaID'];
    $sql = 'SELECT * FROM Kliendid WHERE Id="'.$id.'"'; echo $sql;
    $result = getData($sql, $ikt);
    echo '<pre>';
    print_r($result);
    echo '</pre>';
    if ($result !== false){


    muudaAndmedVorm($result[0]);
    }
}
if (!empty($_GET['muudanyyd']) and $_GET['muudanyyd'] == 'Muuda'){
    $id = $_GET['Id'];
    $enimi = $_GET['enimi'];
    $pnimi = $_GET['pnimi'];
    $kontakt = $_GET['kontakt'];

    $sql = 'UPDATE Kliendid SET '.
        'enimi="'.$enimi.'", '.
        'pnimi="'.$pnimi.'", '.
        'kontakt="'.$kontakt.'" WHERE '.
        'Id="'.$id.'"';
    $result = query($sql, $ikt);
    if ($result !== false) {
        // taaskäivitame antud lehekülg
        header('Location: '.$_SERVER['PHP_SELF']);
    }
}
