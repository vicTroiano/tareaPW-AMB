<?php

if(mysqli_connect("localhost","root","","carrito")){
	//servidor, usuario administrador, contraseña, base de datos 
	
	echo "<h1>Listado categorias</h1>";
	
	/*$dato = array('hola', 'chau');
	echo $dato;*/
	
	$con = mysqli_connect('localhost','root','','carrito');
		//guarda los datos de conexion
	$consulta = "SELECT idCategoria, categoria FROM categorias";
		//guarda la "consulta SQL"
	
	if($resultado = mysqli_query($con,$consulta)){
		//GUARDA el RESULTADO DE "consulta SQL"
		echo "<ul>";
			while($fila = mysqli_fetch_array($resultado)){
				echo "<li>";
					echo "<a href=portada.php?categoria=$fila[idCategoria]> $fila[categoria]</a>";
				echo "</li>";
			}
		echo "</ul>";
		
		
	}
	
	
	
	
	
}else{
	
	echo "No hay conexion";
	
	
}


?>