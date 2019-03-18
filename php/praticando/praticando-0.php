<?php

interface Escola{

	public function serie1 ($sala1);
	public function serie2($sala2);
	public function serie3($sala3);
}
class serie implements Escola{

	public function serie1($sala1){

		echo "o aluno parou na".$sala1."estudos";
	}

	public function serie2($sala2){

		echo "o aluno parou na".$sala2."estudos";
	}

	public function serie3($sala3){

		echo "o aluno parou na".$sala3;
	}
}
$ensino = new serie();
$ensino->serie3(2);










?>











