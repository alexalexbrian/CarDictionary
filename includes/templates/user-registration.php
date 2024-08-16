<?php
require_once("class/register-user.php");
$insert=new Register();
$insert->register();
$id = strip_tags($_GET['id']);
?>
<div class="container p-t-md">
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
    <form id="form" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?id=<?php echo $id;?> " method="POST">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail3">Nuevo nombre de usuario</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Nuevo nombre de usuario">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword3">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
        </div>
        <button type="submit" class="btn btn-block btn-primary">Registrar</button>
        <input type="hidden" name="security" value="<?php echo base64_encode('12454878124'); ?>">
      </form>
    </div>

  </div>
</div>