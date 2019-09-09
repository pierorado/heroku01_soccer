<?php
/*
 $host="ec2-174-129-27-158.compute-1.amazonaws.com";
	$user="ascbovghbpnyir";
	$password="e6a76c664ecdaf92eedd61ca71b44201e32782c6e77f36988bb17bf078e784ce";
	$database="d5jcl6jn7055pr";
	$port="5432";

	 $conexion=new mysqli($host,$user,$password,$database,$port); 
	

     if ($conexion->connect_errno) 
     {
 	    die("fallo de la conexion");
 	 }
 	 */
 	 $dbopts = parse_url(getenv('DATABASE_URL'));
$conexion->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
               array(
                'pdo.server' => array(
                   'driver'   => 'pgsql',
                   'user' => $dbopts["ascbovghbpnyir"],
                   'password' => $dbopts["e6a76c664ecdaf92eedd61ca71b44201e32782c6e77f36988bb17bf078e784ce"],
                   'host' => $dbopts["ec2-174-129-27-158.compute-1.amazonaws.com"],
                   'port' => $dbopts["5432"],
                   'dbname' => ltrim($dbopts["d5jcl6jn7055pr"],'/')
                   )
               )
);

?>