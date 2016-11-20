
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veterinaria</title>

      <link rel="shortcut icon" href="<?= base_url() ?>plantilla/pet.ico">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>plantilla/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>plantilla/css/bootstrap-theme.css">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>plantilla/css/background.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

      <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
      <script src="<?= base_url() ?>plantilla/javascript/image.js"></script>
  </head>

  <body background="<?= base_url() ?>plantilla/background.jpg">
    <div class="container">
    <br><br><br><center><img src="<?= base_url() ?>plantilla/image.png" class="image-responsive" width="180" height="160"></center><br><br><br>

    <form method="POST" class="form-horizontal" action="<?php echo base_url('/seguridad/login'); ?>">
      <div class="row">

        <div class="col col-md-4"></div>

        <div class="col col-md-4">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              <input type="text" name="usuario" class="form-control" autofocus placeholder="USUARIO"/>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
              <input type="password" name="clave" class="form-control" placeholder="CONTRASEÑA">
            </div>
          </div>

          <br/><button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                <center><label class="control-label">¿Aun no tienes una cuenta?</label></center>
            <a onclick="location.href='<?php echo base_url('/usuario');?>'" class="btn btn-success btn-block">Registrarse</a>

        </div>
        <div class="col col-md-4"></div>
  </body>
</html>
