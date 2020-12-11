<?php ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Foro</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/foroP.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/Bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>/assets//js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-3.3.1-slim.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/pooper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets//js/foroVali.js"></script>
</head>

<div class="container">
  <div class="row">
	<div class="col-lg-11 col-md-11 col-sg-11 pr-4 pb-2 text-center ">
    <h1 class=titulos><strong>Foro de preguntas</strong></h1>
  </div>
</div>
</div>

<div class="container ">
  <div class="row ">
	<div class="col-lg-6 col-md-12 col-sm-12 pl-5 pb-5">
    <h1 class=titulos><strong>¿Donde nos ubicamos?</strong></h1>
    <h2 class=forocaja>Nos encontramos a un costado en el boulevard las torres a la altura de la UAEH a un costado del instituto Hidalgense</h2>
	</div>
	<div class="col-lg-6 col-md-12 col-sm-12 pl-5 pb-5">
    <h1 class=titulos><strong>¿Cual es el costo de las consultas?</strong></h1>
    <h2 class=forocaja>Si tienen seguro, no tiene ningun costo, pero al no contar con seguro, las consultas generales tienen un costo de 70$</h2>
  </div>
</div>
</div>

<div class="container ">
  <div class="row ">
	<div class="col-lg-6 col-md-12 col-sm-12 pl-5 pb-4">
    <h1 class=titulos><strong>¿que horario tienen?</strong></h1>
    <h2 class=forocaja>Estamos abiertos las 24 horas del dia, ciertas areas manejan un horario restringido, pero se les puede atender en cualquier momento
    </h2>
  </div>
  
	<div class="col-lg-6 col-md-12 col-sm-12 pl-5 pb-4 " >
    <h1 class=titulos><strong>¿por que no puedo agendar una consulta?</strong></h1>
    <h2 class=forocaja>Es necesario registrarse en la pagina para poder agendar una cita</h2>
  </div>
</div>
</div>

<div class="container d-flex">
  
	<div class="col-lg-12 col-md-12 col-sm-12 pr-4 pb-2 pl-5 pt-5">  
  <form method="POST" action="<?php echo base_url();?>/index.php/Hospital/objectForo" name="Foro" class="Foro" onsubmit="return valiforo();">
      <label class="titulos" ><strong>Escriba su pregunta </strong></label>
      <input class=Cajapregunta name="Pregunta" id="Pregunta">
      <button class=boton1><strong>Enviar</strong></button>
  </div>

</form>
</div>
</html>