<?php
class Endereco{
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a,$b,$c){
		$this->logradouro=$a;
		$this->numero=$b;
		$this->cidade=$c;
	}
	//para destruir a funcao//
	public function __destruct(){
		var_dump("DESTRUIR");
	}
}
$meuEndereco=new Endereco("rua 10","125","vitoria");
var_dump($meuEndereco);

unset($meuEndereco);






?>