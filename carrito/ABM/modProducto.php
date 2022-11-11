<?php

if(mysqli_connect("localhost","root","","carrito")){
	
	$con = mysqli_connect('localhost','root','','carrito');
	
	if(isset($_POST['nombreProd']) and isset($_POST['codigoProd'])){
		$nombre = $_POST['nombreProd'];
		$codigo = $_POST['codigoProd'];
		
		$consulta = "UPDATE productos SET nombreProducto='$nombre' WHERE codigoProducto='$codigo'";
		
		if($resultado = mysqli_query($con,$consulta)){
		//GUARDA el RESULTADO DE "consulta SQL"
		
		
			echo "<h1>Producto $nombre fue modificado!! </h1>";
			echo "<p><a href='index.php'>Inicio</a></p>";
		
		
		
	}
		
		
	}
	
	
}else{
	
	echo "No se pudo agregar $nombre";
	
	
}


?>