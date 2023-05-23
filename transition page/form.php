<?php

include("datos.php");

if (isset ($_POST['submit'])){

    if(strlen($_POST['nombre'])>= 1 &&
   strlen($_POST['direccion'])>= 1 &&
   strlen($_POST['correo'])>=1 &&
   strlen($_POST['proyecto'])>= 1 ){

$nombre = trim($_POST['nombre']);
$direccion = trim($_POST['direccion']);
$correo = trim($_POST['correo']);
$proyecto = trim($_POST['proyecto']);

$consulta="INSERT INTO empresas (nombre, ubicacion, correo_electronico, proyecto) VALUES ('$nombre','$direccion','$correo','$proyecto')";
$resultado =mysqli_query($conex, $consulta);
   
}
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$proyecto = $_POST["proyecto"];

header("Location: http://localhost:3000/proyecto%20actualizado/index.php");
}
?>

