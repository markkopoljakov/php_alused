<?php


?>
<h2>Tellimine</h2>
<?php
$toode1 = $_GET['t1'];
$toode2 = $_GET['t2'];
$toode3 = $_GET['t3'];
echo 'Toode 1: '.$toode1.' tk<br>';
echo 'Toode 2: '.$toode2.' tk<br>';
echo 'Toode 3: '.$toode3.' tk<br>';
echo 'Tooted Kokku:'.($toode1+$toode2+$toode3).'<br>';
echo 'Hind Kokku:'.($toode1*5+$toode2*3+$toode3*2).'€';
?>


