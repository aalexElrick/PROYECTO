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
        <script src="<?php echo base_url();?>/assets/js/iniciar.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/inicioP.css">
    </head>
    <body>
        <main role="main" class="container my-auto">
            <div class="row">
                <div id="login" class="col-lg-4 offset-lg-4 col-md-6 offset-md-3
                    offset-col-sm-4 col-xs-4">
                    <h2 class="text-center">Login</h2>
                    <section class="text-center">
                    <img src="<?php echo base_url(); ?>/assets/image/logo.png" class="img-responsive" width="50%" >
                    </section>

                    <form method="POST" action="<?php echo base_url();?>/index.php/Hospital/menu"  role= "form" onsubmit="return validai();" >
                        <div class="form-group">
                            <label for="Correo">Correo</label>
                            <input id="Correo" name="Correo"
                                class="form-control" type="email">
                        </div>
                        <div class="form-group">
                            <label for="Contraseña">Contraseña</label>
                            <input id="Contraseña" name="Contraseña"
                                class="form-control" type="password">
                        </div>
                        <button class="btn btn-light mb-2" type="submit">
                            <a>Entrar</a>
                        </button>
                        <button  class="btn btn-light mb-2">
                           <a href="registro">Crear Cuenta</a> 
                        </button>
                        <button class="btn btn-light mb-2">
                            <a href="MenuAdmin">Administrador</a>
                        </button>
                        <br>
                        <a href="#">Contraseña olvidada</a>
                    </form>
                </div>
            </div>
        </main>
    </body>

</html>