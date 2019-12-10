<menu>
    <a href="index.php?leht=avaleht">Avaleht</a>
    <a href="index.php?leht=Portfoolio">Portfoolio</a>
    <a href="index.php?leht=kaart">Kaart</a>
    <a href="index.php?leht=kontakt">Kontakt</a>
</menu>


<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('avaleht','Portfoolio','kaart','kontakt');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    } else {
        echo '<h1>Valitud lehte ei eksisteeri!<h1>';
    }
}
    ?>