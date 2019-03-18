<?php
$pessoa = array(

"nome"=>"fabio",
"valor"=>20

);

//esse & muda o valor da minha variavel.
foreach($pessoa as &$value){

	if(gettype($value)=== "integer")$value+=10;

	echo $value."<br>";
}
print_r($pessoa);




?>