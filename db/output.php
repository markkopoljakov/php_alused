<?php

function tabel($andmed, $pealkirjad){
    echo '<table  style="border: 1px solid black">';
    echo '<thead >';
     echo '<tr style="border: 1px solid black">';
     foreach ($pealkirjad as $pealkiri) {
         echo '<th  style="border: 1px solid black">'.$pealkiri.'</th>';
     }
    echo'Ridu kokku:'. count($andmed);
     echo '</tr>';
    echo '</thead>';
    echo '<tbody  style="border: 1px solid black">';
    foreach ($andmed as $tabeliRida){
        echo '<tr  style="border: 1px solid black">';
        foreach ($tabeliRida as $value) {
            echo '<td  style="border: 1px solid black">'. $value. '</td>';
        }
        echo '</tr>';
    }
    echo '<tbody>';
    echo '</table>';
}

// otsingu vorm
function otsinguvorm(){
    echo '
    <form action="" method="get">
		<input type="text" name="otsi">
		<input type="submit" value="Otsi"> 
	</form>';
}
function lisaAndmedVorm() {
    echo ' <form action="" method="get">
        Eesnimi <input type="text" name="enimi">
        Perenimi <input type="text" name="pnimi">
        Kontakt <input type="text" name="kontakt">
        <input type="submit" value="Salvesta">
    </form>';
}




function tabelKustutaMuuda($andmed, $pealkirjad){
    echo '<table  style="border: 1px solid black" border-collapse="collapse">';
    echo '<thead >';
    echo '<tr style="border: 1px solid black">';
    foreach ($pealkirjad as $pealkiri) {
        echo '<th  style="border: 1px solid black" border-collapse="collapse">'.$pealkiri.'</th>';
    }
    echo'Ridu kokku:'. count($andmed);
    echo '</tr>';
    echo '</thead>';
    echo '<tbody  style="border: 1px solid black">';
    foreach ($andmed as $tabeliRida){
        echo '<tr style="border: 1px solid black" border-collapse="collapse">';
      echo  '<td>'.$tabeliRida['enimi'].'</td>';
      echo  '<td>'.$tabeliRida['pnimi'].'</td>';
      echo  '<td>'.$tabeliRida['kontakt'].'</td>';
      echo  '<td><a href="?kustutaID='.$tabeliRida['Id'].'">Kustuta</a></td>';
      echo  '<td><a href="?MuudaID='.$tabeliRida['Id'].'">Muuda</a></td>';

        echo '</tr>';
        }

    echo '<tbody>';
    echo '</table>';
}
function muudaAndmedVorm($andmed){
    echo
        '<form action="" method="get">
        <input type="text" name="Id" value="'.$andmed['Id'].'" hidden><br>
        Eesnimi <input type="text" name="enimi" value="'.$andmed['enimi'].'"><br>
        Perenimi <input type="text" name="pnimi" value="'.$andmed['pnimi'].'"><br>
        Kontakt <input type="text" name="kontakt" value="'.$andmed['kontakt'].'"><br>
        <input type="submit" value="Muuda" name="muudanyyd">
    </form>';
}