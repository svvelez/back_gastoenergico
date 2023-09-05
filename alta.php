<?php
header("Access-Control-Allow-Origin: http://localhost:3306");
header("Access-Control-Allow-Headers: *");
$jsonGasto = json_decode(file_get_contents("php://input"));
if (!$jsonGasto) {
    exit("No hay datos");
}
$bd = include_once "conexion.php";
$sentencia = $bd->prepare("insert into gasto_energico(peso, estatura, edad, genero, actividad) values (?,?,?,?,?)");
$resultado = $sentencia->execute([$jsonGasto->peso, $jsonGasto->estatura, $jsonGasto->edad, $jsonGasto->genero, $jsonGasto->actividad]);
echo json_encode([
    "resultado" => $resultado,
]);
?>