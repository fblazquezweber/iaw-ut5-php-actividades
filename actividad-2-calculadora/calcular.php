<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Acceso no válido.";
    echo "<br><br><a href='index.html'>Volver</a>";
    exit;
}

$numero1 = htmlspecialchars(trim($_POST["numero1"] ?? ""));
$numero2 = htmlspecialchars(trim($_POST["numero2"] ?? ""));
$operacion = htmlspecialchars(trim($_POST["operacion"] ?? ""));

if ($numero1 === "" || $numero2 === "") {
    echo "Error: debes completar ambos campos.";
    echo "<br><br><a href='index.html'>Volver</a>";
    exit;
}

if (!is_numeric($numero1) || !is_numeric($numero2)) {
    echo "Error: ambos campos deben ser numéricos.";
    echo "<br><br><a href='index.html'>Volver</a>";
    exit;
}

$n1 = $numero1 + 0;
$n2 = $numero2 + 0;

switch ($operacion) {
    case "suma":
        $resultado = $n1 + $n2;
        echo "Resultado: $resultado";
        break;

    case "resta":
        $resultado = $n1 - $n2;
        echo "Resultado: $resultado";
        break;

    case "multiplicacion":
        $resultado = $n1 * $n2;
        echo "Resultado: $resultado";
        break;

    case "division":
        if ($n2 == 0) {
            echo "Error: no se puede dividir entre 0.";
        } else {
            $resultado = $n1 / $n2;
            echo "Resultado: $resultado";
        }
        break;

    case "factorial":
        if ($n1 < 0 || floor($n1) != $n1 || $n2 < 0 || floor($n2) != $n2) {
            echo "Error: el factorial solo se puede calcular con enteros no negativos.";
        } else {
            $factorial1 = 1;
            for ($i = 1; $i <= $n1; $i++) {
                $factorial1 *= $i;
            }

            $factorial2 = 1;
            for ($i = 1; $i <= $n2; $i++) {
                $factorial2 *= $i;
            }

            echo "Factorial de $n1: $factorial1";
            echo "<br>";
            echo "Factorial de $n2: $factorial2";
        }
        break;

    case "potencia":
        $resultado = pow($n1, $n2);
        echo "Resultado: $resultado";
        break;

    case "mayor":
        if ($n1 > $n2) {
            echo "El número más grande es: $n1";
        } elseif ($n2 > $n1) {
            echo "El número más grande es: $n2";
        } else {
            echo "Ambos números son iguales.";
        }
        break;

    default:
        echo "Error: operación no válida.";
        break;
}

echo "<br><br><a href='index.html'>Volver</a>";
?>