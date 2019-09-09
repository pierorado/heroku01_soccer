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


    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      	<div class="colum_description">
      		<h4>Descripcion</h4>
      		<p><?php echo $description; ?></p>
      		<h4>Historia</h4>
      		<p><?php echo $history; ?></p>
      	</div>



      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">2</div>
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