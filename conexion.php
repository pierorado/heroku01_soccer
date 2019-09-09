<?php
 $host="ec2-174-129-27-158.compute-1.amazonaws.com";
	$usuario="ascbovghbpnyir";
	$clave="e6a76c664ecdaf92eedd61ca71b44201e32782c6e77f36988bb17bf078e784ce";
	$base="ec2-174-129-27-158.compute-1.amazonaws.com";
	$port="5432";

	 $conexion=new mysqli($host,$usuario,$clave,$base,$port); 
	

     if ($conexion->connect_errno) 
     {
 	    die("fallo de la conexion");
 	 }

?>