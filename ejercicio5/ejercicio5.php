<?php

	$base = $_POST['postpbase'];//Se obtiene el numero por medio de post usando AJAX
	$potencia = $_POST['postpotencia'];
	$resultado;
	$i=0;
	
	$res = 1;

	/*con un for se realizan los calculos matematicos que corresponde el multiplica
	la base por ella misma segun indique la potencia*/
	for ($i=0; $i < $potencia ; $i++){

		 	$res *= $base;

	}

	//valoriable con el valor del resultado final de la operacion matematica
	//el cual es retornado al javascript 	
	echo  $res;

	
?>


