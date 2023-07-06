<?php
if ($_POST) {
  $nombre1 = $_POST['firstName'];
  $nombre2 = $_POST['lastName'];
  $numContacto = $_POST['contactNumber'];
  $correo = $_POST['email'];
  $mensaje = $_POST['reason'];

  $destinatario = "sales@kidsfunyfiestasinfantiles.com";
  $asunto = "Mensaje enviado desde mi sitio web de Kidsfun y Fiestas Infantiles";
  $contenido = "Nombre: " . $nombre1 . " Apellido: " . $nombre2 . "\nTelefono: " . $numContacto . "\nCorreo electronico: " . $correo . "\nMensaje: " . $mensaje;

  $header = "From: " . $correo . "\r\n";
  $header .= "Reply-To: " . $correo . "\r\n";

  // Validar el correo electrónico
  if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    if (mail($destinatario, $asunto, $contenido, $header)) {
      // Redirigir a mail_send.html
      header("Location: mail_send.html");
      exit();
    } else {
      echo "Lo sentimos, ha ocurrido un error al enviar tu mensaje.";
    }
  } else {
    echo "Por favor, ingresa un correo electrónico válido.";
  }
}
?>
