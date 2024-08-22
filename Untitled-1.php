<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Validar los datos (opcional)
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Puedes guardar los datos en una base de datos, enviarlos por correo, etc.
        // Aquí te muestro un ejemplo para enviar un correo electrónico:

        $to = "profetajuanelias@gmail.com"; // Reemplaza con tu dirección de correo
        $subject = "Nuevo Mensaje de $name";
        $body = "Nombre: $name\nCorreo: $email\n\nMensaje:\n$message";
        $headers = "From: $email";
        
        if (mail($to, $subject, $body, $headers)) {
            echo "Gracias, tu mensaje ha sido enviado.";
        } else {
            echo "Lo siento, hubo un error al enviar tu mensaje.";
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}
?>