<?php 
require_once("class/dashboard-user.php");
include_once("search-html.php");
$a = new Dashboard();
$Nrecords = $a->ContadorRegistros();
?>
<!-- container -->
<div class="container p-t-md">
  <div class="row">
    <div class="col-md-3">
      <!-- Buscador por filtros -->
      <p class="termino-principal-tit termino-tit initialism">Descargar por:</p>
      <form action="procesar_words.php" name="busqueda" id="busqueda" method="post" onsubmit="return ValidarFiltrosWord(event)">

        <input type="hidden" id='reseteo' name='reseteo' value='si'>
        <!-- insertamos variable oculta para la busqueda por filtros -->
        <fieldset class="form-group">
          <select class="form-control form-control-sm" id="empieza_por" name="empieza_por">
            <option value="">Elige una letra...</option>
            <option value="0">Palabra</option>
            <option value="154245">Todo</option>
            <?php for ($letra = 'A'; $letra <= 'Z'; $letra++) : ?>
              <option value="<?= $letra ?>"><?= $letra ?></option>
            <?php endfor; ?>
          </select>
        </fieldset>


        <fieldset class="form-group">
          <select class="form-control form-control-sm" id="termina_con" name="termina_con">
            <option value="0">Elige una letra...</option>
            <?php for ($letra = 'A'; $letra <= 'Z'; $letra++) : ?>
              <option value="<?= $letra ?>"><?= $letra ?></option>
            <?php endfor; ?>
          </select>
        </fieldset>


        <fieldset class="form-group">
          <select class="form-control form-control-sm" id="idioma" name="idioma">
            <option value="">Elige idioma...</option>
            <option value="es">Español</option>
            <option value="en">Inglés</option>
          </select>
        </fieldset>

        <fieldset class="form-group">
          <input type="text" class="form-control form-control-sm" placeholder="Escribe una palabra" id="palabra" name="palabra" autocomplete="off" value="">
        </fieldset>

        <button class="btn btn-primary btn-sm">Descargar</button>
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
              <h5 class="modal-title" id="myModalLabel">Número de registros</h5>
            </div>
            <div class="modal-body">
              <!-- Imprimir registros totales -->
              <div id="registros_total">
                <?php  echo $format = number_format($Nrecords, 0, '', '.'); ?> Registros encontrados
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-9">
    </div><!-- /.col -->
  </div><!-- /row -->
</div>
<!-- /.container -->