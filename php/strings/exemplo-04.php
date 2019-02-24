<?php
$frase = "a repeticão e a mãe da repecição.";

$palavra = "mãe";


//a partir da primeira letra que e a 0 conta 17 casas pra chegar a palavra mae//
$q = strpos($frase,$palavra);

//com esta função a frase so sera impressa ate repetição 17, que e representada aqui pela variavel $q.//
$texto = substr($frase,0,$q);


//qual e o resultado desta função//
var_dump($texto);

$texto2 = substr($frase,$q + strlen($palavra),strlen($frase));
echo "<br>";

var_dump($texto2);












?>