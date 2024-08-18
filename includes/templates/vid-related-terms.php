 <div class="container p-t-md">
          <div class="row">
            <div class="col-lg-3 col-md-4">

              <!-- terminos vid -->
              <ul class="media-list">

                <!-- titular -->
                <li class="media">
                  <div class="media-body" style="padding: 9px 10px; font-size: 0.75em;">
                    <span class="termino-principal-tit termino-tit initialism">Términos vid</span>
                  </div>
                  <div class="media-right" style="padding: 0px;">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <!-- <a href="" class="btn btn-term btn-edit"><i class="fa fa-pencil"></i></a> -->
                      <a href="#" class="btn btn-term btn-nuevo" data-toggle="modal" data-target="#modalNuevoTerminoRelacionadoVid"><i class="icon-circle-plus"></i></a>
                    </div>
                  </div>
                </li><!-- /.media -->
                <!-- /titular -->

                <?php
                $terminosRelacionadosVidEn = $a->getTerminosRelacionadosVidEn($id);
                if(is_array($terminosRelacionadosVidEn) && !empty($terminosRelacionadosVidEn))
                {
                  foreach($terminosRelacionadosVidEn as $terminoRelacionVidEn)
                  {
                ?>

                <li class="media">
                  <div class="media-body bg-white" style="padding: 11px 10px; font-size: 0.75em;">
                    <strong><a href="edit_es.php?id=<?php echo $terminoRelacionVidEn["id"]; ?>"><?php echo $terminoRelacionVidEn["nom_es"]; ?></a></strong>
                  </div>
                  <!-- <div class="media-right" style="padding: 0px; min-width: 103px!important"> -->
                  <div class="media-right" style="padding: 0px;">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <!-- <a href="" class="btn btn-term btn-edit"><i class="fa fa-pencil"></i></a> -->
                      <!-- <a href="" class="btn btn-term btn-eliminar"><i class="icon-circle-minus"></i></a> -->
                      <a href="javascript:eliminarRelacionVid('edicion', <?php echo $id ?>, <?php echo $terminoRelacionVidEn["id"] ?>);" class="btn btn-term btn-eliminar"><i class="icon-circle-minus"></i></a>
                    </div>
                  </div>
                </li><!-- /.media -->

                <?php
                  }
                }
                else {
                  echo ("<div class='alert-indigo-light'>No existen relaciones vid para el término <strong>".$termino["nom_es"]."</strong></div>");
                }
                ?>

              </ul><!-- /.media-list -->
              <!-- /terminos vid -->

            </div><!-- /.col -->

            <div class="col-lg-9 col-md-8">

              <!-- terminos relacionados (EN) -->
              <ul class="media-list">

                <!-- titular -->
                <li class="media">
                  <div class="media-body" style="padding: 9px 10px; font-size: 0.75em;">
                    <span class="termino-principal-tit termino-tit initialism">Términos relacionado (ES)</span>
                  </div>
                  <!-- <div class="media-right" style="padding: 0px;"> -->
                  <div class="media-right" style="padding: 0px; min-width: 55px!important">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <!-- <a href="" class="btn btn-term btn-edit"><i class="fa fa-pencil"></i></a> -->
                      <a href="#" class="btn btn-term btn-nuevo" data-toggle="modal" data-target="#modalNuevoTerminoRelacionadoEn"><i class="icon-circle-plus"></i></a>
                    </div>
                  </div>
                </li><!-- /.media -->
                <!-- /titular -->

                <?php
                $terminosRelacionadosEn = $a->getTerminosRelacionadosEn($id);
                if(is_array($terminosRelacionadosEn) && !empty($terminosRelacionadosEn))
                {
                  foreach($terminosRelacionadosEn as $terminoRelacionEn)
                  {
                ?>
                <li class="media">
                  <!-- <div class="media-body bg-white" style="padding: 9px 10px; font-size: 0.75em;"> -->
                  <div class="media-body bg-white" style="padding: 11px 10px; font-size: 0.75em;">
                    <strong><a href="edit_es.php?id=<?php echo $terminoRelacionEn["id"]; ?>"><?php echo $terminoRelacionEn["nom_es"]; ?></a></strong> <?php echo $terminoRelacionEn["des_es"]; ?>
                  </div>
                  <div class="media-right" style="padding: 0px; min-width: 103px!important">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="" class="btn btn-term btn-edit" data-toggle="modal" data-target="#editarTerminoRelEn<?php echo $terminoRelacionEn["id"]; ?>"><i class="fa fa-pencil"></i></a>
                      <!-- <a href="" class="btn btn-term btn-edit" data-toggle="modal" data-target="#editarTerminoRelEn"><i class="fa fa-pencil"></i></a> -->
                      <!-- <a href="" class="btn btn-term btn-edit"><i class="fa fa-pencil"></i></a> -->
                      <a href="javascript:eliminarRelacionEn('edicion', <?php echo $id ?>, <?php echo $terminoRelacionEn["id"] ?>);" class="btn btn-term btn-eliminar"><i class="icon-circle-minus"></i></a>
                    </div>
                  </div>
                </li><!-- /.media -->

                <?php
                  }
                }
                else {
                  echo ("<div class='alert-indigo-light'>No existen relaciones en inglés para el término <strong>".$termino["nom_es"]."</strong></div>");
                }
                ?>

              </ul><!-- /.media-list -->
              <!-- /terminos relacionados (EN) -->

              <hr class="hr-indigo-termino">

              <!-- terminos relacionados (ES) -->
              <ul class="media-list">

                <!-- titular -->
                <li class="media">
                  <div class="media-body" style="padding: 9px 10px; font-size: 0.75em;">
                    <span class="termino-principal-tit termino-tit initialism">Términos relacionado (EN)</span>
                  </div>
                  <div class="media-right" style="padding: 0px; min-width: 55px!important">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="#" class="btn btn-term btn-nuevo" data-toggle="modal" data-target="#modalNuevoTerminoRelacionadoEnEs"><i class="icon-circle-plus"></i></a>
                    </div>
                  </div>
                </li><!-- /.media -->
                <!-- /titular -->

                <!-- <li class="media"> -->
                  <!-- <div class="media-body bg-white" style="padding: 9px 10px; font-size: 0.75em;">
                    <strong>Lorem ipsum dolor sit</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quae quibusdam deleniti non corporis incidunt.
                  </div>
                  <div class="media-right" style="padding: 0px; min-width: 103px!important">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="" class="btn btn-term btn-edit"><i class="fa fa-pencil"></i></a>
                      <a href="" class="btn btn-term btn-eliminar"><i class="icon-circle-minus"></i></a>
                    </div>
                  </div> -->
                  <?php
                  $terminosRelacionadosEnEs = $a->getTerminosRelacionadosEnEs($id);
                  if(is_array($terminosRelacionadosEnEs) && !empty($terminosRelacionadosEnEs))
                  {
                    foreach($terminosRelacionadosEnEs as $terminoRelacionEnEs)
                    {
                  ?>
                  <li class="media">
                    <div class="media-body bg-white" style="padding: 11px 10px; font-size: 0.75em;">
                      <strong><a href="edit.php?id=<?php echo $terminoRelacionEnEs["id"]; ?>"><?php echo $terminoRelacionEnEs["nom_en"]; ?></a></strong> <?php echo $terminoRelacionEnEs["des_en"]; ?>
                    </div>
                    <div class="media-right" style="padding: 0px; min-width: 103px!important">
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="" class="btn btn-term btn-edit" data-toggle="modal" data-target="#editarTerminoRelEnEs<?php echo $terminoRelacionEnEs["id"]; ?>"><i class="fa fa-pencil"></i></a>
                        <!-- <a href="" class="btn btn-term btn-edit" data-toggle="modal" data-target="#editarTerminoRelEn"><i class="fa fa-pencil"></i></a> -->
                        <!-- <a href="" class="btn btn-term btn-edit"><i class="fa fa-pencil"></i></a> -->
                        <a href="javascript:eliminarRelacionEnEs('edicion', <?php echo $id ?>, <?php echo $terminoRelacionEnEs["id"] ?>);" class="btn btn-term btn-eliminar"><i class="icon-circle-minus"></i></a>
                      </div>
                    </div>
                  </li><!-- /.media -->

                  <?php
                    }
                  }
                  else {
                    echo ("<div class='alert-indigo-light'>No existen relaciones en inglés para el término <strong>".$termino["nom_es"]."</strong></div>");
                  }
                  ?>
                </li><!-- /.media -->

              </ul><!-- /.media-list -->
              <!-- /terminos relacionados (ES) -->

            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container -->