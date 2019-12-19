<?php
require_once 'config.php';
require_once  'db_fnk.php';
require_once 'output.php';
$ikt = connect(HOST, USER, PASS, DBNAME);



if (!empty($_POST['nimi']) and !empty($_POST['parool'])){
    $nimi = $_POST['nimi'];
    $parool = $_POST['parool'];



    $sql = 'SELECT * FROM kasutajad where nimi="'.$nimi.'" and parool="'.md5($parool).'"';
    $result = getData($sql, $ikt);
    session_start();
    $_SESSION['kasutaja'] = $result[0]['nimi'];

}
if (!empty($_SESSION['kasutaja'])){
    echo ' Tere tulemast, '.$_SESSION['kasutaja'].'!<br>';
    echo '<a href="page.php">Uus</a>';
echo '<a href="logout.php">Logi Välja</a>';
}else {
    loginVorm();
}
