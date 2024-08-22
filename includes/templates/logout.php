<?php
unset($_SESSION["id"]);
unset($_SESSION["username"]);
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Cerrar Sesión</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/dialog.css">
<script src="js/jquery-1.9.1.min.js"></script> 
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<style>
    .smalltext {
        font-size: 15px;

    }
</style>

</head>
<body>
<script>
$(document).ready(function(e) {
    
	$("#id_cerrar-sesion").dialog({
		modal:true,
		buttons:{Aceptar:function(){$(this).dialog("close");
		window.location.replace("index.php?id=1");
	}},
});	
});
</script>
<div style="visibility:hidden;">
    <div id="id_cerrar-sesion">
        <span class="ui-icon ui-icon-alert" style="display: inline-block; vertical-align: middle;"></span>
        <span class="smalltext" style="vertical-align: middle;">Sesión cerrada correctamente</span>
    </div>
</div>
</body>
</html>