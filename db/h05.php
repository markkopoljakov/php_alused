<?php
require_once 'db_fnk.php';
require_once 'config.php';
require_once 'output.php';
// ühendus andmebaasi ikt serveriga
$ikt = connect(HOST, USER, PASS, DBNAME);
// lehe väljund
echo '<h1> Harjutus 05</h1>';
// Vorm
lisaAndmedVorm();
if(isset($_GET['enimi']) && isset($_GET['pnimi'])){
    $enimi = $_GET['enimi'];
    $pnimi = $_GET['pnimi'];
    $kontakt = $_GET['kontakt'];
    if (strlen($enimi) > 0 and strlen($pnimi ) > 0 and strlen($kontakt) > 0) {
        $sql = 'INSERT INTO Kliendid SET '.
            'enimi="'.$enimi.'" , '.
            'pnimi="'.$pnimi.'" , '.
            'kontakt="'.$kontakt.'"';
        echo $sql;
        $result = query($sql, $ikt);
        if ($result) {
            echo 'Andmebaasi on lisatud'. mysqli_affected_rows($ikt). 'ridu<br>';
            echo 'Viimane muudetud id on'. mysqli_insert_id($ikt).'<br>';
            $sql = 'SELECT enimi, pnimi, kontakt FROM Kliendid';
            $result = getData($sql, $ikt);
            $tabeliPealkiri = array('Eesnimi', 'Perenimi', 'Email');
            tabel($result, $tabeliPealkiri);
        }
    }
}