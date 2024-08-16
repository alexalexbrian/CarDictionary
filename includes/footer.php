<footer class="footer">
   

<!-- <div class="container text-center">

      <br class="clear">
      <br class="clear">
      <nav class="navbar navbar-fixed-bottom navbar-light">
        <div class="container" style="padding-left: 18px; padding-right: 18px">
          <a href="" class="btn btn-sm btn-footer pull-left"><i class="icon-arrow-left"></i> <small> Término siguiente</small></a>
          <a href="" class="btn btn-sm btn-footer pull-right"><small>Término anterior</small> <i class="icon-arrow-right"></i></a>
        </div>
      </nav>

    </div> -->
    <nav class="navbar navbar-fixed-bottom navbar-light">
      <!-- <a class="navbar-brand" href="#">Fixed bottom</a> -->
      <div class="btn-group" role="group" aria-label="Basic example">
        <!-- <a href="#" class="btn btn-term btn-edit-principal"><i class="fa fa-question-circle"></i></a> -->
        <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-term btn-edit-principal"><i class="fa fa-question-circle"></i></a>
      </div>
    </nav>

    <!-- Modal -->
    <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
            <span class="termino-principal-tit termino-tit initialism">Ayuda</span>
          </div>
          <div class="modal-body">

            <h5>¿Cómo crear una versalita?</h5>

            <ul class="list-group" style="font-size: 0.85em; line-height: normal">
              <li class="list-group-item">
                1. Una vez dentro de la edición de un término (o de una relación o de un vid), hacer clic en el botón <mark>código</mark> de los botones superiores del <a href="https://es.wikipedia.org/wiki/WYSIWYG" target="_blank">wysiwyg</a>. El botón tendrá el siguiente aspecto: <img src="assets/images/ico_versalita_captura.png" alt="" />
              </li>
              <li class="list-group-item">
                2. Posteriormente el cuadro de texto de la descripción (o nota) se cambiará a color negro de fondo con el texto en color blanco. Entonces, localizar la palabra o palabras que desea transformar a estilo versalita.
              </li>
              <li class="list-group-item">
                3. A continuación borrar la palabra localizada, y en lugar de ella pegar la siguiente línea de código: <br><code>&lt;span class="versalita"&gt;palabra&lt;/span&gt;</code>
              </li>
              <li class="list-group-item">
                4. Sustituir <mark>palabra</mark> por el término que se deseaba convertir a versalita y hacer clic de nuevo en el botón código <img src="assets/images/ico_versalita_captura.png" alt="" />. Después hacer clic en el botón guardar como siempre hacemos cada vez que editamos un término.
              </li>
              <li class="list-group-item">
                5. El resultado, suponiendo que tenemos por ejemplo la palabra <mark>ad</mark>, será el siguiente:
                <br>
                <em><strong>Frase original:</strong> </em>Lorem ipsum ad his
                <br>
                <em><strong>Frase con versalita:</strong> </em>Lorem ipsum <span class="versalita">ad</span> his
              </li>
            </ul>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar ventana</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
  </footer>