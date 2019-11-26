<?php
date_default_timezone_set('Europe/Tallinn');
echo date('d.m.Y G:i' , time()).'<br>';

'<br>';
//kuude massiiv
$eesti_päevad = array('Esmaspäev', 'Teisipäev', 'Kolmapäev', 'Neljapäev', 'Reede', 'Laupäev', 'Pühapäev');
echo 'N: ';
echo $eesti_päevad[date(1)].'<br>';

//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta. ' '.$eesti_päevad[1].'<br>';

$järgmine_aasta = date('Y')+1;
$jaanipäev = mktime(0,0,0,6,24, $järgmine_aasta);
$hetkel = time();
$vahe = $jaanipäev - $hetkel;
$paevasSekunditeArv = 60 * 60 * 24;
$paevadeArv =(int)($vahe/ $paevasSekunditeArv);
echo $järgmine_aasta. ' aasta jaanipäevani on jäänud '.$paevadeArv.' Päeva!'.'<br>';
'<br>';
'<br>';
echo 'Sinu sünnipäev: ';
echo date('06.11.1980')."<br>";
echo 'Minu sünnipäev: ';
echo date('14.04.1999')."<br>";
$minuSünnipaev = strtotime('14 Aprill '.date('1999'));
$temaSünnipaev = strtotime('06 November '. date("1980"));
$vanusSekundites = $minuSünnipaevJärgmineA - $minuSünnipaev;
$vanuseAastates = (int) ($vanusSekundites / (60 * 60 * 24 * 30 *12));
$vanuse = $minuSünnipaev - $temaSünnipaev;
$vaheAastates = (int)($vanuse / (60 * 60 * 24 * 30 * 12));
if ($vahe >0){
    echo 'Ta on vanem kui mina ';

}else {
    echo 'Ma olen vanem kui tema ';
}
echo abs($vaheAastates).' aasta võrra'."<br>";

$järgmine_aasta = date('Y')+1;
$minuSünnipaev = strtotime('14 Aprill '.date('1999'));
$minuSünnipaevJärgmineA = strtotime('14 Aprill '.$järgmine_aasta);
$vanusSekundites = $minuSünnipaevJärgmineA - $minuSünnipaev;
$vanuseAastates = (int) ($vanusSekundites / (60 * 60 * 24 * 30 *12));
if ($vanuseAastates % 5 == 0) {
    echo 'Sul ei ole juubel';

}else {
    echo 'Sul on juubel';

}
echo '<hr>';