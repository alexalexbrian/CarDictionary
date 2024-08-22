<?php
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
            case "eliminarRelacionEn":
                $this->eliminarRelacionEn();
                break;

            case "eliminarRelacionEnEs":
                $this->eliminarRelacionEnEs();
                break;

            case "eliminarRelacionEnVid":
                $this->eliminarRelacionEnVid();
                break;

            case "updateTerminoRelacionEn":
                $this->updateTerminoRelacionEn();
                break;

            case "updateTerminoRelacionEnEs":
                $this->updateTerminoRelacionEnEs();
                break;

            case "updateTerminoRelacionVid":
                $this->updateTerminoRelacionVid();
                break;

            case "updateTerminoCompletoEn":
                $id = isset($_GET["record"]) ? $_GET["record"] : '';
                $nombre_termino_completo_en_actualizar = $_POST["nombre_termino_principal"];
                $descripcion_termino_completo_en_actualizar = $_POST["descripcion_termino_principal"];
                $notas_termino_completo_en_actualizar = $_POST["notas_termino_principal"];
                $estado_termino_completo_en_actualizar = $_POST["estado_termino_principal"];
                $this->updateTerminoEnCompleto($id, $nombre_termino_completo_en_actualizar, $descripcion_termino_completo_en_actualizar, $notas_termino_completo_en_actualizar, $estado_termino_completo_en_actualizar);
                break;

            case "borrarTerminoEn":
                $this->borrarTerminoEn();
                break;

            case "actualizarTerminoRelacionadoDesdeModal":
                $this->actualizarTerminoRelacionadoDesdeModal();
                break;

            case "actualizarTerminoRelacionadoDesdeModalEnEs":
                $this->actualizarTerminoRelacionadoDesdeModalEnEs();
                break;

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
        $this->conexion->deleteRelacionEn($id_principal, $id_relacionado);
    }

    private function eliminarRelacionEnEs()
    {
        $id_principal = $_POST["id_principal"];
        $id_relacionado = $_POST["id_relacionado"];
        $this->conexion->deleteRelacionEnEs($id_principal, $id_relacionado);
    }

    private function eliminarRelacionEnVid()
    {
        $id_principal = $_POST["id_principal"];
        $id_relacionado = $_POST["id_relacionado"];
        $this->conexion->deleteRelacionEnVid($id_principal, $id_relacionado);
    }

    private function updateTerminoRelacionEn()
    {
        $nombre_termino_en_actualizar = $_POST["nombre_termino_relacionado_en"];
        $descripcion_termino_en_actualizar = $_POST["des_termino_relacionado_en"];
        $terminos = $this->conexion->searchTerminoEn($nombre_termino_en_actualizar);
        if (is_array($terminos) && !empty($terminos)) {
            foreach ($terminos as $termino) {
                $this->conexion->updateTerminoEn($nombre_termino_en_actualizar, $descripcion_termino_en_actualizar);
                $resultado_comprobar_relacion = $this->conexion->searchRelacionTerminosEn($id, $termino["id"]);
                if (!(is_array($resultado_comprobar_relacion) && !empty($resultado_comprobar_relacion))) {
                    $this->conexion->insertRelacionEn($id, $termino["id"]);
                }
            }
        } else {
            $id_resultado = $this->conexion->insertTerminoEn($nombre_termino_en_actualizar, $descripcion_termino_en_actualizar, '', 'Editado', 0);
            $this->conexion->insertRelacionEn($id, $id_resultado);
        }
    }

    // Resto de las funciones privadas que gestionan cada acción...

    // Ejemplo:
    private function borrarTerminoEn()
    {
        $id_principal = $_POST["id_principal"];
        $this->conexion->deleteTerminoEn($id_principal);
        echo '<script type="text/javascript">window.location.href = "index_es.php";</script>';
    }
}
