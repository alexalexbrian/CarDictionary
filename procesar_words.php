<?php
require_once("class/words.php"); 
$dat = new Word();

$ini = isset($_POST['empieza_por']) ? $_POST['empieza_por'] : '';
$fin = isset($_POST['termina_con']) ? $_POST['termina_con'] : '';
$words = isset($_POST['palabra']) ? trim($_POST['palabra']) : '';
$language = isset($_POST['idioma']) ? $_POST['idioma'] : '';

// Condición especial
if ($ini == 154245) {
    $dat->Procesar_todo($language);
    exit; // Termina la ejecución después de procesar todo
}

// Procesa según las condiciones
if ($ini && !$fin && !$words && $ini != 154245) {
    $dat->Procesar_ini($ini, $language);
} elseif ($ini && $fin && !$words && $ini != 154245) {
    if ($ini != $fin) {
        $dat->Procesar_ini_fin($ini, $fin, $language);
    } else {
        echo "El formulario A y B no pueden ser iguales";
    }
} elseif ($words && !$ini && $ini != 154245) {
    $dat->Procesar_words($words, $language);
}