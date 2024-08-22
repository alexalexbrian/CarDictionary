<?php
require_once("class/dashboard-user.php");


$id = isset($_GET["record"]) ? $_GET["record"] : '';
$accion = isset($_POST["accion"]) ? $_POST["accion"]: '' ;
$rownum = isset($_GET["rownum"]) ? $_GET["rownum"] : '';
$num = isset($_GET["num"]) ? $_GET["num"] : '';
$empieza_por = isset($_GET["empieza_por"]) ? $_GET["empieza_por"] : '';
$estado = isset($_GET["estado"]) ? $_GET["estado"] : '';
$palabra = isset($_GET["palabra"]) ? $_GET["palabra"] : '';







$a = new Dashboard();
$a = $a->getTerminosEn($id);


foreach($a as $data){

   echo  $data['id'];
   echo "<br>";
   echo  $data['nom_es'];
   echo "<br>";
   echo  $data['des_es'];
   echo "<br>";
   echo  $data['not_es'];
   echo "<br>";
   echo  $data['est_es'];
   echo "<br>";
   echo  $data['crud_es'];
   echo "<br>";
   echo  $data['vid_es'];
   echo "<br>";
   echo  $data['user_es'];
   echo "<br>";
   echo  $data['create_at'];
}





?>
