<?php

if(mysqli_connect("localhost","root","","carrito")){
	
	$con = mysqli_connect('localhost','root','','carrito');
	
	if(isset($_GET['categoria'])){
		$codigo = $_GET['categoria'];
		
		$consulta = "SELECT codigoProducto, nombreProducto, precioProducto, descripcionProducto FROM productos WHERE categoriaProducto='$codigo' ";
		
		if($resultado = mysqli_query($con,$consulta)){
		//GUARDA el RESULTADO DE "consulta SQL"
		
			while($fila = mysqli_fetch_array($resultado)){
				echo "<div>";
					echo "<h2><a href=ficha.php?prod=$fila[codigoProducto]>$fila[nombreProducto]</a></h2>";
					echo "<p>Precio: $fila[precioProducto]</p>";
					echo "<p>Descripcion: $fila[descripcionProducto]</p>";
				echo "</div>";
			}
		
		
		
	}
		
		
	}
	
	
}else{
	
	echo "No hay conexion";
	
	
}


?>