<?php
// Declaración de un arreglo multidimensional con información de estudiantes
$estudiantes = array(
    array("nombre" => "Ana", "edad" => 20, "grado" => "A"),
    array("nombre" => "Luis", "edad" => 22, "grado" => "B"),
    array("nombre" => "Marta", "edad" => 21, "grado" => "A"),
    array("nombre" => "Carlos", "edad" => 23, "grado" => "C"),
    array("nombre" => "Sofia", "edad" => 20, "grado" => "B")
);

// Mostrar información específica del arreglo multidimensional
// Por ejemplo, mostrar el nombre y el grado del tercer estudiante (índice 2)
$indice = 2; // índice del estudiante en el arreglo
echo "Nombre del estudiante en el índice $indice: " . $estudiantes[$indice]["nombre"] . "<br>";
echo "Grado del estudiante en el índice $indice: " . $estudiantes[$indice]["grado"];
?>
