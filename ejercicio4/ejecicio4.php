<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/validacion.js"></script>
	<title>Ejercicio 4</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body style="background-color: rgba(43, 87, 163, 0.3);">
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


	
<div class="form">
	<form method="POST" id="producto" action="ejercicio4.php" style="margin:auto; margin-top: 2%; width: 45%; border: 1px solid; padding: 2%;">
		<center><h4>EJERICIO 4</h4></center>
	  <div class="form-group">
	  	<br>
	    <label>Seleccione el producto</label>
	    <br>
	    <select class="form-control" id="util" name="util" data-max-options="1">
	    	<option selected="selected" value="" id="ut">Utiles</option>
		  <option value="$1.20">Cuadernos</option>
		  <option value="$0.15">Lapices</option>
		  <option value="$0.35">Lapiceros</option>
		  <option value="$0.30">Borradores</option>
		  <option value="$0.45">Reglas</option>
		</select>
		<br>
		<label>Precio por unidad (c/u)</label>
		<input type="text" class="form-control" min="0" name="precio" id="precio" readonly="readonly">
		<br>
		<label>Introduzca la cantidad del producto</label>	    
	    <input type="text" id="cantidad" name="cantidad" class="form-control" min="0" step="1" name="num" placeholder="" required="required">
	  </div>
	 <input type="button" id="btn" value="Enviar" class="btn btn-default">
	 <center><div class="alert alert-danger" id="warning" style="display: none;">Ingrese un numero entero</div></center>
	 <center><div class="alert alert-warning" id="warning2" style="display: none;">Parametros ingresados correctamente!</div></center>
	</form>
</div>

</body>
</html>