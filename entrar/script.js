document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.getElementById("login-form");
    const errorElement = document.getElementById("error-message");

    loginForm.addEventListener("submit", (event) => {
        // Prevenir el envío del formulario
        event.preventDefault();

        // Obtener los valores de correo electrónico y contraseña
        const email = loginForm.elements["email"].value;
        const password = loginForm.elements["password"].value;

        // Realizar una solicitud POST para iniciar sesión en el servidor
        fetch("./login.php", {
            method: "POST",
            body: new URLSearchParams({
                email: email,
                password: password,
            }),
        })
            .then((response) => response.json())
            .then((data) => {
                // Verificar si se inició sesión correctamente
                if (data.success) {
                    // Redirigir al usuario a la página de inicio
                    window.location.replace("../index.html");
                } else {
                    // Mostrar un mensaje de error
                    errorElement.textContent = data.message || "Correo electrónico o contraseña incorrectos";
                    errorElement.style.display = "block";
                }
            })
            .catch((error) => {
                console.error(error);
            });
    });
});
