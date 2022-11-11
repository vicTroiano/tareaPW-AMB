<?php
if(mysqli_connect("localhost","root","","carrito")){
	
	$con = mysqli_connect('localhost','root','','carrito');
	
	if(isset($_GET['prod'])){
		$codigo = $_GET['prod'];
		
		$consulta = "SELECT codigoProducto, nombreProducto, precioProducto, descripcionProducto, cantidadProducto, detallesProducto FROM productos WHERE codigoProducto='$codigo' ";
		
		if($resultado = mysqli_query($con,$consulta)){
		//GUARDA el RESULTADO DE "consulta SQL"
		
			while($fila = mysqli_fetch_array($resultado)){
				echo "<div>";
					echo "<h2>$fila[nombreProducto]</h2>";
					echo "<p>Precio: $fila[precioProducto]</p>";
					echo "<p>Descripcion: $fila[descripcionProducto]</p>";
					echo "<p>Stock: $fila[cantidadProducto]</p>";
					echo "<p>Detalles: $fila[detallesProducto]</p>";
				echo "</div>";
			}
		
		
		
	}
		
		
	}
	
	
}else{
	
	echo "No hay conexion";
	
	
}


?>