<?php
require_once("class/dashboard-user.php");
$a = new Dashboard();
$nom_es  = isset($_POST["q"]) ? $_POST["q"]: '' ;
$terminos = $a->searchTerminoEnRapida(strip_tags($nom_es));
if(is_array($terminos) && !empty($terminos))
{
  foreach($terminos as $termino)
  {
    echo ("<div class='list-group-flush'><a href='index.php?id=4&record=".$termino['id']."' class='list-group-item'>".$termino['nom_es']." <small>".$termino['des_es']."</small></a></div>");
  }
}
else {
  echo ("");
}
?>