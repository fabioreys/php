<?php
interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{
	public function acelerar($velocidade){
		echo "o veiculo acelerou ate".$velocidade."km/h";
	}
	public function frenar($velocidade){
		echo "o carro frenou em".$velocidade."km/h";
	}
	public function trocarMarcha($marcha){
		echo "o carro trocou a marcha".$marcha;
	}

}

class Delrey extends Automovel{

	public function empurrar(){

	}
}
$carro = new Delrey();
$carro->acelerar(200);


?>