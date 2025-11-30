<?php
// Autor: Alberto Diéguez Álvarez

function fibonacci($n)
{
    // Comprobamos que el dato introducido es correcto
    if (!is_int($n) || $n < 0) {
        throw new Exception("El parámetro debe ser un número mayor o igual que 0.");
    }

    // Inicializamos el array con los dos primeros números de la serie
    $resultado = [0];
    if ($n == 0)
        return $resultado;
    $resultado[] = 1;
    if ($n == 1)
        return $resultado;

    $a = 0;
    $b = 1;
    // Calculamos los siguientes números de la serie, hasta llegar a n y los guardamos en el array
    for ($i = 2; $i <= $n; $i++) {
        $c = $a + $b;
        $a = $b;
        $b = $c;
        $resultado[] = $b;
    }

    return $resultado;
}

// Ejemplo de uso de la función, con manejo de excepciones
try {
    $numero = 6;
    $resultado = fibonacci($numero);
    // Imprimimos el resultado
    echo "Fibonacci de $numero es: " . json_encode($resultado);


} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
