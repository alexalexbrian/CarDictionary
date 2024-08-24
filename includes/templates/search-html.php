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