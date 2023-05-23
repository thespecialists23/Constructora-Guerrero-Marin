
<?php

include("datos.php");
/* ///////////////////////////para 1////////////////////// */
if (isset ($_POST['submit1'])){

    if(strlen($_POST['nombre1'])>= 1 &&
   strlen($_POST['cantidad1'])>= 1 &&
   strlen($_POST['unidad1'])>= 1 &&
   strlen($_POST['precio1'])>= 1 ){

$nombre1 = trim($_POST['nombre1']);
$cantidad1 = trim($_POST['cantidad1']);
$unidad1 = trim($_POST['unidad1']);
$precio1 = trim($_POST['precio1']);


$consulta="INSERT INTO a1 (nombre, cantidad, unidad, V_Unitario) VALUES ('$nombre1','$cantidad1', '$unidad1', '$precio1')";
$resultado1 =mysqli_query($conex, $consulta);
   
}
header("Location: " . $_SERVER['PHP_SELF']);
        exit();
}

 /* /////////////////para 2//////////////////// */
 if (isset ($_POST['submit2'])){

    if(strlen($_POST['nombre2'])>= 1 &&
   strlen($_POST['cantidad2'])>= 1 &&
   strlen($_POST['unidad2'])>= 1 &&
   strlen($_POST['precio2'])>= 1 ){

$nombre2 = trim($_POST['nombre2']);
$cantidad2 = trim($_POST['cantidad2']);
$unidad2 = trim($_POST['unidad2']);
$precio2 = trim($_POST['precio2']);


$consulta="INSERT INTO a2 (nombre, cantidad, unidad, V_Unitario) VALUES ('$nombre2','$cantidad2', '$unidad2', '$precio2')";
$resultado2 =mysqli_query($conex, $consulta);
   
}
header("Location: " . $_SERVER['PHP_SELF']);
        exit();
}

/* ///////////////////////////para 3/////////////// */
if (isset ($_POST['submit3'])){

    if(strlen($_POST['nombre3'])>= 1 &&
   strlen($_POST['cantidad3'])>= 1 &&
   strlen($_POST['unidad3'])>= 1 &&
   strlen($_POST['precio3'])>= 1 ){

$nombre3 = trim($_POST['nombre3']);
$cantidad3 = trim($_POST['cantidad3']);
$unidad3 = trim($_POST['unidad3']);
$precio3 = trim($_POST['precio3']);


$consulta="INSERT INTO a3 (nombre, cantidad, unidad, V_Unitario) VALUES ('$nombre3','$cantidad3', '$unidad3', '$precio3')";
$resultado3 =mysqli_query($conex, $consulta);
   
}
header("Location: " . $_SERVER['PHP_SELF']);
        exit();
}

/* //////////////////////////////para 4//////////////// */
if (isset ($_POST['submit2'])){

    if(strlen($_POST['nombre2'])>= 1 &&
   strlen($_POST['cantidad2'])>= 1 &&
   strlen($_POST['unidad2'])>= 1 &&
   strlen($_POST['precio2'])>= 1 ){

$nombre2 = trim($_POST['nombre2']);
$cantidad2 = trim($_POST['cantidad2']);
$unidad2 = trim($_POST['unidad2']);
$precio2 = trim($_POST['precio2']);


$consulta="INSERT INTO a2 (nombre, cantidad, unidad, V_Unitario) VALUES ('$nombre2','$cantidad2', '$unidad2', '$precio2')";
$resultado2 =mysqli_query($conex, $consulta);
   
}
header("Location: " . $_SERVER['PHP_SELF']);
        exit();
}

/* ///////////////////////////para 4/////////////// */
if (isset ($_POST['submit4'])){

    if(strlen($_POST['nombre4'])>= 1 &&
   strlen($_POST['cantidad4'])>= 1 &&
   strlen($_POST['unidad4'])>= 1 &&
   strlen($_POST['precio4'])>= 1 ){

$nombre4 = trim($_POST['nombre4']);
$cantidad4 = trim($_POST['cantidad4']);
$unidad4 = trim($_POST['unidad4']);
$precio4 = trim($_POST['precio4']);


$consulta="INSERT INTO a4 (nombre, cantidad, unidad, V_Unitario) VALUES ('$nombre4','$cantidad4', '$unidad4', '$precio4')";
$resultado4 =mysqli_query($conex, $consulta);
   
}
header("Location: " . $_SERVER['PHP_SELF']);
        exit();
}

/* ////////////////////////////para 5////////////////////////// */

if (isset ($_POST['submit5'])){

    if(strlen($_POST['nombre5'])>= 1 &&
   strlen($_POST['cantidad5'])>= 1 &&
   strlen($_POST['unidad5'])>= 1 &&
   strlen($_POST['precio5'])>= 1 ){

$nombre5 = trim($_POST['nombre5']);
$cantidad5 = trim($_POST['cantidad5']);
$unidad5 = trim($_POST['unidad5']);
$precio5 = trim($_POST['precio5']);


$consulta="INSERT INTO a5 (nombre, cantidad, unidad, V_Unitario) VALUES ('$nombre5','$cantidad5', '$unidad5', '$precio5')";
$resultado5 =mysqli_query($conex, $consulta);
   
}
header("Location: " . $_SERVER['PHP_SELF']);
        exit();
}

/* //////////////////////////////para 6///////////////////// */

if (isset ($_POST['submit6'])){

    if(strlen($_POST['nombre6'])>= 1 &&
   strlen($_POST['cantidad6'])>= 1 &&
   strlen($_POST['unidad6'])>= 1 &&
   strlen($_POST['precio6'])>= 1 ){

$nombre6 = trim($_POST['nombre6']);
$cantidad6 = trim($_POST['cantidad6']);
$unidad6 = trim($_POST['unidad6']);
$precio6 = trim($_POST['precio6']);


$consulta="INSERT INTO a6 (nombre, cantidad, unidad, V_Unitario) VALUES ('$nombre6','$cantidad6', '$unidad6', '$precio6')";
$resultado6 =mysqli_query($conex, $consulta);
   
}
header("Location: " . $_SERVER['PHP_SELF']);
        exit();
}

/* ////////////////para 7///////////////////////////////////*/

if (isset ($_POST['submit7'])){

    if(strlen($_POST['nombre7'])>= 1 &&
   strlen($_POST['cantidad7'])>= 1 &&
   strlen($_POST['unidad7'])>= 1 &&
   strlen($_POST['precio7'])>= 1 ){

$nombre7 = trim($_POST['nombre7']);
$cantidad7 = trim($_POST['cantidad7']);
$unidad7 = trim($_POST['unidad7']);
$precio7 = trim($_POST['precio7']);


$consulta="INSERT INTO a7 (nombre, cantidad, unidad, V_Unitario) VALUES ('$nombre7','$cantidad7', '$unidad7', '$precio7')";
$resultado7 =mysqli_query($conex, $consulta);
   
}
header("Location: " . $_SERVER['PHP_SELF']);
        exit();
}

/* //////////////////////para 8///////////// */

if (isset ($_POST['submit8'])){

    if(strlen($_POST['nombre8'])>= 1 &&
   strlen($_POST['cantidad8'])>= 1 &&
   strlen($_POST['unidad8'])>= 1 &&
   strlen($_POST['precio8'])>= 1 ){

$nombre8 = trim($_POST['nombre8']);
$cantidad8 = trim($_POST['cantidad8']);
$unidad8= trim($_POST['unidad8']);
$precio8 = trim($_POST['precio8']);


$consulta="INSERT INTO a8 (nombre, cantidad, unidad, V_Unitario) VALUES ('$nombre8','$cantidad8', '$unidad8', '$precio8')";
$resultado8 =mysqli_query($conex, $consulta);
   
}
header("Location: " . $_SERVER['PHP_SELF']);
        exit();
}
/* /////////////////////////para 9/////////////////// */


if (isset ($_POST['submit9'])){

    if(strlen($_POST['nombre9'])>= 1 &&
   strlen($_POST['cantidad9'])>= 1 &&
   strlen($_POST['unidad9'])>= 1 &&
   strlen($_POST['precio9'])>= 1 ){

$nombre9 = trim($_POST['nombre9']);
$cantidad9 = trim($_POST['cantidad9']);
$unidad9= trim($_POST['unidad9']);
$precio9 = trim($_POST['precio9']);


$consulta="INSERT INTO a9 (nombre, cantidad, unidad, V_Unitario) VALUES ('$nombre9','$cantidad9', '$unidad9', '$precio9')";
$resultado9 =mysqli_query($conex, $consulta);
   
}
header("Location: " . $_SERVER['PHP_SELF']);
        exit();
}

/* //////////////////////////////para 10/////////////////////////////// */

if (isset ($_POST['submit10'])){

    if(strlen($_POST['nombre10'])>= 1 &&
   strlen($_POST['cantidad10'])>= 1 &&
   strlen($_POST['unidad10'])>= 1 &&
   strlen($_POST['precio10'])>= 1 ){

$nombre10 = trim($_POST['nombre10']);
$cantidad10 = trim($_POST['cantidad10']);
$unidad10= trim($_POST['unidad10']);
$precio10 = trim($_POST['precio10']);


$consulta="INSERT INTO a10 (nombre, cantidad, unidad, V_Unitario) VALUES ('$nombre10','$cantidad10', '$unidad10', '$precio10')";
$resultado10 =mysqli_query($conex, $consulta);
   
}
header("Location: " . $_SERVER['PHP_SELF']);
        exit();
}

/* //////////////////////para 11///////////////// */

if (isset ($_POST['submit11'])){

    if(strlen($_POST['nombre11'])>= 1 &&
   strlen($_POST['cantidad11'])>= 1 &&
   strlen($_POST['unidad11'])>= 1 &&
   strlen($_POST['precio11'])>= 1 ){

$nombre11 = trim($_POST['nombre11']);
$cantidad11 = trim($_POST['cantidad11']);
$unidad11= trim($_POST['unidad11']);
$precio11 = trim($_POST['precio11']);


$consulta="INSERT INTO a11 (nombre, cantidad, unidad, V_Unitario) VALUES ('$nombre11','$cantidad11', '$unidad11', '$precio11')";
$resultado11 =mysqli_query($conex, $consulta);
   
}
header("Location: " . $_SERVER['PHP_SELF']);
        exit();
}

/* /////////////para 12///////////////////////////////// */

if (isset ($_POST['submit12'])){

    if(strlen($_POST['nombre12'])>= 1 &&
   strlen($_POST['cantidad12'])>= 1 &&
   strlen($_POST['unidad12'])>= 1 &&
   strlen($_POST['precio12'])>= 1 ){

$nombre12 = trim($_POST['nombre12']);
$cantidad12 = trim($_POST['cantidad12']);
$unidad12= trim($_POST['unidad12']);
$precio12 = trim($_POST['precio12']);


$consulta="INSERT INTO a12 (nombre, cantidad, unidad, V_Unitario) VALUES ('$nombre12','$cantidad12', '$unidad12', '$precio12')";
$resultado12 =mysqli_query($conex, $consulta);
   
}
header("Location: " . $_SERVER['PHP_SELF']);
        exit();
}

/* ////////////////////////////////////////////////////// */
if($_SERVER["REQUEST_METHOD"]=="POST"){
$nombre1 = $_POST["nombre1"];
$cantidad1 = $_POST["cantidad1"];
$unidad1 = $_POST["unidad1"];
$precio1 = $_POST["precio1"];
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
$nombre2 = $_POST["nombre2"];
$cantidad2 = $_POST["cantidad2"];
$unidad2 = $_POST["unidad2"];
$precio2 = $_POST["precio2"];
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
$nombre3 = $_POST["nombre3"];
$cantidad3 = $_POST["cantidad3"];
$unidad3= $_POST["unidad3"];
$precio3 = $_POST["precio3"];
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
$nombre4 = $_POST["nombre4"];
$cantidad4 = $_POST["cantidad4"];
$unidad4= $_POST["unidad4"];
$precio4 = $_POST["precio4"];
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
$nombre5 = $_POST["nombre5"];
$cantidad5 = $_POST["cantidad5"];
$unidad5= $_POST["unidad5"];
$precio5 = $_POST["precio5"];
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
$nombre6 = $_POST["nombre6"];
$cantidad6 = $_POST["cantidad6"];
$unidad6= $_POST["unidad6"];
$precio6 = $_POST["precio6"];
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
$nombre7 = $_POST["nombre7"];
$cantidad7 = $_POST["cantidad7"];
$unidad7= $_POST["unidad7"];
$precio7 = $_POST["precio7"];
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
$nombre8 = $_POST["nombre8"];
$cantidad8 = $_POST["cantidad8"];
$unidad8= $_POST["unidad8"];
$precio8 = $_POST["precio8"];
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
$nombre9 = $_POST["nombre9"];
$cantidad9 = $_POST["cantidad9"];
$unidad9= $_POST["unidad9"];
$precio9 = $_POST["precio9"];
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
$nombre10 = $_POST["nombre10"];
$cantidad10 = $_POST["cantidad10"];
$unidad10= $_POST["unidad10"];
$precio10 = $_POST["precio10"];
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
$nombre11 = $_POST["nombre11"];
$cantidad11 = $_POST["cantidad11"];
$unidad11= $_POST["unidad11"];
$precio11 = $_POST["precio11"];
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
$nombre12 = $_POST["nombre12"];
$cantidad12 = $_POST["cantidad12"];
$unidad12= $_POST["unidad12"];
$precio12 = $_POST["precio12"];
}
/* //////////////////////////////////////////////////// */