<?php
require_once("class/dashboard-user.php");
require_once("connection.php");
class TerminoManager extends Dashboard
{
    
    public function __construct()
    {
        parent::__construct();  // Llama al constructor de la clase padre (Connection)
        
    }

    // Función que maneja las diferentes acciones
    public function handleAction($accion)
    {
        switch ($accion) {
            //ok
            case "eliminarRelacionEn":
                $this->eliminarRelacionEn();
                break;
            //ok
            case "eliminarRelacionEnEs":
                $this->eliminarRelacionEnEs();
                break;
            //ok
            case "eliminarRelacionEnVid":
                $this->eliminarRelacionEnVid();
                break;
            //ok    
            case "updateTerminoRelacionEn":
                $this->updateTerminoRelacionEn();
                break;
            //ok
            case "updateTerminoRelacionEnEs":
                $this->updateTerminoRelacionEnEs();
                break;
            //ok  
            case "updateTerminoRelacionVid":
                $this->updateTerminoRelacionVid();
                break;
            //ok    
            case "updateTerminoCompletoEn":
                $this->updateTerminoCompletoEn();
                break;
            //ok        
            case "borrarTerminoEn":
                $this->borrarTerminoEn();
                break;
            //ok
            case "actualizarTerminoRelacionadoDesdeModal":
                $this->actualizarTerminoRelacionadoDesdeModal();
                break;
            //ok
            case "actualizarTerminoRelacionadoDesdeModalEnEs":
                $this->actualizarTerminoRelacionadoDesdeModalEnEs();
                break;

            case "agregarnuevapalabraaldiccionario":
                $this->newword();

            default:
                // Acción no reconocida
                break;
        }
    }

    // Funciones privadas para cada acción específica
    private function eliminarRelacionEn()
    {
        $id_principal = $_POST["id_principal"];
        $id_relacionado = $_POST["id_relacionado"];
        $this->deleteRelacionEn($id_principal, $id_relacionado);
    }

    private function eliminarRelacionEnEs()
    {
        $id_principal = $_POST["id_principal"];
        $id_relacionado = $_POST["id_relacionado"];
        $this->deleteRelacionEnEs($id_principal, $id_relacionado);
    }

    private function eliminarRelacionEnVid()
    {
        $id_principal = $_POST["id_principal"];
        $id_relacionado = $_POST["id_relacionado"];
        $this->deleteRelacionEnVid($id_principal, $id_relacionado);
    }

    private function updateTerminoRelacionEn()
    {
        $id=$this->id;
        $nombre_termino_en_actualizar = $_POST["nombre_termino_relacionado_en"];
        $descripcion_termino_en_actualizar = $_POST["des_termino_relacionado_en"];
        $terminos = $this->searchTerminoEn($nombre_termino_en_actualizar);
        if (is_array($terminos) && !empty($terminos)) {
            foreach ($terminos as $termino) {
                $this->updateTerminoEn($nombre_termino_en_actualizar, $descripcion_termino_en_actualizar);
                $resultado_comprobar_relacion = $this->searchRelacionTerminosEn($id, $termino["id"]);
                if (!(is_array($resultado_comprobar_relacion) && !empty($resultado_comprobar_relacion))) {
                    $this->insertRelacionEn($id, $termino["id"]);
                }
            }
        } else {
            $id_resultado = $this->insertTerminoEn($nombre_termino_en_actualizar, $descripcion_termino_en_actualizar, '', 'Editado', 0);
            $this->insertRelacionEn($id, $id_resultado);
        }
    }

    private function updateTerminoRelacionVid(){
        $id= $this->id;
        $nombre_termino_principal = $_POST["nombre_termino_principal"]; // añado el nombre del termino ppal
        $nombre_termino_vid_actualizar = $_POST["nombre_termino_relacionado_vid"];
        $descripcion_termino_vid_actualizar = $_POST["descripcion_termino_relacionado_vid"];
        $terminos = $this->searchTerminoEn($nombre_termino_vid_actualizar);
        if(is_array($terminos) && !empty($terminos))
        {
          foreach($terminos as $termino)
          {

            $this->updateTerminoEn($nombre_termino_vid_actualizar, $descripcion_termino_vid_actualizar);
            $resultado_comprobar_relacion = $this->searchRelacionTerminosVid($id, $termino["id"]);
            if (!(is_array($resultado_comprobar_relacion) && !empty($resultado_comprobar_relacion)))
            {
              $this->insertRelacionVid($id, $termino["id"]);
            }
          }
        }
        else {
          // Si no existe el término, tenemos que insertarlo y crear la relación
          $id_resultado = $this->insertTerminoEnVid($nombre_termino_vid_actualizar, $descripcion_termino_vid_actualizar, '','Editado',0, $id, $nombre_termino_principal); // no es vid, 1 (despues eliminar campo vid de la tabla terminos y quitar el 0 en la llamada tras editado)
          $this->insertRelacionVid($id, $id_resultado);
        }
    }

    private function updateTerminoRelacionEnEs(){

        $id = $this->id;
        $nombre_termino_en_actualizar = $_POST["nombre_termino_relacionado_enes"];
        $descripcion_termino_en_actualizar = $_POST["des_termino_relacionado_enes"];
        $terminos = $this->searchTerminoEnEs($nombre_termino_en_actualizar);
        if(is_array($terminos) && !empty($terminos))
        {
        foreach($terminos as $termino)
        {
         
            $this->updateTerminoEnEs($nombre_termino_en_actualizar, $descripcion_termino_en_actualizar);
            $resultado_comprobar_relacion = $this->searchRelacionTerminosEnEs($id, $termino["id"]);
     
            if (!(is_array($resultado_comprobar_relacion) && !empty($resultado_comprobar_relacion)))
            {
                $this->insertRelacionEnEs($id, $termino["id"]);
            }
        }
        }
        else {
        // Si no existe el término, tenemos que insertarlo y crear la relación
        $id_resultado = $this->insertTerminoEnEs($nombre_termino_en_actualizar, $descripcion_termino_en_actualizar, '','Editado',0); // no es vid, 0
        $this->insertRelacionEnEs($id, $id_resultado);
        }
       
    }

    private function updateTerminoCompletoEn(){
       
        $id = isset($_GET["record"]) ? $_GET["record"] : '';
        $nombre_termino_completo_en_actualizar = $_POST["nombre_termino_principal"];
        $descripcion_termino_completo_en_actualizar = $_POST["descripcion_termino_principal"];
        $notas_termino_completo_en_actualizar = $_POST["notas_termino_principal"];
        $estado_termino_completo_en_actualizar = $_POST["estado_termino_principal"];
        $this->updateTerminoEnCompleto($id, $nombre_termino_completo_en_actualizar, $descripcion_termino_completo_en_actualizar, $notas_termino_completo_en_actualizar, $estado_termino_completo_en_actualizar);
    }

    private function actualizarTerminoRelacionadoDesdeModal(){

        $id_relacionado = $_POST["id_relacionado"];
        $nombre_termino_relacionado_editar_en = $_POST["nombre_termino_relacionado_editar_en"];
        $descripcion_termino_relacionado_editar_en = $_POST["des_termino_relacionado_editar_en"];
        $this->updateTerminoEnConId($id_relacionado, $nombre_termino_relacionado_editar_en, $descripcion_termino_relacionado_editar_en);
    }

    private function actualizarTerminoRelacionadoDesdeModalEnEs(){
        $id_relacionado = $_POST["id_relacionado"];
        $nombre_termino_relacionado_editar_enes = $_POST["nombre_termino_relacionado_editar_enes"];
        $descripcion_termino_relacionado_editar_enes = $_POST["des_termino_relacionado_editar_enes"];
        $this->updateTerminoEnConIdEnEs($id_relacionado, $nombre_termino_relacionado_editar_enes, $descripcion_termino_relacionado_editar_enes);
    }

    //agregar nuevas palabras
    public function newword(){

        $val=false;
        $language = isset($_POST['language']) ? $_POST['language'] :'';
        $nombre_termino_completo_en_crear = isset($_POST["nombre_termino_principal"]) ? $_POST["nombre_termino_principal"] : '';
        $descripcion_termino_completo_en_crear = isset($_POST["descripcion_termino_principal"]) ? $_POST["descripcion_termino_principal"] : '';
        $notas_termino_completo_en_crear = isset($_POST["notas_termino_principal"]) ? $_POST["notas_termino_principal"]:'';
       
        if(empty($language)){

            $val=true;
            echo '<div class="alert alert-danger">Selecciona un idioma.</div>';
        }

        if(empty($nombre_termino_completo_en_crear)){

            echo '<div class="alert alert-danger">Escribe un termino</div>';
        }

        if(empty($descripcion_termino_completo_en_crear)){

            echo '<div class="alert alert-danger">Escribe una descripción del termino</div>';
        }

        if($val != true){

            if($language==100){
            $id_resultado = $this->insertTerminoEs($nombre_termino_completo_en_crear, $descripcion_termino_completo_en_crear, $notas_termino_completo_en_crear, 'Alerta', 0); // no es vid, 0
            header("Location:index.php?id=4&record=$id_resultado");
             }

            if($language==99){
            $id_resultado = $this->insertTerminoEnEs($nombre_termino_completo_en_crear, $descripcion_termino_completo_en_crear, $notas_termino_completo_en_crear, 'Alerta', 0); // no es vid, 0
            echo '<div class="alert alert-success">Se ha guardado correctamente (Inglés)</div>';
            }

        }
    }

    // Ejemplo:
    private function borrarTerminoEn()
    {
        $id_principal = $_POST["id_principal"];
        $this->deleteTerminoEn($id_principal);
        header("Location:index.php?id=3");
     
    }
}
