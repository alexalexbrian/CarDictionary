<!-- Nueva edicion nuevo término -->
 <?php
require_once("class/classTerminoManager.php");
$accion = isset($_POST["accion"]) ? $_POST["accion"] : '';
//Guardar los datos al editar
$terminoManager = new TerminoManager();
$terminoManager->handleAction($accion);
?>
<div class="container-fluid bg-white">
  <div class="container" style="padding-bottom: 5px">
    <form name="nuevo" id="nuevo" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?id=<?php echo $id;?> " method="post">
      <div id="edicion_termino">
  <ul class="media-list p-t-md">
      <li class="media m-t-0" id="edicion_termino">
        <div class="media-body" style="border-right: 1px solid #edeef3; padding-right: 15px;">

          <div class="form-group">
            <label for="nombre_termino" class="termino-principal-tit termino-tit initialism">Nombre término</label>
            <input type="text" class="form-control form-control-sm" id="nombre_termino_principal" name="nombre_termino_principal" value="<?php echo isset($_POST["nombre_termino_principal"]) ? $_POST["nombre_termino_principal"] : ''; ?>" autocomplete="off" onfocusout="loadXMLDocNuevoEs()">
            <div id="div_visualizador_nuevo">
<!-- # aquí iran apareciendo las búsquedas por ajax -->
            </div>
          </div>
          <div class="form-group">
            <label for="descripcion_termino" class="termino-principal-tit termino-tit initialism">Descripción término</label>
            <textarea class="form-control form-control-sm" rows="3" id="descripcion_termino_principal" name="descripcion_termino_principal"><?php echo isset($_POST["descripcion_termino_principal"]) ? $_POST["descripcion_termino_principal"] : ''; ?></textarea>
          </div>
          <div class="form-group">
            <label for="descripcion_termino" class="termino-principal-tit termino-tit initialism">Notas</label>
            <textarea class="form-control form-control-sm" rows="2" id="notas_termino_principal" name="notas_termino_principal" ><?php echo isset($_POST["notas_termino_principal"]) ? $_POST["notas_termino_principal"] : ''; ?></textarea>
          </div>
        </div>
        <div class="media-right" style="padding: 0px; min-width: 103px!important">
          <div class="btn-group" role="group" aria-label="Basic example">
            <!-- <a type="submit" class="btn btn-term btn-success-principal" role="button"><i class="icon-check"></i></a> -->
            <a type="submit" class="btn btn-term btn-success-principal" role="button" onclick="nuevo.submit();"><i class="icon-check"></i></a>
            <a href="new.php" class="btn btn-term btn-eliminar-principal"><i class="icon-cross"></i></a>
          </div>
        </div>
      </li>
  </ul>

    <input type="radio" id="language" name="language" value="100">
    <label for="language">Español</label><br>  

    <input type="radio" id="language" name="language" value="99">
    <label for="language">Inglés</label><br>
    
    </div>
    <hr>




      <input type="hidden" id="accion" name="accion" value="agregarnuevapalabraaldiccionario">
    </form>
  </div>
</div>