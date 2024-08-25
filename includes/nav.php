<nav class="navbar navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="index.php?id=3">
      <!-- <a class="navbar-brand" href="./?limpiar=1"> -->
        <!-- <i class="fa fa-book"></i> <span>Diccionario</span> veterinario -->
        <i class="fa fa-book"></i> <span>Diccionario</span>
        <!-- <i class="fa fa-book"></i> <span>D</span> V -->
      </a>

      <ul class="nav navbar-nav nav-tools pull-right">

        <!-- <li class="nav-item">
          <form class="form-inline navbar-form pull-right">
            <input class="form-control form-control-sm" type="text" placeholder="Buscar...">
          </form>
        </li> -->


        <li class="nav-item">
          <!-- <a href="#" class="nav-link">Buscar término</a> -->

          <a href="#" class="nav-link" data-toggle="collapse" data-target="#exCollapsingNavbar">Buscar término</a>
        </li>
        <li class="nav-item">
          <a href="index.php?id=5" class="nav-link">Nuevo término</a>
        </li>

                <li class="nav-item">
          <a href="index.php?id=6" class="nav-link">Imprimir</a>
        </li>
          
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Español - Inglés</a>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="./" onclick="alert('Este enlace está desactivado temporalmente.'); return false;">Inglés - Español</a>
          </div>
        </li>

        <?php
          if (!isset($_SESSION['username'])) { // Verifica si la sesión 'user' está definida
            echo '<li class="nav-item">
                      <a href="index.php?id=1" class="nav-link">Login</a>
                  </li>';
          }
        ?>

       <?php
          if (isset($_SESSION['username'])) { // Verifica si la sesión 'user' está definida
            echo '<li class="nav-item">
          <a href="index.php?id=20" class="nav-link">Salir <i class="fa fa-sign-out"></i></a>
        </li>';
          }
        ?>

      </ul>
    </div><!-- /.container -->
  </nav>
