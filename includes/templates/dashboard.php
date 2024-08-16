<?php
require_once("class/dashboard-user.php");
define('myconstante', 'true');
$select = new Dashboard();
$offset = 0 ;
$limit = 10;
$empieza_por = !empty($_POST["empieza_por"]) ? $_POST["empieza_por"] : "";
$estado = !empty($_POST["estado"]) ? $_POST["estado"] : "";
$palabra = !empty($_POST["palabra"]) ? $_POST["palabra"] : "";
$offset = !empty($_GET["offset"]) && $_GET["offset"] !== "undefined" ? (int)$_GET["offset"] : $offset;
$limit = !empty($_GET["limit"]) && $_GET["limit"] !== "undefined" ? (int)$_GET["limit"] : $limit;

$users = $select->Get_posts_es($offset, $limit, $empieza_por, $estado, $palabra);


//Verificar si la sesión está iniciada
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>
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
      <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?id=<?php echo $id;?>" name="busqueda" id="busqueda" method="POST">

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
            <?php
           
            if(is_array($users) && !empty($users))
            {
              for($li=0;$li<sizeof($users);$li++){
              ?>
                <tr>
                  <td>
                    <?php echo $users[$li]['nom_es'] ?>
                  </td>
                  <td class="text-center">
                    <?php echo $users[$li]['nom_es'] ?>
                  </td>
                  <td class="text-center">

                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=<?php  echo $users[$li]['id']; ?>" role="button">Ver término</a> -->
                    <!-- <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=<?php  echo $users[$li]['id']; ?>&num=<?php echo $users[$li]['rownum'] ?>" role="button">Ver término</a> -->
                    <a class="btn btn-sm btn-primary btn-termino" href="edit.php?id=<?php  echo $users[$li]['id']; ?>&num=<?php echo $users[$li]['rownum'] ?>&empieza_por=<?php echo $empieza_por ?>&estado=<?php echo $estado ?>&palabra=<?php echo $palabra ?>" role="button">Ver término</a>

                  </td>
                </tr>
              <?php
              }
            }
            else
            {
            ?>
              <div class="alert alert-danger text-center">Aquí no hay término para mostrar</div>
            <?php
            }
            ?>
          </tbody>
        </table>
      <!-- </div> -->
      <!-- /tabla de paginación -->



      
      <!-- Botones de paginación -->
      <?php
      if(is_array($users) && !empty($users))
      {
      ?>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <?php echo $select->Create_Link($empieza_por, $estado,$palabra) ?>
        </div><!-- col -->
      </div><!-- row -->
      <?php
      }
      ?>
      <!-- /Botones de paginación -->



    </div>
  </div>
</div>
<?php
} else {
  // La sesión no está iniciada o no contiene los datos esperados
  echo '<div class="alert alert-danger">No se ha iniciado sesión.</div>';
}
?>