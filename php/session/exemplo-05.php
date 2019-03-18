<?php
require_once("config.php");

echo session_save_path();
echo "<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()){
    
    case PHP_SESSION_DISABLED:
    echo"as sessoes desabilitadas";
    break;

    case PHP_SESSION_NOME:
    echo"as sessoes estiverem habilitadas,mas nenhuma existir";
    break;

    case PHP_SESSION_ACTIVE:
    echo"as sessoes estiverem habilitadas, e uma a existir";
    break;

}








?>