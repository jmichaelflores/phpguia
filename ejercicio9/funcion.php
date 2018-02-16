<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	
	<title>Ejercicio 9</title>
	
	<script type="text/javascript" src="js/validacion.js"></script>
	<link rel="stylesheet" type="text/css" href="css/analisis.css">

	<link rel="stylesheet" type="text/css" href="DataTables/datatables.css">
    <script type="text/javascript" charset="utf8" src="DataTables/datatables.js"></script>
    <link rel="stylesheet" type="text/css" href="DataTables/tabla.js"> 

	    <script type="text/javascript">
        $(document).ready( function () {
    		$('#table').DataTable();
		} );
    </script>
</head>
<body id="body" style="background-color: rgba(109, 222, 236, 0.1);">


<?php

$opc = $_POST['posttipo'];

function longitud() {

	$i=0;
	$cm=0.25;
	$mts;
	$yar;
	$pulg;
	$pies;

echo "<center><h1>Equivalencias de medidas de longitud</h1><center>
		<table id='table' class='display'>
	    <thead>
	      <tr>
	        <th>Centrimetros(cm)</th>
	        <th>Metros(m)</th>
	        <th>Pulgadas(pul)</th>
	        <th>Pies(p)</th>
	        <th>Yardas(yd)</th>
	      </tr>
	    </thead>
	    <tbody>";
	for($cm>=0.25; $cm <= 10 ; $cm+0.25){

			$mts = $cm / 100;
			$pulg = $cm *0.393701;
			$yar = $cm * 0.0109361;
			$pies = $cm * 0.0328084;
			echo "<tr><td>".$cm."</td>
					<td>".$mts."</td>
					<td>".$pulg."</td>
					<td>".$pies."</td>
					<td>".$yar."</td>
				  </tr>";	
			$cm= $cm +0.25;
	}

	echo "</tbody>
	  </table>";
}

function volumen() {

    $i=0;
	$cm3=0.25;
	$mts3;
	$mili;
	$litros;
	$gal;

echo "<center><h1>Equivalencias de medidas de Volúmen</h1><center>
		<table id='table' class='display'>
	    <thead>
	      <tr>
	        <th>Centrimetros cúbicos(cm3)</th>
	        <th>Metros cúbicos(m3)</th>
	        <th>Mililitros(ml)</th>
	        <th>Litros(lt)</th>
	        <th>Galones(gal)</th>
	      </tr>
	    </thead>
	    <tbody>";
	for($cm3>=0.25; $cm3 <= 10 ; $cm3+0.25){

			$mts3 = $cm3 / 1000000;

			$mili = $cm3;
			$mt3 = sprintf("%05.8f", $mts3);

			$litros = $cm3 / 1000;			
			$lit=sprintf("%05.4f", $litros);

			$gal = $cm3 * 0.000264;
			$galo=sprintf("%05.6f", $gal);

			echo "</th><tr><td>".$cm3."</td><td>".$mt3."</td><td>".$mili."</td><td>".$lit."</td><td>".$galo."</td></tr>";
			$cm3= $cm3 +0.25;
	}

	echo "</tbody>
	  </table>";
}

function peso() {

    $i=0;
	$miligramos=0.25;
	$gramos;
	$onzas;
	$libras;

echo "<center><h1>Equivalencias de medidas de Peso</h1><center>
		<table id='table' class='display'>
	    <thead>
	      <tr>
	        <th>Miligramos(mg)</th>
	        <th>Gramos(g)</th>
	        <th>Onzas(oz)</th>
	        <th>Libras(lb)</th>
	      </tr>
	    </thead>
	    <tbody>";
	for($miligramos>=0.25; $miligramos <= 10 ; $miligramos+0.25){

			$gramos = $miligramos / 1000;


			$onzas = $miligramos * 0.000036;			
			$onz=sprintf("%05.6f", $onzas);

			$libras = $miligramos * 0.0000022;
			$lib=sprintf("%05.8f", $libras);

			echo "</th><tr><td>".$miligramos."</td><td>".$gramos."</td><td>".$onz."</td><td>".$lib."</td></tr>";
			$miligramos= $miligramos +0.25;
	}

	echo "</tbody>
	  </table>";
}


switch ($opc) {

	case '1':
		
		$func = 'longitud';
		$func();

		break;

	case '2':
		
		$func = 'volumen';
		$func();   
		break;

	case '3':
		
		$func = 'peso';
		$func();   
		break;
	
	default:
			//echo "Opcion desconocida";
		break;
}
 
?>
</body>
</html>