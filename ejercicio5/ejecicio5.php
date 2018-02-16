<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<title>Ejercicio 5</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/validacion.js"></script>

</head>
<body id="body" style="background-color: rgba(99, 71, 202, 0.2);">
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




	<form id="form" method="POST" action="ejercicio5.php" style="margin:auto; margin-top: 2%; width: 45%; border: 1px solid; padding: 2%;">
		<center><h4>EJERICIO 5 </h4></center>
	  <div class="form-group">
	  	<br>
	    <label>Ingrese el numero base</label>
	  	
	    <input type="text" min="0" maxlength="14"  class="form-control" min="0" step="1" name="base" id="base" placeholder="0" required>
	    
	    <br>

	    <label>Numero de potencia</label>
	  	<br>

	    <input type="text" name="potencia" id="potencia" value="" class="form-control" placeholder="0" required><br>
<input type="button" value="Calcular" id="btn" class="btn btn-default" style="border: 1px solid;">
	  </div>
	 
	 	    <center><div class="alert alert-danger" id="warning2" style="display: none;">Ingrese solo numeros</div></center>
	    <center><div class="alert alert-danger" id="warning" style="display: none;" >Debe ingresar el numero Entero</div></center>
	</form>

	<center><div id="resul"></div></center>

</body>
</html>