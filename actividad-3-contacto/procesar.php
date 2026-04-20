<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Acceso no válido.";
    echo "<br><br><a href='contacto.html'>Volver</a>";
    exit;
}

$nombre = htmlspecialchars(trim($_POST["nombre"] ?? ""));
$correo = htmlspecialchars(trim($_POST["correo"] ?? ""));
$mensaje = htmlspecialchars(trim($_POST["mensaje"] ?? ""));

if ($nombre === "" || $correo === "" || $mensaje === "") {
    echo "Error: debes completar todos los campos.";
    echo "<br><br><a href='contacto.html'>Volver</a>";
    exit;
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo "Error: el correo electrónico no tiene un formato válido.";
    echo "<br><br><a href='contacto.html'>Volver</a>";
    exit;
}

echo "Mensaje enviado correctamente.";
echo "<br><br>";
echo "Nombre: $nombre";
echo "<br>";
echo "Correo: $correo";
echo "<br>";
echo "Mensaje: $mensaje";
echo "<br><br><a href='contacto.html'>Volver</a>";
?>