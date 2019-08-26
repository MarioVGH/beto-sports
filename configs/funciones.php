<?php

	$con = mysqli_connect($host_mysql,$user_mysql, $pass_mysql) or die("Error al conectar al servidor mysql");
	mysqli_select_db($con,'beto') or die ("Error conectando a la base de datos");

?>
