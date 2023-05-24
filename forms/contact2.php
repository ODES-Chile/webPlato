<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $asunto = $_POST["asunto"];
  $mensaje = $_POST["mensaje"];

  $destinatario = "jeriquelmea@gmail.com";
  $cabeceras = "From: $nombre <$correo>" . "\r\n";
  $cabeceras .= "Reply-To: $correo" . "\r\n";

  if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
    echo "El correo ha sido enviado correctamente.";
  } else {
    echo "Error al enviar el correo.";
  }
}
?>


