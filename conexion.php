<?php
 $host="ec2-174-129-27-158.compute-1.amazonaws.com";
	$User="ascbovghbpnyir";
	$Password="e6a76c664ecdaf92eedd61ca71b44201e32782c6e77f36988bb17bf078e784ce";
	$Database="d5jcl6jn7055pr";
	$Port="5432";

	 $conexion=new mysqli($host,$User,$Password,$Database,$Port); 
	

     if ($conexion->connect_errno) 
     {
 	    die("fallo de la conexion");
 	 }

?>