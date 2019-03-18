<?php
class Documento{

	private $numero;

	public function getNumero(){
		return $this->numero;
	}
	public function setNumero($numero){
		$this->numero=$numero;
	}
}
class cpf extends Documento{

	public function validar():bool
	{
		$numerocpf=$this->getNumero();

		return true;
	}
}
$documento= new cpf();
$documento->setNumero("145452154212");
$documento->validar();

var_dump($documento->validar());

echo "<br>";

echo $documento->getNumero();




?>