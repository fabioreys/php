<?php
//declaracao de tipos escalares.

function soma (int...$valores){
	return array_sum($valores);
}
echo soma(10,10);
echo "<br>";

echo soma(20,20);
echo "<br>";

echo soma(100,100);
echo "<br>";



?>