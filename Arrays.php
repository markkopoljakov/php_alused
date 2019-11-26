<?php

use mysql_xdevapi\BaseResult;

$massiivid = array('Eesti keel','Vene keel','Inglise keel','Matemaatika','Kehaline');

//massiivi kõigi elementide väljastamine
foreach($massiivid as $ained){
    echo "$ained <br>";
}
?>
<br>
<br>
<br>
<?php
$nimed = array('Martin'=>33,'Hardi'=>37,'Juhan'=>27,'Tiina' =>11,'Sirje'=>15,'Kaie'=>28);
$pallivisked = array(33, 32, 27, 11, 15, 28);
echo "Osalejate arv:";
echo count($nimed);
$pallivisked=array(5,15,25);
echo "<br>Keskmine vise:";
echo array_sum($pallivisked);
echo "<br>Maksimaalne vise:";
echo( max($pallivisked) );
echo "<br>Parim Võistleja:";
$pallivisked= array_keys($nimed,max($nimed));

echo $pallivisked[0];
?>
<br>
<br>
<?php
//mitmemõõtmelised massiivid
$raamatud = array(
    'Pea'=>array('Pealkiri:'=>"Isa",'Autor:'=>"Mihkel Raud",'Aasta:'=>2019),
    'Austria'=>array('Pealkiri:'=>"KUIDAS ARMASTADA NAIST?",'Autor:'=>"MARGUS VAHER",'Aasta:'=>2019),
    'P:'=>array('Pealkiri:'=>"KUJURI TÜTAR",'Autor:'=>"TOVE JANSSON",'Aasta:'=>2019)
);

foreach ($raamatud as $raamat=>$andmed){
    echo "$raamat: ";
    foreach($andmed as $detailid){
        echo "$detailid ";
    }
    echo "<br>";
}
echo "Raamatuid kokku:";
echo count($raamatud);
?>
    <br>
    <br>
<?php
//mitmemõõtmelised massiivid
$riigid = array(
    'Eesti'=>array('pealinn'=>'Tallinn','rahvaarv'=>1340000),
    'Austria'=>array('pealinn'=>'Viin','rahvaarv'=>8356700),
    'Belgia'=>array('pealinn'=>'Brüssel','rahvaarv'=>10827500)
);

foreach ($riigid as $riik=>$andmed){
    echo "$riik: ";
    foreach($andmed as $detailid){
        echo "$detailid ";
    }
    echo "<br>";
}
?>