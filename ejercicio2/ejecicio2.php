<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<title>Ejercicio 2</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/validacion.js"></script>

</head>
<body id="body" style="background-color: rgba(147, 220, 31, 0.3);">
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



	<form id="form" method="POST" action="ejercicio2.php" style="margin:auto; margin-top: 2%; width: 45%; border: 1px solid; padding: 2%;">
		<center><h4>EJERICIO 2 </h4></center>
	  <div class="form-group">
	  	<br>
	    <label>Precio ($USD)</label>
	  	
	    <input type="text" min="0" maxlength="14"  class="form-control" min="0" step="1" name="precio" id="precio" placeholder="00.00"  required>
	    
	    <br>

	    <label>Forma de pago</label>
	  	<br>

	    <input type="radio" name="pago" id="pago1" value="0" required>Tarjeta<br>
	    <input type="radio" name="pago" id="pago" value="15" required>Efectivo<br>
	    <br>
	    <center><div class="alert alert-info" id="warning3" style="" >Si paga en efectivo recibe el 15% de descuento</div></center>
	    
	  </div>
	 <input type="button" value="Comprar" id="btn" class="btn btn-default" style="border: 1px solid;">
	 	    <center><div class="alert alert-danger" id="warning2" style="display: none;">Seleccione una forma de pago</div></center>
	    <center><div class="alert alert-danger" id="warning" style="display: none;" >Debe ingresar el precio</div></center>
	</form>


</body>
</html>