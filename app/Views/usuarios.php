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

</head>
<body >
    <div class="row">
        <section class="col-lg-8 col-md-6 col-sm-12 col-xs-12" align="center">
<table style="">
        <tr>
            <th>||</th>
            <th>Nombre</th>
            <th>||</th>
            <th>Apellido</th>
            <th>||</th>
            <th>Correo</th>
            <th>||</th>
            <th>Telefono</th>
            <th>||</th>
            <th>Contraseña</th>
            <th>||</th>

        </tr>

        <?php
            foreach($usuarios as $key){
                echo '<tr>';
                echo '<td>';
                echo '<td>' . $key['Nombre'];
                echo '<td>';
                echo '<td>' . $key['Apellido'];
                echo '<td>';
                echo '<td>' . $key['Correo'];
                echo '<td>';
                echo '<td>' . $key['Telefono'];
                echo '<td>';
                echo '<td>' . $key['Contraseña'];
                echo '<td>';
                echo '</tr>';
            }
         ?>
    </table>
    </section>
	<section class="col-lg-4  col-md-4 col-sm-12 d-none d-md-block col-xs-12 pb-5 ">
		<img src="<?php echo base_url();?>/assets/image/mante.png" width="90%"  align="right">
    </section>
    </div>
</body>
</html>