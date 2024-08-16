<?php
require_once("class/login-user.php");
$insert=new Login();
$insert->Enter();
$id = strip_tags($_GET['id']);
?>
<div class="container p-t-md">
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
    <form id="form" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?id=<?php echo $id;?> " method="POST">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail3">Usuario</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword3">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
        </div>
         <div class="checkbox">
          <label>
            <input type="checkbox"> Recordar</label>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Entrar</button>
      </form>
    </div>
  </div>
</div>