
<?php
session_start();
/*
redirige a index.php?id=1 cuando 
no se proporciona el parámetro id, solo afecte a index.php.

redirect to index.php?id=1 when id parameter is
not provided, only affect index.php.
*/
if(basename($_SERVER['PHP_SELF']) == 'index.php' && !isset($_GET['id'])){
    header('Location:index.php?id=1');
}
//Validar y sanitizar el parámetro id.
//Validate and sanitize the id parameter.
$id = isset($_GET['id']) ? intval($_GET['id']) : 1; 
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("includes/head.php"); ?>
<body>
<?php require_once("includes/nav.php"); ?>
<?php
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
switch ($id) {
    case 3:
        require_once("includes/templates/dashboard.php");
        break;
    case 4: 
        require_once("includes/templates/new-term-view.php");
        break;
    case 5: 
        require_once("includes/templates/new.php");
        break;
    case 6: 
        require_once("includes/templates/export.php");
        break;
    case 20:
        require_once("includes/templates/logout.php");
        break;
}
?>
<?php
} else { 
echo '<div class="alert alert-danger">No se ha iniciado sesión.</div>'; 

switch ($id) {
    case 1:
        require_once("includes/templates/login.php");
        break;
    case 2: 
        require_once("includes/templates/user-registration.php");
        break;
}
}
?>
<?php 
include_once("includes/footer.php");
?>
<script src="assets/js/funciones_terminos.js"></script>

<script src="assets/lib/summernote/summernote.min.js"></script>
<!-- sweetalert2 -->
<script src="assets/lib/sweetalert2/dist/sweetalert2.min.js"></script>

<!-- Buscador web -->
<script src="js/web-browser.js"></script>
<!-- Fin Buscador web -->

<!-- filtros descargar-word  -->
<script src="js/filtros-descargar-word.js"></script>
<!-- Fin filtros descargar-word  -->
<script>
    window.jQuery || document.write('<script src="http://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"><\/script>')
</script>
<!-- include summernote /js-->
<script src="js/summernoteSetup.js"></script>
</body>
</html>