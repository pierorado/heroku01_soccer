<?php  

include "conexion.php";
$consulta="SELECT * FROM SPORTS";
$sql=mysqli_query($conexion,$consulta);
$result=mysqli_num_rows($sql);
if ($result==0) {
			echo "no hay respuesta ";
		}else{
			while ($data=mysqli_fetch_array($sql)) {
				 
			 $name=$data["name"];
			 $description=$data["descripcion"];
			 $history=$data["historia"];
			}
		}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Catalago - Deportes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
.contenedor{
	margin: 0;
	padding: 50px;
	
	
}
</style>
</head>
<body>
	<div class="contenedor" >
		<h1>Deportes Panamericanos</h1>
		<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">

      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><?php echo $name; ?></a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Baloncesto</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Boxeo</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Canotaje velocidad</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Ciclismo Bmx</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Esgrima</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Futbol</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Gimnasia</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Canotaje velocidad</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Canotaje velocidad</a>


    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      	<div class="colum_description">
      		<h4>Descripcion</h4>
      		<p>Lima 2019 reunirá a un máximo de 740 competidores, entre masculinos y femeninos en todas las pruebas. El país más destacado en atletismo en la historia de los Juegos Panamericanos es Estados Unidos, que suma 709 medallas, de las cuales 292 son de oro. La sede central de atletismo será el Estadio Atlético, de la Villa Deportiva Nacional (Videna). Tan solo la maratón y marcha atlética se desarrollarán en un circuito en el distrito de Miraflores que tendrá como inicio y final el emblemático Parque Kennedy.</p>
      		<h4>Historia</h4>
      		<p>El atletismo es la forma organizada más antigua de deporte y se viene celebrando desde hace miles de años. Las primeras reuniones organizadas de la historia fueron los Juegos Olímpicos, que iniciaron los griegos en el año 776 a.C. El atletismo posteriormente adquirió un gran seguimiento en Europa y América.</p>
      	</div>



      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      	<div class="colum_description">
      		<h4>Descripcion</h4>
      		<p>Se enfrentan dos equipos de cinco jugadores, en una cancha de 28 metros de largo por 15 de ancho. Gana el equipo que anote más puntos introduciendo el balón en la canasta del equipo contrario, ubicada a 3,05 metros del suelo.</p>
      		<h4>Historia</h4>
      		<p>Su creación ha sido atribuida al canadiense James Naismith en 1891, como método para ejercitar a sus alumnos en Nueva Inglaterra, Estados Unidos. Originalmente utilizó dos canastas de duraznos, y se cambiaron en 1906, por aros de metal con tableros. En la actualidad es uno de los deportes más populares en el mundo.</p>
      	</div>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">3</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    </div>
  </div>
</div>

		

	</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>