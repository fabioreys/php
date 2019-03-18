<?php
$hierarquia = array(
        array(
           "nome_cargo"=>"CEO",
           "subordinados"=>array(
               //inicio diretor comercial.
           	array(
                "nome_cargo"=>"diretor comercial",
                "subordinados"=>array(
                	//inicio gerente de vendas
                	array(
                      "nome_cargo"=>"gerente de vendas"
                	)
                	//termino gerente de vendas
                )  
           	),
           	//termino diretor comercial.
           	//inicio diretor dinanceiro
           	array(
           		"nome_cargo"=>"diretor financeiro",
           		"subordinados"=>array(
           			//inicio gerente de contas a pagar
           			array(
           				"nome_cargo"=>"gerente de contas a pagar",
           				"subordinados"=>array(
                         //inicio supervisor de pagamentos
           					array(
                               "nome_cargo"=>"supervisor de pagamentos"
           					)

           					//termino supervisor de pagamentos
           				)

           			),
           			//termino gerente de contas a pagar
           			//inicio gerente de compras
           			array(
                       "nome_cargo"=>"gerente de compras",
                       "subordinados"=>array(
                       	//inicio supervisor de suprimentos
                         array(
                           "nome_cargo"=>"supervisor de suprimentos",
                         )

                       )
           			)
           		)

           	)
           	//termino diretor dinanceiro
           )
       )
);

function exibe($cargos){
	$html = "<ul>";

     foreach($cargos as $cargo){
     	$html.="<li>";

     	$html .=$cargo["nome_cargo"];

     	if(isset($cargo["subordinados"])&&count($cargo["subordinados"])>0){

     		$html.=exibe($cargo["subordinados"]);
     	}

     	$html.="</li>";
     }
     
     $html.="</ul>";

     return $html;

	
	
}








?>