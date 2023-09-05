<?php
header("Access-Control-Allow-Origin: http://localhost:3306");
header("Access-Control-Allow-Methods: DELETE");
$metodo = $_SERVER["REQUEST_METHOD"];
if ($metodo != "DELETE" && $metodo != "OPTIONS") {
    exit("Solo se permite método DELETE");
}

if (empty($_GET["id"])) {
    exit("No hay  para eliminar");
}

$id = $_GET["id"];
$bd = include_once "conexion.php";
$sentencia = $bd->prepare("DELETE FROM gastoenergico WHERE id = ?");
$resultado = $sentencia->execute([$id]);
echo json_encode($resultado);

?>