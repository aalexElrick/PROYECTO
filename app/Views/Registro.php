<?php ?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
        <meta name="description" content="Formulario de login con Bootstrap">
        <meta name="author" content="Parzibyte">
        <title>Formulario de login con Bootstrap</title>
        <script src="<?php echo base_url();?>/assets/js/registro.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/registroPp.css">
    </head>

    <body>
        <main role="main" class="container my-auto">
            <div class="row">
                <div id="login" class="col-lg-4 offset-lg-4 col-md-6 offset-md-3
                    offset-col-sm-4 col-xs-2">
                    <h2 class="text-center">Login</h2>
                     <section class="text-center">
                <img src="<?php echo base_url(); ?>/assets/image/usuario.png" class="img-responsive" width="50%" >
                    </section>
                    <form method="POST" action="<?php echo base_url();?>/index.php/Hospital/objectRegis" name="Foro" class="objectRegis" onsubmit="return valid();" >
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input id="Nombre" name="nombre"
                                class="form-control" type="nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input id="Apellido" name="Apellido"
                                class="form-control" type="apellido">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input id="Correo" name="Correo"
                                class="form-control" type="correo">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input id="Telefono" name="Telefono"    
                                class="form-control" type="telefono">
                        </div>
                        <div class="form-group">
                            <label for="palabraSecreta">Contraseña</label>
                            <input id="Contraseña" name="Contraseña"
                                class="form-control" type="password">
                        </div>
                        <button type="submit" class="btn btn-light mb-2">
                           Registrarse 
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </body>

  

</html>