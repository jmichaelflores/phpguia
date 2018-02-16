<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<title>Resultado</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/validacion.js"></script>
</head>
<body>

<?php

	$precio = $_POST['postprecio'];//Se obtiene el numero por medio de post usando AJAX
	$pago = $_POST['postpago'];
	$smg = "nan";
	$iva= $precio*0.13;
	$desc;
	$total;

	//se evalua el tipo de pago 
	if($pago == 15){

		$smg = "Efectivo";
		$desc = (($pago/100)*$precio);
		$total = $precio - $desc +$iva;
	}
	else{
		$smg = "Tarjeta";
		$desc = 0;
		$total = $precio + $iva;
	}

?>


<div class='table'>	
<?php		echo "
		<center><h1>Detalle de Factura</h1><center>
		<table class='table table-bordered' style='margin:auto; width:50%;'>
	    <thead>
	      <tr>
	        <th>Precio</th>
	        <th>Forma de pago</th>
	        <th>Descuento</th>
	        <th>IVA</th>
	        <th>TOTAL</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr clas='danger'>
	        <td>$".$precio."</td>
	      
	      
	        <td>".$smg."</td>
	     
	      			
	        <td>$".bcdiv($desc,1,2)."</td>
	   
	      
	        <td>$".bcdiv($iva,1,2)."</td>

	      
	        <td>$".bcdiv($total,1,2)."</td>
	      </tr>
	    </tbody>
	  </table>";
?>
</div>

</body>
</html>

