<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Ejercicio 1</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body style="background-color: rgba(99, 71, 202, 0.2);">
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
	<form method="POST" action="ejercicio1.php" style="margin:auto; margin-top: 2%; width: 45%; border: 1px solid; padding: 2%;">
		<center><h4>EJERICIO 1</h4></center>
	  <div class="form-group">
	  	<br>
	    <label>Ingrese un numero</label>

	    <!--los input de tipo "number" solo admiten numeros enteros cuando el step es 1 -->
	    <input type="number" class="form-control" min="0" step="1" name="num" placeholder="0" required >
	  </div>
	 <input type="submit" value="Enviar" class="btn btn-default" style="border: 1px solid;">
	</form>

</body>
</html>