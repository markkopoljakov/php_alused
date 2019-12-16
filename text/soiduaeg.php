<style>
    table, tr, th, td {
        border: 1px solid #333;
        border-collapse: collapse;
        text-align: center;
    }
</style>
<?php

$andmeFail = 'soiduaeg.csv';

$algusAeg = $_GET['algus-aeg'];
$loppAeg = $_GET['lopp-aeg'];

if(strlen($algusAeg) == 0 or strlen($loppAeg) == 0) {
    echo '<a href="vorm.php">Sisesta kõik andmed!</a>';
} else {
    if(strlen($algusAeg) != 5 or strlen($loppAeg) != 5) {
        echo '<a href="vorm.php">Sisesta andmed õiges formaadis!</a>';
    } else {
        $ajaAndmed = array();
        foreach ($_GET as $aeg){
            $aeg = explode(':', $aeg);
            $aeg = mktime($aeg[0], $aeg[1], 0,date('m', time()),date('d', time()),date('Y', time()));
            $ajaAndmed[] = $aeg;
        }

        $vaheSekundites = $ajaAndmed[1] - $ajaAndmed[0];
        $soiduTunnid = (int)($vaheSekundites / (60 * 60));
        $soiduMinutid = $vaheSekundites % (60 * 60) / 60;
        $ridaFailisse = $algusAeg.";".$loppAeg.";".$soiduTunnid.";".$soiduMinutid."\n";
        $kasSalvestatud = file_put_contents($andmeFail, $ridaFailisse, FILE_APPEND | LOCK_EX);
        if($kasSalvestatud !== false){
            echo '<h4>Sinu andmed on salvestatud!</h4>';
            echo '<a href="vorm.php">Sisesta uued andmed</a>';
        }
    }
}
echo '<hr>';
echo '<h3>Andmed</h3>';
echo '<table>';
echo '
    <thead>
        <tr>
            <th>sõidu algus</th>
            <th>sõidu lõpp</th>
            <th>tunnid</th>
            <th>minutid</th>
        </tr>
    </thead>';
echo '<tbody>';
$sisu = fopen($andmeFail, 'r') or die('Ei leia faili!');
$jrk = 1;
while(!feof($sisu)){
    $rida = fgetcsv($sisu, filesize($andmeFail),';');
    echo '<tr>';
    $arv = count($rida);
    if($arv == 4) {
        for ($i = 0; $i < $arv; $i++) {
            echo '<td>' . $rida[$i] . '</td>';
        }
        echo '</tr>';
    }
}
fclose($sisu);
echo '<tbody>';
echo '</table>';