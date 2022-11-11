<?php

if(mysqli_connect("localhost","root","","carrito")){
	
	$con = mysqli_connect('localhost','root','','carrito');
	
	if(isset($_GET['categoria'])){
		$codigo = $_GET['categoria'];
		
		$consulta = "DELETE FROM categorias WHERE idCategoria='$codigo'";
		
		if($resultado = mysqli_query($con,$consulta)){
		//GUARDA el RESULTADO DE "consulta SQL"
		
			echo "<h1>LA Categoria $codigo fue ELIMINADA !!! </h1>";
			echo "<p><a href='index.php'>Inicio</a></p>";
		
		
	}
		
		
	}
	
	
}else{
	
	echo "No se pudo ELIMINAR $codigo";
	
	
}


?>



