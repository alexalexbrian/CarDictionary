
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("includes/head.php"); ?>
<body>
<?php require_once("includes/nav.php"); ?>
<?php
$id = strip_tags($_GET['id']);
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