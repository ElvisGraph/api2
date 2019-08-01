<!DOCTYPE html>
<html>
<head>
	<title>Usuarios Random</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">	
<?php 	
$Api = file_get_contents('https://randomuser.me/api/?nat=us');
$Json = json_decode($Api);

foreach ($Json->results as $Dato) {
$A = [
    "Nombre" => $Dato->name->first,
    "Apellido" => $Dato->name->last,
    "Foto" => $Dato->picture->large,
    "Ciudad" => $Dato->location->city
  ]; ?>


<h1 class="text-center">Informacion</h1>
<div class="contenido text-capitalize text-center">
<div class="alert alert-light" role="alert">
<img src="<?= $A['Foto']?>" class="rounded-circle"><br>	
Nombre Completo: <?= $A['Nombre'].' '.$A['Apellido']?><br>		
Nombre: <?= $A['Nombre']?><br>	
Apellido: <?= $A['Apellido']?><br>	
Ciudad: <?= $A['Ciudad']?><br>	
</div>
</div>
<?php } ?>

</div>	
</body>
</html>

