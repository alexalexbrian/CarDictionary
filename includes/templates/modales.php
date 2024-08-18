<!-- Modales -->

        <!-- Modal Nuevo termino relacionado es -->
        <div class="modal fade" id="modalNuevoTerminoRelacionadoEn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <!-- <h4 class="modal-title" id="myModalLabel">Nuevo Término En</h4> -->
                <span class="termino-principal-tit termino-tit initialism">Nuevo Término Relacionado (ES)</span>
              </div>
              <div class="modal-body">
                <!-- Contenido modal -->
                <!-- <form id="updateTermEn" name="updateTermEn" action="" method="post"> -->
                  <div class="form-group">
                    <label for="nombre_termino">Nombre</label>
                    <input type="text" class="form-control" id="nombre_termino_relacionado_en" name="nombre_termino_relacionado_en" onkeyup="loadXMLDocEs()" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="descripcion_termino">Descripción</label>
                    <!-- <textarea class="form-control" rows="3" id="descripcion_termino_relacionado_es" name="descripcion_termino_relacionado_es"></textarea> -->
                    <textarea class="form-control" rows="3" id="des_termino_relacionado_en" name="des_termino_relacionado_en"></textarea>
                    <!-- <textarea class="form-control" rows="3" id="summernote_des_rel_es" name="descripcion_termino_relacionado_es"></textarea> -->
                  </div>
                  <!-- <button type="submit" class="btn btn-default">Crear</button> -->
                <!-- </form> -->
                <!-- /Contenido modal -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="limpiarCamposModalRelacionadosEn();">Cancelar</button>
                <!-- <button type="submit" class="btn btn-success">Salvar</button> -->
                <a class="btn btn-success uppercase" role="button" href="javascript:actualizarTerminoRelacionEn('edicion');">Guardar</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /Modal Nuevo termino relacionado es -->

        <!-- Modal Nuevo termino relacionado vid -->
        <div class="modal fade" id="modalNuevoTerminoRelacionadoVid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <!-- <h4 class="modal-title" id="myModalLabel">Nuevo Término En</h4> -->
                <span class="termino-principal-tit termino-tit initialism">Nuevo Término Vid</span>
              </div>
              <div class="modal-body">
                <!-- Contenido modal -->
                <!-- <form id="updateTermEn" name="updateTermEn" action="" method="post"> -->
                  <div class="form-group">
                    <label for="nombre_termino">Nombre</label>
                    <input type="text" class="form-control" id="nombre_termino_relacionado_vid" name="nombre_termino_relacionado_vid" onkeyup="loadXMLDocVidEs()" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="descripcion_termino">Descripción</label>
                    <!-- <textarea class="form-control" rows="3" id="descripcion_termino_relacionado_es" name="descripcion_termino_relacionado_es"></textarea> -->
                    <textarea class="form-control" rows="3" id="descripcion_termino_relacionado_vid" name="descripcion_termino_relacionado_vid"></textarea>
                    <!-- <textarea class="form-control" rows="3" id="summernote_des_rel_es" name="descripcion_termino_relacionado_es"></textarea> -->
                  </div>
                  <!-- <button type="submit" class="btn btn-default">Crear</button> -->
                <!-- </form> -->
                <!-- /Contenido modal -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="limpiarCamposModalRelacionadosVid();">Cancelar</button>
                <!-- <button type="submit" class="btn btn-success">Salvar</button> -->
                <a class="btn btn-success uppercase" role="button" href="javascript:actualizarTerminoRelacionVid('edicion');">Guardar</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /Modal Nuevo termino relacionado vid -->

        <!-- Modal Nuevo termino relacionado en-es -->
        <div class="modal fade" id="modalNuevoTerminoRelacionadoEnEs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <!-- <h4 class="modal-title" id="myModalLabel">Nuevo Término En</h4> -->
                <span class="termino-principal-tit termino-tit initialism">Nuevo Término Relacionado (EN)</span>
              </div>
              <div class="modal-body">
                <!-- Contenido modal -->
                <!-- <form id="updateTermEn" name="updateTermEn" action="" method="post"> -->
                  <div class="form-group">
                    <label for="nombre_termino">Nombre</label>
                    <!-- <input type="text" class="form-control" id="nombre_termino_relacionado_enes" name="nombre_termino_relacionado_enes" onkeyup="loadXMLDocEnEs()" autocomplete="off"> -->
                    <input type="text" class="form-control" id="nombre_termino_relacionado_enes" name="nombre_termino_relacionado_enes" onkeyup="loadXMLDocEsEn()" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="descripcion_termino">Descripción</label>
                    <!-- <textarea class="form-control" rows="3" id="descripcion_termino_relacionado_es" name="descripcion_termino_relacionado_es"></textarea> -->
                    <textarea class="form-control" rows="3" id="des_termino_relacionado_enes" name="des_termino_relacionado_enes"></textarea>
                    <!-- <textarea class="form-control" rows="3" id="summernote_des_rel_es" name="descripcion_termino_relacionado_es"></textarea> -->
                  </div>
                  <!-- <button type="submit" class="btn btn-default">Crear</button> -->
                <!-- </form> -->
                <!-- /Contenido modal -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="limpiarCamposModalRelacionadosEnEs();">Cancelar</button>
                <!-- <button type="submit" class="btn btn-success">Salvar</button> -->
                <a class="btn btn-success uppercase" role="button" href="javascript:actualizarTerminoRelacionEnEs('edicion');">Guardar</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /Modal Nuevo termino relacionado en-es -->

        <!-- Modal edicion termino relacionado -->
        <input hidden name='nombre_termino_relacionado_editar_en' id='nombre_termino_relacionado_editar_en'>
        <input hidden name='des_termino_relacionado_editar_en' id='des_termino_relacionado_editar_en'>
        <?php
        $terminosRelacionadosEn = $a->getTerminosRelacionadosEn($id);
        if(is_array($terminosRelacionadosEn) && !empty($terminosRelacionadosEn))
        {
          foreach($terminosRelacionadosEn as $terminoRelacionEn)
          {
        ?>
        <div class="modal fade" id="editarTerminoRelEn<?php echo $terminoRelacionEn["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <!-- <div class="modal fade" id="editarTerminoRelEn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> -->
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <!-- <h4 class="modal-title" id="myModalLabel">Nuevo Término En</h4> -->
                <span class="termino-principal-tit termino-tit initialism">Editar Término Relacionado (EN)</span>
              </div>
              <div class="modal-body">
                <!-- Contenido modal -->
                <!-- <form id="updateTermEn" name="updateTermEn" action="" method="post"> -->

                  <div class="form-group">
                    <label for="nombre_termino">Nombre</label>
                    <!-- <input type="text" class="form-control" id="nombre_termino_relacionado_es" name="nombre_termino_relacionado_edit_es" autocomplete="off" value="<?php echo $terminoRelacionEn["nom_es"]; ?>"> -->
                    <input type="text" class="form-control" id="nombre_termino_relacionado_editar_en<?php echo $terminoRelacionEn["id"] ?>" name="nombre_termino_relacionado_editar_en<?php echo $terminoRelacionEn["id"] ?>" autocomplete="off" value="<?php echo $terminoRelacionEn["nom_es"]; ?>">
                  </div>
                  <div class="form-group">
                    <label for="descripcion_termino">Descripción</label>
                    <!-- <textarea class="form-control" rows="3" id="descripcion_termino_relacionado_es" name="descripcion_termino_relacionado_es"></textarea> -->
                    <!-- <textarea class="form-control" rows="3" id="summernote_des_rel_edit_es" name="descripcion_termino_relacionado_edit_es"><?php echo $terminoRelacionEn["des_es"]; ?></textarea> -->
                    <textarea class="form-control descripcion_termino_relacionado_editar_en" rows="3" id="descripcion_termino_relacionado_editar_en<?php echo $terminoRelacionEn["id"] ?>" name="descripcion_termino_relacionado_editar_en<?php echo $terminoRelacionEn["id"] ?>"  ><?php echo $terminoRelacionEn["des_es"]; ?></textarea>
                  </div>
                  <!-- <button type="submit" class="btn btn-default">Crear</button> -->
                <!-- </form> -->
                <!-- /Contenido modal -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="restablecerCamposModalRelacionadosEs('<?php echo $terminoRelacionEn["id"] ?>', '<?php echo $terminoRelacionEn["nom_es"] ?>', '<?php echo $terminoRelacionEn["des_es"] ?>');">Cancelar</button>
                <!-- <a class="btn btn-success uppercase" role="button" href="javascript:actualizarTerminoRelacionEn('edicion');">Guardar</a> -->
                <!-- <a class="btn btn-success uppercase" role="button" href="javascript:actualizarTerminoRelacionEditarModalEn('edicion', '<?php echo $terminoRelacionEn['id'] ?>');">Guardar</a> -->
                <a class="btn btn-success uppercase" role="button" href="javascript:actualizarTerminoRelacionEditarModalEn('edicion', '<?php echo $terminoRelacionEn["id"]; ?>')">Guardar</a>
              </div>
            </div>
          </div>
        </div>
        <?php
          }
        }
        ?>
        <!-- /Modal edicion termino relacionado -->

        <!-- Modal edicion termino relacionado ES -->
        <input hidden name='nombre_termino_relacionado_editar_enes' id='nombre_termino_relacionado_editar_enes'>
        <input hidden name='des_termino_relacionado_editar_enes' id='des_termino_relacionado_editar_enes'>
        <?php
        $terminosRelacionadosEnEs = $a->getTerminosRelacionadosEnEs($id);
        if(is_array($terminosRelacionadosEnEs) && !empty($terminosRelacionadosEnEs))
        {
          foreach($terminosRelacionadosEnEs as $terminoRelacionEnEs)
          {
        ?>
        <div class="modal fade" id="editarTerminoRelEnEs<?php echo $terminoRelacionEnEs["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <!-- <div class="modal fade" id="editarTerminoRelEn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> -->
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <!-- <h4 class="modal-title" id="myModalLabel">Nuevo Término En</h4> -->
                <span class="termino-principal-tit termino-tit initialism">Editar Término Relacionado (ES)</span>
              </div>
              <div class="modal-body">
                <!-- Contenido modal -->
                <!-- <form id="updateTermEn" name="updateTermEn" action="" method="post"> -->

                  <div class="form-group">
                    <label for="nombre_termino">Nombre</label>
                    <!-- <input type="text" class="form-control" id="nombre_termino_relacionado_es" name="nombre_termino_relacionado_edit_es" autocomplete="off" value="<?php echo $terminoRelacionEnEs["nom_en"]; ?>"> -->
                    <input type="text" class="form-control" id="nombre_termino_relacionado_editar_enes<?php echo $terminoRelacionEnEs["id"] ?>" name="nombre_termino_relacionado_editar_enes<?php echo $terminoRelacionEnEs["id"] ?>" autocomplete="off" value="<?php echo $terminoRelacionEnEs["nom_en"]; ?>">
                  </div>
                  <div class="form-group">
                    <label for="descripcion_termino">Descripción</label>
                    <!-- <textarea class="form-control" rows="3" id="descripcion_termino_relacionado_es" name="descripcion_termino_relacionado_es"></textarea> -->
                    <!-- <textarea class="form-control" rows="3" id="summernote_des_rel_edit_es" name="descripcion_termino_relacionado_edit_es"><?php echo $terminoRelacionEnEs["des_es"]; ?></textarea> -->
                    <textarea class="form-control descripcion_termino_relacionado_editar_enes" rows="3" id="descripcion_termino_relacionado_editar_enes<?php echo $terminoRelacionEnEs["id"] ?>" name="descripcion_termino_relacionado_editar_enes<?php echo $terminoRelacionEnEs["id"] ?>"  ><?php echo $terminoRelacionEnEs["des_en"]; ?></textarea>
                  </div>
                  <!-- <button type="submit" class="btn btn-default">Crear</button> -->
                <!-- </form> -->
                <!-- /Contenido modal -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="restablecerCamposModalRelacionadosEnEs('<?php echo $terminoRelacionEnEs["id"] ?>', '<?php echo $terminoRelacionEnEs["nom_en"] ?>', '<?php echo $terminoRelacionEnEs["des_en"] ?>')">Cancelar</button>
                <!-- <a class="btn btn-success uppercase" role="button" href="javascript:actualizarTerminoRelacionEn('edicion');">Guardar</a> -->
                <!-- <a class="btn btn-success uppercase" role="button" href="javascript:actualizarTerminoRelacionEditarModalEn('edicion', '<?php echo $terminoRelacionEnEs['id'] ?>');">Guardar</a> -->
                <a class="btn btn-success uppercase" role="button" href="javascript:actualizarTerminoRelacionEditarModalEnEs('edicion', '<?php echo $terminoRelacionEnEs["id"]; ?>')">Guardar</a>
              </div>
            </div>
          </div>
        </div>
        <?php
          }
        }
        ?>
        <!-- /Modal edicion termino relacionado ES -->

        <!-- /Modales -->