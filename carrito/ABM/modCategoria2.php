<?php

if(mysqli_connect("localhost","root","","carrito")){
	
	$con = mysqli_connect('localhost','root','','carrito');
	
	if(isset($_POST['nombreCat']) and isset($_POST['codigoCat'])){
		$nombre = $_POST['nombreCat'];
		$codigo = $_POST['codigoCat'];
		
		$consulta = "UPDATE categorias SET categoria='$nombre' WHERE idCategoria='$codigo'";
		
		if($resultado = mysqli_query($con,$consulta)){
		//GUARDA el RESULTADO DE "consulta SQL"
		
		
			echo "<h1>Categoria $nombre fue modificada!! </h1>";
			echo "<p><a href='index.php'>Inicio</a></p>";
		
		
		
	}
		
		
	}
	
	
}else{
	
	echo "No se pudo agregar $nombre";
	
	
}


?>