<?php
session_start();
echo ' Tere tulemast, '.$_SESSION['kasutaja'].'!<br>';
echo 'see on uus leht';
echo '<a href="logout.php">Logi Välja</a>';