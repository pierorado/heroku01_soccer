<?php
 $host="localhost";
	$usuario="root";
	$clave="";
	$base="heroku_deportes";

	 $conexion=new mysqli($host,$usuario,$clave,$base); 
	

     if ($conexion->connect_errno) 
     {
 	    die("fallo de la conexion");
 	 }

?>