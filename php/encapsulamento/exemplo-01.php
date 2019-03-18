<?php
class Pessoa{

	public $nome = "fabio reis";
	protected $idade =39;
	private $senha = "123456";

	public function verdados(){

		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->senha."<br>";


	}
}
$objeto = new Pessoa();

//echo $objeto->senha."<br>";

$objeto->verDados();








?>