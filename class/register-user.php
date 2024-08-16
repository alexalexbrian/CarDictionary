<?php
include_once("connection.php");

class Register extends Connection{


    public function __contruct(){

        parent::__contruct();

    }

    public function prepare($sql){

        return $this->dbh->prepare($sql);


    }

    public function register() {
        // Obtener y decodificar el valor de 'security'
        $security = $_POST['security'] ?? '';  // Usar el operador null coalescente para evitar advertencias
        $security = base64_decode($security);
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && is_numeric($security)) {
            if ($security == 12454878124) {
                $username = $_POST['username'] ?? '';
                $password1 = $_POST['password'] ?? '';
                $created_at = date('Y-m-d H:i:s');
    
                // Validar el nombre de usuario y la contraseña
                if (empty($username)) {
                    echo '<div class="alert alert-danger">El nombre de usuario no puede estar vacío.</div>';
                } elseif (strlen($username) < 3) {
                    echo '<div class="alert alert-warning">El nombre de usuario debe tener al menos 3 caracteres.</div>';
                } elseif (empty($password1)) {
                    echo '<div class="alert alert-danger">La contraseña no puede estar vacía.</div>';
                } elseif (strlen($password1) < 6) {
                    echo '<div class="alert alert-warning">La contraseña debe tener al menos 6 caracteres.</div>';
                } else {
                    // Hashing seguro de la contraseña
                    $hashed_password = password_hash($password1, PASSWORD_DEFAULT);
    
                    // Consulta SQL para insertar datos
                    $sql = "INSERT INTO usuarios (username, password, created_at) VALUES (?, ?, ?)";
                    $query = $this->dbh->prepare($sql);
                    $query->bindValue(1, $username, PDO::PARAM_STR);
                    $query->bindValue(2, $hashed_password, PDO::PARAM_STR);
                    $query->bindValue(3, $created_at, PDO::PARAM_STR);
    
                    if ($query->execute()) {
                        echo '<div class="alert alert-success">Usuario guardado correctamente.</div>';
                    } else {
                        echo "Error al guardar el registro.";
                    }
                }
            } else {
                echo "Código de seguridad no válido.";
            }
        }
    }
    





  

    


}