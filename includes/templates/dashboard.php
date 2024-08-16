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


<div class="container p-t-md">

  <div class="row">

    <div class="col-md-3">

      <!-- Buscador por filtros -->
      <p class="termino-principal-tit termino-tit initialism">Buscador</p>
      <form class="" action="" name="busqueda" id="busqueda" method="post">

        <input type="hidden" id='reseteo' name='reseteo' value='si'><!-- insertamos variable oculta para la busqueda por filtros -->

        <fieldset class="form-group">
          <select class="form-control form-control-sm" id="empieza_por" name="empieza_por">
            <option value="">Elige una letra...</option>
            <option  value="-">-</option>
            <option  value="A">A</option>
            <option  value="B">B</option>
            <option  value="C">C</option>
            <option  value="D">D</option>
            <option  value="E">E</option>
            <option  value="F">F</option>
            <option  value="G">G</option>
            <option  value="H">H</option>
            <option  value="I">I</option>
            <option  value="J">J</option>
            <option  value="K">K</option>
            <option  value="L">L</option>
            <option  value="M">M</option>
            <option  value="N">N</option>
            <option  value="O">O</option>
            <option  value="P">P</option>
            <option  value="Q">Q</option>
            <option  value="R">R</option>
            <option  value="S">S</option>
            <option  value="T">T</option>
            <option  value="U">U</option>
            <option  value="V">V</option>
            <option  value="W">W</option>
            <option  value="X">X</option>
            <option  value="Y">Y</option>
            <option  value="Z">Z</option>
            <!-- hacer todas las letras... -->
          </select>
        </fieldset>
        <fieldset class="form-group">
          <select class="form-control form-control-sm" id="estado" name="estado">
            <option value="">Elige un estado...</option>
            <option  value="Editado">Editado</option>
            <!-- nuevo estado -->
            <option  value="Editado OK">Editado OK</option>
            <!-- /nuevo estado -->
            <option  value="Revisado">Revisado</option>
            <option  value="Alerta">Alerta</option>
            <option  value="OK Autora">OK Autora</option>
          </select>
        </fieldset>
        <fieldset class="form-group">
          <input type="text" class="form-control form-control-sm" placeholder="Escribir..." id="palabra" name="palabra" autocomplete="off" value="">
        </fieldset>
        <button class="btn btn-primary btn-sm" type="submit">Buscar</button>
      </form>
      <br>
      <!-- /Buscador por filtros -->

      <hr class="hr-indigo">

      <p class="termino-principal-tit termino-tit initialism">Varios</p>

      <a href="" class=" btn-link btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="loadXMLDocTerminos()">Nº de registros</a>
      

      <!-- Modal número de registros -->
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Cerrar</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Número de registros</h4>
            </div>
            <div class="modal-body">

              <!-- Imprimir registros totales -->
              <div id="registros_total">

              </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /Modal número de registros -->

    </div><!-- /.col -->

    <div class="col-md-9">

      <!-- tabla de paginación -->
      <!-- <div class="table-responsive"> -->
        <!-- <table class="table table-bordered table-striped bg-white table-sm"> -->

        <!-- <table class="table table-bordered table-hover table-sm" > -->
        <table class="table table-hover table-terminos">
          <thead>
            <tr>
              <th>
                Nombre
              </th>
              <th class="text-center">
                Estado
              </th>
              <th class="text-center">
                Acciones
              </th>
            </tr>
          </thead>
          <tbody class="bg-white">
                            <tr>
                  <td>
                    -aceae                  </td>
                  <td class="text-center">
                    Editado                  </td>
                  <td class="text-center">

                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=1" role="button">Ver término</a> -->
                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=1&num=1" role="button">Ver término</a> -->
                    <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=1&num=1&empieza_por=&estado=&palabra=" role="button">Ver término</a>

                  </td>
                </tr>
                              <tr>
                  <td>
                    -ad                  </td>
                  <td class="text-center">
                    Editado                  </td>
                  <td class="text-center">

                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=593" role="button">Ver término</a> -->
                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=593&num=2" role="button">Ver término</a> -->
                    <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=593&num=2&empieza_por=&estado=&palabra=" role="button">Ver término</a>

                  </td>
                </tr>
                              <tr>
                  <td>
                    -aemia                  </td>
                  <td class="text-center">
                    Editado                  </td>
                  <td class="text-center">

                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=2" role="button">Ver término</a> -->
                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=2&num=3" role="button">Ver término</a> -->
                    <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=2&num=3&empieza_por=&estado=&palabra=" role="button">Ver término</a>

                  </td>
                </tr>
                              <tr>
                  <td>
                    -aesthesia                  </td>
                  <td class="text-center">
                    Editado                  </td>
                  <td class="text-center">

                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=3" role="button">Ver término</a> -->
                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=3&num=4" role="button">Ver término</a> -->
                    <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=3&num=4&empieza_por=&estado=&palabra=" role="button">Ver término</a>

                  </td>
                </tr>
                              <tr>
                  <td>
                    -agog                  </td>
                  <td class="text-center">
                    Editado                  </td>
                  <td class="text-center">

                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=4" role="button">Ver término</a> -->
                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=4&num=5" role="button">Ver término</a> -->
                    <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=4&num=5&empieza_por=&estado=&palabra=" role="button">Ver término</a>

                  </td>
                </tr>
                              <tr>
                  <td>
                    -ales                  </td>
                  <td class="text-center">
                    Editado                  </td>
                  <td class="text-center">

                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=5" role="button">Ver término</a> -->
                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=5&num=6" role="button">Ver término</a> -->
                    <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=5&num=6&empieza_por=&estado=&palabra=" role="button">Ver término</a>

                  </td>
                </tr>
                              <tr>
                  <td>
                    -algesia                  </td>
                  <td class="text-center">
                    Alerta                  </td>
                  <td class="text-center">

                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=52341" role="button">Ver término</a> -->
                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=52341&num=7" role="button">Ver término</a> -->
                    <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=52341&num=7&empieza_por=&estado=&palabra=" role="button">Ver término</a>

                  </td>
                </tr>
                              <tr>
                  <td>
                    -algia                  </td>
                  <td class="text-center">
                    Editado                  </td>
                  <td class="text-center">

                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=30679" role="button">Ver término</a> -->
                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=30679&num=8" role="button">Ver término</a> -->
                    <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=30679&num=8&empieza_por=&estado=&palabra=" role="button">Ver término</a>

                  </td>
                </tr>
                              <tr>
                  <td>
                    -asthenia                  </td>
                  <td class="text-center">
                    Editado                  </td>
                  <td class="text-center">

                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=7" role="button">Ver término</a> -->
                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=7&num=9" role="button">Ver término</a> -->
                    <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=7&num=9&empieza_por=&estado=&palabra=" role="button">Ver término</a>

                  </td>
                </tr>
                              <tr>
                  <td>
                    -borne                  </td>
                  <td class="text-center">
                    Editado                  </td>
                  <td class="text-center">

                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=4310" role="button">Ver término</a> -->
                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=4310&num=10" role="button">Ver término</a> -->
                    <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=4310&num=10&empieza_por=&estado=&palabra=" role="button">Ver término</a>

                  </td>
                </tr>
                        </tbody>
        </table>
      <!-- </div> -->
      <!-- /tabla de paginación -->

      <!-- Botones de paginación -->
            <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <!-- <ul class="pagination pagination-sm"><li class='disabled'><a href='?offset=0&limit=10'><i class='icon-skip-back'></i></a></li><li class='disabled'><a href='?offset=0&limit=10'><i class='icon-arrow-left'></i></a></li><li class='active'><a href='#'>1</a></li><li><a href="?offset=10&limit=10">2</a></li><li><a href="?offset=20&limit=10">3</a></li><li><a href="?offset=30&limit=10">4</a></li><li><a href="?offset=40&limit=10">5</a></li><li><a href='?offset=10&limit=10'><i class='icon-arrow-right'></i></a></li><li><a href='?offset=48340&limit=10'><i class='icon-skip-forward'></i></a></li></ul> -->
          <ul class="pagination pagination-sm"><li class='disabled'><a href='?offset=0&limit=10'><i class='icon-skip-back'></i></a></li><li class='disabled'><a href='?offset=0&limit=10'><i class='icon-arrow-left'></i></a></li><li class='active'><a href='#'>1</a></li><li><a href="?offset=10&limit=10">2</a></li><li><a href="?offset=20&limit=10">3</a></li><li><a href="?offset=30&limit=10">4</a></li><li><a href="?offset=40&limit=10">5</a></li><li><a href='?offset=10&limit=10'><i class='icon-arrow-right'></i></a></li><li><a href='?offset=48340&limit=10'><i class='icon-skip-forward'></i></a></li></ul>        </div><!-- col -->
      </div><!-- row -->
            <!-- /Botones de paginación -->

    </div><!-- /.col -->

  </div><!-- /row -->
</div><!-- /.container -->