<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mascotas</title>

      <link rel="shortcut icon" href="<?= base_url() ?>plantilla/pet.ico">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>plantilla/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>plantilla/css/bootstrap-theme.css">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>plantilla/css/background.css">
      <script src="<?= base_url() ?>plantilla/javascript/jquery-3.1.1.min.js"></script>
      <script src="<?= base_url() ?>plantilla/javascript/image.js"></script>
      <script src="<?= base_url() ?>plantilla/javascript/bootstrap.min.js"></script>

  </head>

  <body background="<?= base_url() ?>plantilla/background.jpg">
    <div class="container">
      <br><br><br>
      <div>
        <img src="<?= base_url() ?>plantilla/image.png" class="image-responsive" >
        <font size="7" face="Comic Sans MS">Mascotas</font>
      </div>
      <br><br><br>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Registrar una Mascota</button>
      <button data-toggle="collapse" data-target="#tabla" class="btn btn-info">Historial de Mascotas</button>
      <a class="btn btn-danger" type="button" href="<?php  echo base_url('seguridad/salir'); ?>">Cerrar Sesión</a>

      <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Registrar Mascota</h4>
            </div>

            <div class="modal-body">

                <form method="post" class="form-horizontal" enctype="multipart/form-data" action="<?php  echo base_url('mascotas/guardar'); ?>">
                  <div class="container-fluid">
                    <div class="row">

                    <div class="col-md-8 col-md-offset-2">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" name="nombre"  pattern="[a-zA-Z0-9-]+" title="Solo admite letas y numeros" required>
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Fecha de Nacimiento</label>
                        <div class="col-sm-7">
                          <input type="date" class="form-control" name="fecha" min="1995-01-01" max="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Tipo</label>
                        <div class="col-sm-7">
                          <select class="form-control" name="tipo">
                            <option data-hidden="true" disabled selected>Elige uno</option>
                            <option>Ave</option>
                            <option>Perro</option>
                            <option>Gato</option>
                            <option>Pez</option>
                            <option>Hamster</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                          <label class="col-sm-2 control-label">Raza</label>
                          <div class="col-sm-7">
                            <input type="text " class="form-control" name="raza" required />
                          </div>
                      </div>


                      <div class="form-group">
                        <label class="col-sm-2 control-label">Peso</label>
                        <div class="col-sm-5">
                          <input type="number" class="form-control" name="peso" min="0" max="400" placeholder="Kg" required />
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Color</label>
                        <div class="col-sm-5">
                          <input type="color" class="form-control" name="color">
                        </div>
                      </div><br><br>

                      <div class="col col-sm-9 col-12">
                        <div class="input-group">
                          <label class="input-group-btn">
                            <span class="btn btn-success btn-sm">
                              Buscar&hellip; <input type="file" style="display: none;" accept="image/*" name="picture">
                            </span>
                          </label>
                            <input type="text" class="form-control input-sm" readonly>
                        </div>
                        <span class="help-block">
                          Selecciona una imagen de tu mascota.
                        </span>
                      </div><br><br>

                      <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Comentario" name="comentario"></textarea>
                      </div>

                    </div>

                </div>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-warning">Ingresar</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div id="tabla" class="collapse">
        <div class="well">
        <div class="table-responsive">
          <div class="scrollingtable">
          <table class="table table-hover">
            <thead >
              <tr class="danger">
                <th>No.</th>
                <th>Nombre</th>
                <th>Foto</th>
                <th>Fecha</th>
                <th>Tipo</th>
                <th>Raza</th>
                <th>Peso</th>
                <th>Color</th>
                <th>Comentario</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody style="width:320px; height:60px; overflow:auto;">
                  <?php
                  $n = 1;
                  foreach ($datos as $dato) {

                    $linkDelete = base_url("/mascotas/delete/?id={$dato->id}");
                      echo "<tr>
                           <td>".$n++."</td>
                           <td>{$dato->nombre}</td>
                           <td>";
                           if(!empty($dato->foto)){echo "<img src='".base_url().'uploads/images/'.$dato->foto."' width='80' height='60'/>";}else{echo "N/A";}
                      echo "</td>
                           <td>{$dato->fecha}</td>
                           <td>{$dato->tipo}</td>
                           <td>{$dato->raza}</td>
                           <td>{$dato->peso}</td>
                           <td style='color:{$dato->color};'>████</td>
                           <td>{$dato->comentario}</td>
                           <td>";
                           if($dato->idUsuario==$_SESSION['usuario']){echo "<a class='btn btn-danger' href='{$linkDelete}' onclick='return confirm(\"Seguro quiere eliminar este registro?\");'>Eliminar</a>";}
                      echo "</td>
                           </tr>";

                    }
                  ?>
            </tbody>
          </table>
        </div>
        </div>
      </div>
      </div>
  </div>
  </body>
</html>
