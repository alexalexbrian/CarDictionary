<?php
require_once("class/dashboard-user.php");
require_once("class/classTerminoManager.php");

$id = isset($_GET["record"]) ? $_GET["record"] : '';
echo $accion = isset($_POST["accion"]) ? $_POST["accion"]: '' ;

$rownum = isset($_GET["record"]) ? $_GET["record"] : '';
$num = isset($_GET["num"]) ? $_GET["num"] : '';
$empieza_por = isset($_GET["empieza_por"]) ? $_GET["empieza_por"] : '';
$estado = isset($_GET["estado"]) ? $_GET["estado"] : '';
$palabra = isset($_GET["palabra"]) ? $_GET["palabra"] : '';

$a = new Dashboard();
$dat = $a->getTerminosEn($id);



//Guardar los datos al editar
$terminoManager = new TerminoManager();
$terminoManager->handleAction($accion);




//activar páginador
if ($rownum > 0) {
    // llega porque pulsa siguiente o anterior boton
    $num = $rownum;
 
  }
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
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Escribir..." name="buscador_rapido" id="buscador_rapido"
                                            onkeyup="loadXMLDocRapido()" autocomplete="off">
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
                            <a href="#" data-toggle="collapse" data-target="#exCollapsingNavbar"
                                class="btn btn-term btn-edit-principal"><i class="icon-cross"></i></a>
                        </div>
                    </div>
                </li><!-- /.media -->
            </ul>
        </div>
    </div>
 <!-- /nuevo -->

</div>




<form name="edicion" id="edicion" class="" action="" method="post">

<!-- definimos tres variables para el formulario -->
<input type="hidden" id="accion" name="accion" value="">
<input type="hidden" id="id_principal" name="id_principal" value="">
<input type="hidden" id="id_relacionado" name="id_relacionado" value="">

<!-- Botones siguiente y anterior -->
<?php
require_once("buttons-next-previous.php");
?>
<!-- /Botones siguiente y anterior -->

<!-- Termino principal -->
<?php 
 require_once("main-term.php");
 ?>
<!-- /Termino principal -->


 <!-- Terminos relacionados y vid -->
 <?php 
 require_once("vid-related-terms.php");
 ?>
 <!-- /Terminos relacionados y vid -->

<!--Modales-->
<?php 
require_once("modales.php");
?>
<!--Modales-->

</form>

<!-- </div> -->
<!-- /.container -->

<!-- Botones siguiente y anterior -->
<?php
require_once("buttons-next-previous.php");
?>
<!-- /Botones siguiente y anterior -->


<!--Footer-->
<?php 
require_once("includes/footer.php");
?>
<!--/.Footer-->

<div class="sweet-container">
    <div class="sweet-overlay" tabindex="-1"></div>
    <div class="sweet-alert" tabindex="-1">
        <div class="icon error"><span class="x-mark"><span class="line left"></span><span
                    class="line right"></span></span></div>
        <div class="icon warning"> <span class="body"></span> <span class="dot"></span> </div>
        <div class="icon info"></div>
        <div class="icon success"> <span class="line tip"></span> <span class="line long"></span>
            <div class="placeholder"></div>
            <div class="fix"></div>
        </div>
        <div class="icon custom"></div>
        <h2>Title</h2>
        <p>Text</p>
        <hr><button class="confirm">OK</button><button class="cancel">Cancel</button>
    </div>
</div>
</body>