<?php

include('conexion.php');

$query = "SELECT * FROM gastoenergico";
$statement = $connect ->prepare($query);
if($statement->execute()){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;
    }
    echo json_encode($data);
}



/* header("Access-Control-Allow-Origin: http://localhost:3306");
$bd = include_once "conexion.php";
$sentencia = $bd->query("select id, peso, estatura, edad, genero, actividad from gastoenergico");
$gasto = $sentencia->fetchAll(PDO::FETCH_OBJ);
echo json_encode($gasto); */
?>