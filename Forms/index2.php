
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>06 - PHP - Vormid</title>
</head>
<body>
<h1>Kujundid</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    <h1>Kera</h1>
    Raadius <input type="text" name="t1"><br>
    <h1>Koonus</h1>
    Kõrgus <input type="text"  name="t2"><br>
    Raadius <input type="text" name="t3"><br>
    <h1>Silindri ruumala</h1>
    Kõrgus <input type="text" value="2" name="t4"><br>
    Raadius <input type="text" name="t5"><br>
    <input type="submit" value="Saada">
</form>
</body>
</html>

<?php
$kera = $_GET['t1'];
$kõrgus = $_GET['t2'];
$raadius = $_GET['t3'];
$skorgus = $_GET['t4'];
$sraadius = $_GET['t5'];
echo 'Kera Raadius'.'Kera ruumala:'.(4/3*3.14*($kera*$kera*$kera)).'<br>';
echo 'Koonuse Raadius: '.$raadius.' Ja '.' Koonuse Kõrgus: '.$kõrgus. ' Koonuse ruumala: '.(1/3*3.14*pow($raadius, 2)*$kõrgus).'<br>';
echo 'Silindri Raadius: '.$sraadius.' Ja '.' Silindri Kõrgus: '.$skorgus. ' Silindri ruumala: '.(3.14*pow($sraadius, 2)*$skorgus).'<br>';
if (filter_var($kera, FILTER_VALIDATE_NUMBER)) {
    echo "Kera raadius'$kera' on õige.\n";
}
else {
    echo "Kera raadius $kera on vale.\n";
}
?>