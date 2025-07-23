<?php

function calculadora(float $a, float $b, string $operacion): float|string {
    switch (strtolower($operacion)) {
        case 'suma': case '+':
            return $a + $b;
        case 'resta': case '-':
            return $a - $b;
        case 'multiplicacion': case 'multiplicación': case '*':
            return $a * $b;
        case 'division': case 'división': case '/':
            return ($b == 0) ? "Error: división por cero" : $a / $b;
        default:
            return "Operación no válida";
    }
}

if (php_sapi_name() === 'cli') {
    echo "=== Calculadora CLI ===" . PHP_EOL;
    $a  = (float) readline("A: ");
    $b  = (float) readline("B: ");
    $op = readline("Operación (suma/resta/multiplicacion/division o + - * /): ");

    $resultado = calculadora($a, $b, $op);
    echo "Resultado: {$resultado}" . PHP_EOL;
}
