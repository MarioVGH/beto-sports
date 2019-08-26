<?php
include "configs/config.php";
include "configs/funciones.php";

if(!isset($p)){
	$p="principal";
}else{
	$p=$p;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Beto's Sports</title>
</head>
<body>
	<div class="header">
		Lo mejor en articulos deportivos
	</div>
	<div class="menu">
		<a href="?p=principal">Principal</a>
		<a href="?p=productos">Productos</a>
		<a href="?p=ofertas">Ofertas</a>
		<a href="?p=carrito">Carrito</a>
	</div>
	<div class="cuerpo">
		<form action ="ENVIAR.php" method="post">
			<h2>CONTACTO<h2/>
				<input type="text" name="Correo" placeholder="Correo">
				<textarea name ="comentarios" placeholder="Escriba su comentario"></textarea>
		<input type="submit" value="ENVIAR" id="Button">
		</form>
		<?php
			if(file_exists("modulos/".$p.".php")){
				include "modulos/".$p.".php";
			}
			else{
				echo "<i>No se ha encontrado el modulo <b>".$p."</b> <a href='./'>Regresar</a></i>";
			}
		?>
	</div>

	<div class="footer">
		Copyrigth Rendimiento de Sistemas - FCFM &copy; <?=date("Y")?>
	</div>
</body>

</html>
