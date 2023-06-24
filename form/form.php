<?php
if ($_POST) {
  $nombre1 = $_POST['firstName'];
  $nombre2 = $_POST['lastName'];
  $numContacto = $_POST['contactNumber'];
  $correo = $_POST['email'];
  $mensaje = $_POST['reason'];

  $destinatario = "mrgomez.dev@gmail.com";
  $asunto = "Mensaje enviado desde mi sitio web";
  $contenido = "Nombre: " . $nombre1 . " Apellido: " . $nombre2 . " Teléfono: " . $numContacto . "\nCorreo electrónico: " . $correo . "\nMensaje: " . $mensaje;

  $header = "From: " . $correo . "\r\n";
  $header .= "Reply-To: " . $correo . "\r\n";

  if (mail($destinatario, $asunto, $contenido, $header)) {
    echo "Gracias por contactarnos. Tu mensaje ha sido enviado.";
  } else {
    echo "Lo sentimos, ha ocurrido un error al enviar tu mensaje.";
  }
}
?>
