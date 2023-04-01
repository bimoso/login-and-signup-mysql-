<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "usuario_mysql";
$password = "contraseña_de_mysql";
$dbname = "nombre_de_la_base_de_datos";

// Establecer conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Establecer conjunto de caracteres de la conexión a UTF-8
mysqli_set_charset($conn, "utf8");
?>