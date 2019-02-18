<?php
$nome = "fabio";
function teste() {
	global$nome;

	echo $nome;

}

function teste2() {
	$nome = "joao";
	echo$nome. "agora no texte2";


}

teste();
teste2();


