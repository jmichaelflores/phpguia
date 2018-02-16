<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Resultado</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body style="background-color: rgba(99, 71, 202, 0.2); text-align: center;">
			<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Guia de Ejercicios</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="../index.html">Home</a></li>
		      <li><a href="../ejercicio1/ejecicio.php">Ejercicio 1</a></li>
		      <li><a href="../ejercicio2/ejecicio2.php">Ejercicio 2</a></li>
		      <li><a href="../ejercicio4/ejecicio4.php">Ejercicio 4</a></li>
		      <li><a href="../ejercicio5/ejecicio5.php">Ejercicio 5</a></li>
		      <li><a href="../ejercicio9/ejecicio9.php">Ejercicio 9</a></li>
		    </ul>
		  </div>
		</nav>

	<?php
	
	$num = $_POST['num'];//Se obtiene el numero por medio de la variable global
	$resultado=0;

	$resultado = $num % 5;//se divide el numero entre 5

	//se colacan los mensajes de salida en variables 
	$s = "El Numero ". $num ." SI es multiplo de 5";

	$n = "El Numero ". $num ." NO es multiplo de 5 ";

	//se utiliza el operador ternario y se evalua el resultado de la division, si el resultado es 0 se retornara el mensale almacenado en la variable $s si no, el valor de $n
	$final = ($resultado == 0) ? $s: $n;
		
		echo "<br>
		<table class='table table-bordered' style='margin:auto; width:30%; text-aling:center; background-color: white;'>
	    <thead>
	      <tr>
	        <th><center><h3>Resultado</h3></center></th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr clas='danger'>
	        <td>".$final."</td>
	      </tr>
	    </tbody>
	  </table>";
?>

</body>
</html>

