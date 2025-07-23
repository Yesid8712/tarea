<?php
/**
 * Ejemplo 5: Suma de Números
 * Descripción: Recibe una lista (array) de números y retorna la suma de todos ellos.
 */

function suma_numeros(array $numeros): float {
    // Opcional: filtrar por si llegan valores no numéricos
    $numeros = array_filter($numeros, 'is_numeric');
    return array_sum($numeros);
}

// --- Ejemplo de entrada ---
$entrada = [1, 2, 3, 4, 10];
$resultado = suma_numeros($entrada);

// --- Ejemplo de salida ---
echo "Entrada: suma_numeros([1, 2, 3, 4, 5])\n";
echo "Salida: $resultado"; // 15
