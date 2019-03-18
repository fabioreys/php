<?php
interface Veiculo{
public function acelerar ($velocidade);
public function frenar($velocidade);
public function trocarMarcha($marcha);

}
class civic implements veiculo{

	public function acelerar($velocidade){
     
    echo "o veiculo acelerou ate".$veiculo."km/h";

	}
	public function frenar($velocidade){

		echo "o veiculo frenou ate".$veiculo."km/h";
	}
	public function trocarMarcha($marcha){

		echo "o veiculo engatou a marcha".$marcha;
	}

}
$carro= new civic();

$carro->trocarMarcha(2);







?>