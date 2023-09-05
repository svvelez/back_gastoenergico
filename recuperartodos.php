<?php
header("Access-Control-Allow-Origin: http://localhost:3306");
$bd = include_once "conexion.php";
$sentencia = $bd->query("select id, peso, estatura, edad, genero, actividad from gasto_energico");
$gasto = $sentencia->fetchAll(PDO::FETCH_OBJ);
echo json_encode($gasto);
?>