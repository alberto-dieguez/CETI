<?php
// Autor: Alberto Diéguez Álvarez

// Importaremos la librería de testeo de software en este caso PHPunit.
use PHPUnit\Framework\TestCase;

//Importaremos el archivo donde se ha definido la función Fibonacci
require_once 'fibo.php';

//Crearemos nuestra clase (del tipo TestCase)
class TestFibo extends TestCase
{
    // Método para probar la función Fibonacci
    public function testFibonacciPosicion5()
    {
        // Resultado esperado: la posición 5 de la secuencia es 5 -> [0,1,1,2,3]
        $resultadoEsperado = 8;

        // Obtenemos la secuencia completa hasta la posición 5
        $resultado = fibonacci(5);

        // Extraemos la posición 5, que empezamos a contar desde 0
        $resultadoObtenido = $resultado[4];

        // Comprobamos si coinciden
        $this->assertEquals($resultadoEsperado, $resultadoObtenido);
    }
}
