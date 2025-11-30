<?php
require 'ejemplo.php';
// Importa el archivo con la función a probar
use PHPUnit\Framework\TestCase;
// utiliza la librería con PHPUnit
class EjemploTest extends TestCase
{
    // crea una clase que hereda de TestCase
    public function testObtenerPrimerosNumeros()
    {
        // crea un método para realizar las pruebas
        $n = 5;
        $resultado_esperado = [1, 2, 3, 4, 5];
        $resultado_obtenido = obtenerPrimerosNumeros($n);
        $this->assertEquals($resultado_esperado, $resultado_obtenido);
        // comprueba que el resultado esperado es igual al obtenido
    }
}
?>