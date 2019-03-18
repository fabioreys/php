<?php
class Pessoa{
 
 public $nome;
 public function falar(){
 	return "eu sou:".$this->nome;
 }




}
$fabio=new Pessoa();
$fabio->nome="gatissimo";
echo $fabio->falar();
 











?>