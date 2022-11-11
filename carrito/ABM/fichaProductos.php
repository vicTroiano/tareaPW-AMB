<?php


if(mysqli_connect("localhost","root","","carrito")){
	 
	
	echo "<h1>Listado productos - ABM</h1>";
	

	
	$con = mysqli_connect('localhost','root','','carrito');
		
	$consulta = "SELECT codigoProducto, nombreProducto FROM productos";
		
	
	if($resultado = mysqli_query($con,$consulta)){
		
		echo "<table border=1>";
		echo "<caption>Productos ABM</caption> ";
			echo "
				<tr>
					<th>Productos</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			
			
			
			";
			while($fila = mysqli_fetch_array($resultado)){
				echo "<tr>";
					echo "<td>$fila[nombreProducto]</td>";
					echo "<td><a href=modProducto.php?productos=$fila[nombreProducto]> Mod</a></td>";
					echo "<td><a href=borProducto.php?productos=$fila[codigoProducto]> Bor</a></td>";
				echo "</tr>";
			}
		echo "</table>";
		
		
	}
	
	
	
	
	
}else{
	
	echo "No hay conexion";
	
	
}





?>

<form action="altaProducto.php" method="post">
	<label for="nombreProducto">Nuevo Producto</label>
	<input type="text" id="nombreProducto" name="nombreProducto">

	<input type="submit" value="Agregar Producto">
</form>