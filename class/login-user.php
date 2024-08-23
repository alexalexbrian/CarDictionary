<?php
require_once("connection.php");
class Login extends Connection {

    public function __construct() {

        parent::__construct();
    }
    public function Enter() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            if (empty($username) || empty($password)) {
                echo '<div class="alert alert-danger">Nombre de usuario y contraseña son requeridos..</div>';
            } else {
                // Preparar la consulta SQL para obtener el usuario
                $sql = "SELECT id, username, password FROM usuarios WHERE username = :username";
                $query = $this->dbh->prepare($sql);
                $query->bindValue(':username', $username, PDO::PARAM_STR);
                $query->execute();

                // Obtener el usuario
                $user = $query->fetch(PDO::FETCH_ASSOC);
              
                /*
                if (password_verify($password, $user['password'])) {
                    echo 'La contraseña es válida.';
                } else {
                    echo 'La contraseña no es válida.';
                }
                */
           
                if ($user && password_verify($password, $user['password'])) {
                    // Inicio de sesión exitoso
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    header('Location: index.php?id=3'); // Redirigir a una página de inicio
                    exit;
                } else {
                    echo '<div class="alert alert-danger">Nombre de usuario o contraseña incorrectos.</div>';

               
                }
            }
        }
    }
}
?>