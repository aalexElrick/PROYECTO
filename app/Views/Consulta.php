
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>consultas</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/consultaP.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/Bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-3.3.1-slim.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/pooper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets//js/main.js"></script>
</head>

<body>
<div class="container-fluid d-flex pt-5 ">
	<section class="col-lg-7 col-md-5 col-sm-12 col-xs-12" align="center">
    <form method="POST" action="<?php echo base_url();?>/index.php/Hospital/object" name="formulario" class="formulario"   onsubmit="return consulvali();">
<table border="0" cellpadding="0" cellspacing="0" width="50%">
    <tr>
        <td width="70%"><strong>Nombre: </strong></td>
        <td width="50%"><input type="text" name="Nombre" id="Nombre"></td>
    </tr>
    <tr>
        <td width="70%"><strong>Apellidos: </strong></td>
        <td width="50%"><input type="text"  name="Apellidos" id="Apellidos" ></td>
    </tr>
    <tr>
        <td width="70%"><strong>Edad: </strong></td>
        <td width="50%"><input type="text" name="Edad" id="Edad"></td>
    </tr>
    <tr>
        <td width="70%"><strong>Estatura: </strong></td>
        <td width="50%"><input type="text"  name="Estatura" id="Estatura"></td>
    </tr>
    <tr>
        <td width="70%"><strong>Fecha: </strong></td>
        <td width="50%"><input type="text"  name="Fecha" id="Fecha"></td>
    </tr>
    <tr>
        <td width="70%"><strong>Hora: </strong></td>
        <td width="50%"><input type="text"  name="Hora" id="Hora"></td>
    </tr>
    <tr>
        <td width="70%"><strong>Doctor: </strong></td>
        <td width="50%"><input type="text"  name="Doctor" id="Doctor"></td>
    </tr>
    <tr>
        <td width="70%"><strong>Correo: </strong></td>
        <td width="50%"><input type="text"  name="Correo" id="Correo"></td>
    </tr>
</table>
	</section>
	<section class="col-lg-5  col-md-5 col-sm-12 d-none d-md-block col-xs-12">
		<img src="<?php echo base_url();?>/assets/image/imss.png" width="90%"  align="right">
	</section>
</div>

<div class="text-center">
	<button class="boton1" type="submit">
		Enviar
	</button>
</div>
</form>
   <!-- Jquery JS-->
   <script src="<?php echo base_url();?>/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url();?>/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url();?>/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url();?>/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url();?>/assets/js/global.js"></script>
</body>
</html>