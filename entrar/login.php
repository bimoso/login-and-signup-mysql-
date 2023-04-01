<?php
// Incluir archivo de conexión a la base de datos
include "../db/db.php";

// Obtener datos del formulario de inicio de sesión
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Consultar la base de datos para obtener el hash de la contraseña almacenada
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // El usuario existe, obtener el hash de la contraseña almacenada
        $row = mysqli_fetch_assoc($result);
        $hash = $row["password"];

        // Verificar la contraseña ingresada con la función password_verify
        if (password_verify($password, $hash)) {
            // Contraseña correcta, crear sesión para el usuario
            session_start();
            $_SESSION["email"] = $email;

            // Redirigir al usuario a la página de inicio
            echo json_encode(array("success" => true));
            exit();
        } else {
            // Contraseña incorrecta, enviar respuesta de error
            echo json_encode(array("success" => false, "message" => "Contraseña incorrecta"));
            exit();
        }
    } else {
        // El usuario no existe, enviar respuesta de error
        echo json_encode(array("success" => false, "message" => "El usuario no existe"));
        exit();
    }
} else {
    // Datos de inicio de sesión faltantes, enviar respuesta de error
    echo json_encode(array("success" => false, "message" => "Faltan datos de inicio de sesión"));
    exit();
}
?>
