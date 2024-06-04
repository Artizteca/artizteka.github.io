<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email-2'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "artizteca@gmail.com";
        $subject = "Nuevo contacto desde el formulario";
        $message = "Has recibido un nuevo mensaje desde tu formulario de contacto.\n\nCorreo: $email";
        $headers = "From: no-reply@artizteca.com\r\n";
        $headers .= "Reply-To: $email\r\n";
        
        if (mail($to, $subject, $message, $headers)) {
            echo 'success';
        } else {
            echo 'error';
        }
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
?>
