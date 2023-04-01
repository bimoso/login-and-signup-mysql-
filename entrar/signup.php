<?php
include("../db/db.php");

// Comprobar si se ha enviado el formulario
if(isset($_POST["submit"])) {

  // Obtener los valores del formulario
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Comprobar si el usuario ya existe en la base de datos
  $sql = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0) {
    echo "El usuario ya existe";
    exit();
  }

  // Insertar el nuevo usuario en la base de datos
  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
  if(mysqli_query($conn, $sql)) {
    echo "El usuario ha sido registrado correctamente";
  } else {
    echo "Error al registrar el usuario: " . mysqli_error($conn);
  }

  // Cerrar la conexión a la base de datos
  mysqli_close($conn);
}

?>