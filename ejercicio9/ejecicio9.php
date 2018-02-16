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
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	    <script type="text/javascript">
        $(document).ready( function () {
    		$('#table').DataTable();
		} );
    </script>
</head>
<body id="body" style="background-color: rgba(0, 44, 32, 0.4);">
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
		      <li><a href="../ejercicio9/form.php">Ejercicio 9</a></li>
		    </ul>
		  </div>
		</nav>




	<form id="form" method="POST" action="funcion.php" style="margin:auto; margin-top: 2%; width: 45%; border: 1px solid; padding: 2%;">
		<center><h4>EJERICIO 9 </h4></center>
		  <div class="form-group">
			  	<br>
			  	<label>Seleccione el tipo de conversion</label>
			<select class="form-control" id="tipo" name="tipo" data-max-options="1">
				<option value="" selected="selected">coversiones</option>
				  <option value="1">Longitud</option>
				  <option value="2">Volumen</option>
				  <option value="3">Peso</option>
			</select> 	
			<br>	
			
		  </div>
	</form>
	<br>
	
<div id="resul"></div>

</body>
</html>