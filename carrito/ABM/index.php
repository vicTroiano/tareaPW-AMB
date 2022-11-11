<?php
//hacer una tabla que muestre categorias modificar borrar

if(mysqli_connect("localhost","root","","carrito")){
	//servidor, usuario administrador, contraseña, base de datos 
	
	echo "<h1>Listado categorias - ABM</h1>";
	
	/*$dato = array('hola', 'chau');
	echo $dato;*/
	
	$con = mysqli_connect('localhost','root','','carrito');
		//guarda los datos de conexion
	$consulta = "SELECT idCategoria, categoria FROM categorias";
		//guarda la "consulta SQL"
	
	if($resultado = mysqli_query($con,$consulta)){
		//GUARDA el RESULTADO DE "consulta SQL"
		echo "<table border=1>";
		echo "<caption>Categorias ABM</caption> ";
			echo "
				<tr>
					<th>Categoria</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			
			
			
			";
			while($fila = mysqli_fetch_array($resultado)){
				echo "<tr>";
					echo "<td><a href=fichaProductos.php?categoria=$fila[categoria]>$fila[categoria]</a></td>";
					echo "<td><a href=modCategoria.php?categoria=$fila[idCategoria]> Mod</a></td>";
					echo "<td><a href=borCategoria.php?categoria=$fila[idCategoria]> Bor</a></td>";
				echo "</tr>";
			}
		echo "</table>";
		
		
	}
	
	
	
	
	
}else{
	
	echo "No hay conexion";
	
	
}





?>

<form action="altaCategoria.php" method="post">
	<label for="categoria">Nueva Categoria</label>
	<input type="text" id="categoria" name="categoria">

	<input type="submit" value="Agregar Categoria">
</form>




