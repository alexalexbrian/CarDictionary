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
    <!-- <div class="container text-center" style="padding: 0px; background-color: #fff;"> -->
    <div class="container-fluid bg-white">
        <nav class="navbar navbar p-0">
            <div class="container" style="">

                <!-- boton volver -->
                <a href="./?volver=1" class="btn btn-sm btn-footer pull-left"><i class="icon-rewind"></i>
                    <small>Volver</small></a>
                <!-- /boton volver -->



            </div>
        </nav>

    </div>
    <!-- /Botones siguiente y anterior -->

    <!-- Termino principal -->
    <div class="container-fluid bg-white">
        <!-- <div class="container" style="padding-top: 20px; padding-bottom: 5px"> -->
        <div class="container" style="padding-bottom: 5px">

            <ul class="media-list p-t-md">

                <!-- termino vista -->
                <li class="media" id="vista2_termino">
                    <div class="media-body" style="border-right: 1px solid #edeef3; padding-right: 15px">
                        <p>
                            <span class="termino-principal-tit"></span>
                        </p>
                        <p>zxczxc</p>
                        <p></p>

                        <!-- <div class="row b-t-md"> -->
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-10">
                                <!-- Notas -->
                                <div class="media">
                                    <!-- <div class="media-left" style="font-size: 0.8em; color: #c5c4ca; font-weight: 400; max-width: 20px"> -->
                                    <div class="media-left"
                                        style="font-size: 0.8em; color: #c5c4ca; font-weight: 400; max-width: 20px; padding-top: 2px">
                                        <i class="icon-paper"></i>
                                    </div>
                                    <!-- <div class="media-body" style="font-size: 0.8em; color: #c5c4ca; font-weight: 400; padding-top: 2px"> -->
                                    <div class="media-body"
                                        style="font-size: 0.8em; color: #c5c4ca; font-weight: 400; padding-top: 4px">
                                        <p>zxczxczx</p>
                                    </div>
                                </div><!-- /.media -->
                                <!-- /Notas -->
                            </div>
                            <!-- Estado -->
                            <!-- <div class="col-md-2" style="font-size: 0.7em; color: #c5c4ca; font-weight: 400; padding-top: 2px"> -->
                            <div class="col-md-2"
                                style="font-size: 0.85em; color: #c5c4ca; font-weight: 400; padding-top: 2px">
                                <div class="pull-right">
                                    <!-- <span class="label label-default" style="background-color: #ededf5; color: #928daa; font-weight: 500; font-size: 0.8em">Alerta</span> -->
                                    <span
                                        class="label label-default label-termino-principal label-termino-principal-alerta">Alerta</span>
                                </div>
                            </div>
                            <!-- /Estado -->
                        </div>

                    </div>
                    <div class="media-right" style="padding: 0px; min-width: 103px!important">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="javascript:changeVistaEdicion()" class="btn btn-term btn-edit-principal"><i
                                    class="fa fa-pencil"></i></a>
                            <a href="javascript:eliminarTerminoEn('edicion', 53387);"
                                class="btn btn-term btn-eliminar-principal"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                </li><!-- /.media -->
                <!-- /termino vista -->

                <!-- termino edicion -->
                <!-- <li class="media" id="edicion_termino" style="display: none"> -->
                <li class="media m-t-0" id="edicion_termino" style="display: none;">
                    <div class="media-body" style="border-right: 1px solid #edeef3; padding-right: 15px;">

                        <div class="form-group">
                            <label for="nombre_termino" class="termino-principal-tit termino-tit initialism">Nombre
                                término</label>
                            <input type="text" class="form-control form-control-sm" id="nombre_termino_principal"
                                name="nombre_termino_principal" value="">
                        </div>
                        <div class="form-group">
                            <label for="descripcion_termino"
                                class="termino-principal-tit termino-tit initialism">Descripción término</label>
                            <textarea class="form-control form-control-sm" rows="3" id="summernote_des_ppal"
                                name="descripcion_termino_principal"
                                style="display: none;">&lt;p&gt;zxczxc&lt;/p&gt;</textarea>
                            <div class="note-editor panel panel-default">
                                <div class="note-dialog">
                                    <div class="note-image-dialog modal" aria-hidden="false">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header"><button type="button" class="close"
                                                        aria-hidden="true" tabindex="-1">×</button>
                                                    <h4 class="modal-title">Insert Image</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group row note-group-select-from-files">
                                                        <label>Select from files</label><input
                                                            class="note-image-input form-control" type="file"
                                                            name="files" accept="image/*" multiple="multiple">
                                                    </div>
                                                    <div class="form-group row"><label>Image URL</label><input
                                                            class="note-image-url form-control col-md-12" type="text">
                                                    </div>
                                                </div>
                                                <div class="modal-footer"><button href="#"
                                                        class="btn btn-primary note-image-btn disabled"
                                                        disabled="">Insert Image</button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note-link-dialog modal" aria-hidden="false">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header"><button type="button" class="close"
                                                        aria-hidden="true" tabindex="-1">×</button>
                                                    <h4 class="modal-title">Insert Link</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group row"><label>Text to display</label><input
                                                            class="note-link-text form-control col-md-12" type="text">
                                                    </div>
                                                    <div class="form-group row"><label>To what URL should this link
                                                            go?</label><input
                                                            class="note-link-url form-control col-md-12" type="text"
                                                            value="http://"></div>
                                                    <div class="checkbox"><label><input type="checkbox" checked="">
                                                            Open in new window</label></div>
                                                </div>
                                                <div class="modal-footer"><button href="#"
                                                        class="btn btn-primary note-link-btn disabled"
                                                        disabled="">Insert Link</button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note-help-dialog modal" aria-hidden="false">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body"><a class="modal-close pull-right"
                                                        aria-hidden="true" tabindex="-1">Close</a>
                                                    <div class="title">Keyboard shortcuts</div>
                                                    <div class="note-shortcut-row row">
                                                        <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                    Action</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Z</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Undo</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Shift + Z</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Redo</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + ]</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Indent</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + [</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Outdent</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + ENTER</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Insert Horizontal Rule</div>
                                                            </div>
                                                        </div>
                                                        <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                    Text formatting</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + B</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Bold</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + I</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Italic</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + U</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Underline</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + \</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Remove Font Style</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="note-shortcut-row row">
                                                        <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                    Document Style</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + NUM0</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Normal</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + NUM1</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Header 1</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + NUM2</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Header 2</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + NUM3</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Header 3</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + NUM4</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Header 4</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + NUM5</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Header 5</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + NUM6</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Header 6</div>
                                                            </div>
                                                        </div>
                                                        <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                    Paragraph formatting</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Shift + L</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Align left</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Shift + E</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Align center</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Shift + R</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Align right</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Shift + J</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Justify full</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Shift + NUM7</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Ordered list</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Shift + NUM8</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Unordered list</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-center"><a href="//summernote.org/"
                                                            target="_blank">Summernote 0.6.16</a> · <a
                                                            href="//github.com/summernote/summernote"
                                                            target="_blank">Project</a> · <a
                                                            href="//github.com/summernote/summernote/issues"
                                                            target="_blank">Issues</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-dropzone">
                                    <div class="note-dropzone-message"></div>
                                </div>
                                <div class="note-toolbar panel-heading">
                                    <div class="note-style btn-group"><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="bold" tabindex="-1"
                                            data-name="bold" data-original-title="Bold (CTRL+B)"><i
                                                class="fa fa-bold"></i></button><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="italic" tabindex="-1"
                                            data-name="italic" data-original-title="Italic (CTRL+I)"><i
                                                class="fa fa-italic"></i></button><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="underline" tabindex="-1"
                                            data-name="underline" data-original-title="Underline (CTRL+U)"><i
                                                class="fa fa-underline"></i></button><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="removeFormat"
                                            tabindex="-1" data-name="clear"
                                            data-original-title="Remove Font Style (CTRL+\)"><i
                                                class="fa fa-eraser"></i></button></div>
                                    <div class="note-font btn-group"><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="strikethrough"
                                            tabindex="-1" data-name="strikethrough"
                                            data-original-title="Strikethrough (CTRL+SHIFT+S)"><i
                                                class="fa fa-strikethrough"></i></button><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="superscript"
                                            tabindex="-1" data-name="superscript" data-original-title="Superscript"><i
                                                class="fa fa-superscript"></i></button><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="subscript" tabindex="-1"
                                            data-name="subscript" data-original-title="Subscript"><i
                                                class="fa fa-subscript"></i></button></div>
                                    <div class="note-color btn-group"><button type="button"
                                            class="btn btn-default btn-sm note-recent-color" title="" data-event="color"
                                            data-value="{&quot;backColor&quot;:&quot;yellow&quot;}" tabindex="-1"
                                            data-name="color" data-original-title="Recent Color"><i class="fa fa-font"
                                                style="color:black;background-color:yellow;"></i></button>
                                        <div class="btn-group" data-name="color"><button type="button"
                                                class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"
                                                title="" tabindex="-1" data-original-title="More Color"> <span
                                                    class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="btn-group">
                                                        <div class="note-palette-title">Background Color</div>
                                                        <div class="note-color-reset" data-event="backColor"
                                                            data-value="inherit" title="Transparent">Set transparent
                                                        </div>
                                                        <div class="note-color-palette" data-target-event="backColor">
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#000000;"
                                                                    data-event="backColor" data-value="#000000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#000000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#424242;"
                                                                    data-event="backColor" data-value="#424242" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#424242"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#636363;"
                                                                    data-event="backColor" data-value="#636363" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#636363"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9C9C94;"
                                                                    data-event="backColor" data-value="#9C9C94" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C9C94"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEC6CE;"
                                                                    data-event="backColor" data-value="#CEC6CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEC6CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#EFEFEF;"
                                                                    data-event="backColor" data-value="#EFEFEF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#EFEFEF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#F7F7F7;"
                                                                    data-event="backColor" data-value="#F7F7F7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7F7F7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF;"
                                                                    data-event="backColor" data-value="#FFFFFF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#FF0000;"
                                                                    data-event="backColor" data-value="#FF0000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF0000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FF9C00;"
                                                                    data-event="backColor" data-value="#FF9C00" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF9C00"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFF00;"
                                                                    data-event="backColor" data-value="#FFFF00" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFFF00"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#00FF00;"
                                                                    data-event="backColor" data-value="#00FF00" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#00FF00"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#00FFFF;"
                                                                    data-event="backColor" data-value="#00FFFF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#00FFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#0000FF;"
                                                                    data-event="backColor" data-value="#0000FF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#0000FF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9C00FF;"
                                                                    data-event="backColor" data-value="#9C00FF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C00FF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FF00FF;"
                                                                    data-event="backColor" data-value="#FF00FF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF00FF"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#F7C6CE;"
                                                                    data-event="backColor" data-value="#F7C6CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7C6CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFE7CE;"
                                                                    data-event="backColor" data-value="#FFE7CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFE7CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFEFC6;"
                                                                    data-event="backColor" data-value="#FFEFC6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFEFC6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6EFD6;"
                                                                    data-event="backColor" data-value="#D6EFD6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6EFD6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEDEE7;"
                                                                    data-event="backColor" data-value="#CEDEE7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEDEE7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEE7F7;"
                                                                    data-event="backColor" data-value="#CEE7F7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEE7F7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6D6E7;"
                                                                    data-event="backColor" data-value="#D6D6E7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6D6E7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#E7D6DE;"
                                                                    data-event="backColor" data-value="#E7D6DE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E7D6DE"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#E79C9C;"
                                                                    data-event="backColor" data-value="#E79C9C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E79C9C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFC69C;"
                                                                    data-event="backColor" data-value="#FFC69C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFC69C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFE79C;"
                                                                    data-event="backColor" data-value="#FFE79C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFE79C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B5D6A5;"
                                                                    data-event="backColor" data-value="#B5D6A5" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B5D6A5"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#A5C6CE;"
                                                                    data-event="backColor" data-value="#A5C6CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#A5C6CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9CC6EF;"
                                                                    data-event="backColor" data-value="#9CC6EF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9CC6EF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B5A5D6;"
                                                                    data-event="backColor" data-value="#B5A5D6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B5A5D6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6A5BD;"
                                                                    data-event="backColor" data-value="#D6A5BD" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6A5BD"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#E76363;"
                                                                    data-event="backColor" data-value="#E76363" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E76363"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#F7AD6B;"
                                                                    data-event="backColor" data-value="#F7AD6B" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7AD6B"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFD663;"
                                                                    data-event="backColor" data-value="#FFD663" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFD663"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#94BD7B;"
                                                                    data-event="backColor" data-value="#94BD7B" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#94BD7B"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#73A5AD;"
                                                                    data-event="backColor" data-value="#73A5AD" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#73A5AD"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#6BADDE;"
                                                                    data-event="backColor" data-value="#6BADDE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#6BADDE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#8C7BC6;"
                                                                    data-event="backColor" data-value="#8C7BC6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#8C7BC6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#C67BA5;"
                                                                    data-event="backColor" data-value="#C67BA5" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#C67BA5"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#CE0000;"
                                                                    data-event="backColor" data-value="#CE0000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CE0000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#E79439;"
                                                                    data-event="backColor" data-value="#E79439" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E79439"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#EFC631;"
                                                                    data-event="backColor" data-value="#EFC631" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#EFC631"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#6BA54A;"
                                                                    data-event="backColor" data-value="#6BA54A" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#6BA54A"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#4A7B8C;"
                                                                    data-event="backColor" data-value="#4A7B8C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#4A7B8C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#3984C6;"
                                                                    data-event="backColor" data-value="#3984C6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#3984C6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#634AA5;"
                                                                    data-event="backColor" data-value="#634AA5" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#634AA5"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#A54A7B;"
                                                                    data-event="backColor" data-value="#A54A7B" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#A54A7B"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#9C0000;"
                                                                    data-event="backColor" data-value="#9C0000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C0000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B56308;"
                                                                    data-event="backColor" data-value="#B56308" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B56308"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#BD9400;"
                                                                    data-event="backColor" data-value="#BD9400" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#BD9400"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#397B21;"
                                                                    data-event="backColor" data-value="#397B21" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#397B21"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#104A5A;"
                                                                    data-event="backColor" data-value="#104A5A" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#104A5A"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#085294;"
                                                                    data-event="backColor" data-value="#085294" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#085294"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#311873;"
                                                                    data-event="backColor" data-value="#311873" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#311873"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#731842;"
                                                                    data-event="backColor" data-value="#731842" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#731842"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#630000;"
                                                                    data-event="backColor" data-value="#630000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#630000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#7B3900;"
                                                                    data-event="backColor" data-value="#7B3900" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#7B3900"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#846300;"
                                                                    data-event="backColor" data-value="#846300" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#846300"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#295218;"
                                                                    data-event="backColor" data-value="#295218" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#295218"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#083139;"
                                                                    data-event="backColor" data-value="#083139" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#083139"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#003163;"
                                                                    data-event="backColor" data-value="#003163" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#003163"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#21104A;"
                                                                    data-event="backColor" data-value="#21104A" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#21104A"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#4A1031;"
                                                                    data-event="backColor" data-value="#4A1031" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#4A1031"></button></div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <div class="note-palette-title">Foreground Color</div>
                                                        <div class="note-color-reset" data-event="foreColor"
                                                            data-value="inherit" title="Reset">Reset to default
                                                        </div>
                                                        <div class="note-color-palette" data-target-event="foreColor">
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#000000;"
                                                                    data-event="foreColor" data-value="#000000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#000000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#424242;"
                                                                    data-event="foreColor" data-value="#424242" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#424242"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#636363;"
                                                                    data-event="foreColor" data-value="#636363" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#636363"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9C9C94;"
                                                                    data-event="foreColor" data-value="#9C9C94" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C9C94"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEC6CE;"
                                                                    data-event="foreColor" data-value="#CEC6CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEC6CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#EFEFEF;"
                                                                    data-event="foreColor" data-value="#EFEFEF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#EFEFEF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#F7F7F7;"
                                                                    data-event="foreColor" data-value="#F7F7F7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7F7F7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF;"
                                                                    data-event="foreColor" data-value="#FFFFFF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#FF0000;"
                                                                    data-event="foreColor" data-value="#FF0000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF0000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FF9C00;"
                                                                    data-event="foreColor" data-value="#FF9C00" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF9C00"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFF00;"
                                                                    data-event="foreColor" data-value="#FFFF00" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFFF00"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#00FF00;"
                                                                    data-event="foreColor" data-value="#00FF00" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#00FF00"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#00FFFF;"
                                                                    data-event="foreColor" data-value="#00FFFF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#00FFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#0000FF;"
                                                                    data-event="foreColor" data-value="#0000FF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#0000FF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9C00FF;"
                                                                    data-event="foreColor" data-value="#9C00FF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C00FF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FF00FF;"
                                                                    data-event="foreColor" data-value="#FF00FF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF00FF"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#F7C6CE;"
                                                                    data-event="foreColor" data-value="#F7C6CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7C6CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFE7CE;"
                                                                    data-event="foreColor" data-value="#FFE7CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFE7CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFEFC6;"
                                                                    data-event="foreColor" data-value="#FFEFC6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFEFC6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6EFD6;"
                                                                    data-event="foreColor" data-value="#D6EFD6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6EFD6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEDEE7;"
                                                                    data-event="foreColor" data-value="#CEDEE7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEDEE7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEE7F7;"
                                                                    data-event="foreColor" data-value="#CEE7F7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEE7F7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6D6E7;"
                                                                    data-event="foreColor" data-value="#D6D6E7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6D6E7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#E7D6DE;"
                                                                    data-event="foreColor" data-value="#E7D6DE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E7D6DE"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#E79C9C;"
                                                                    data-event="foreColor" data-value="#E79C9C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E79C9C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFC69C;"
                                                                    data-event="foreColor" data-value="#FFC69C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFC69C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFE79C;"
                                                                    data-event="foreColor" data-value="#FFE79C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFE79C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B5D6A5;"
                                                                    data-event="foreColor" data-value="#B5D6A5" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B5D6A5"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#A5C6CE;"
                                                                    data-event="foreColor" data-value="#A5C6CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#A5C6CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9CC6EF;"
                                                                    data-event="foreColor" data-value="#9CC6EF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9CC6EF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B5A5D6;"
                                                                    data-event="foreColor" data-value="#B5A5D6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B5A5D6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6A5BD;"
                                                                    data-event="foreColor" data-value="#D6A5BD" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6A5BD"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#E76363;"
                                                                    data-event="foreColor" data-value="#E76363" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E76363"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#F7AD6B;"
                                                                    data-event="foreColor" data-value="#F7AD6B" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7AD6B"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFD663;"
                                                                    data-event="foreColor" data-value="#FFD663" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFD663"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#94BD7B;"
                                                                    data-event="foreColor" data-value="#94BD7B" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#94BD7B"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#73A5AD;"
                                                                    data-event="foreColor" data-value="#73A5AD" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#73A5AD"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#6BADDE;"
                                                                    data-event="foreColor" data-value="#6BADDE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#6BADDE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#8C7BC6;"
                                                                    data-event="foreColor" data-value="#8C7BC6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#8C7BC6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#C67BA5;"
                                                                    data-event="foreColor" data-value="#C67BA5" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#C67BA5"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#CE0000;"
                                                                    data-event="foreColor" data-value="#CE0000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CE0000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#E79439;"
                                                                    data-event="foreColor" data-value="#E79439" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E79439"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#EFC631;"
                                                                    data-event="foreColor" data-value="#EFC631" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#EFC631"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#6BA54A;"
                                                                    data-event="foreColor" data-value="#6BA54A" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#6BA54A"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#4A7B8C;"
                                                                    data-event="foreColor" data-value="#4A7B8C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#4A7B8C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#3984C6;"
                                                                    data-event="foreColor" data-value="#3984C6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#3984C6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#634AA5;"
                                                                    data-event="foreColor" data-value="#634AA5" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#634AA5"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#A54A7B;"
                                                                    data-event="foreColor" data-value="#A54A7B" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#A54A7B"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#9C0000;"
                                                                    data-event="foreColor" data-value="#9C0000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C0000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B56308;"
                                                                    data-event="foreColor" data-value="#B56308" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B56308"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#BD9400;"
                                                                    data-event="foreColor" data-value="#BD9400" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#BD9400"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#397B21;"
                                                                    data-event="foreColor" data-value="#397B21" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#397B21"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#104A5A;"
                                                                    data-event="foreColor" data-value="#104A5A" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#104A5A"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#085294;"
                                                                    data-event="foreColor" data-value="#085294" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#085294"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#311873;"
                                                                    data-event="foreColor" data-value="#311873" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#311873"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#731842;"
                                                                    data-event="foreColor" data-value="#731842" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#731842"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#630000;"
                                                                    data-event="foreColor" data-value="#630000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#630000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#7B3900;"
                                                                    data-event="foreColor" data-value="#7B3900" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#7B3900"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#846300;"
                                                                    data-event="foreColor" data-value="#846300" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#846300"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#295218;"
                                                                    data-event="foreColor" data-value="#295218" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#295218"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#083139;"
                                                                    data-event="foreColor" data-value="#083139" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#083139"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#003163;"
                                                                    data-event="foreColor" data-value="#003163" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#003163"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#21104A;"
                                                                    data-event="foreColor" data-value="#21104A" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#21104A"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#4A1031;"
                                                                    data-event="foreColor" data-value="#4A1031" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#4A1031"></button></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="note-view btn-group"><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="codeview" tabindex="-1"
                                            data-name="codeview" data-original-title="Code View"><i
                                                class="fa fa-code"></i></button></div>
                                </div>
                                <div class="note-editing-area">
                                    <div class="note-handle">
                                        <div class="note-control-selection" style="display: none;">
                                            <div class="note-control-selection-bg"></div>
                                            <div class="note-control-holder note-control-nw"></div>
                                            <div class="note-control-holder note-control-ne"></div>
                                            <div class="note-control-holder note-control-sw"></div>
                                            <div class="note-control-sizing note-control-se"></div>
                                            <div class="note-control-selection-info"></div>
                                        </div>
                                    </div>
                                    <div class="note-popover">
                                        <div class="note-link-popover popover bottom in" style="display: none;">
                                            <div class="arrow"></div>
                                            <div class="popover-content"><a href="http://www.google.com"
                                                    target="_blank">www.google.com</a>&nbsp;&nbsp;<div
                                                    class="note-insert btn-group"><button type="button"
                                                        class="btn btn-default btn-sm" title=""
                                                        data-event="showLinkDialog" data-hide="true" tabindex="-1"
                                                        data-original-title="Edit"><i
                                                            class="fa fa-edit"></i></button><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="unlink"
                                                        tabindex="-1" data-original-title="Unlink"><i
                                                            class="fa fa-unlink"></i></button></div>
                                            </div>
                                        </div>
                                        <div class="note-image-popover popover bottom in" style="display: none;">
                                            <div class="arrow"></div>
                                            <div class="popover-content">
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="resize"
                                                        data-value="1" tabindex="-1"
                                                        data-original-title="Resize Full"><span
                                                            class="note-fontsize-10">100%</span></button><button
                                                        type="button" class="btn btn-default btn-sm" title=""
                                                        data-event="resize" data-value="0.5" tabindex="-1"
                                                        data-original-title="Resize Half"><span
                                                            class="note-fontsize-10">50%</span></button><button
                                                        type="button" class="btn btn-default btn-sm" title=""
                                                        data-event="resize" data-value="0.25" tabindex="-1"
                                                        data-original-title="Resize Quarter"><span
                                                            class="note-fontsize-10">25%</span></button></div>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="floatMe"
                                                        data-value="left" tabindex="-1"
                                                        data-original-title="Float Left"><i
                                                            class="fa fa-align-left"></i></button><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="floatMe"
                                                        data-value="right" tabindex="-1"
                                                        data-original-title="Float Right"><i
                                                            class="fa fa-align-right"></i></button><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="floatMe"
                                                        data-value="none" tabindex="-1"
                                                        data-original-title="Float None"><i
                                                            class="fa fa-align-justify"></i></button></div><br>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                        data-value="img-rounded" tabindex="-1"
                                                        data-original-title="Shape: Rounded"><i
                                                            class="fa fa-square"></i></button><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                        data-value="img-circle" tabindex="-1"
                                                        data-original-title="Shape: Circle"><i
                                                            class="fa fa-circle-o"></i></button><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                        data-value="img-thumbnail" tabindex="-1"
                                                        data-original-title="Shape: Thumbnail"><i
                                                            class="fa fa-picture-o"></i></button><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                        tabindex="-1" data-original-title="Shape: None"><i
                                                            class="fa fa-times"></i></button></div>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="removeMedia"
                                                        data-value="none" tabindex="-1"
                                                        data-original-title="Remove Image"><i
                                                            class="fa fa-trash-o"></i></button></div>
                                            </div>
                                        </div>
                                    </div><textarea class="note-codable"></textarea>
                                    <div class="note-editable panel-body" contenteditable="true">
                                        <p>zxczxc</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descripcion_termino"
                                class="termino-principal-tit termino-tit initialism">Notas</label>
                            <textarea class="form-control form-control-sm" rows="2" id="summernote_not_ppal"
                                name="notas_termino_principal"
                                style="display: none;">&lt;p&gt;zxczxczx&lt;/p&gt;</textarea>
                            <div class="note-editor panel panel-default">
                                <div class="note-dialog">
                                    <div class="note-image-dialog modal" aria-hidden="false">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header"><button type="button" class="close"
                                                        aria-hidden="true" tabindex="-1">×</button>
                                                    <h4 class="modal-title">Insert Image</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group row note-group-select-from-files">
                                                        <label>Select from files</label><input
                                                            class="note-image-input form-control" type="file"
                                                            name="files" accept="image/*" multiple="multiple">
                                                    </div>
                                                    <div class="form-group row"><label>Image URL</label><input
                                                            class="note-image-url form-control col-md-12" type="text">
                                                    </div>
                                                </div>
                                                <div class="modal-footer"><button href="#"
                                                        class="btn btn-primary note-image-btn disabled"
                                                        disabled="">Insert Image</button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note-link-dialog modal" aria-hidden="false">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header"><button type="button" class="close"
                                                        aria-hidden="true" tabindex="-1">×</button>
                                                    <h4 class="modal-title">Insert Link</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group row"><label>Text to display</label><input
                                                            class="note-link-text form-control col-md-12" type="text">
                                                    </div>
                                                    <div class="form-group row"><label>To what URL should this link
                                                            go?</label><input
                                                            class="note-link-url form-control col-md-12" type="text"
                                                            value="http://"></div>
                                                    <div class="checkbox"><label><input type="checkbox" checked="">
                                                            Open in new window</label></div>
                                                </div>
                                                <div class="modal-footer"><button href="#"
                                                        class="btn btn-primary note-link-btn disabled"
                                                        disabled="">Insert Link</button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note-help-dialog modal" aria-hidden="false">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body"><a class="modal-close pull-right"
                                                        aria-hidden="true" tabindex="-1">Close</a>
                                                    <div class="title">Keyboard shortcuts</div>
                                                    <div class="note-shortcut-row row">
                                                        <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                    Action</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Z</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Undo</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Shift + Z</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Redo</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + ]</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Indent</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + [</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Outdent</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + ENTER</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Insert Horizontal Rule</div>
                                                            </div>
                                                        </div>
                                                        <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                    Text formatting</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + B</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Bold</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + I</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Italic</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + U</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Underline</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + \</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Remove Font Style</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="note-shortcut-row row">
                                                        <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                    Document Style</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + NUM0</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Normal</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + NUM1</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Header 1</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + NUM2</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Header 2</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + NUM3</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Header 3</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + NUM4</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Header 4</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + NUM5</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Header 5</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + NUM6</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Header 6</div>
                                                            </div>
                                                        </div>
                                                        <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                    Paragraph formatting</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Shift + L</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Align left</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Shift + E</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Align center</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Shift + R</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Align right</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Shift + J</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Justify full</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Shift + NUM7</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Ordered list</div>
                                                            </div>
                                                            <div class="note-shortcut-row row">
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                    Ctrl + Shift + NUM8</div>
                                                                <div
                                                                    class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                    Unordered list</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-center"><a href="//summernote.org/"
                                                            target="_blank">Summernote 0.6.16</a> · <a
                                                            href="//github.com/summernote/summernote"
                                                            target="_blank">Project</a> · <a
                                                            href="//github.com/summernote/summernote/issues"
                                                            target="_blank">Issues</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-dropzone">
                                    <div class="note-dropzone-message"></div>
                                </div>
                                <div class="note-toolbar panel-heading">
                                    <div class="note-style btn-group"><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="bold" tabindex="-1"
                                            data-name="bold" data-original-title="Bold (CTRL+B)"><i
                                                class="fa fa-bold"></i></button><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="italic" tabindex="-1"
                                            data-name="italic" data-original-title="Italic (CTRL+I)"><i
                                                class="fa fa-italic"></i></button><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="underline" tabindex="-1"
                                            data-name="underline" data-original-title="Underline (CTRL+U)"><i
                                                class="fa fa-underline"></i></button><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="removeFormat"
                                            tabindex="-1" data-name="clear"
                                            data-original-title="Remove Font Style (CTRL+\)"><i
                                                class="fa fa-eraser"></i></button></div>
                                    <div class="note-font btn-group"><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="strikethrough"
                                            tabindex="-1" data-name="strikethrough"
                                            data-original-title="Strikethrough (CTRL+SHIFT+S)"><i
                                                class="fa fa-strikethrough"></i></button><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="superscript"
                                            tabindex="-1" data-name="superscript" data-original-title="Superscript"><i
                                                class="fa fa-superscript"></i></button><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="subscript" tabindex="-1"
                                            data-name="subscript" data-original-title="Subscript"><i
                                                class="fa fa-subscript"></i></button></div>
                                    <div class="note-color btn-group"><button type="button"
                                            class="btn btn-default btn-sm note-recent-color" title="" data-event="color"
                                            data-value="{&quot;backColor&quot;:&quot;yellow&quot;}" tabindex="-1"
                                            data-name="color" data-original-title="Recent Color"><i class="fa fa-font"
                                                style="color:black;background-color:yellow;"></i></button>
                                        <div class="btn-group" data-name="color"><button type="button"
                                                class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"
                                                title="" tabindex="-1" data-original-title="More Color"> <span
                                                    class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="btn-group">
                                                        <div class="note-palette-title">Background Color</div>
                                                        <div class="note-color-reset" data-event="backColor"
                                                            data-value="inherit" title="Transparent">Set transparent
                                                        </div>
                                                        <div class="note-color-palette" data-target-event="backColor">
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#000000;"
                                                                    data-event="backColor" data-value="#000000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#000000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#424242;"
                                                                    data-event="backColor" data-value="#424242" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#424242"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#636363;"
                                                                    data-event="backColor" data-value="#636363" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#636363"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9C9C94;"
                                                                    data-event="backColor" data-value="#9C9C94" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C9C94"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEC6CE;"
                                                                    data-event="backColor" data-value="#CEC6CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEC6CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#EFEFEF;"
                                                                    data-event="backColor" data-value="#EFEFEF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#EFEFEF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#F7F7F7;"
                                                                    data-event="backColor" data-value="#F7F7F7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7F7F7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF;"
                                                                    data-event="backColor" data-value="#FFFFFF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#FF0000;"
                                                                    data-event="backColor" data-value="#FF0000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF0000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FF9C00;"
                                                                    data-event="backColor" data-value="#FF9C00" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF9C00"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFF00;"
                                                                    data-event="backColor" data-value="#FFFF00" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFFF00"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#00FF00;"
                                                                    data-event="backColor" data-value="#00FF00" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#00FF00"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#00FFFF;"
                                                                    data-event="backColor" data-value="#00FFFF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#00FFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#0000FF;"
                                                                    data-event="backColor" data-value="#0000FF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#0000FF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9C00FF;"
                                                                    data-event="backColor" data-value="#9C00FF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C00FF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FF00FF;"
                                                                    data-event="backColor" data-value="#FF00FF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF00FF"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#F7C6CE;"
                                                                    data-event="backColor" data-value="#F7C6CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7C6CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFE7CE;"
                                                                    data-event="backColor" data-value="#FFE7CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFE7CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFEFC6;"
                                                                    data-event="backColor" data-value="#FFEFC6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFEFC6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6EFD6;"
                                                                    data-event="backColor" data-value="#D6EFD6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6EFD6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEDEE7;"
                                                                    data-event="backColor" data-value="#CEDEE7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEDEE7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEE7F7;"
                                                                    data-event="backColor" data-value="#CEE7F7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEE7F7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6D6E7;"
                                                                    data-event="backColor" data-value="#D6D6E7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6D6E7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#E7D6DE;"
                                                                    data-event="backColor" data-value="#E7D6DE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E7D6DE"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#E79C9C;"
                                                                    data-event="backColor" data-value="#E79C9C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E79C9C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFC69C;"
                                                                    data-event="backColor" data-value="#FFC69C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFC69C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFE79C;"
                                                                    data-event="backColor" data-value="#FFE79C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFE79C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B5D6A5;"
                                                                    data-event="backColor" data-value="#B5D6A5" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B5D6A5"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#A5C6CE;"
                                                                    data-event="backColor" data-value="#A5C6CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#A5C6CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9CC6EF;"
                                                                    data-event="backColor" data-value="#9CC6EF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9CC6EF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B5A5D6;"
                                                                    data-event="backColor" data-value="#B5A5D6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B5A5D6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6A5BD;"
                                                                    data-event="backColor" data-value="#D6A5BD" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6A5BD"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#E76363;"
                                                                    data-event="backColor" data-value="#E76363" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E76363"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#F7AD6B;"
                                                                    data-event="backColor" data-value="#F7AD6B" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7AD6B"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFD663;"
                                                                    data-event="backColor" data-value="#FFD663" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFD663"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#94BD7B;"
                                                                    data-event="backColor" data-value="#94BD7B" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#94BD7B"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#73A5AD;"
                                                                    data-event="backColor" data-value="#73A5AD" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#73A5AD"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#6BADDE;"
                                                                    data-event="backColor" data-value="#6BADDE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#6BADDE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#8C7BC6;"
                                                                    data-event="backColor" data-value="#8C7BC6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#8C7BC6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#C67BA5;"
                                                                    data-event="backColor" data-value="#C67BA5" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#C67BA5"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#CE0000;"
                                                                    data-event="backColor" data-value="#CE0000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CE0000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#E79439;"
                                                                    data-event="backColor" data-value="#E79439" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E79439"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#EFC631;"
                                                                    data-event="backColor" data-value="#EFC631" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#EFC631"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#6BA54A;"
                                                                    data-event="backColor" data-value="#6BA54A" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#6BA54A"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#4A7B8C;"
                                                                    data-event="backColor" data-value="#4A7B8C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#4A7B8C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#3984C6;"
                                                                    data-event="backColor" data-value="#3984C6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#3984C6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#634AA5;"
                                                                    data-event="backColor" data-value="#634AA5" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#634AA5"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#A54A7B;"
                                                                    data-event="backColor" data-value="#A54A7B" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#A54A7B"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#9C0000;"
                                                                    data-event="backColor" data-value="#9C0000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C0000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B56308;"
                                                                    data-event="backColor" data-value="#B56308" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B56308"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#BD9400;"
                                                                    data-event="backColor" data-value="#BD9400" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#BD9400"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#397B21;"
                                                                    data-event="backColor" data-value="#397B21" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#397B21"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#104A5A;"
                                                                    data-event="backColor" data-value="#104A5A" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#104A5A"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#085294;"
                                                                    data-event="backColor" data-value="#085294" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#085294"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#311873;"
                                                                    data-event="backColor" data-value="#311873" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#311873"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#731842;"
                                                                    data-event="backColor" data-value="#731842" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#731842"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#630000;"
                                                                    data-event="backColor" data-value="#630000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#630000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#7B3900;"
                                                                    data-event="backColor" data-value="#7B3900" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#7B3900"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#846300;"
                                                                    data-event="backColor" data-value="#846300" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#846300"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#295218;"
                                                                    data-event="backColor" data-value="#295218" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#295218"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#083139;"
                                                                    data-event="backColor" data-value="#083139" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#083139"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#003163;"
                                                                    data-event="backColor" data-value="#003163" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#003163"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#21104A;"
                                                                    data-event="backColor" data-value="#21104A" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#21104A"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#4A1031;"
                                                                    data-event="backColor" data-value="#4A1031" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#4A1031"></button></div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <div class="note-palette-title">Foreground Color</div>
                                                        <div class="note-color-reset" data-event="foreColor"
                                                            data-value="inherit" title="Reset">Reset to default
                                                        </div>
                                                        <div class="note-color-palette" data-target-event="foreColor">
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#000000;"
                                                                    data-event="foreColor" data-value="#000000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#000000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#424242;"
                                                                    data-event="foreColor" data-value="#424242" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#424242"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#636363;"
                                                                    data-event="foreColor" data-value="#636363" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#636363"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9C9C94;"
                                                                    data-event="foreColor" data-value="#9C9C94" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C9C94"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEC6CE;"
                                                                    data-event="foreColor" data-value="#CEC6CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEC6CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#EFEFEF;"
                                                                    data-event="foreColor" data-value="#EFEFEF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#EFEFEF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#F7F7F7;"
                                                                    data-event="foreColor" data-value="#F7F7F7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7F7F7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF;"
                                                                    data-event="foreColor" data-value="#FFFFFF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#FF0000;"
                                                                    data-event="foreColor" data-value="#FF0000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF0000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FF9C00;"
                                                                    data-event="foreColor" data-value="#FF9C00" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF9C00"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFF00;"
                                                                    data-event="foreColor" data-value="#FFFF00" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFFF00"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#00FF00;"
                                                                    data-event="foreColor" data-value="#00FF00" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#00FF00"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#00FFFF;"
                                                                    data-event="foreColor" data-value="#00FFFF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#00FFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#0000FF;"
                                                                    data-event="foreColor" data-value="#0000FF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#0000FF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9C00FF;"
                                                                    data-event="foreColor" data-value="#9C00FF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C00FF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FF00FF;"
                                                                    data-event="foreColor" data-value="#FF00FF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF00FF"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#F7C6CE;"
                                                                    data-event="foreColor" data-value="#F7C6CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7C6CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFE7CE;"
                                                                    data-event="foreColor" data-value="#FFE7CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFE7CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFEFC6;"
                                                                    data-event="foreColor" data-value="#FFEFC6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFEFC6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6EFD6;"
                                                                    data-event="foreColor" data-value="#D6EFD6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6EFD6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEDEE7;"
                                                                    data-event="foreColor" data-value="#CEDEE7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEDEE7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEE7F7;"
                                                                    data-event="foreColor" data-value="#CEE7F7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEE7F7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6D6E7;"
                                                                    data-event="foreColor" data-value="#D6D6E7" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6D6E7"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#E7D6DE;"
                                                                    data-event="foreColor" data-value="#E7D6DE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E7D6DE"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#E79C9C;"
                                                                    data-event="foreColor" data-value="#E79C9C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E79C9C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFC69C;"
                                                                    data-event="foreColor" data-value="#FFC69C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFC69C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFE79C;"
                                                                    data-event="foreColor" data-value="#FFE79C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFE79C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B5D6A5;"
                                                                    data-event="foreColor" data-value="#B5D6A5" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B5D6A5"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#A5C6CE;"
                                                                    data-event="foreColor" data-value="#A5C6CE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#A5C6CE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9CC6EF;"
                                                                    data-event="foreColor" data-value="#9CC6EF" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9CC6EF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B5A5D6;"
                                                                    data-event="foreColor" data-value="#B5A5D6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B5A5D6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6A5BD;"
                                                                    data-event="foreColor" data-value="#D6A5BD" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6A5BD"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#E76363;"
                                                                    data-event="foreColor" data-value="#E76363" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E76363"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#F7AD6B;"
                                                                    data-event="foreColor" data-value="#F7AD6B" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7AD6B"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFD663;"
                                                                    data-event="foreColor" data-value="#FFD663" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFD663"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#94BD7B;"
                                                                    data-event="foreColor" data-value="#94BD7B" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#94BD7B"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#73A5AD;"
                                                                    data-event="foreColor" data-value="#73A5AD" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#73A5AD"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#6BADDE;"
                                                                    data-event="foreColor" data-value="#6BADDE" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#6BADDE"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#8C7BC6;"
                                                                    data-event="foreColor" data-value="#8C7BC6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#8C7BC6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#C67BA5;"
                                                                    data-event="foreColor" data-value="#C67BA5" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#C67BA5"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#CE0000;"
                                                                    data-event="foreColor" data-value="#CE0000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CE0000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#E79439;"
                                                                    data-event="foreColor" data-value="#E79439" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E79439"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#EFC631;"
                                                                    data-event="foreColor" data-value="#EFC631" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#EFC631"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#6BA54A;"
                                                                    data-event="foreColor" data-value="#6BA54A" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#6BA54A"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#4A7B8C;"
                                                                    data-event="foreColor" data-value="#4A7B8C" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#4A7B8C"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#3984C6;"
                                                                    data-event="foreColor" data-value="#3984C6" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#3984C6"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#634AA5;"
                                                                    data-event="foreColor" data-value="#634AA5" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#634AA5"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#A54A7B;"
                                                                    data-event="foreColor" data-value="#A54A7B" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#A54A7B"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#9C0000;"
                                                                    data-event="foreColor" data-value="#9C0000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C0000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B56308;"
                                                                    data-event="foreColor" data-value="#B56308" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B56308"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#BD9400;"
                                                                    data-event="foreColor" data-value="#BD9400" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#BD9400"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#397B21;"
                                                                    data-event="foreColor" data-value="#397B21" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#397B21"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#104A5A;"
                                                                    data-event="foreColor" data-value="#104A5A" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#104A5A"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#085294;"
                                                                    data-event="foreColor" data-value="#085294" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#085294"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#311873;"
                                                                    data-event="foreColor" data-value="#311873" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#311873"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#731842;"
                                                                    data-event="foreColor" data-value="#731842" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#731842"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#630000;"
                                                                    data-event="foreColor" data-value="#630000" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#630000"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#7B3900;"
                                                                    data-event="foreColor" data-value="#7B3900" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#7B3900"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#846300;"
                                                                    data-event="foreColor" data-value="#846300" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#846300"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#295218;"
                                                                    data-event="foreColor" data-value="#295218" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#295218"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#083139;"
                                                                    data-event="foreColor" data-value="#083139" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#083139"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#003163;"
                                                                    data-event="foreColor" data-value="#003163" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#003163"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#21104A;"
                                                                    data-event="foreColor" data-value="#21104A" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#21104A"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#4A1031;"
                                                                    data-event="foreColor" data-value="#4A1031" title=""
                                                                    data-toggle="button" tabindex="-1"
                                                                    data-original-title="#4A1031"></button></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="note-view btn-group"><button type="button"
                                            class="btn btn-default btn-sm" title="" data-event="codeview" tabindex="-1"
                                            data-name="codeview" data-original-title="Code View"><i
                                                class="fa fa-code"></i></button></div>
                                </div>
                                <div class="note-editing-area">
                                    <div class="note-handle">
                                        <div class="note-control-selection" style="display: none;">
                                            <div class="note-control-selection-bg"></div>
                                            <div class="note-control-holder note-control-nw"></div>
                                            <div class="note-control-holder note-control-ne"></div>
                                            <div class="note-control-holder note-control-sw"></div>
                                            <div class="note-control-sizing note-control-se"></div>
                                            <div class="note-control-selection-info"></div>
                                        </div>
                                    </div>
                                    <div class="note-popover">
                                        <div class="note-link-popover popover bottom in" style="display: none;">
                                            <div class="arrow"></div>
                                            <div class="popover-content"><a href="http://www.google.com"
                                                    target="_blank">www.google.com</a>&nbsp;&nbsp;<div
                                                    class="note-insert btn-group"><button type="button"
                                                        class="btn btn-default btn-sm" title=""
                                                        data-event="showLinkDialog" data-hide="true" tabindex="-1"
                                                        data-original-title="Edit"><i
                                                            class="fa fa-edit"></i></button><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="unlink"
                                                        tabindex="-1" data-original-title="Unlink"><i
                                                            class="fa fa-unlink"></i></button></div>
                                            </div>
                                        </div>
                                        <div class="note-image-popover popover bottom in" style="display: none;">
                                            <div class="arrow"></div>
                                            <div class="popover-content">
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="resize"
                                                        data-value="1" tabindex="-1"
                                                        data-original-title="Resize Full"><span
                                                            class="note-fontsize-10">100%</span></button><button
                                                        type="button" class="btn btn-default btn-sm" title=""
                                                        data-event="resize" data-value="0.5" tabindex="-1"
                                                        data-original-title="Resize Half"><span
                                                            class="note-fontsize-10">50%</span></button><button
                                                        type="button" class="btn btn-default btn-sm" title=""
                                                        data-event="resize" data-value="0.25" tabindex="-1"
                                                        data-original-title="Resize Quarter"><span
                                                            class="note-fontsize-10">25%</span></button></div>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="floatMe"
                                                        data-value="left" tabindex="-1"
                                                        data-original-title="Float Left"><i
                                                            class="fa fa-align-left"></i></button><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="floatMe"
                                                        data-value="right" tabindex="-1"
                                                        data-original-title="Float Right"><i
                                                            class="fa fa-align-right"></i></button><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="floatMe"
                                                        data-value="none" tabindex="-1"
                                                        data-original-title="Float None"><i
                                                            class="fa fa-align-justify"></i></button></div><br>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                        data-value="img-rounded" tabindex="-1"
                                                        data-original-title="Shape: Rounded"><i
                                                            class="fa fa-square"></i></button><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                        data-value="img-circle" tabindex="-1"
                                                        data-original-title="Shape: Circle"><i
                                                            class="fa fa-circle-o"></i></button><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                        data-value="img-thumbnail" tabindex="-1"
                                                        data-original-title="Shape: Thumbnail"><i
                                                            class="fa fa-picture-o"></i></button><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                        tabindex="-1" data-original-title="Shape: None"><i
                                                            class="fa fa-times"></i></button></div>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-default btn-sm" title="" data-event="removeMedia"
                                                        data-value="none" tabindex="-1"
                                                        data-original-title="Remove Image"><i
                                                            class="fa fa-trash-o"></i></button></div>
                                            </div>
                                        </div>
                                    </div><textarea class="note-codable"></textarea>
                                    <div class="note-editable panel-body" contenteditable="true">
                                        <p>zxczxczx</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descripcion_termino" class="termino-principal-tit termino-tit initialism">Estado
                            </label>
                            <select class="form-control form-control-sm" id="estado" name="estado_termino_principal">
                                <option value="Editado">Editado</option>

                                <!-- Nuevo estado -->
                                <option value="Editado OK">Editado OK</option>

                                <option value="Revisado">Revisado</option>
                                <option selected="" value="Alerta">Alerta</option>
                                <option value="OK Autora">OK Autora</option>
                            </select>
                        </div>

                    </div>
                    <div class="media-right" style="padding: 0px; min-width: 103px!important">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a role="button" type="submit" href="javascript:actualizarTerminoCompletoEn('edicion');"
                                class="btn btn-term btn-success-principal"><i class="icon-check"></i></a>
                            <!-- <a href="javascript:changeVistaTermino()" class="btn btn-term btn-eliminar-principal" onclick="restablecerCamposPrincipalEn('', '<p>zxczxc</p>', '<p>zxczxczx</p>');"><i class="icon-cross"></i></a> -->
                            <a href="javascript:changeVistaTermino()" class="btn btn-term btn-eliminar-principal"
                                onclick="restablecerCamposPrincipalEn('', '', '<p>zxczxczx</p>');"><i
                                    class="icon-cross"></i></a>
                        </div>
                    </div>
                </li><!-- /.media -->
                <!-- prueba -->
                <!-- <a class="btn btn-default btn-xs uppercase pull-right" href="javascript:eliminarTerminoEn('edicion', 53387);" role="button">Eliminar término</a> -->
                <!-- prueba -->
                <!-- /termino edicion -->

            </ul><!-- /.media-list -->

        </div><!-- /.container -->
    </div><!-- /.container-fluid -->
    <!-- /Termino principal -->

    <!-- Terminos relacionados y vid -->

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
                                <a href="#" class="btn btn-term btn-nuevo" data-toggle="modal"
                                    data-target="#modalNuevoTerminoRelacionadoVid"><i class="icon-circle-plus"></i></a>
                            </div>
                        </div>
                    </li><!-- /.media -->
                    <!-- /titular -->

                    <div class="alert-indigo-light">No existen relaciones vid para el término <strong></strong>
                    </div>
                </ul><!-- /.media-list -->
                <!-- /terminos vid -->

            </div><!-- /.col -->

            <div class="col-lg-9 col-md-8">

                <!-- terminos relacionados (EN) -->
                <ul class="media-list">

                    <!-- titular -->
                    <li class="media">
                        <div class="media-body" style="padding: 9px 10px; font-size: 0.75em;">
                            <span class="termino-principal-tit termino-tit initialism">Términos relacionado
                                (EN)</span>
                        </div>
                        <!-- <div class="media-right" style="padding: 0px;"> -->
                        <div class="media-right" style="padding: 0px; min-width: 55px!important">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <!-- <a href="" class="btn btn-term btn-edit"><i class="fa fa-pencil"></i></a> -->
                                <a href="#" class="btn btn-term btn-nuevo" data-toggle="modal"
                                    data-target="#modalNuevoTerminoRelacionadoEn"><i class="icon-circle-plus"></i></a>
                            </div>
                        </div>
                    </li><!-- /.media -->
                    <!-- /titular -->

                    <div class="alert-indigo-light">No existen relaciones en inglés para el término
                        <strong></strong>
                    </div>
                </ul><!-- /.media-list -->
                <!-- /terminos relacionados (EN) -->

                <hr class="hr-indigo-termino">

                <!-- terminos relacionados (ES) -->
                <ul class="media-list">

                    <!-- titular -->
                    <li class="media">
                        <div class="media-body" style="padding: 9px 10px; font-size: 0.75em;">
                            <span class="termino-principal-tit termino-tit initialism">Términos relacionado
                                (ES)</span>
                        </div>
                        <div class="media-right" style="padding: 0px; min-width: 55px!important">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="#" class="btn btn-term btn-nuevo" data-toggle="modal"
                                    data-target="#modalNuevoTerminoRelacionadoEnEs"><i class="icon-circle-plus"></i></a>
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
                    <div class="alert-indigo-light">No existen relaciones en inglés para el término
                        <strong></strong>
                    </div> <!-- /.media -->

                </ul><!-- /.media-list -->
                <!-- /terminos relacionados (ES) -->

            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container -->

    <!-- /Terminos relacionados y vid -->

    <!-- Modales -->

    <!-- Modal Nuevo termino relacionado en -->
    <div class="modal fade" id="modalNuevoTerminoRelacionadoEn" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <!-- <h4 class="modal-title" id="myModalLabel">Nuevo Término En</h4> -->
                    <span class="termino-principal-tit termino-tit initialism">Nuevo Término Relacionado (EN)</span>
                </div>
                <div class="modal-body">
                    <!-- Contenido modal -->
                    <!-- <form id="updateTermEn" name="updateTermEn" action="" method="post"> -->
                    <div class="form-group">
                        <label for="nombre_termino">Nombre</label>
                        <input type="text" class="form-control" id="nombre_termino_relacionado_en"
                            name="nombre_termino_relacionado_en" onkeyup="loadXMLDoc()" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="descripcion_termino">Descripción</label>
                        <!-- <textarea class="form-control" rows="3" id="descripcion_termino_relacionado_en" name="descripcion_termino_relacionado_en"></textarea> -->
                        <textarea class="form-control" rows="3" id="des_termino_relacionado_en"
                            name="des_termino_relacionado_en" style="display: none;"></textarea>
                        <div class="note-editor panel panel-default">
                            <div class="note-dialog">
                                <div class="note-image-dialog modal" aria-hidden="false">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header"><button type="button" class="close"
                                                    aria-hidden="true" tabindex="-1">×</button>
                                                <h4 class="modal-title">Insert Image</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row note-group-select-from-files">
                                                    <label>Select from files</label><input
                                                        class="note-image-input form-control" type="file" name="files"
                                                        accept="image/*" multiple="multiple">
                                                </div>
                                                <div class="form-group row"><label>Image URL</label><input
                                                        class="note-image-url form-control col-md-12" type="text">
                                                </div>
                                            </div>
                                            <div class="modal-footer"><button href="#"
                                                    class="btn btn-primary note-image-btn disabled" disabled="">Insert
                                                    Image</button></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-link-dialog modal" aria-hidden="false">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header"><button type="button" class="close"
                                                    aria-hidden="true" tabindex="-1">×</button>
                                                <h4 class="modal-title">Insert Link</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row"><label>Text to display</label><input
                                                        class="note-link-text form-control col-md-12" type="text">
                                                </div>
                                                <div class="form-group row"><label>To what URL should this link
                                                        go?</label><input class="note-link-url form-control col-md-12"
                                                        type="text" value="http://"></div>
                                                <div class="checkbox"><label><input type="checkbox" checked=""> Open
                                                        in new window</label></div>
                                            </div>
                                            <div class="modal-footer"><button href="#"
                                                    class="btn btn-primary note-link-btn disabled" disabled="">Insert
                                                    Link</button></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-help-dialog modal" aria-hidden="false">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body"><a class="modal-close pull-right" aria-hidden="true"
                                                    tabindex="-1">Close</a>
                                                <div class="title">Keyboard shortcuts</div>
                                                <div class="note-shortcut-row row">
                                                    <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                        <div class="note-shortcut-row row">
                                                            <div
                                                                class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                Action</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Z</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Undo</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + Z</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Redo</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + ]</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Indent</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + [</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Outdent</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + ENTER</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Insert Horizontal Rule</div>
                                                        </div>
                                                    </div>
                                                    <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                        <div class="note-shortcut-row row">
                                                            <div
                                                                class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                Text formatting</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + B</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Bold</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + I</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Italic</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + U</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Underline</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + \</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Remove Font Style</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="note-shortcut-row row">
                                                    <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                        <div class="note-shortcut-row row">
                                                            <div
                                                                class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                Document Style</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM0</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Normal</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM1</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 1</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM2</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 2</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM3</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 3</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM4</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 4</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM5</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 5</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM6</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 6</div>
                                                        </div>
                                                    </div>
                                                    <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                        <div class="note-shortcut-row row">
                                                            <div
                                                                class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                Paragraph formatting</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + L</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Align left</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + E</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Align center</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + R</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Align right</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + J</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Justify full</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + NUM7</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Ordered list</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + NUM8</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Unordered list</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="text-center"><a href="//summernote.org/"
                                                        target="_blank">Summernote 0.6.16</a> · <a
                                                        href="//github.com/summernote/summernote"
                                                        target="_blank">Project</a> · <a
                                                        href="//github.com/summernote/summernote/issues"
                                                        target="_blank">Issues</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="note-dropzone">
                                <div class="note-dropzone-message"></div>
                            </div>
                            <div class="note-toolbar panel-heading">
                                <div class="note-style btn-group"><button type="button" class="btn btn-default btn-sm"
                                        title="" data-event="bold" tabindex="-1" data-name="bold"
                                        data-original-title="Bold (CTRL+B)"><i class="fa fa-bold"></i></button><button
                                        type="button" class="btn btn-default btn-sm" title="" data-event="italic"
                                        tabindex="-1" data-name="italic" data-original-title="Italic (CTRL+I)"><i
                                            class="fa fa-italic"></i></button><button type="button"
                                        class="btn btn-default btn-sm" title="" data-event="underline" tabindex="-1"
                                        data-name="underline" data-original-title="Underline (CTRL+U)"><i
                                            class="fa fa-underline"></i></button><button type="button"
                                        class="btn btn-default btn-sm" title="" data-event="removeFormat" tabindex="-1"
                                        data-name="clear" data-original-title="Remove Font Style (CTRL+\)"><i
                                            class="fa fa-eraser"></i></button></div>
                                <div class="note-font btn-group"><button type="button" class="btn btn-default btn-sm"
                                        title="" data-event="strikethrough" tabindex="-1" data-name="strikethrough"
                                        data-original-title="Strikethrough (CTRL+SHIFT+S)"><i
                                            class="fa fa-strikethrough"></i></button><button type="button"
                                        class="btn btn-default btn-sm" title="" data-event="superscript" tabindex="-1"
                                        data-name="superscript" data-original-title="Superscript"><i
                                            class="fa fa-superscript"></i></button><button type="button"
                                        class="btn btn-default btn-sm" title="" data-event="subscript" tabindex="-1"
                                        data-name="subscript" data-original-title="Subscript"><i
                                            class="fa fa-subscript"></i></button></div>
                                <div class="note-color btn-group"><button type="button"
                                        class="btn btn-default btn-sm note-recent-color" title="" data-event="color"
                                        data-value="{&quot;backColor&quot;:&quot;yellow&quot;}" tabindex="-1"
                                        data-name="color" data-original-title="Recent Color"><i class="fa fa-font"
                                            style="color:black;background-color:yellow;"></i></button>
                                    <div class="btn-group" data-name="color"><button type="button"
                                            class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"
                                            title="" tabindex="-1" data-original-title="More Color"> <span
                                                class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="btn-group">
                                                    <div class="note-palette-title">Background Color</div>
                                                    <div class="note-color-reset" data-event="backColor"
                                                        data-value="inherit" title="Transparent">Set transparent
                                                    </div>
                                                    <div class="note-color-palette" data-target-event="backColor">
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#000000;"
                                                                data-event="backColor" data-value="#000000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#000000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#424242;" data-event="backColor"
                                                                data-value="#424242" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#424242"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#636363;" data-event="backColor"
                                                                data-value="#636363" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#636363"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9C9C94;" data-event="backColor"
                                                                data-value="#9C9C94" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9C9C94"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEC6CE;" data-event="backColor"
                                                                data-value="#CEC6CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEC6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#EFEFEF;" data-event="backColor"
                                                                data-value="#EFEFEF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#EFEFEF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#F7F7F7;" data-event="backColor"
                                                                data-value="#F7F7F7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#F7F7F7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFFFFF;" data-event="backColor"
                                                                data-value="#FFFFFF" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#FFFFFF"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#FF0000;"
                                                                data-event="backColor" data-value="#FF0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#FF0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FF9C00;" data-event="backColor"
                                                                data-value="#FF9C00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FF9C00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFFF00;" data-event="backColor"
                                                                data-value="#FFFF00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFFF00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#00FF00;" data-event="backColor"
                                                                data-value="#00FF00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#00FF00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#00FFFF;" data-event="backColor"
                                                                data-value="#00FFFF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#00FFFF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#0000FF;" data-event="backColor"
                                                                data-value="#0000FF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#0000FF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9C00FF;" data-event="backColor"
                                                                data-value="#9C00FF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9C00FF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FF00FF;" data-event="backColor"
                                                                data-value="#FF00FF" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#FF00FF"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#F7C6CE;"
                                                                data-event="backColor" data-value="#F7C6CE" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#F7C6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFE7CE;" data-event="backColor"
                                                                data-value="#FFE7CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFE7CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFEFC6;" data-event="backColor"
                                                                data-value="#FFEFC6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFEFC6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6EFD6;" data-event="backColor"
                                                                data-value="#D6EFD6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#D6EFD6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEDEE7;" data-event="backColor"
                                                                data-value="#CEDEE7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEDEE7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEE7F7;" data-event="backColor"
                                                                data-value="#CEE7F7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEE7F7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6D6E7;" data-event="backColor"
                                                                data-value="#D6D6E7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#D6D6E7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#E7D6DE;" data-event="backColor"
                                                                data-value="#E7D6DE" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#E7D6DE"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#E79C9C;"
                                                                data-event="backColor" data-value="#E79C9C" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#E79C9C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFC69C;" data-event="backColor"
                                                                data-value="#FFC69C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFC69C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFE79C;" data-event="backColor"
                                                                data-value="#FFE79C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFE79C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B5D6A5;" data-event="backColor"
                                                                data-value="#B5D6A5" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B5D6A5"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#A5C6CE;" data-event="backColor"
                                                                data-value="#A5C6CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#A5C6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9CC6EF;" data-event="backColor"
                                                                data-value="#9CC6EF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9CC6EF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B5A5D6;" data-event="backColor"
                                                                data-value="#B5A5D6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B5A5D6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6A5BD;" data-event="backColor"
                                                                data-value="#D6A5BD" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#D6A5BD"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#E76363;"
                                                                data-event="backColor" data-value="#E76363" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#E76363"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#F7AD6B;" data-event="backColor"
                                                                data-value="#F7AD6B" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#F7AD6B"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFD663;" data-event="backColor"
                                                                data-value="#FFD663" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFD663"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#94BD7B;" data-event="backColor"
                                                                data-value="#94BD7B" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#94BD7B"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#73A5AD;" data-event="backColor"
                                                                data-value="#73A5AD" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#73A5AD"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#6BADDE;" data-event="backColor"
                                                                data-value="#6BADDE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#6BADDE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#8C7BC6;" data-event="backColor"
                                                                data-value="#8C7BC6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#8C7BC6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#C67BA5;" data-event="backColor"
                                                                data-value="#C67BA5" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#C67BA5"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#CE0000;"
                                                                data-event="backColor" data-value="#CE0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#CE0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#E79439;" data-event="backColor"
                                                                data-value="#E79439" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#E79439"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#EFC631;" data-event="backColor"
                                                                data-value="#EFC631" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#EFC631"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#6BA54A;" data-event="backColor"
                                                                data-value="#6BA54A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#6BA54A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#4A7B8C;" data-event="backColor"
                                                                data-value="#4A7B8C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#4A7B8C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#3984C6;" data-event="backColor"
                                                                data-value="#3984C6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#3984C6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#634AA5;" data-event="backColor"
                                                                data-value="#634AA5" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#634AA5"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#A54A7B;" data-event="backColor"
                                                                data-value="#A54A7B" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#A54A7B"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#9C0000;"
                                                                data-event="backColor" data-value="#9C0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#9C0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B56308;" data-event="backColor"
                                                                data-value="#B56308" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B56308"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#BD9400;" data-event="backColor"
                                                                data-value="#BD9400" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#BD9400"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#397B21;" data-event="backColor"
                                                                data-value="#397B21" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#397B21"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#104A5A;" data-event="backColor"
                                                                data-value="#104A5A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#104A5A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#085294;" data-event="backColor"
                                                                data-value="#085294" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#085294"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#311873;" data-event="backColor"
                                                                data-value="#311873" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#311873"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#731842;" data-event="backColor"
                                                                data-value="#731842" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#731842"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#630000;"
                                                                data-event="backColor" data-value="#630000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#630000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#7B3900;" data-event="backColor"
                                                                data-value="#7B3900" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#7B3900"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#846300;" data-event="backColor"
                                                                data-value="#846300" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#846300"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#295218;" data-event="backColor"
                                                                data-value="#295218" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#295218"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#083139;" data-event="backColor"
                                                                data-value="#083139" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#083139"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#003163;" data-event="backColor"
                                                                data-value="#003163" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#003163"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#21104A;" data-event="backColor"
                                                                data-value="#21104A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#21104A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#4A1031;" data-event="backColor"
                                                                data-value="#4A1031" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#4A1031"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <div class="note-palette-title">Foreground Color</div>
                                                    <div class="note-color-reset" data-event="foreColor"
                                                        data-value="inherit" title="Reset">Reset to default</div>
                                                    <div class="note-color-palette" data-target-event="foreColor">
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#000000;"
                                                                data-event="foreColor" data-value="#000000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#000000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#424242;" data-event="foreColor"
                                                                data-value="#424242" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#424242"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#636363;" data-event="foreColor"
                                                                data-value="#636363" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#636363"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9C9C94;" data-event="foreColor"
                                                                data-value="#9C9C94" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9C9C94"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEC6CE;" data-event="foreColor"
                                                                data-value="#CEC6CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEC6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#EFEFEF;" data-event="foreColor"
                                                                data-value="#EFEFEF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#EFEFEF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#F7F7F7;" data-event="foreColor"
                                                                data-value="#F7F7F7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#F7F7F7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFFFFF;" data-event="foreColor"
                                                                data-value="#FFFFFF" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#FFFFFF"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#FF0000;"
                                                                data-event="foreColor" data-value="#FF0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#FF0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FF9C00;" data-event="foreColor"
                                                                data-value="#FF9C00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FF9C00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFFF00;" data-event="foreColor"
                                                                data-value="#FFFF00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFFF00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#00FF00;" data-event="foreColor"
                                                                data-value="#00FF00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#00FF00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#00FFFF;" data-event="foreColor"
                                                                data-value="#00FFFF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#00FFFF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#0000FF;" data-event="foreColor"
                                                                data-value="#0000FF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#0000FF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9C00FF;" data-event="foreColor"
                                                                data-value="#9C00FF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9C00FF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FF00FF;" data-event="foreColor"
                                                                data-value="#FF00FF" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#FF00FF"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#F7C6CE;"
                                                                data-event="foreColor" data-value="#F7C6CE" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#F7C6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFE7CE;" data-event="foreColor"
                                                                data-value="#FFE7CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFE7CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFEFC6;" data-event="foreColor"
                                                                data-value="#FFEFC6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFEFC6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6EFD6;" data-event="foreColor"
                                                                data-value="#D6EFD6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#D6EFD6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEDEE7;" data-event="foreColor"
                                                                data-value="#CEDEE7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEDEE7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEE7F7;" data-event="foreColor"
                                                                data-value="#CEE7F7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEE7F7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6D6E7;" data-event="foreColor"
                                                                data-value="#D6D6E7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#D6D6E7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#E7D6DE;" data-event="foreColor"
                                                                data-value="#E7D6DE" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#E7D6DE"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#E79C9C;"
                                                                data-event="foreColor" data-value="#E79C9C" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#E79C9C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFC69C;" data-event="foreColor"
                                                                data-value="#FFC69C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFC69C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFE79C;" data-event="foreColor"
                                                                data-value="#FFE79C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFE79C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B5D6A5;" data-event="foreColor"
                                                                data-value="#B5D6A5" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B5D6A5"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#A5C6CE;" data-event="foreColor"
                                                                data-value="#A5C6CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#A5C6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9CC6EF;" data-event="foreColor"
                                                                data-value="#9CC6EF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9CC6EF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B5A5D6;" data-event="foreColor"
                                                                data-value="#B5A5D6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B5A5D6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6A5BD;" data-event="foreColor"
                                                                data-value="#D6A5BD" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#D6A5BD"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#E76363;"
                                                                data-event="foreColor" data-value="#E76363" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#E76363"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#F7AD6B;" data-event="foreColor"
                                                                data-value="#F7AD6B" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#F7AD6B"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFD663;" data-event="foreColor"
                                                                data-value="#FFD663" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFD663"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#94BD7B;" data-event="foreColor"
                                                                data-value="#94BD7B" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#94BD7B"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#73A5AD;" data-event="foreColor"
                                                                data-value="#73A5AD" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#73A5AD"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#6BADDE;" data-event="foreColor"
                                                                data-value="#6BADDE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#6BADDE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#8C7BC6;" data-event="foreColor"
                                                                data-value="#8C7BC6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#8C7BC6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#C67BA5;" data-event="foreColor"
                                                                data-value="#C67BA5" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#C67BA5"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#CE0000;"
                                                                data-event="foreColor" data-value="#CE0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#CE0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#E79439;" data-event="foreColor"
                                                                data-value="#E79439" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#E79439"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#EFC631;" data-event="foreColor"
                                                                data-value="#EFC631" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#EFC631"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#6BA54A;" data-event="foreColor"
                                                                data-value="#6BA54A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#6BA54A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#4A7B8C;" data-event="foreColor"
                                                                data-value="#4A7B8C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#4A7B8C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#3984C6;" data-event="foreColor"
                                                                data-value="#3984C6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#3984C6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#634AA5;" data-event="foreColor"
                                                                data-value="#634AA5" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#634AA5"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#A54A7B;" data-event="foreColor"
                                                                data-value="#A54A7B" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#A54A7B"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#9C0000;"
                                                                data-event="foreColor" data-value="#9C0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#9C0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B56308;" data-event="foreColor"
                                                                data-value="#B56308" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B56308"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#BD9400;" data-event="foreColor"
                                                                data-value="#BD9400" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#BD9400"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#397B21;" data-event="foreColor"
                                                                data-value="#397B21" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#397B21"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#104A5A;" data-event="foreColor"
                                                                data-value="#104A5A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#104A5A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#085294;" data-event="foreColor"
                                                                data-value="#085294" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#085294"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#311873;" data-event="foreColor"
                                                                data-value="#311873" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#311873"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#731842;" data-event="foreColor"
                                                                data-value="#731842" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#731842"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#630000;"
                                                                data-event="foreColor" data-value="#630000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#630000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#7B3900;" data-event="foreColor"
                                                                data-value="#7B3900" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#7B3900"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#846300;" data-event="foreColor"
                                                                data-value="#846300" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#846300"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#295218;" data-event="foreColor"
                                                                data-value="#295218" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#295218"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#083139;" data-event="foreColor"
                                                                data-value="#083139" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#083139"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#003163;" data-event="foreColor"
                                                                data-value="#003163" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#003163"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#21104A;" data-event="foreColor"
                                                                data-value="#21104A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#21104A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#4A1031;" data-event="foreColor"
                                                                data-value="#4A1031" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#4A1031"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="note-view btn-group"><button type="button" class="btn btn-default btn-sm"
                                        title="" data-event="codeview" tabindex="-1" data-name="codeview"
                                        data-original-title="Code View"><i class="fa fa-code"></i></button></div>
                            </div>
                            <div class="note-editing-area">
                                <div class="note-handle">
                                    <div class="note-control-selection" style="display: none;">
                                        <div class="note-control-selection-bg"></div>
                                        <div class="note-control-holder note-control-nw"></div>
                                        <div class="note-control-holder note-control-ne"></div>
                                        <div class="note-control-holder note-control-sw"></div>
                                        <div class="note-control-sizing note-control-se"></div>
                                        <div class="note-control-selection-info"></div>
                                    </div>
                                </div>
                                <div class="note-popover">
                                    <div class="note-link-popover popover bottom in" style="display: none;">
                                        <div class="arrow"></div>
                                        <div class="popover-content"><a href="http://www.google.com"
                                                target="_blank">www.google.com</a>&nbsp;&nbsp;<div
                                                class="note-insert btn-group"><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="showLinkDialog"
                                                    data-hide="true" tabindex="-1" data-original-title="Edit"><i
                                                        class="fa fa-edit"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="unlink"
                                                    tabindex="-1" data-original-title="Unlink"><i
                                                        class="fa fa-unlink"></i></button></div>
                                        </div>
                                    </div>
                                    <div class="note-image-popover popover bottom in" style="display: none;">
                                        <div class="arrow"></div>
                                        <div class="popover-content">
                                            <div class="btn-group"><button type="button" class="btn btn-default btn-sm"
                                                    title="" data-event="resize" data-value="1" tabindex="-1"
                                                    data-original-title="Resize Full"><span
                                                        class="note-fontsize-10">100%</span></button><button
                                                    type="button" class="btn btn-default btn-sm" title=""
                                                    data-event="resize" data-value="0.5" tabindex="-1"
                                                    data-original-title="Resize Half"><span
                                                        class="note-fontsize-10">50%</span></button><button
                                                    type="button" class="btn btn-default btn-sm" title=""
                                                    data-event="resize" data-value="0.25" tabindex="-1"
                                                    data-original-title="Resize Quarter"><span
                                                        class="note-fontsize-10">25%</span></button></div>
                                            <div class="btn-group"><button type="button" class="btn btn-default btn-sm"
                                                    title="" data-event="floatMe" data-value="left" tabindex="-1"
                                                    data-original-title="Float Left"><i
                                                        class="fa fa-align-left"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="floatMe"
                                                    data-value="right" tabindex="-1"
                                                    data-original-title="Float Right"><i
                                                        class="fa fa-align-right"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="floatMe"
                                                    data-value="none" tabindex="-1" data-original-title="Float None"><i
                                                        class="fa fa-align-justify"></i></button></div><br>
                                            <div class="btn-group"><button type="button" class="btn btn-default btn-sm"
                                                    title="" data-event="imageShape" data-value="img-rounded"
                                                    tabindex="-1" data-original-title="Shape: Rounded"><i
                                                        class="fa fa-square"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                    data-value="img-circle" tabindex="-1"
                                                    data-original-title="Shape: Circle"><i
                                                        class="fa fa-circle-o"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                    data-value="img-thumbnail" tabindex="-1"
                                                    data-original-title="Shape: Thumbnail"><i
                                                        class="fa fa-picture-o"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                    tabindex="-1" data-original-title="Shape: None"><i
                                                        class="fa fa-times"></i></button></div>
                                            <div class="btn-group"><button type="button" class="btn btn-default btn-sm"
                                                    title="" data-event="removeMedia" data-value="none" tabindex="-1"
                                                    data-original-title="Remove Image"><i
                                                        class="fa fa-trash-o"></i></button></div>
                                        </div>
                                    </div>
                                </div><textarea class="note-codable"></textarea>
                                <div class="note-editable panel-body" contenteditable="true">
                                    <p><br></p>
                                </div>
                            </div>
                        </div>
                        <!-- <textarea class="form-control" rows="3" id="summernote_des_rel_en" name="descripcion_termino_relacionado_en"></textarea> -->
                    </div>
                    <!-- <button type="submit" class="btn btn-default">Crear</button> -->
                    <!-- </form> -->
                    <!-- /Contenido modal -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"
                        onclick="limpiarCamposModalRelacionadosEn();">Cancelar</button>
                    <a class="btn btn-success uppercase" role="button"
                        href="javascript:actualizarTerminoRelacionEn('edicion');">Guardar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal Nuevo termino relacionado en -->

    <!-- Modal Nuevo termino relacionado vid -->
    <div class="modal fade" id="modalNuevoTerminoRelacionadoVid" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <!-- <h4 class="modal-title" id="myModalLabel">Nuevo Término En</h4> -->
                    <span class="termino-principal-tit termino-tit initialism">Nuevo Término Vid</span>
                </div>
                <div class="modal-body">
                    <!-- Contenido modal -->
                    <!-- <form id="updateTermEn" name="updateTermEn" action="" method="post"> -->
                    <div class="form-group">
                        <label for="nombre_termino">Nombre</label>
                        <input type="text" class="form-control" id="nombre_termino_relacionado_vid"
                            name="nombre_termino_relacionado_vid" onkeyup="loadXMLDocVid()" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="descripcion_termino">Descripción</label>
                        <!-- <textarea class="form-control" rows="3" id="descripcion_termino_relacionado_en" name="descripcion_termino_relacionado_en"></textarea> -->
                        <textarea class="form-control" rows="3" id="descripcion_termino_relacionado_vid"
                            name="descripcion_termino_relacionado_vid" style="display: none;"></textarea>
                        <div class="note-editor panel panel-default">
                            <div class="note-dialog">
                                <div class="note-image-dialog modal" aria-hidden="false">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header"><button type="button" class="close"
                                                    aria-hidden="true" tabindex="-1">×</button>
                                                <h4 class="modal-title">Insert Image</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row note-group-select-from-files">
                                                    <label>Select from files</label><input
                                                        class="note-image-input form-control" type="file" name="files"
                                                        accept="image/*" multiple="multiple">
                                                </div>
                                                <div class="form-group row"><label>Image URL</label><input
                                                        class="note-image-url form-control col-md-12" type="text">
                                                </div>
                                            </div>
                                            <div class="modal-footer"><button href="#"
                                                    class="btn btn-primary note-image-btn disabled" disabled="">Insert
                                                    Image</button></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-link-dialog modal" aria-hidden="false">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header"><button type="button" class="close"
                                                    aria-hidden="true" tabindex="-1">×</button>
                                                <h4 class="modal-title">Insert Link</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row"><label>Text to display</label><input
                                                        class="note-link-text form-control col-md-12" type="text">
                                                </div>
                                                <div class="form-group row"><label>To what URL should this link
                                                        go?</label><input class="note-link-url form-control col-md-12"
                                                        type="text" value="http://"></div>
                                                <div class="checkbox"><label><input type="checkbox" checked=""> Open
                                                        in new window</label></div>
                                            </div>
                                            <div class="modal-footer"><button href="#"
                                                    class="btn btn-primary note-link-btn disabled" disabled="">Insert
                                                    Link</button></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-help-dialog modal" aria-hidden="false">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body"><a class="modal-close pull-right" aria-hidden="true"
                                                    tabindex="-1">Close</a>
                                                <div class="title">Keyboard shortcuts</div>
                                                <div class="note-shortcut-row row">
                                                    <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                        <div class="note-shortcut-row row">
                                                            <div
                                                                class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                Action</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Z</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Undo</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + Z</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Redo</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + ]</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Indent</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + [</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Outdent</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + ENTER</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Insert Horizontal Rule</div>
                                                        </div>
                                                    </div>
                                                    <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                        <div class="note-shortcut-row row">
                                                            <div
                                                                class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                Text formatting</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + B</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Bold</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + I</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Italic</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + U</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Underline</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + \</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Remove Font Style</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="note-shortcut-row row">
                                                    <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                        <div class="note-shortcut-row row">
                                                            <div
                                                                class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                Document Style</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM0</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Normal</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM1</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 1</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM2</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 2</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM3</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 3</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM4</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 4</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM5</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 5</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM6</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 6</div>
                                                        </div>
                                                    </div>
                                                    <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                        <div class="note-shortcut-row row">
                                                            <div
                                                                class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                Paragraph formatting</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + L</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Align left</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + E</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Align center</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + R</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Align right</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + J</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Justify full</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + NUM7</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Ordered list</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + NUM8</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Unordered list</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="text-center"><a href="//summernote.org/"
                                                        target="_blank">Summernote 0.6.16</a> · <a
                                                        href="//github.com/summernote/summernote"
                                                        target="_blank">Project</a> · <a
                                                        href="//github.com/summernote/summernote/issues"
                                                        target="_blank">Issues</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="note-dropzone">
                                <div class="note-dropzone-message"></div>
                            </div>
                            <div class="note-toolbar panel-heading">
                                <div class="note-style btn-group"><button type="button" class="btn btn-default btn-sm"
                                        title="" data-event="bold" tabindex="-1" data-name="bold"
                                        data-original-title="Bold (CTRL+B)"><i class="fa fa-bold"></i></button><button
                                        type="button" class="btn btn-default btn-sm" title="" data-event="italic"
                                        tabindex="-1" data-name="italic" data-original-title="Italic (CTRL+I)"><i
                                            class="fa fa-italic"></i></button><button type="button"
                                        class="btn btn-default btn-sm" title="" data-event="underline" tabindex="-1"
                                        data-name="underline" data-original-title="Underline (CTRL+U)"><i
                                            class="fa fa-underline"></i></button><button type="button"
                                        class="btn btn-default btn-sm" title="" data-event="removeFormat" tabindex="-1"
                                        data-name="clear" data-original-title="Remove Font Style (CTRL+\)"><i
                                            class="fa fa-eraser"></i></button></div>
                                <div class="note-font btn-group"><button type="button" class="btn btn-default btn-sm"
                                        title="" data-event="strikethrough" tabindex="-1" data-name="strikethrough"
                                        data-original-title="Strikethrough (CTRL+SHIFT+S)"><i
                                            class="fa fa-strikethrough"></i></button><button type="button"
                                        class="btn btn-default btn-sm" title="" data-event="superscript" tabindex="-1"
                                        data-name="superscript" data-original-title="Superscript"><i
                                            class="fa fa-superscript"></i></button><button type="button"
                                        class="btn btn-default btn-sm" title="" data-event="subscript" tabindex="-1"
                                        data-name="subscript" data-original-title="Subscript"><i
                                            class="fa fa-subscript"></i></button></div>
                                <div class="note-color btn-group"><button type="button"
                                        class="btn btn-default btn-sm note-recent-color" title="" data-event="color"
                                        data-value="{&quot;backColor&quot;:&quot;yellow&quot;}" tabindex="-1"
                                        data-name="color" data-original-title="Recent Color"><i class="fa fa-font"
                                            style="color:black;background-color:yellow;"></i></button>
                                    <div class="btn-group" data-name="color"><button type="button"
                                            class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"
                                            title="" tabindex="-1" data-original-title="More Color"> <span
                                                class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="btn-group">
                                                    <div class="note-palette-title">Background Color</div>
                                                    <div class="note-color-reset" data-event="backColor"
                                                        data-value="inherit" title="Transparent">Set transparent
                                                    </div>
                                                    <div class="note-color-palette" data-target-event="backColor">
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#000000;"
                                                                data-event="backColor" data-value="#000000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#000000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#424242;" data-event="backColor"
                                                                data-value="#424242" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#424242"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#636363;" data-event="backColor"
                                                                data-value="#636363" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#636363"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9C9C94;" data-event="backColor"
                                                                data-value="#9C9C94" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9C9C94"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEC6CE;" data-event="backColor"
                                                                data-value="#CEC6CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEC6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#EFEFEF;" data-event="backColor"
                                                                data-value="#EFEFEF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#EFEFEF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#F7F7F7;" data-event="backColor"
                                                                data-value="#F7F7F7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#F7F7F7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFFFFF;" data-event="backColor"
                                                                data-value="#FFFFFF" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#FFFFFF"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#FF0000;"
                                                                data-event="backColor" data-value="#FF0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#FF0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FF9C00;" data-event="backColor"
                                                                data-value="#FF9C00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FF9C00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFFF00;" data-event="backColor"
                                                                data-value="#FFFF00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFFF00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#00FF00;" data-event="backColor"
                                                                data-value="#00FF00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#00FF00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#00FFFF;" data-event="backColor"
                                                                data-value="#00FFFF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#00FFFF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#0000FF;" data-event="backColor"
                                                                data-value="#0000FF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#0000FF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9C00FF;" data-event="backColor"
                                                                data-value="#9C00FF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9C00FF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FF00FF;" data-event="backColor"
                                                                data-value="#FF00FF" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#FF00FF"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#F7C6CE;"
                                                                data-event="backColor" data-value="#F7C6CE" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#F7C6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFE7CE;" data-event="backColor"
                                                                data-value="#FFE7CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFE7CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFEFC6;" data-event="backColor"
                                                                data-value="#FFEFC6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFEFC6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6EFD6;" data-event="backColor"
                                                                data-value="#D6EFD6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#D6EFD6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEDEE7;" data-event="backColor"
                                                                data-value="#CEDEE7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEDEE7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEE7F7;" data-event="backColor"
                                                                data-value="#CEE7F7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEE7F7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6D6E7;" data-event="backColor"
                                                                data-value="#D6D6E7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#D6D6E7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#E7D6DE;" data-event="backColor"
                                                                data-value="#E7D6DE" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#E7D6DE"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#E79C9C;"
                                                                data-event="backColor" data-value="#E79C9C" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#E79C9C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFC69C;" data-event="backColor"
                                                                data-value="#FFC69C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFC69C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFE79C;" data-event="backColor"
                                                                data-value="#FFE79C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFE79C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B5D6A5;" data-event="backColor"
                                                                data-value="#B5D6A5" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B5D6A5"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#A5C6CE;" data-event="backColor"
                                                                data-value="#A5C6CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#A5C6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9CC6EF;" data-event="backColor"
                                                                data-value="#9CC6EF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9CC6EF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B5A5D6;" data-event="backColor"
                                                                data-value="#B5A5D6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B5A5D6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6A5BD;" data-event="backColor"
                                                                data-value="#D6A5BD" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#D6A5BD"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#E76363;"
                                                                data-event="backColor" data-value="#E76363" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#E76363"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#F7AD6B;" data-event="backColor"
                                                                data-value="#F7AD6B" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#F7AD6B"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFD663;" data-event="backColor"
                                                                data-value="#FFD663" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFD663"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#94BD7B;" data-event="backColor"
                                                                data-value="#94BD7B" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#94BD7B"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#73A5AD;" data-event="backColor"
                                                                data-value="#73A5AD" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#73A5AD"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#6BADDE;" data-event="backColor"
                                                                data-value="#6BADDE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#6BADDE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#8C7BC6;" data-event="backColor"
                                                                data-value="#8C7BC6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#8C7BC6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#C67BA5;" data-event="backColor"
                                                                data-value="#C67BA5" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#C67BA5"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#CE0000;"
                                                                data-event="backColor" data-value="#CE0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#CE0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#E79439;" data-event="backColor"
                                                                data-value="#E79439" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#E79439"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#EFC631;" data-event="backColor"
                                                                data-value="#EFC631" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#EFC631"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#6BA54A;" data-event="backColor"
                                                                data-value="#6BA54A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#6BA54A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#4A7B8C;" data-event="backColor"
                                                                data-value="#4A7B8C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#4A7B8C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#3984C6;" data-event="backColor"
                                                                data-value="#3984C6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#3984C6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#634AA5;" data-event="backColor"
                                                                data-value="#634AA5" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#634AA5"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#A54A7B;" data-event="backColor"
                                                                data-value="#A54A7B" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#A54A7B"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#9C0000;"
                                                                data-event="backColor" data-value="#9C0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#9C0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B56308;" data-event="backColor"
                                                                data-value="#B56308" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B56308"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#BD9400;" data-event="backColor"
                                                                data-value="#BD9400" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#BD9400"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#397B21;" data-event="backColor"
                                                                data-value="#397B21" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#397B21"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#104A5A;" data-event="backColor"
                                                                data-value="#104A5A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#104A5A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#085294;" data-event="backColor"
                                                                data-value="#085294" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#085294"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#311873;" data-event="backColor"
                                                                data-value="#311873" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#311873"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#731842;" data-event="backColor"
                                                                data-value="#731842" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#731842"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#630000;"
                                                                data-event="backColor" data-value="#630000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#630000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#7B3900;" data-event="backColor"
                                                                data-value="#7B3900" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#7B3900"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#846300;" data-event="backColor"
                                                                data-value="#846300" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#846300"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#295218;" data-event="backColor"
                                                                data-value="#295218" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#295218"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#083139;" data-event="backColor"
                                                                data-value="#083139" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#083139"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#003163;" data-event="backColor"
                                                                data-value="#003163" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#003163"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#21104A;" data-event="backColor"
                                                                data-value="#21104A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#21104A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#4A1031;" data-event="backColor"
                                                                data-value="#4A1031" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#4A1031"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <div class="note-palette-title">Foreground Color</div>
                                                    <div class="note-color-reset" data-event="foreColor"
                                                        data-value="inherit" title="Reset">Reset to default</div>
                                                    <div class="note-color-palette" data-target-event="foreColor">
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#000000;"
                                                                data-event="foreColor" data-value="#000000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#000000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#424242;" data-event="foreColor"
                                                                data-value="#424242" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#424242"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#636363;" data-event="foreColor"
                                                                data-value="#636363" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#636363"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9C9C94;" data-event="foreColor"
                                                                data-value="#9C9C94" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9C9C94"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEC6CE;" data-event="foreColor"
                                                                data-value="#CEC6CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEC6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#EFEFEF;" data-event="foreColor"
                                                                data-value="#EFEFEF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#EFEFEF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#F7F7F7;" data-event="foreColor"
                                                                data-value="#F7F7F7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#F7F7F7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFFFFF;" data-event="foreColor"
                                                                data-value="#FFFFFF" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#FFFFFF"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#FF0000;"
                                                                data-event="foreColor" data-value="#FF0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#FF0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FF9C00;" data-event="foreColor"
                                                                data-value="#FF9C00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FF9C00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFFF00;" data-event="foreColor"
                                                                data-value="#FFFF00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFFF00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#00FF00;" data-event="foreColor"
                                                                data-value="#00FF00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#00FF00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#00FFFF;" data-event="foreColor"
                                                                data-value="#00FFFF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#00FFFF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#0000FF;" data-event="foreColor"
                                                                data-value="#0000FF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#0000FF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9C00FF;" data-event="foreColor"
                                                                data-value="#9C00FF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9C00FF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FF00FF;" data-event="foreColor"
                                                                data-value="#FF00FF" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#FF00FF"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#F7C6CE;"
                                                                data-event="foreColor" data-value="#F7C6CE" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#F7C6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFE7CE;" data-event="foreColor"
                                                                data-value="#FFE7CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFE7CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFEFC6;" data-event="foreColor"
                                                                data-value="#FFEFC6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFEFC6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6EFD6;" data-event="foreColor"
                                                                data-value="#D6EFD6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#D6EFD6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEDEE7;" data-event="foreColor"
                                                                data-value="#CEDEE7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEDEE7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEE7F7;" data-event="foreColor"
                                                                data-value="#CEE7F7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEE7F7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6D6E7;" data-event="foreColor"
                                                                data-value="#D6D6E7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#D6D6E7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#E7D6DE;" data-event="foreColor"
                                                                data-value="#E7D6DE" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#E7D6DE"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#E79C9C;"
                                                                data-event="foreColor" data-value="#E79C9C" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#E79C9C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFC69C;" data-event="foreColor"
                                                                data-value="#FFC69C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFC69C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFE79C;" data-event="foreColor"
                                                                data-value="#FFE79C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFE79C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B5D6A5;" data-event="foreColor"
                                                                data-value="#B5D6A5" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B5D6A5"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#A5C6CE;" data-event="foreColor"
                                                                data-value="#A5C6CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#A5C6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9CC6EF;" data-event="foreColor"
                                                                data-value="#9CC6EF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9CC6EF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B5A5D6;" data-event="foreColor"
                                                                data-value="#B5A5D6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B5A5D6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6A5BD;" data-event="foreColor"
                                                                data-value="#D6A5BD" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#D6A5BD"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#E76363;"
                                                                data-event="foreColor" data-value="#E76363" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#E76363"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#F7AD6B;" data-event="foreColor"
                                                                data-value="#F7AD6B" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#F7AD6B"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFD663;" data-event="foreColor"
                                                                data-value="#FFD663" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFD663"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#94BD7B;" data-event="foreColor"
                                                                data-value="#94BD7B" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#94BD7B"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#73A5AD;" data-event="foreColor"
                                                                data-value="#73A5AD" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#73A5AD"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#6BADDE;" data-event="foreColor"
                                                                data-value="#6BADDE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#6BADDE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#8C7BC6;" data-event="foreColor"
                                                                data-value="#8C7BC6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#8C7BC6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#C67BA5;" data-event="foreColor"
                                                                data-value="#C67BA5" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#C67BA5"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#CE0000;"
                                                                data-event="foreColor" data-value="#CE0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#CE0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#E79439;" data-event="foreColor"
                                                                data-value="#E79439" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#E79439"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#EFC631;" data-event="foreColor"
                                                                data-value="#EFC631" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#EFC631"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#6BA54A;" data-event="foreColor"
                                                                data-value="#6BA54A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#6BA54A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#4A7B8C;" data-event="foreColor"
                                                                data-value="#4A7B8C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#4A7B8C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#3984C6;" data-event="foreColor"
                                                                data-value="#3984C6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#3984C6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#634AA5;" data-event="foreColor"
                                                                data-value="#634AA5" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#634AA5"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#A54A7B;" data-event="foreColor"
                                                                data-value="#A54A7B" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#A54A7B"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#9C0000;"
                                                                data-event="foreColor" data-value="#9C0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#9C0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B56308;" data-event="foreColor"
                                                                data-value="#B56308" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B56308"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#BD9400;" data-event="foreColor"
                                                                data-value="#BD9400" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#BD9400"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#397B21;" data-event="foreColor"
                                                                data-value="#397B21" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#397B21"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#104A5A;" data-event="foreColor"
                                                                data-value="#104A5A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#104A5A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#085294;" data-event="foreColor"
                                                                data-value="#085294" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#085294"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#311873;" data-event="foreColor"
                                                                data-value="#311873" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#311873"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#731842;" data-event="foreColor"
                                                                data-value="#731842" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#731842"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#630000;"
                                                                data-event="foreColor" data-value="#630000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#630000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#7B3900;" data-event="foreColor"
                                                                data-value="#7B3900" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#7B3900"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#846300;" data-event="foreColor"
                                                                data-value="#846300" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#846300"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#295218;" data-event="foreColor"
                                                                data-value="#295218" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#295218"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#083139;" data-event="foreColor"
                                                                data-value="#083139" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#083139"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#003163;" data-event="foreColor"
                                                                data-value="#003163" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#003163"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#21104A;" data-event="foreColor"
                                                                data-value="#21104A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#21104A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#4A1031;" data-event="foreColor"
                                                                data-value="#4A1031" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#4A1031"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="note-view btn-group"><button type="button" class="btn btn-default btn-sm"
                                        title="" data-event="codeview" tabindex="-1" data-name="codeview"
                                        data-original-title="Code View"><i class="fa fa-code"></i></button></div>
                            </div>
                            <div class="note-editing-area">
                                <div class="note-handle">
                                    <div class="note-control-selection" style="display: none;">
                                        <div class="note-control-selection-bg"></div>
                                        <div class="note-control-holder note-control-nw"></div>
                                        <div class="note-control-holder note-control-ne"></div>
                                        <div class="note-control-holder note-control-sw"></div>
                                        <div class="note-control-sizing note-control-se"></div>
                                        <div class="note-control-selection-info"></div>
                                    </div>
                                </div>
                                <div class="note-popover">
                                    <div class="note-link-popover popover bottom in" style="display: none;">
                                        <div class="arrow"></div>
                                        <div class="popover-content"><a href="http://www.google.com"
                                                target="_blank">www.google.com</a>&nbsp;&nbsp;<div
                                                class="note-insert btn-group"><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="showLinkDialog"
                                                    data-hide="true" tabindex="-1" data-original-title="Edit"><i
                                                        class="fa fa-edit"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="unlink"
                                                    tabindex="-1" data-original-title="Unlink"><i
                                                        class="fa fa-unlink"></i></button></div>
                                        </div>
                                    </div>
                                    <div class="note-image-popover popover bottom in" style="display: none;">
                                        <div class="arrow"></div>
                                        <div class="popover-content">
                                            <div class="btn-group"><button type="button" class="btn btn-default btn-sm"
                                                    title="" data-event="resize" data-value="1" tabindex="-1"
                                                    data-original-title="Resize Full"><span
                                                        class="note-fontsize-10">100%</span></button><button
                                                    type="button" class="btn btn-default btn-sm" title=""
                                                    data-event="resize" data-value="0.5" tabindex="-1"
                                                    data-original-title="Resize Half"><span
                                                        class="note-fontsize-10">50%</span></button><button
                                                    type="button" class="btn btn-default btn-sm" title=""
                                                    data-event="resize" data-value="0.25" tabindex="-1"
                                                    data-original-title="Resize Quarter"><span
                                                        class="note-fontsize-10">25%</span></button></div>
                                            <div class="btn-group"><button type="button" class="btn btn-default btn-sm"
                                                    title="" data-event="floatMe" data-value="left" tabindex="-1"
                                                    data-original-title="Float Left"><i
                                                        class="fa fa-align-left"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="floatMe"
                                                    data-value="right" tabindex="-1"
                                                    data-original-title="Float Right"><i
                                                        class="fa fa-align-right"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="floatMe"
                                                    data-value="none" tabindex="-1" data-original-title="Float None"><i
                                                        class="fa fa-align-justify"></i></button></div><br>
                                            <div class="btn-group"><button type="button" class="btn btn-default btn-sm"
                                                    title="" data-event="imageShape" data-value="img-rounded"
                                                    tabindex="-1" data-original-title="Shape: Rounded"><i
                                                        class="fa fa-square"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                    data-value="img-circle" tabindex="-1"
                                                    data-original-title="Shape: Circle"><i
                                                        class="fa fa-circle-o"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                    data-value="img-thumbnail" tabindex="-1"
                                                    data-original-title="Shape: Thumbnail"><i
                                                        class="fa fa-picture-o"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                    tabindex="-1" data-original-title="Shape: None"><i
                                                        class="fa fa-times"></i></button></div>
                                            <div class="btn-group"><button type="button" class="btn btn-default btn-sm"
                                                    title="" data-event="removeMedia" data-value="none" tabindex="-1"
                                                    data-original-title="Remove Image"><i
                                                        class="fa fa-trash-o"></i></button></div>
                                        </div>
                                    </div>
                                </div><textarea class="note-codable"></textarea>
                                <div class="note-editable panel-body" contenteditable="true">
                                    <p><br></p>
                                </div>
                            </div>
                        </div>
                        <!-- <textarea class="form-control" rows="3" id="summernote_des_rel_en" name="descripcion_termino_relacionado_en"></textarea> -->
                    </div>
                    <!-- <button type="submit" class="btn btn-default">Crear</button> -->
                    <!-- </form> -->
                    <!-- /Contenido modal -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"
                        onclick="limpiarCamposModalRelacionadosVid();">Cancelar</button>
                    <!-- <button type="submit" class="btn btn-success">Salvar</button> -->
                    <a class="btn btn-success uppercase" role="button"
                        href="javascript:actualizarTerminoRelacionVid('edicion');">Guardar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal Nuevo termino relacionado vid -->

    <!-- Modal Nuevo termino relacionado en-es -->
    <div class="modal fade" id="modalNuevoTerminoRelacionadoEnEs" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <!-- <h4 class="modal-title" id="myModalLabel">Nuevo Término En</h4> -->
                    <span class="termino-principal-tit termino-tit initialism">Nuevo Término Relacionado (ES)</span>
                </div>
                <div class="modal-body">
                    <!-- Contenido modal -->
                    <!-- <form id="updateTermEn" name="updateTermEn" action="" method="post"> -->
                    <div class="form-group">
                        <label for="nombre_termino">Nombre</label>
                        <input type="text" class="form-control" id="nombre_termino_relacionado_enes"
                            name="nombre_termino_relacionado_enes" onkeyup="loadXMLDocEnEs()" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="descripcion_termino">Descripción</label>
                        <!-- <textarea class="form-control" rows="3" id="descripcion_termino_relacionado_en" name="descripcion_termino_relacionado_en"></textarea> -->
                        <textarea class="form-control" rows="3" id="des_termino_relacionado_enes"
                            name="des_termino_relacionado_enes" style="display: none;"></textarea>
                        <div class="note-editor panel panel-default">
                            <div class="note-dialog">
                                <div class="note-image-dialog modal" aria-hidden="false">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header"><button type="button" class="close"
                                                    aria-hidden="true" tabindex="-1">×</button>
                                                <h4 class="modal-title">Insert Image</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row note-group-select-from-files">
                                                    <label>Select from files</label><input
                                                        class="note-image-input form-control" type="file" name="files"
                                                        accept="image/*" multiple="multiple">
                                                </div>
                                                <div class="form-group row"><label>Image URL</label><input
                                                        class="note-image-url form-control col-md-12" type="text">
                                                </div>
                                            </div>
                                            <div class="modal-footer"><button href="#"
                                                    class="btn btn-primary note-image-btn disabled" disabled="">Insert
                                                    Image</button></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-link-dialog modal" aria-hidden="false">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header"><button type="button" class="close"
                                                    aria-hidden="true" tabindex="-1">×</button>
                                                <h4 class="modal-title">Insert Link</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row"><label>Text to display</label><input
                                                        class="note-link-text form-control col-md-12" type="text">
                                                </div>
                                                <div class="form-group row"><label>To what URL should this link
                                                        go?</label><input class="note-link-url form-control col-md-12"
                                                        type="text" value="http://"></div>
                                                <div class="checkbox"><label><input type="checkbox" checked=""> Open
                                                        in new window</label></div>
                                            </div>
                                            <div class="modal-footer"><button href="#"
                                                    class="btn btn-primary note-link-btn disabled" disabled="">Insert
                                                    Link</button></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-help-dialog modal" aria-hidden="false">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body"><a class="modal-close pull-right" aria-hidden="true"
                                                    tabindex="-1">Close</a>
                                                <div class="title">Keyboard shortcuts</div>
                                                <div class="note-shortcut-row row">
                                                    <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                        <div class="note-shortcut-row row">
                                                            <div
                                                                class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                Action</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Z</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Undo</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + Z</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Redo</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + ]</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Indent</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + [</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Outdent</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + ENTER</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Insert Horizontal Rule</div>
                                                        </div>
                                                    </div>
                                                    <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                        <div class="note-shortcut-row row">
                                                            <div
                                                                class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                Text formatting</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + B</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Bold</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + I</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Italic</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + U</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Underline</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + \</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Remove Font Style</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="note-shortcut-row row">
                                                    <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                        <div class="note-shortcut-row row">
                                                            <div
                                                                class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                Document Style</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM0</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Normal</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM1</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 1</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM2</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 2</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM3</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 3</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM4</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 4</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM5</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 5</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + NUM6</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Header 6</div>
                                                        </div>
                                                    </div>
                                                    <div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12">
                                                        <div class="note-shortcut-row row">
                                                            <div
                                                                class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">
                                                                Paragraph formatting</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + L</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Align left</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + E</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Align center</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + R</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Align right</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + J</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Justify full</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + NUM7</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Ordered list</div>
                                                        </div>
                                                        <div class="note-shortcut-row row">
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-key">
                                                                Ctrl + Shift + NUM8</div>
                                                            <div class="note-shortcut-col col-xs-6 note-shortcut-name">
                                                                Unordered list</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="text-center"><a href="//summernote.org/"
                                                        target="_blank">Summernote 0.6.16</a> · <a
                                                        href="//github.com/summernote/summernote"
                                                        target="_blank">Project</a> · <a
                                                        href="//github.com/summernote/summernote/issues"
                                                        target="_blank">Issues</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="note-dropzone">
                                <div class="note-dropzone-message"></div>
                            </div>
                            <div class="note-toolbar panel-heading">
                                <div class="note-style btn-group"><button type="button" class="btn btn-default btn-sm"
                                        title="" data-event="bold" tabindex="-1" data-name="bold"
                                        data-original-title="Bold (CTRL+B)"><i class="fa fa-bold"></i></button><button
                                        type="button" class="btn btn-default btn-sm" title="" data-event="italic"
                                        tabindex="-1" data-name="italic" data-original-title="Italic (CTRL+I)"><i
                                            class="fa fa-italic"></i></button><button type="button"
                                        class="btn btn-default btn-sm" title="" data-event="underline" tabindex="-1"
                                        data-name="underline" data-original-title="Underline (CTRL+U)"><i
                                            class="fa fa-underline"></i></button><button type="button"
                                        class="btn btn-default btn-sm" title="" data-event="removeFormat" tabindex="-1"
                                        data-name="clear" data-original-title="Remove Font Style (CTRL+\)"><i
                                            class="fa fa-eraser"></i></button></div>
                                <div class="note-font btn-group"><button type="button" class="btn btn-default btn-sm"
                                        title="" data-event="strikethrough" tabindex="-1" data-name="strikethrough"
                                        data-original-title="Strikethrough (CTRL+SHIFT+S)"><i
                                            class="fa fa-strikethrough"></i></button><button type="button"
                                        class="btn btn-default btn-sm" title="" data-event="superscript" tabindex="-1"
                                        data-name="superscript" data-original-title="Superscript"><i
                                            class="fa fa-superscript"></i></button><button type="button"
                                        class="btn btn-default btn-sm" title="" data-event="subscript" tabindex="-1"
                                        data-name="subscript" data-original-title="Subscript"><i
                                            class="fa fa-subscript"></i></button></div>
                                <div class="note-color btn-group"><button type="button"
                                        class="btn btn-default btn-sm note-recent-color" title="" data-event="color"
                                        data-value="{&quot;backColor&quot;:&quot;yellow&quot;}" tabindex="-1"
                                        data-name="color" data-original-title="Recent Color"><i class="fa fa-font"
                                            style="color:black;background-color:yellow;"></i></button>
                                    <div class="btn-group" data-name="color"><button type="button"
                                            class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"
                                            title="" tabindex="-1" data-original-title="More Color"> <span
                                                class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="btn-group">
                                                    <div class="note-palette-title">Background Color</div>
                                                    <div class="note-color-reset" data-event="backColor"
                                                        data-value="inherit" title="Transparent">Set transparent
                                                    </div>
                                                    <div class="note-color-palette" data-target-event="backColor">
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#000000;"
                                                                data-event="backColor" data-value="#000000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#000000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#424242;" data-event="backColor"
                                                                data-value="#424242" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#424242"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#636363;" data-event="backColor"
                                                                data-value="#636363" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#636363"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9C9C94;" data-event="backColor"
                                                                data-value="#9C9C94" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9C9C94"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEC6CE;" data-event="backColor"
                                                                data-value="#CEC6CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEC6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#EFEFEF;" data-event="backColor"
                                                                data-value="#EFEFEF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#EFEFEF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#F7F7F7;" data-event="backColor"
                                                                data-value="#F7F7F7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#F7F7F7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFFFFF;" data-event="backColor"
                                                                data-value="#FFFFFF" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#FFFFFF"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#FF0000;"
                                                                data-event="backColor" data-value="#FF0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#FF0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FF9C00;" data-event="backColor"
                                                                data-value="#FF9C00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FF9C00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFFF00;" data-event="backColor"
                                                                data-value="#FFFF00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFFF00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#00FF00;" data-event="backColor"
                                                                data-value="#00FF00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#00FF00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#00FFFF;" data-event="backColor"
                                                                data-value="#00FFFF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#00FFFF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#0000FF;" data-event="backColor"
                                                                data-value="#0000FF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#0000FF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9C00FF;" data-event="backColor"
                                                                data-value="#9C00FF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9C00FF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FF00FF;" data-event="backColor"
                                                                data-value="#FF00FF" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#FF00FF"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#F7C6CE;"
                                                                data-event="backColor" data-value="#F7C6CE" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#F7C6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFE7CE;" data-event="backColor"
                                                                data-value="#FFE7CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFE7CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFEFC6;" data-event="backColor"
                                                                data-value="#FFEFC6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFEFC6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6EFD6;" data-event="backColor"
                                                                data-value="#D6EFD6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#D6EFD6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEDEE7;" data-event="backColor"
                                                                data-value="#CEDEE7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEDEE7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEE7F7;" data-event="backColor"
                                                                data-value="#CEE7F7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEE7F7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6D6E7;" data-event="backColor"
                                                                data-value="#D6D6E7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#D6D6E7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#E7D6DE;" data-event="backColor"
                                                                data-value="#E7D6DE" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#E7D6DE"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#E79C9C;"
                                                                data-event="backColor" data-value="#E79C9C" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#E79C9C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFC69C;" data-event="backColor"
                                                                data-value="#FFC69C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFC69C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFE79C;" data-event="backColor"
                                                                data-value="#FFE79C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFE79C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B5D6A5;" data-event="backColor"
                                                                data-value="#B5D6A5" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B5D6A5"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#A5C6CE;" data-event="backColor"
                                                                data-value="#A5C6CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#A5C6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9CC6EF;" data-event="backColor"
                                                                data-value="#9CC6EF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9CC6EF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B5A5D6;" data-event="backColor"
                                                                data-value="#B5A5D6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B5A5D6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6A5BD;" data-event="backColor"
                                                                data-value="#D6A5BD" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#D6A5BD"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#E76363;"
                                                                data-event="backColor" data-value="#E76363" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#E76363"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#F7AD6B;" data-event="backColor"
                                                                data-value="#F7AD6B" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#F7AD6B"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFD663;" data-event="backColor"
                                                                data-value="#FFD663" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFD663"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#94BD7B;" data-event="backColor"
                                                                data-value="#94BD7B" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#94BD7B"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#73A5AD;" data-event="backColor"
                                                                data-value="#73A5AD" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#73A5AD"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#6BADDE;" data-event="backColor"
                                                                data-value="#6BADDE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#6BADDE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#8C7BC6;" data-event="backColor"
                                                                data-value="#8C7BC6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#8C7BC6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#C67BA5;" data-event="backColor"
                                                                data-value="#C67BA5" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#C67BA5"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#CE0000;"
                                                                data-event="backColor" data-value="#CE0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#CE0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#E79439;" data-event="backColor"
                                                                data-value="#E79439" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#E79439"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#EFC631;" data-event="backColor"
                                                                data-value="#EFC631" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#EFC631"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#6BA54A;" data-event="backColor"
                                                                data-value="#6BA54A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#6BA54A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#4A7B8C;" data-event="backColor"
                                                                data-value="#4A7B8C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#4A7B8C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#3984C6;" data-event="backColor"
                                                                data-value="#3984C6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#3984C6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#634AA5;" data-event="backColor"
                                                                data-value="#634AA5" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#634AA5"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#A54A7B;" data-event="backColor"
                                                                data-value="#A54A7B" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#A54A7B"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#9C0000;"
                                                                data-event="backColor" data-value="#9C0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#9C0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B56308;" data-event="backColor"
                                                                data-value="#B56308" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B56308"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#BD9400;" data-event="backColor"
                                                                data-value="#BD9400" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#BD9400"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#397B21;" data-event="backColor"
                                                                data-value="#397B21" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#397B21"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#104A5A;" data-event="backColor"
                                                                data-value="#104A5A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#104A5A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#085294;" data-event="backColor"
                                                                data-value="#085294" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#085294"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#311873;" data-event="backColor"
                                                                data-value="#311873" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#311873"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#731842;" data-event="backColor"
                                                                data-value="#731842" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#731842"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#630000;"
                                                                data-event="backColor" data-value="#630000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#630000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#7B3900;" data-event="backColor"
                                                                data-value="#7B3900" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#7B3900"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#846300;" data-event="backColor"
                                                                data-value="#846300" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#846300"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#295218;" data-event="backColor"
                                                                data-value="#295218" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#295218"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#083139;" data-event="backColor"
                                                                data-value="#083139" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#083139"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#003163;" data-event="backColor"
                                                                data-value="#003163" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#003163"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#21104A;" data-event="backColor"
                                                                data-value="#21104A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#21104A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#4A1031;" data-event="backColor"
                                                                data-value="#4A1031" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#4A1031"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <div class="note-palette-title">Foreground Color</div>
                                                    <div class="note-color-reset" data-event="foreColor"
                                                        data-value="inherit" title="Reset">Reset to default</div>
                                                    <div class="note-color-palette" data-target-event="foreColor">
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#000000;"
                                                                data-event="foreColor" data-value="#000000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#000000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#424242;" data-event="foreColor"
                                                                data-value="#424242" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#424242"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#636363;" data-event="foreColor"
                                                                data-value="#636363" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#636363"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9C9C94;" data-event="foreColor"
                                                                data-value="#9C9C94" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9C9C94"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEC6CE;" data-event="foreColor"
                                                                data-value="#CEC6CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEC6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#EFEFEF;" data-event="foreColor"
                                                                data-value="#EFEFEF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#EFEFEF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#F7F7F7;" data-event="foreColor"
                                                                data-value="#F7F7F7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#F7F7F7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFFFFF;" data-event="foreColor"
                                                                data-value="#FFFFFF" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#FFFFFF"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#FF0000;"
                                                                data-event="foreColor" data-value="#FF0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#FF0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FF9C00;" data-event="foreColor"
                                                                data-value="#FF9C00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FF9C00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFFF00;" data-event="foreColor"
                                                                data-value="#FFFF00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFFF00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#00FF00;" data-event="foreColor"
                                                                data-value="#00FF00" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#00FF00"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#00FFFF;" data-event="foreColor"
                                                                data-value="#00FFFF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#00FFFF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#0000FF;" data-event="foreColor"
                                                                data-value="#0000FF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#0000FF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9C00FF;" data-event="foreColor"
                                                                data-value="#9C00FF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9C00FF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FF00FF;" data-event="foreColor"
                                                                data-value="#FF00FF" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#FF00FF"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#F7C6CE;"
                                                                data-event="foreColor" data-value="#F7C6CE" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#F7C6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFE7CE;" data-event="foreColor"
                                                                data-value="#FFE7CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFE7CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFEFC6;" data-event="foreColor"
                                                                data-value="#FFEFC6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFEFC6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6EFD6;" data-event="foreColor"
                                                                data-value="#D6EFD6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#D6EFD6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEDEE7;" data-event="foreColor"
                                                                data-value="#CEDEE7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEDEE7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#CEE7F7;" data-event="foreColor"
                                                                data-value="#CEE7F7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#CEE7F7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6D6E7;" data-event="foreColor"
                                                                data-value="#D6D6E7" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#D6D6E7"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#E7D6DE;" data-event="foreColor"
                                                                data-value="#E7D6DE" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#E7D6DE"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#E79C9C;"
                                                                data-event="foreColor" data-value="#E79C9C" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#E79C9C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFC69C;" data-event="foreColor"
                                                                data-value="#FFC69C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFC69C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFE79C;" data-event="foreColor"
                                                                data-value="#FFE79C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFE79C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B5D6A5;" data-event="foreColor"
                                                                data-value="#B5D6A5" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B5D6A5"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#A5C6CE;" data-event="foreColor"
                                                                data-value="#A5C6CE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#A5C6CE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#9CC6EF;" data-event="foreColor"
                                                                data-value="#9CC6EF" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#9CC6EF"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B5A5D6;" data-event="foreColor"
                                                                data-value="#B5A5D6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B5A5D6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#D6A5BD;" data-event="foreColor"
                                                                data-value="#D6A5BD" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#D6A5BD"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#E76363;"
                                                                data-event="foreColor" data-value="#E76363" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#E76363"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#F7AD6B;" data-event="foreColor"
                                                                data-value="#F7AD6B" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#F7AD6B"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#FFD663;" data-event="foreColor"
                                                                data-value="#FFD663" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#FFD663"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#94BD7B;" data-event="foreColor"
                                                                data-value="#94BD7B" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#94BD7B"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#73A5AD;" data-event="foreColor"
                                                                data-value="#73A5AD" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#73A5AD"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#6BADDE;" data-event="foreColor"
                                                                data-value="#6BADDE" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#6BADDE"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#8C7BC6;" data-event="foreColor"
                                                                data-value="#8C7BC6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#8C7BC6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#C67BA5;" data-event="foreColor"
                                                                data-value="#C67BA5" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#C67BA5"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#CE0000;"
                                                                data-event="foreColor" data-value="#CE0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#CE0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#E79439;" data-event="foreColor"
                                                                data-value="#E79439" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#E79439"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#EFC631;" data-event="foreColor"
                                                                data-value="#EFC631" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#EFC631"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#6BA54A;" data-event="foreColor"
                                                                data-value="#6BA54A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#6BA54A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#4A7B8C;" data-event="foreColor"
                                                                data-value="#4A7B8C" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#4A7B8C"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#3984C6;" data-event="foreColor"
                                                                data-value="#3984C6" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#3984C6"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#634AA5;" data-event="foreColor"
                                                                data-value="#634AA5" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#634AA5"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#A54A7B;" data-event="foreColor"
                                                                data-value="#A54A7B" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#A54A7B"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#9C0000;"
                                                                data-event="foreColor" data-value="#9C0000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#9C0000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#B56308;" data-event="foreColor"
                                                                data-value="#B56308" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#B56308"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#BD9400;" data-event="foreColor"
                                                                data-value="#BD9400" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#BD9400"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#397B21;" data-event="foreColor"
                                                                data-value="#397B21" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#397B21"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#104A5A;" data-event="foreColor"
                                                                data-value="#104A5A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#104A5A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#085294;" data-event="foreColor"
                                                                data-value="#085294" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#085294"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#311873;" data-event="foreColor"
                                                                data-value="#311873" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#311873"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#731842;" data-event="foreColor"
                                                                data-value="#731842" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#731842"></button>
                                                        </div>
                                                        <div class="note-color-row"><button type="button"
                                                                class="note-color-btn" style="background-color:#630000;"
                                                                data-event="foreColor" data-value="#630000" title=""
                                                                data-toggle="button" tabindex="-1"
                                                                data-original-title="#630000"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#7B3900;" data-event="foreColor"
                                                                data-value="#7B3900" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#7B3900"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#846300;" data-event="foreColor"
                                                                data-value="#846300" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#846300"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#295218;" data-event="foreColor"
                                                                data-value="#295218" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#295218"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#083139;" data-event="foreColor"
                                                                data-value="#083139" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#083139"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#003163;" data-event="foreColor"
                                                                data-value="#003163" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#003163"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#21104A;" data-event="foreColor"
                                                                data-value="#21104A" title="" data-toggle="button"
                                                                tabindex="-1"
                                                                data-original-title="#21104A"></button><button
                                                                type="button" class="note-color-btn"
                                                                style="background-color:#4A1031;" data-event="foreColor"
                                                                data-value="#4A1031" title="" data-toggle="button"
                                                                tabindex="-1" data-original-title="#4A1031"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="note-view btn-group"><button type="button" class="btn btn-default btn-sm"
                                        title="" data-event="codeview" tabindex="-1" data-name="codeview"
                                        data-original-title="Code View"><i class="fa fa-code"></i></button></div>
                            </div>
                            <div class="note-editing-area">
                                <div class="note-handle">
                                    <div class="note-control-selection" style="display: none;">
                                        <div class="note-control-selection-bg"></div>
                                        <div class="note-control-holder note-control-nw"></div>
                                        <div class="note-control-holder note-control-ne"></div>
                                        <div class="note-control-holder note-control-sw"></div>
                                        <div class="note-control-sizing note-control-se"></div>
                                        <div class="note-control-selection-info"></div>
                                    </div>
                                </div>
                                <div class="note-popover">
                                    <div class="note-link-popover popover bottom in" style="display: none;">
                                        <div class="arrow"></div>
                                        <div class="popover-content"><a href="http://www.google.com"
                                                target="_blank">www.google.com</a>&nbsp;&nbsp;<div
                                                class="note-insert btn-group"><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="showLinkDialog"
                                                    data-hide="true" tabindex="-1" data-original-title="Edit"><i
                                                        class="fa fa-edit"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="unlink"
                                                    tabindex="-1" data-original-title="Unlink"><i
                                                        class="fa fa-unlink"></i></button></div>
                                        </div>
                                    </div>
                                    <div class="note-image-popover popover bottom in" style="display: none;">
                                        <div class="arrow"></div>
                                        <div class="popover-content">
                                            <div class="btn-group"><button type="button" class="btn btn-default btn-sm"
                                                    title="" data-event="resize" data-value="1" tabindex="-1"
                                                    data-original-title="Resize Full"><span
                                                        class="note-fontsize-10">100%</span></button><button
                                                    type="button" class="btn btn-default btn-sm" title=""
                                                    data-event="resize" data-value="0.5" tabindex="-1"
                                                    data-original-title="Resize Half"><span
                                                        class="note-fontsize-10">50%</span></button><button
                                                    type="button" class="btn btn-default btn-sm" title=""
                                                    data-event="resize" data-value="0.25" tabindex="-1"
                                                    data-original-title="Resize Quarter"><span
                                                        class="note-fontsize-10">25%</span></button></div>
                                            <div class="btn-group"><button type="button" class="btn btn-default btn-sm"
                                                    title="" data-event="floatMe" data-value="left" tabindex="-1"
                                                    data-original-title="Float Left"><i
                                                        class="fa fa-align-left"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="floatMe"
                                                    data-value="right" tabindex="-1"
                                                    data-original-title="Float Right"><i
                                                        class="fa fa-align-right"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="floatMe"
                                                    data-value="none" tabindex="-1" data-original-title="Float None"><i
                                                        class="fa fa-align-justify"></i></button></div><br>
                                            <div class="btn-group"><button type="button" class="btn btn-default btn-sm"
                                                    title="" data-event="imageShape" data-value="img-rounded"
                                                    tabindex="-1" data-original-title="Shape: Rounded"><i
                                                        class="fa fa-square"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                    data-value="img-circle" tabindex="-1"
                                                    data-original-title="Shape: Circle"><i
                                                        class="fa fa-circle-o"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                    data-value="img-thumbnail" tabindex="-1"
                                                    data-original-title="Shape: Thumbnail"><i
                                                        class="fa fa-picture-o"></i></button><button type="button"
                                                    class="btn btn-default btn-sm" title="" data-event="imageShape"
                                                    tabindex="-1" data-original-title="Shape: None"><i
                                                        class="fa fa-times"></i></button></div>
                                            <div class="btn-group"><button type="button" class="btn btn-default btn-sm"
                                                    title="" data-event="removeMedia" data-value="none" tabindex="-1"
                                                    data-original-title="Remove Image"><i
                                                        class="fa fa-trash-o"></i></button></div>
                                        </div>
                                    </div>
                                </div><textarea class="note-codable"></textarea>
                                <div class="note-editable panel-body" contenteditable="true">
                                    <p><br></p>
                                </div>
                            </div>
                        </div>
                        <!-- <textarea class="form-control" rows="3" id="summernote_des_rel_en" name="descripcion_termino_relacionado_en"></textarea> -->
                    </div>
                    <!-- <button type="submit" class="btn btn-default">Crear</button> -->
                    <!-- </form> -->
                    <!-- /Contenido modal -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"
                        onclick="limpiarCamposModalRelacionadosEnEs();">Cancelar</button>
                    <!-- <button type="submit" class="btn btn-success">Salvar</button> -->
                    <a class="btn btn-success uppercase" role="button"
                        href="javascript:actualizarTerminoRelacionEnEs('edicion');">Guardar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal Nuevo termino relacionado en-es -->

    <!-- Modal edicion termino relacionado -->
    <input hidden="" name="nombre_termino_relacionado_editar_en" id="nombre_termino_relacionado_editar_en">
    <input hidden="" name="des_termino_relacionado_editar_en" id="des_termino_relacionado_editar_en">
    <!-- /Modal edicion termino relacionado -->

    <!-- Modal edicion termino relacionado ES -->
    <input hidden="" name="nombre_termino_relacionado_editar_enes" id="nombre_termino_relacionado_editar_enes">
    <input hidden="" name="des_termino_relacionado_editar_enes" id="des_termino_relacionado_editar_enes">
    <!-- /Modal edicion termino relacionado ES -->

    <!-- /Modales -->





</form>

<!-- </div> -->
<!-- /.container -->

<!-- Botones siguiente y anterior -->
<div class="container text-center none">

    <br class="clear">
    <br class="clear">
    <nav class="navbar navbar-fixed-bottom navbar-light">
        <div class="container" style="padding-left: 18px; padding-right: 18px">

            <!-- boton volver -->
            <a href="./?volver=1" class="btn btn-sm btn-footer pull-right"><small>Volver</small> <i
                    class="icon-arrow-right"></i></a>
            <!-- /boton volver -->

        </div>
    </nav>

</div>
<!-- /Botones siguiente y anterior -->


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
            <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-term btn-edit-principal"><i
                    class="fa fa-question-circle"></i></a>
        </div>
    </nav>

    <!-- Modal -->
    <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
                    <span class="termino-principal-tit termino-tit initialism">Ayuda</span>
                </div>
                <div class="modal-body">

                    <h5>¿Cómo crear una versalita?</h5>

                    <ul class="list-group" style="font-size: 0.85em; line-height: normal">
                        <li class="list-group-item">
                            1. Una vez dentro de la edición de un término (o de una relación o de un vid), hacer
                            clic en el botón <mark>código</mark> de los botones superiores del <a
                                href="https://es.wikipedia.org/wiki/WYSIWYG" target="_blank">wysiwyg</a>. El botón
                            tendrá el siguiente aspecto: <img src="assets/images/ico_versalita_captura.png" alt="">
                        </li>
                        <li class="list-group-item">
                            2. Posteriormente el cuadro de texto de la descripción (o nota) se cambiará a color
                            negro de fondo con el texto en color blanco. Entonces, localizar la palabra o palabras
                            que desea transformar a estilo versalita.
                        </li>
                        <li class="list-group-item">
                            3. A continuación borrar la palabra localizada, y en lugar de ella pegar la siguiente
                            línea de código: <br><code>&lt;span class="versalita"&gt;palabra&lt;/span&gt;</code>
                        </li>
                        <li class="list-group-item">
                            4. Sustituir <mark>palabra</mark> por el término que se deseaba convertir a versalita y
                            hacer clic de nuevo en el botón código <img src="assets/images/ico_versalita_captura.png"
                                alt="">. Después hacer clic en el
                            botón guardar como siempre hacemos cada vez que editamos un término.
                        </li>
                        <li class="list-group-item">
                            5. El resultado, suponiendo que tenemos por ejemplo la palabra <mark>ad</mark>, será el
                            siguiente:
                            <br>
                            <em><strong>Frase original:</strong> </em>Lorem ipsum ad his
                            <br>
                            <em><strong>Frase con versalita:</strong> </em>Lorem ipsum <span class="versalita">ad</span>
                            his
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