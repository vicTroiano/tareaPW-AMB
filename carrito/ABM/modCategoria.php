<?php

if(mysqli_connect("localhost","root","","carrito")){
	
	$con = mysqli_connect('localhost','root','','carrito');
	
	if(isset($_GET['categoria'])){
		$codigo = $_GET['categoria'];
		
		$consulta = "SELECT idCategoria, categoria FROM categorias WHERE idcategoria='$codigo'";
		
		if($resultado = mysqli_query($con,$consulta)){
		//GUARDA el RESULTADO DE "consulta SQL"
		$fila= mysqli_fetch_array($resultado);
			echo "<h1>Modificar categoria</h1>";
			
			echo "<form action='modCategoria2.php' method='post'>";
			echo "<p>$fila[idCategoria]</p>";
			
			echo "<input type='hidden' name='codigoCat' value=$fila[idCategoria]>";
			
			echo "<input type='text' name='nombreCat' value=$fila[categoria]>";
			
			echo "<input type='submit' value='Modificar categoria'>";
			
			echo "</form>";
		
		
		
	}
		
		
	}
	
	
}else{
	
	echo "No se pudo ELIMINAR $codigo";
	
	
}


?>



