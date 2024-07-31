<?php
// Declaración de variables
$usuario_logueado = true;
$edad = 18;
$nivel_acceso = "admin";

// Estructura condicional compleja
if ($usuario_logueado) {
    if ($edad >= 18) {
        if ($nivel_acceso == "admin") {
            echo "Bienvenido, Administrador. Tienes acceso completo al sistema.";
        } elseif ($nivel_acceso == "editor") {
            echo "Bienvenido, Editor. Puedes modificar el contenido.";
        } else {
            echo "Bienvenido, Usuario. Tu acceso es limitado.";
        }
    } else {
        echo "Acceso denegado: Debes tener al menos 18 años para acceder.";
    }
} else {
    echo "Debes iniciar sesión para acceder al sistema.";
}
?>
