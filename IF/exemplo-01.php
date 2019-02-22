<?php
$qualasuaidade = 125;
$idadeCrianca  = 12;
$idadeMaior    = 18;
$idadeMelhor   = 65;

//a condicao if significa se ///
if($qualasuaidade < $idadeCrianca ){
   
   echo "crianca";
//essa condicao significa senao//
	}else if($qualasuaidade < $idadeMaior){
echo "adolecente";


}else if($qualasuaidade < $idadeMelhor){
	echo "adulto";

}else{
	echo "idoso";
}
echo"<br>";

//? significa se, e o : significa senao//
echo($qualasuaidade < $idadeMaior)?"menor de idade":"maior de idade";


 










?>