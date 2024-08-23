
<?php
session_start();
//redirija a index.php?id=1 cuando no se proporcione el parámetro id pero solo afecte a index.php
if(basename($_SERVER['PHP_SELF']) == 'index.php' && !isset($_GET['id'])){

    header('Location:index.php?id=1');

}else{
    // Validar y sanitizar el parámetro id
    $id = isset($_GET['id']) ? intval($_GET['id']) : 1; 
    
}
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
    case 20:
        require_once("includes/templates/logout.php");
        break;
}
?>
<?php
} else { echo '<div class="alert alert-danger">No se ha iniciado sesión.</div>'; }
switch ($id) {
    case 1:
        require_once("includes/templates/login.php");
        break;
    case 2: 
        require_once("includes/templates/user-registration.php");
        break;
}?>
<?php 
include_once("includes/footer.php");
?>
<script src="js/summernoteSetup.js"></script>
</body>
</html>