 <div class="container-fluid bg-white">
          <!-- <div class="container" style="padding-top: 20px; padding-bottom: 5px"> -->
          <div class="container" style="padding-bottom: 5px">

            <ul class="media-list p-t-md">

              <!-- termino vista -->
              <li class="media" id="vista2_termino">
                <div class="media-body" style="border-right: 1px solid #edeef3; padding-right: 15px">
                  <p>
                    <span class="termino-principal-tit"><?php echo $termino["nom_es"]; ?></span> <?php echo $termino["des_es"]; ?>
                  </p>

                  <!-- <div class="row b-t-md"> -->
                  <div class="row" style="margin-top: 15px">
                    <div class="col-md-10">
                      <!-- Notas -->
                      <div class="media">
                        <!-- <div class="media-left" style="font-size: 0.8em; color: #c5c4ca; font-weight: 400; max-width: 20px"> -->
                        <div class="media-left" style="font-size: 0.8em; color: #c5c4ca; font-weight: 400; max-width: 20px; padding-top: 2px">
                          <i class="icon-paper"></i>
                        </div>
                        <!-- <div class="media-body" style="font-size: 0.8em; color: #c5c4ca; font-weight: 400; padding-top: 2px"> -->
                        <div class="media-body" style="font-size: 0.8em; color: #c5c4ca; font-weight: 400; padding-top: 4px">
                          <?php echo $termino["not_es"]; ?>
                        </div>
                      </div><!-- /.media -->
                      <!-- /Notas -->
                    </div>
                    <!-- Estado -->
                    <!-- <div class="col-md-2" style="font-size: 0.7em; color: #c5c4ca; font-weight: 400; padding-top: 2px"> -->
                    <div class="col-md-2" style="font-size: 0.85em; color: #c5c4ca; font-weight: 400; padding-top: 2px">
                      <div class="pull-right">
                        <!-- <span class="label label-default" style="background-color: #ededf5; color: #928daa; font-weight: 500; font-size: 0.8em"><?php echo $termino["est_es"]; ?></span> -->
                        <?php
                          $estado = '';
                          $estado = $termino["est_es"];
                          // echo ($estado);
                          if ($estado == 'Editado' ) echo '<span class="label label-default label-termino-principal label-termino-principal-editado">Editado</span>';

                          // nuevo estado
                          if ($estado == 'Editado OK' ) echo '<span class="label label-default label-termino-principal label-termino-principal-editado-ok">Editado OK</span>';
                          // /nuevo estado

                          if ($estado == 'Revisado' ) echo '<span class="label label-default label-termino-principal label-termino-principal-revisado">Revisado</span>';
                          if ($estado == 'Alerta' ) echo '<span class="label label-default label-termino-principal label-termino-principal-alerta">Alerta</span>';
                          if ($estado == 'OK Autora' ) echo '<span class="label label-default label-termino-principal label-termino-principal-ok">OK Autora</span>';
                        ?>
                      </div>
                    </div>
                    <!-- /Estado -->
                  </div>

                </div>
                <div class="media-right" style="padding: 0px; min-width: 103px!important">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="javascript:changeVistaEdicion()" class="btn btn-term btn-edit-principal"><i class="fa fa-pencil"></i></a>
                    <a href="javascript:eliminarTerminoEn('edicion', <?php echo $id ?>);" class="btn btn-term btn-eliminar-principal"><i class="fa fa-trash-o"></i></a>
                  </div>
                </div>
              </li><!-- /.media -->
              <!-- /termino vista -->

              <!-- termino edicion -->
              <!-- <li class="media" id="edicion_termino" style="display: none"> -->
              <li class="media m-t-0" id="edicion_termino" style="display: none;">
                <div class="media-body" style="border-right: 1px solid #edeef3; padding-right: 15px;">

                  <div class="form-group">
                    <label for="nombre_termino" class="termino-principal-tit termino-tit initialism">Nombre término</label>
                    <input type="text" class="form-control form-control-sm" id="nombre_termino_principal" name="nombre_termino_principal" value="<?php echo $termino["nom_es"]; ?>">
                  </div>
                  <div class="form-group">
                    <label for="descripcion_termino" class="termino-principal-tit termino-tit initialism">Descripción término</label>
                    <textarea class="form-control form-control-sm" rows="3" id="summernote_des_ppal" name="descripcion_termino_principal"><?php echo $termino["des_es"]; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="descripcion_termino" class="termino-principal-tit termino-tit initialism">Notas</label>
                    <textarea class="form-control form-control-sm" rows="2" id="summernote_not_ppal" name="notas_termino_principal"><?php echo $termino["not_es"]; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="descripcion_termino" class="termino-principal-tit termino-tit initialism">Estado </label>
                    <?php
                      $estado = '';
                      $estado = $termino["est_es"];
                    ?>
                    <select class="form-control form-control-sm" id="estado" name="estado_termino_principal">
                      <option <?php if ($estado == 'Editado' ) echo 'selected' ; ?> value="Editado">Editado</option>

                      <!-- Nuevo estado -->
                      <option <?php if ($estado == 'Editado OK' ) echo 'selected' ; ?> value="Editado OK">Editado OK</option>
                      <!-- /Nuevo estado -->

                      <option <?php if ($estado == 'Revisado' ) echo 'selected' ; ?> value="Revisado">Revisado</option>
                      <option <?php if ($estado == 'Alerta' ) echo 'selected' ; ?> value="Alerta">Alerta</option>
                      <option <?php if ($estado == 'OK Autora' ) echo 'selected' ; ?> value="OK Autora">OK Autora</option>
                    </select>
                  </div>

                </div>
                <div class="media-right" style="padding: 0px; min-width: 103px!important">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a role="button" type="submit" href="javascript:actualizarTerminoCompletoEn('edicion');" class="btn btn-term btn-success-principal"><i class="icon-check"></i></a>
                    <!-- <a href="javascript:changeVistaTermino()" class="btn btn-term btn-eliminar-principal" onclick="restablecerCamposPrincipalEn('<?php echo $termino["nom_es"]; ?>', '<?php echo $termino["des_es"]; ?>', '<?php echo $termino["not_es"]; ?>');"><i class="icon-cross"></i></a> -->
                    <a href="javascript:changeVistaTermino()" class="btn btn-term btn-eliminar-principal" onclick="restablecerCamposPrincipalEn('<?php echo $termino["nom_es"]; ?>', '<?php str_replace("\"","\\\"",$termino["des_es"]) ?>', '<?php echo $termino["not_es"]; ?>');"><i class="icon-cross"></i></a>
                  </div>
                </div>
              </li><!-- /.media -->
                  <!-- prueba -->
                  <!-- <a class="btn btn-default btn-xs uppercase pull-right" href="javascript:eliminarTerminoEn('edicion', <?php echo $id ?>);" role="button">Eliminar término</a> -->
                  <!-- prueba -->
              <!-- /termino edicion -->
            </ul><!-- /.media-list -->

          </div><!-- /.container -->
        </div><!-- /.container-fluid -->