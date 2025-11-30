<?php
require_once 'pdoconfig.php';


$config = require '/path_seguro/config.php';

$servername = "db1";
$database = "databasename";
$username = "username";
$password = "password";
 
try {
       $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn = new PDO(
        "mysql:host={$config['host']};dbname={$config['dbname']}",
        $config['user'],
        $config['pass']
    );


       echo "Conectado a $database de $servername con exito.";
} catch (PDOException $pe) {
       die("No es posible la conexión a  $database :" . $pe->getMessage());
}
?>
