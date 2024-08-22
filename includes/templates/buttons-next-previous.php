
        <!-- Botones siguiente y anterior -->
        <!-- <div class="container text-center" style="padding: 0px; background-color: #fff;"> -->
        <div class="container-fluid bg-white">
          <nav class="navbar navbar p-0">
            <div class="container" style="">

              <!-- boton volver -->
              <a href="index.php?id=3&volver=1" class="btn btn-sm btn-footer pull-left"><i class="icon-rewind"></i> <small>Volver</small></a>
              <!-- /boton volver -->
          
              <?php if ($num >= 1) { ?>
                <a href="index.php?id=4&record=<?php echo $num + 1?>&empieza_por=<?php echo $empieza_por ?>&estado=<?php echo $estado ?>&palabra=<?php echo $palabra ?>" class="btn btn-sm btn-footer pull-right" style="margin-right: 7px!important"><small>Término siguiente</small> <i class="icon-arrow-right"></i></a>
                <?php } ?>
              <?php if ($num <= 1) {
                // Si num es 1 es que estoy en la primera y no muestro el anterior
              } else {
                ?>
                <a href="index.php?id=4&record=<?php echo $num - 1?>&empieza_por=<?php echo $empieza_por ?>&estado=<?php echo $estado ?>&palabra=<?php echo $palabra ?>" class="btn btn-sm btn-footer pull-right"><i class="icon-arrow-left"></i> <small> Término anterior</small></a>
               <?php
              } ?>

            </div>
          </nav>

        </div>
        <!-- /Botones siguiente y anterior -->




  <div class="container text-center none">
  <br class="clear">
  <br class="clear">
  <nav class="navbar navbar-fixed-bottom navbar-light">
  <div class="container">
      <?php if ($num <= 1) {
        // Si num es 1 es que estoy en la primera y no muestro el anterior
       
      } else {
        ?>
        <a href="index.php?id=4&rownum=<?php echo $num - 1?>&empieza_por=<?php echo $empieza_por ?>&estado=<?php echo $estado ?>&palabra=<?php echo $palabra ?>" class="btn btn-sm btn-footer pull-left"><i class="icon-arrow-left"></i> <small> Término anterior</small></a>
        <?php
      } ?>
      <?php if ($num >= 1) { ?>
        <a href="index.php?id=4&rownum=<?php echo $num + 1?>&empieza_por=<?php echo $empieza_por ?>&estado=<?php echo $estado ?>&palabra=<?php echo $palabra ?>" class="btn btn-sm btn-footer pull-right"><small>Término siguiente</small> <i class="icon-arrow-right"></i></a>
      <?php } ?>

      <!-- boton volver -->
      <a href="index.php?id=3&volver=1" class="btn btn-sm btn-footer pull-right"><small>Volver 1</small> <i class="icon-cross"></i></a>
      <!-- /boton volver -->

    </div>
  </nav>

</div>

