<?php
session_start();
require_once("connection.php");
require_once('vendor/autoload.php');
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;
use PhpOffice\PhpWord\Html;

//print_r($_POST);
class Word{

    private $daytimefile;
    private $name_file;
    private $ext;
    private $link_edit;
    public $color;
    public $versalita;

    public function __construct() {

        $this->daytimefile = date("Y-m-d-H-i-s");
        $this->name_file = "document-";
        $this->ext = ".docx";
        $this->link_edit = "index.php?id=3";
        $this->color='<a style="color: darkblue;"';
        $this->versalita='<span style="font-family: Cuerpo, sans-serif; font-size: 12px; font-weight: normal; text-transform: uppercase; font-variant: small-caps;">';

    }

    public function Limpiar($row){
        
        //Función para limpiar el HTML
        //$array_search = array('&nbsp;','<p>','</p>','<h1>','</h1>','<div>','</div>');
        $array_search = array('&nbsp;','<p>','</p>','<div>','</div>','edit.php','<a','<span class="initialism">','<h1>','</h1>','<h2>','</h2>','<h3>','</h3>','<h4>','</h4>','<h5','</h5>,<h6','</h6>','<br>','<p class="p1">','style=""','style="font-weight: bold;"','<p class="MsoNormal">'); 

        $array_remplace = array(' ','','','','',$this->link_edit,$this->color,$this->versalita,'','','','','','','','','','','','','','','','','');

        return $html = str_replace($array_search,$array_remplace, $row); 

    }

    //Descargar fichero
    public function Descargar($name){

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $name . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($name));
        ob_clean();
        flush();
        readfile($name);
    
        // Eliminar el archivo después de la descarga
        unlink($name);
    }

    public function GenerarWord($sql,$language){

        // Activar la escapada de salida
        Settings::setOutputEscapingEnabled(true);
        // Crear un nuevo objeto PHPWord
        $phpWord = new PhpWord();
        // Agregar una sección al documento
        $section = $phpWord->addSection();
        // Conexión a la base de datos
        $select = new Connection();
        // Obtener datos de la base de datos
        $dat = $select->Select_datos($sql);
        if (!empty($dat)) {
            // Recorrer los datos y agregarlos al documento
            for($li=0;$li<sizeof($dat);$li++){

                //$section->addText('ID: '.$dat[$li]['id']);
                $negritaStyle = array('bold' => true);
                $phpWord->addFontStyle('negrita', $negritaStyle);
               
                if($language != 'en'){
                

                    //$section->addText($dat[$li]['nom_es'], 'negrita');    
                    //$html = $this->Limpiar($dat[$li]['des_es']);
                    $html = '<strong>'.trim(strip_tags($dat[$li]['nom_es'])).'</strong> '.trim($this->Limpiar($dat[$li]['des_es']));

                }else{

                     $html = '<strong>'.trim(strip_tags($dat[$li]['nom_en'])).'</strong> '.trim($this->Limpiar($dat[$li]['des_en']));
                    //$section->addText($dat[$li]['nom_en'], 'negrita');
                    //$html = $this->Limpiar($dat[$li]['des_en']);

                }
               

                @\PhpOffice\PhpWord\Shared\Html::addHtml($section, '<p style="text-align: justify;">' . $html . '</p>');
                //$section->addTextBreak(); // Agregar un salto de línea
                
            }

        }else{

            $section->addText('No se encontraron datos en la base de datos.');

        }

        //Guardar el documento en formato Word
        if($_SESSION['username'] == 'admin'){
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $name = $this->name_file.$this->daytimefile.$this->ext;
        $objWriter->save($name);
        $this->Descargar($name);
        //echo 'Documento Word generado correctamente.' . "<br>";
        //echo $name;  
        }else{

            echo '<div class="alert alert-danger">No tienes permiso para Imprimir.....</div>';
         
           
        }
    }

    public function Procesar_todo($language){

        //Modo de uso
        $select = new Word();
        $sql = "SELECT * FROM `terminos_$language` WHERE 1 ORDER BY `terminos_$language`.`nom_$language` ASC";
        $select->GenerarWord($sql,$language);
    }

        //Generar WORD por una sola letra
    public function Procesar_ini($ini, $language){

        
        $select = new Word();
        //$sql="SELECT * FROM `terminos_$language` WHERE `nom_$language` LIKE 'C%' ORDER BY `id` ASC limit 374";
        $sql = "SELECT * FROM `terminos_$language` WHERE `nom_$language` LIKE '$ini%' ORDER BY `nom_$language` ASC";
        //echo "<br>";
        $select->GenerarWord($sql,$language);
    }

        //Generar WORD empieza por la letra X y por la letra D
    public function Procesar_ini_fin($ini, $fin, $language){

        //Modo de uso
        $select = new Word();
        $sql="SELECT * FROM terminos_$language WHERE nom_$language LIKE '$ini%' OR nom_$language LIKE '$fin%' ORDER BY `terminos_$language`.`nom_$language` ASC";
        //echo "<br>";
        //$sql="SELECT * FROM terminos_$language WHERE nom_$language LIKE '$ini%' OR nom_es LIKE '$fin%'";
        $select->GenerarWord($sql,$language); 
    }

    public function Procesar_words($ini, $language){

        //Modo de uso
        $select = new Word();
        $sql = "SELECT * FROM `terminos_$language` WHERE `nom_$language` LIKE '$ini%'";
        //echo "<br>";
        $select->GenerarWord($sql,$language);
                
    }

}
?>