<?php
$tekst = $_GET['tekst'];
$tekst = strtolower($tekst);
$tekst = ucfirst($tekst);
echo 'Tere '.$tekst. '!';
echo '<hr>';

$text = $_GET['text'];
for ($index = 0; $index < strlen($text); $index++){
    $symbol = strtoupper($text[$index]);
    echo $symbol. '.';
}
echo  '<hr>';

$ropp = array('tropp', 'kurat');
$lause = $_GET['lause'];
$lause =strtolower($lause);
$asendus = '****';
foreach ($ropp as $ropp1) {
$roppindex = strpos($lause, $ropp1, 0);
if ($roppindex !== false){
$lause = substr_replace($lause, $asendus,$roppindex, strlen($ropp1));
}
}
$lause = ucfirst($lause);
echo $lause;
echo '<hr>';

$nimijaperenimi = $_GET ['nimi'];
$asendus = array(
    'ä' => 'a',
    'ü' => 'u',
    'ö' => 'o',
    'õ' => 'o',
    'Ä' => 'A',
    'Ü' => 'U',
    'Ö' => 'O',
    'Õ' => 'O',
);
foreach ($asendus as $otsi => $asenda) {
    $nimijaperenimi = str_replace($otsi, $asenda, $nimijaperenimi);
}
$andmed = array();
$sõnadearv = str_word_count($nimijaperenimi);
for ($kord = 1; $kord <=$sõnadearv ; $kord++){
    $tyhikuindeks = strpos($nimijaperenimi, '', 0);
    $nimi =strtolower(substr($nimijaperenimi, 0, $tyhikuindeks));
    $andmed[] = $nimi;
    print_r($andmed);
    $nimijaperenimi = substr($nimijaperenimi, $tyhikuindeks, 0);
    echo $nimijaperenimi.'<br>';
}
$esimesetyhikuindex = strpos($nimijaperenimi, '', 0);
$nimi = strtolower(substr($nimijaperenimi, 0, $esimesetyhikuindex));
echo $nimijaperenimi. '<br>';
$nimijaperenimi =substr($nimijaperenimi, $esimesetyhikuindex +1);
$tyhikuindeks = strpos($nimijaperenimi, '');
echo $tyhikuindeks. '<br>';
$perenimi = strtolower(substr($nimijaperenimi, -1));
$email = $nimi. '.' .$perenimi .'@khk.ee';
echo $email;