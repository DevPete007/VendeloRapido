<?php
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "nombre_de_la_base_de_datos";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los valores del formulario
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$categoria = $_POST["categoria"];
$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$contacto = $_POST["contacto"];
$precio = $_POST["precio"];

// Directorio de almacenamiento de las imágenes
$directorio = "ruta_de_almacenamiento/"; // Reemplaza con la ruta adecuada

// Arreglo para almacenar los nombres de las imágenes subidas
$imagenes = array();

// Verificar si se seleccionaron archivos

// if (isset($_FILES["fotos"])) {
//    $totalArchivos = count($_    