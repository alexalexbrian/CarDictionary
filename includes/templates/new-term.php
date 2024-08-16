<div class="collapse" id="exCollapsingNavbar" style="padding: 0px">
    <!-- nuevo -->
    <div class="container-fluid">
      <div class="container p-t-md">
        <ul class="media-list">
          <li class="media" id="vista_termino">
            <!-- <div class="media-body" style="border-right: 1px solid #edeef3; padding-right: 15px"> -->
            <div class="media-body" style="padding-right: 15px">
              <div class="container">
                <div class="row">
                  <!-- <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1"> -->
                  <div class="col-lg-10 col-lg-offset-1 col-sm-12">
                    <fieldset class="form-group" style="padding-top: 3px">
                      <input type="text" class="form-control form-control-sm" placeholder="Escribir..." name="buscador_rapido" id="buscador_rapido" onkeyup="loadXMLDocRapido()" autocomplete="off">
                      <div id="div_visualizador_rapido">
                        <!-- # aquí iran apareciendo las búsquedas por ajax -->
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>
            </div>
            <div class="media-right" style="padding: 0px;">
              <div class="btn-group" role="group" aria-label="Basic example">
                <a href="#" data-toggle="collapse" data-target="#exCollapsingNavbar" class="btn btn-term btn-edit-principal"><i class="icon-cross"></i></a>
              </div>
            </div>
          </li><!-- /.media -->
        </ul>
      </div>
    </div>
    <!-- /nuevo -->

  </div>
<!-- Nueva edicion nuevo término -->
<!-- Termino principal -->
<div class="container-fluid bg-white">
  <!-- <div class="container" style="padding-top: 20px; padding-bottom: 5px"> -->
  <div class="container" style="padding-bottom: 5px">

    <form name="nuevo" id="nuevo" class="" action="" method="post">
      <input type="hidden" id="accion" name="accion" value="salvar">
      <div id="edicion_termino">

    <ul class="media-list p-t-md">

      <!-- termino edicion -->


      <li class="media m-t-0" id="edicion_termino">
        <div class="media-body" style="border-right: 1px solid #edeef3; padding-right: 15px;">

          <div class="form-group">
            <label for="nombre_termino" class="termino-principal-tit termino-tit initialism">Nombre término</label>
            <input type="text" class="form-control form-control-sm" id="nombre_termino_principal" name="nombre_termino_principal" value="" autocomplete="off" onfocusout="loadXMLDocNuevo()">
            <div id="div_visualizador_nuevo">
              <!-- # aquí iran apareciendo las búsquedas por ajax -->
            </div>
          </div>
          <div class="form-group">
            <label for="descripcion_termino" class="termino-principal-tit termino-tit initialism">Descripción término</label>
            <textarea class="form-control form-control-sm" rows="3" id="descripcion_termino_principal" name="descripcion_termino_principal"></textarea>
          </div>
          <div class="form-group">
            <label for="descripcion_termino" class="termino-principal-tit termino-tit initialism">Notas</label>
            <textarea class="form-control form-control-sm" rows="2" id="notas_termino_principal" name="notas_termino_principal" ></textarea>
          </div>
          <!-- <div class="form-group">
            <label for="descripcion_termino" class="termino-principal-tit termino-tit initialism">Estado </label>
            <select class="form-control form-control-sm" id="estado" name="estado_termino_principal">
              <option value="Editado">Editado</option>
              <option value="Revisado">Revisado</option>
              <option value="Alerta">Alerta</option>
              <option value="OK Autora">OK Autora</option>
            </select>
          </div> -->

        </div>
        <div class="media-right" style="padding: 0px; min-width: 103px!important">
          <div class="btn-group" role="group" aria-label="Basic example">
            <!-- <a type="submit" class="btn btn-term btn-success-principal" role="button"><i class="icon-check"></i></a> -->
            <a type="submit" class="btn btn-term btn-success-principal" role="button" onclick="nuevo.submit();"><i class="icon-check"></i></a>
            <a href="./" class="btn btn-term btn-eliminar-principal"><i class="icon-cross"></i></a>
          </div>
        </div>
      </li><!-- /.media -->

      <!-- /termino edicion -->

    </ul><!-- /.media-list -->

    <!-- <br class="clear">
    <button type="submit" class="btn btn-success uppercase" role="button">Salvar</button> -->

      </div><!-- /#edicion_termino -->
    </form>

  </div><!-- /.container -->
</div><!-- /.container-fluid -->
<!-- /Termino principal -->
<!-- /Nueva edicion nuevo término -->
</body>