<?php
	
	$cantidad = $_POST['postcantidad'];

	//evalua si el numero ingresado es un numero entero
	if (filter_var($cantidad, FILTER_VALIDATE_INT)){

		echo 1;// si el numero es entero retorna 1 
	}
	else{

		echo 0;// si el numero no es entero retorna 0
	}

?>


