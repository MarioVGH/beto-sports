<?php

$destino = "http://localhost/beto-sports/"
$Correo = $_POST["Correo"];
$contenido = "Correo".$Correo "\nComentarios".$comentarios;
mail($destino, "Contacto", $contenido);
header("location:gracias.html");
 ?>
