<?php
// Recibir los datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Validar las credenciales
if ($usuario === 'admin' && $contrasena === '12345') {
  // Inicio de sesión exitoso
  echo "Inicio de sesión exitoso";
} else {
  // Inicio de sesión fallido
  echo "Credenciales inválidas. Inténtalo de nuevo.";
}
?>