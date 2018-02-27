<?php
  $correo = $_POST['correo'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];

  $to = "Info@importexplogistics.com.co";
  $subject = $asunto;
  $txt = $mensaje;
  $headers = "From:$correo" . "\r\n" .
  "CC: Info@importexplogistics.com.co";

  if (mail($to,$subject,$txt,$headers)) {
    echo '<script>
      alert("El mensaje se ha enviado exitosamente.");
      location.href="index.html";
      </script>';} else {
        echo "Error, no se ha enviado el mensaje";
      }
  //Info@importexplogistics.com.co
 ?>
