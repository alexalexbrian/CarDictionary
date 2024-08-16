<?php
// Prueba de hashing
$password = '212122';
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
echo "Hash: " . $hashed_password . "<br>";

// Verificación
if (password_verify($password, $hashed_password)) {
    echo 'La contraseña es válida.';
} else {
    echo 'La contraseña no es válida.';
}
?>
