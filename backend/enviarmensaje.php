<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$solicitud = $_POST['solicitud'];
$mensaje = $_POST['mensaje'];


// Datos para el correo
$destinatario = "sisaritravel@gmail.com";
$asunto = "Contacto pagina web Sisaritravel";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "solicitud: $solicitud \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);

header('Location:mensaje-de-envio.html');


?>