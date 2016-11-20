<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrarse</title>
    <link rel="shortcut icon" href="<?= base_url() ?>plantilla/page-ico.ico">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>plantilla/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>plantilla/css/background.css">
  </head>

  <body background="<?= base_url() ?>plantilla/background.jpg">
    <div class="container">
      <br><br><br>
      <font size="7" face="Tw Cen MT" color="#462727">Registrarse</font>
      <br><br><br>

      <form method="POST" class="form-horizontal" action="<?php  echo base_url('usuario/guardar'); ?>">
        <div class="row">

              <div class="col-sm-5 col-sm-offset-2">
                <div class="form-group">
                  <label class="control-label col-sm-3">Nombre</label>
                  <div class="col col-sm-8">
                    <input type="text" name="nombre" class="form-control" autofocus required l pattern="[a-zA-Z0-9-]+" title="Solo admite letas"/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-3">Usuario</label>
                  <div class="col col-sm-8">
                    <input type="text" name="usuario" class="form-control" pattern=".{5,14}" required title="De 5 a 14 Caracteres"/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-3">E-mail</label>
                  <div class="col col-sm-8">
                    <input type="text" name="email" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="ejemplo@this.com"/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-3">Contraseña</label>
                  <div class="col col-sm-8">
                    <input type="password" name="clave" class="form-control" pattern=".{6,16}" required title="De 6 a 16 Caracteres"/>
                  </div>
                </div>
          </div>
          <div class="col col-sm-3">
            <br/><button type="submit" class="btn btn-primary btn-block">Registrarse</button>
              <center><label class="control-label">¿Ya tienes una cuenta?</label></center>
              <a href="<?php echo base_url('/seguridad');?>" class="btn btn-info btn-block">Ir a Pagina Inicio</a>
          </div>

        </div>

      </form>
    </div>
  </body>
</html>
