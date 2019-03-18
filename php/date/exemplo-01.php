<?php

//atualiza a hora no horario de brasilia
date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_ALL, 'pt_BR');

echo date("d/m/Y H:i:s");

echo "<br>";

echo time();








?>