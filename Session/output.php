<?php
// login form

function loginVorm() {
    echo '
    <form method="post">
  Kasutajanimi: <input type="text" name="nimi"><br>
  Parool: <input type="password" name="parool"><br>
   <input type="submit" name="Logi sisse">
</form>';
}