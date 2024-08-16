
<!DOCTYPE html>
<html lang="en">
<?php 
require_once("includes/head.php");
?>
<body>
<?php 
require_once("includes/nav.php");
?>



<?php
$id = $_GET['id'];

switch ($id) {
    case 1:
        require_once("includes/templates/login.php");
        break;
    case 2:
        require_once("includes/templates/user-registration.php");
        break;
    case 3:
        require_once("includes/templates/dashboard.php");
        break;
}
?>









<?php
//require_once("includes/nav.php");
?>

<?php
//require_once("includes/templates/print.php");
?>

<?php
//require_once("includes/templates/new-term-view.php");
?>

<?php
//require_once("includes/templates/new-term.php");
?>

<?php
//require_once("includes/templates/home.php");
?>

<?php
//require_once("includes/templates/login.php");
?>

<?php
//require_once("includes/templates/user-registration.php");
?>

<?php 
include_once("includes/footer.php");
?>
</body>
</html>