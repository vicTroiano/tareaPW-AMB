<?php

if(mysqli_connect("localhost","root","","carrito")){
	
	$con = mysqli_connect('localhost','root','','carrito');
	
	if(isset($_POST['categoria'])){
		$nombre = $_POST['categoria'];
		
		$consulta = "INSERT INTO categorias (categoria) VALUE ('$nombre')";
		
		if($resultado = mysqli_query($con,$consulta)){
		//GUARDA el RESULTADO DE "consulta SQL"
		
			echo "<h1>Categoria $nombre Agregada!!! </h1>";
				echo "<p><a href='index.php'>Inicio</a></p>";
		
		
	}
		
		
	}
	
	
}else{
	
	echo "No se pudo agregar $nombre";
	
	
}


?>