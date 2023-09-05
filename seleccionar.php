<?php
header("Access-Control-Allow-Origin: http://localhost:3306");
if (empty($_GET["id"])) {
    exit("No hay id");
}
$id = $_GET["id"];
$bd = include_once "conexion.php";
$sentencia = $bd->prepare("select * from gastoenergico where id = ?");
$sentencia->execute([$id]);
$gasto = $sentencia->fetchObject();
echo json_encode($gasto);
?>