<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>consultas</title>
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/consultaP.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Bootstrap.min.css">
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
            <th>Apellidos</th>
            <th>||</th>
            <th>Edad</th>
            <th>||</th>
            <th>Estatura</th>
            <th>||</th>
            <th>Fecha</th>
            <th>||</th>
            <th>Hora</th>
            <th>||</th>
            <th>Doctor</th>
            <th>||</th>
            <th>Correo</th>
            <th>||</th>

        </tr>

        <?php
            foreach($usuarios as $key){
                echo '<tr>';
                echo '<td>';
                echo '<td>' . $key['Nombre'];
                echo '<td>';
                echo '<td>' . $key['Apellidos'];
                echo '<td>';
                echo '<td>' . $key['Edad'];
                echo '<td>';
                echo '<td>' . $key['Estatura'];
                echo '<td>';
                echo '<td>' . $key['Fecha'];
                echo '<td>';
                echo '<td>' . $key['Hora'];
                echo '<td>';
                echo '<td>' . $key['Doctor'];
                echo '<td>';
                echo '<td>' . $key['Correo'];
                echo '<td>';
                echo '</tr>';
            }
         ?>
    </table>
    </section>
	<section class="col-lg-4  col-md-4 col-sm-12 d-none d-md-block col-xs-12 pb-5 ">
		<img src="<?php echo base_url();?>/assets/image/imss.png" width="90%"  align="right">
    </section>
    </div>
</body>
</html>