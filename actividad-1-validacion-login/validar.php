<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Acceso no válido.";
    echo "<br><br><a href='login.html'>Volver</a>";
    exit;
}

$usuario = htmlspecialchars(trim($_POST["usuario"] ?? ""));
$clave = htmlspecialchars(trim($_POST["clave"] ?? ""));

if ($usuario === "" || $clave === "") {
    echo "Error: debes completar todos los campos.";
} elseif ($usuario === "admin" && $clave === "1234") {
    echo "Bienvenido, $usuario. Las credenciales son correctas.";
} else {
    echo "Error: usuario o contraseña incorrectos.";
}

echo "<br><br><a href='login.html'>Volver</a>";
?>