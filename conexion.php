<?php
$host = "l51infra-server.mysql.database.azure.com";
$usuario = "rootits";
$contrasena = "Its_2022";
$base_datos = "calificaciones";
$puerto = 3306;

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos, $puerto);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

