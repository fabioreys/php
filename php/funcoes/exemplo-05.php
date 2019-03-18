<?php
$a = 10;

//com o & comercial , passagem de parametro por referencia.(o que acontece na funcao muda o valor na variavel)
function trocavalor(&$a){

	$a=50;
	return $a;
}
echo trocavalor ($a);
echo "<br>";
echo $a;





?>