
<?php

if(mysqli_connect("localhost","root","","carrito")){
	
	$con = mysqli_connect('localhost','root','','carrito');
	
	if(isset($_GET['productos'])){
		$codigo = $_GET['productos'];
		
		$consulta = "DELETE FROM productos WHERE codigoProducto='$codigo'";
		
		if($resultado = mysqli_query($con,$consulta)){
		//GUARDA el RESULTADO DE "consulta SQL"
		
			echo "<h1>El Producto '$codigo' fue ELIMINADO !!! </h1>";
			echo "<p><a href='index.php'>Inicio</a></p>";
		
		
	}
		
		
	}
	
	
}else{
	
	echo "No se pudo ELIMINAR $codigo";
	
	
}


?>

