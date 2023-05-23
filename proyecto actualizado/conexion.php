

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apu";
 
// Crear conexión

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<form action="conexion.php" method="post">

<div style="text-align: center;">

<h1>APU'S</h1>

</div>

<section>

<?php

// Seleccionar datos de la tabla


$apu0101 = "SELECT * FROM `0101`";

$result0101 = $conn -> query($apu0101);
?>

<table border="1" class="table_0101">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0101 = $result0101->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0101 ["ID"] . "</td>";
      echo "<td>" . $row_0101 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0101 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0101 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0101 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }



    ?>

<hr></div>

<?php

// Seleccionar datos de la tabla


$apu0201 = "SELECT * FROM `0201`";

$result0201 = $conn -> query($apu0201);
?>

<table border="1" class="table_0201">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0201 = $result0201->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0201 ["ID"] . "</td>";
      echo "<td>" . $row_0201 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0201 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0201 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0201 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

   
?>


<?php

// Seleccionar datos de la tabla


$apu0202 = "SELECT * FROM `0202`";

$result0202 = $conn -> query($apu0202);
?>

<table border="1" class="table_0202">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0202 = $result0202->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0202 ["ID"] . "</td>";
      echo "<td>" . $row_0202 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0202 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0202 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0202 ["Valor unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0203 = "SELECT * FROM `0203`";

$result0203 = $conn -> query($apu0203);
?>

<table border="1" class="table_0203">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0203 = $result0203->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0203 ["ID"] . "</td>";
      echo "<td>" . $row_0203 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0203 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0203 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0203 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>
<?php

// Seleccionar datos de la tabla


$apu0204 = "SELECT * FROM `0204`";

$result0204 = $conn -> query($apu0204);
?>

<table border="1" class="table_0204">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0204 = $result0204->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0204 ["ID"] . "</td>";
      echo "<td>" . $row_0204 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0204 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0204 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0204 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0204_1 = "SELECT * FROM `0204_1`";

$result0204_1 = $conn -> query($apu0204_1);
?>

<table border="1" class="table_0204_1">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0204_1 = $result0204_1->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0204_1 ["ID"] . "</td>";
      echo "<td>" . $row_0204_1 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0204_1 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0204_1 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0204_1 ["Valor unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0205 = "SELECT * FROM `0205`";

$result0205 = $conn -> query($apu0205);
?>

<table border="1" class="table_0205">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0205 = $result0205->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0205 ["ID"] . "</td>";
      echo "<td>" . $row_0205 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0205 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0205 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0205 ["Valor unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0206 = "SELECT * FROM `0206`";

$result0206 = $conn -> query($apu0206);
?>

<table border="1" class="table_0206">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0206 = $result0206->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0206 ["ID"] . "</td>";
      echo "<td>" . $row_0206 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0206 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0206 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0206 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0207 = "SELECT * FROM `0207`";

$result0207 = $conn -> query($apu0207);
?>

<table border="1" class="table_0207">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0207 = $result0207->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0207 ["ID"] . "</td>";
      echo "<td>" . $row_0207 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0207 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0207 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0207 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0208 = "SELECT * FROM `0208`";

$result0208 = $conn -> query($apu0208);
?>

<table border="1" class="table_0208">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0208 = $result0208->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0208 ["ID"] . "</td>";
      echo "<td>" . $row_0208 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0208 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0208 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0208 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0209 = "SELECT * FROM `0209`";

$result0209 = $conn -> query($apu0209);
?>

<table border="1" class="table_0209">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0209 = $result0209->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0209 ["ID"] . "</td>";
      echo "<td>" . $row_0209 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0209 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0209 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0209 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0301 = "SELECT * FROM `0301`";

$result0301 = $conn -> query($apu0301);
?>

<table border="1" class="table_0301">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0301 = $result0301->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0301 ["ID"] . "</td>";
      echo "<td>" . $row_0301 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0301 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0301 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0301 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0302 = "SELECT * FROM `0302`";

$result0302 = $conn -> query($apu0302);
?>

<table border="1" class="table_0302">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0302 = $result0302->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0302 ["ID"] . "</td>";
      echo "<td>" . $row_0302 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0302 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0302 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0302 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0303 = "SELECT * FROM `0303`";

$result0303= $conn -> query($apu0303);
?>

<table border="1" class="table_0303">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0303 = $result0303->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0303 ["ID"] . "</td>";
      echo "<td>" . $row_0303 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0303 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0303 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0303 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0304 = "SELECT * FROM `0304`";

$result0304 = $conn -> query($apu0304);
?>

<table border="1" class="table_0304">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0304 = $result0304->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0304 ["ID"] . "</td>";
      echo "<td>" . $row_0304 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0304 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0304 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0304 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0305 = "SELECT * FROM `0305`";

$result0305 = $conn -> query($apu0305);
?>

<table border="1" class="table_0305">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0305 = $result0305->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0305 ["ID"] . "</td>";
      echo "<td>" . $row_0305 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0305 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0305 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0305 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0306 = "SELECT * FROM `0306`";

$result0306 = $conn -> query($apu0306);
?>

<table border="1" class="table_0306">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0306 = $result0306->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0306 ["ID"] . "</td>";
      echo "<td>" . $row_0306 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0306 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0306 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0306 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0307 = "SELECT * FROM `0307`";

$result0307 = $conn -> query($apu0307);
?>

<table border="1" class="table_0307">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0307 = $result0307->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0307 ["ID"] . "</td>";
      echo "<td>" . $row_0307 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0307 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0307 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0307 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0308 = "SELECT * FROM `0308`";

$result0308 = $conn -> query($apu0308);
?>

<table border="1" class="table_0308">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor unitario</th>
</tr> <br> <br>

<?php

    while ($row_0308 = $result0308->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0308 ["ID"] . "</td>";
      echo "<td>" . $row_0308 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0308 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0308 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0308 ["valor unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0309 = "SELECT * FROM `0309`";

$result0309 = $conn -> query($apu0309);
?>

<table border="1" class="table_0309">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0309 = $result0309->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0309 ["ID"] . "</td>";
      echo "<td>" . $row_0309 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0309 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0309 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0309 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0310 = "SELECT * FROM `0310`";

$result0310 = $conn -> query($apu0310);
?>

<table border="1" class="table_0310">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0310 = $result0310->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0310 ["ID"] . "</td>";
      echo "<td>" . $row_0310 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0310 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0310 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0310 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0311 = "SELECT * FROM `0311`";

$result0311 = $conn -> query($apu0311);
?>

<table border="1" class="table_0311">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0311 = $result0311->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0311 ["ID"] . "</td>";
      echo "<td>" . $row_0311 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0311 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0311 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0311 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0401 = "SELECT * FROM `0401`";

$result0401 = $conn -> query($apu0401);
?>

<table border="1" class="table_0401">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0401 = $result0401->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0401 ["ID"] . "</td>";
      echo "<td>" . $row_0401 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0401 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0401 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0401 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0401_1 = "SELECT * FROM `0401_1`";

$result0401_1 = $conn -> query($apu0401_1);
?>

<table border="1" class="table_0401_1">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0401_1 = $result0401_1->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0401_1 ["ID"] . "</td>";
      echo "<td>" . $row_0401_1 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0401_1 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0401_1 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0401_1 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0501 = "SELECT * FROM `0501`";

$result0501 = $conn -> query($apu0501);
?>

<table border="1" class="table_0501">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0501 = $result0501->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0501 ["ID"] . "</td>";
      echo "<td>" . $row_0501 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0501 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0501 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0501 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0502 = "SELECT * FROM `0502`";

$result0502 = $conn -> query($apu0502);
?>

<table border="1" class="table_0502">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0502 = $result0502->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0502 ["ID"] . "</td>";
      echo "<td>" . $row_0502 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0502 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0502 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0502 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0503 = "SELECT * FROM `0503`";

$result0503 = $conn -> query($apu0503);
?>

<table border="1" class="table_0503">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0503 = $result0503->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0503 ["ID"] . "</td>";
      echo "<td>" . $row_0503 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0503 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0503 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0503 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0504 = "SELECT * FROM `0504`";

$result0504 = $conn -> query($apu0504);
?>

<table border="1" class="table_0504">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0504 = $result0504->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0504 ["ID"] . "</td>";
      echo "<td>" . $row_0504 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0504 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0504 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0504 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0505 = "SELECT * FROM `0505`";

$result0505 = $conn -> query($apu0505);
?>

<table border="1" class="table_0505">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0505 = $result0505->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0505 ["ID"] . "</td>";
      echo "<td>" . $row_0505 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0505 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0505 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0505 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0506 = "SELECT * FROM `0506`";

$result0506 = $conn -> query($apu0506);
?>

<table border="1" class="table_0506">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0506 = $result0506->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0506 ["ID"] . "</td>";
      echo "<td>" . $row_0506 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0506 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0506 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0506 ["valor unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0601 = "SELECT * FROM `0601`";

$result0601 = $conn -> query($apu0601);
?>

<table border="1" class="table_0601">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0601 = $result0601->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0601 ["ID"] . "</td>";
      echo "<td>" . $row_0601 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0601 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0601 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0601 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0602 = "SELECT * FROM `0602`";

$result0602 = $conn -> query($apu0602);
?>

<table border="1" class="table_0602">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0602 = $result0602->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0602 ["ID"] . "</td>";
      echo "<td>" . $row_0602 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0602 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0602 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0602 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0603 = "SELECT * FROM `0603`";

$result0603 = $conn -> query($apu0603);
?>

<table border="1" class="table_0603">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0603 = $result0603->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0603 ["ID"] . "</td>";
      echo "<td>" . $row_0603 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0603 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0603 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0603 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0604 = "SELECT * FROM `0604`";

$result0604 = $conn -> query($apu0604);
?>

<table border="1" class="table_0604">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0604 = $result0604->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0604 ["ID"] . "</td>";
      echo "<td>" . $row_0604 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0604 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0604 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0604 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0701 = "SELECT * FROM `0701`";

$result0701 = $conn -> query($apu0701);
?>

<table border="1" class="table_0701">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0701 = $result0701->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0701 ["ID"] . "</td>";
      echo "<td>" . $row_0701 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0701 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0701 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0701 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0701_1 = "SELECT * FROM `0701_1`";

$result0701_1 = $conn -> query($apu0701_1);
?>

<table border="1" class="table_0701_1">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0701_1 = $result0701_1->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0701_1 ["ID"] . "</td>";
      echo "<td>" . $row_0701_1 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0701_1 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0701_1 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0701_1 ["valor unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0801 = "SELECT * FROM `0801`";

$result0801 = $conn -> query($apu0801);
?>

<table border="1" class="table_0801">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0801 = $result0801->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0801 ["ID"] . "</td>";
      echo "<td>" . $row_0801 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0801 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0801 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0801 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0802 = "SELECT * FROM `0802`";

$result0802 = $conn -> query($apu0802);
?>

<table border="1" class="table_0802">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0802 = $result0802->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0802 ["ID"] . "</td>";
      echo "<td>" . $row_0802 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0802 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0802 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0802 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0803 = "SELECT * FROM `0803`";

$result0803 = $conn -> query($apu0803);
?>

<table border="1" class="table_0803">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0803 = $result0803->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0803 ["ID"] . "</td>";
      echo "<td>" . $row_0803 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0803 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0803 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0803 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0804 = "SELECT * FROM `0804`";

$result0804 = $conn -> query($apu0804);
?>

<table border="1" class="table_0804">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0804 = $result0804->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0804 ["ID"] . "</td>";
      echo "<td>" . $row_0804 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0804 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0804 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0804 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0901 = "SELECT * FROM `0901`";

$result0901 = $conn -> query($apu0901);
?>

<table border="1" class="table_0901">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0901 = $result0901->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0901 ["ID"] . "</td>";
      echo "<td>" . $row_0901 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0901 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0901 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0901 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0902 = "SELECT * FROM `0902`";

$result0902 = $conn -> query($apu0902);
?>

<table border="1" class="table_0902">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0902 = $result0902->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0902 ["ID"] . "</td>";
      echo "<td>" . $row_0902 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0902 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0902 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0902 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0903 = "SELECT * FROM `0903`";

$result0903 = $conn -> query($apu0903);
?>

<table border="1" class="table_0903">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0903 = $result0903->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0903 ["ID"] . "</td>";
      echo "<td>" . $row_0903 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0903 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0903 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0903 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0202 = "SELECT * FROM `0202`";

$result0202 = $conn -> query($apu0202);
?>

<table border="1" class="table_0202">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0202 = $result0202->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0202 ["ID"] . "</td>";
      echo "<td>" . $row_0202 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0202 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0202 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0202 ["Valor unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0904 = "SELECT * FROM `0904`";
$result0904 = $conn -> query($apu0904);
?>

<table border="1" class="table_0904">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0904 = $result0904->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0904 ["ID"] . "</td>";
      echo "<td>" . $row_0904 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0904 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0904 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0904 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0905 = "SELECT * FROM `0905`";

$result0905 = $conn -> query($apu0905);
?>

<table border="1" class="table_0905">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0905 = $result0905->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0905 ["ID"] . "</td>";
      echo "<td>" . $row_0905 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0905 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0905 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0905 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0906 = "SELECT * FROM `0906`";

$result0906 = $conn -> query($apu0906);
?>

<table border="1" class="table_0906">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0906 = $result0906->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0906 ["ID"] . "</td>";
      echo "<td>" . $row_0906 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0906 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0906 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0906 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0907 = "SELECT * FROM `0907`";

$result0907 = $conn -> query($apu0907);
?>

<table border="1" class="table_0907">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0907 = $result0907->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0907 ["ID"] . "</td>";
      echo "<td>" . $row_0907 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0907 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0907 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0907 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0908 = "SELECT * FROM `0908`";

$result0908 = $conn -> query($apu0908);
?>

<table border="1" class="table_0908">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0908 = $result0908->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0908 ["ID"] . "</td>";
      echo "<td>" . $row_0908 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0908 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0908 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0908 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0909 = "SELECT * FROM `0909`";

$result0909 = $conn -> query($apu0909);
?>

<table border="1" class="table_0909">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0909 = $result0909->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0909 ["ID"] . "</td>";
      echo "<td>" . $row_0909 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0909 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0909 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0909 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0910 = "SELECT * FROM `0910`";

$result0910 = $conn -> query($apu0910);
?>

<table border="1" class="table_0910">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0910 = $result0910->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0910 ["ID"] . "</td>";
      echo "<td>" . $row_0910 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0910 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0910 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0910 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0101 = "SELECT * FROM `1001`";

$result1001 = $conn -> query($apu0101);
?>

<table border="1" class="table_1001">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0101 = $result1001->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0101 ["ID"] . "</td>";
      echo "<td>" . $row_0101 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0101 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0101 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0101 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu0101_1 = "SELECT * FROM `1001_1`";

$result1001_1 = $conn -> query($apu0101_1);
?>

<table border="1" class="table_1001_1">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_0101_1 = $result1001_1->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_0101_1 ["ID"] . "</td>";
      echo "<td>" . $row_0101_1 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_0101_1 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_0101_1 ["Cantidad"] . "</td>";
      echo "<td>" . $row_0101_1 ["valor unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu1002 = "SELECT * FROM `1002`";

$result1002 = $conn -> query($apu1002);
?>

<table border="1" class="table_1002">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_1002 = $result1002->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_1002 ["ID"] . "</td>";
      echo "<td>" . $row_1002 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_1002 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_1002 ["Cantidad"] . "</td>";
      echo "<td>" . $row_1002 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu1101 = "SELECT * FROM `1101`";

$result1101 = $conn -> query($apu1101);
?>

<table border="1" class="table_1101">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_1101 = $result1101->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_1101 ["ID"] . "</td>";
      echo "<td>" . $row_1101 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_1101 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_1101 ["Cantidad"] . "</td>";
      echo "<td>" . $row_1101 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu1102 = "SELECT * FROM `1102`";

$result1102 = $conn -> query($apu1102);
?>

<table border="1" class="table_1102">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_1102 = $result1102->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_1102 ["ID"] . "</td>";
      echo "<td>" . $row_1102 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_1102 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_1102 ["Cantidad"] . "</td>";
      echo "<td>" . $row_1102 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu1103 = "SELECT * FROM `1103`";

$result1103 = $conn -> query($apu1103);
?>

<table border="1" class="table_1103">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_1103 = $result1103->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_1103 ["ID"] . "</td>";
      echo "<td>" . $row_1103 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_1103 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_1103 ["Cantidad"] . "</td>";
      echo "<td>" . $row_1103 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu1104 = "SELECT * FROM `1104`";

$result1104 = $conn -> query($apu1104);
?>

<table border="1" class="table_1104">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_1104 = $result1104->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_1104 ["ID"] . "</td>";
      echo "<td>" . $row_1104 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_1104 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_1104 ["Cantidad"] . "</td>";
      echo "<td>" . $row_1104 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu1105 = "SELECT * FROM `1105`";

$result1105 = $conn -> query($apu1105);
?>

<table border="1" class="table_1105">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_1105 = $result1105->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_1105 ["ID"] . "</td>";
      echo "<td>" . $row_1105 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_1105 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_1105 ["Cantidad"] . "</td>";
      echo "<td>" . $row_1105 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

    
?>

<?php

// Seleccionar datos de la tabla


$apu1106 = "SELECT * FROM `1106`";

$result1106 = $conn -> query($apu1106);
?>

<table border="1" class="table_1106">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_1106 = $result1106->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_1106 ["ID"] . "</td>";
      echo "<td>" . $row_1106 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_1106 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_1106 ["Cantidad"] . "</td>";
      echo "<td>" . $row_1106 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

?>

<?php

$apu1201 = "SELECT * FROM `1201`";

$result1201 = $conn -> query($apu1201);
?>

<table border="1" class="table_1201">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_1201 = $result1201->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_1201 ["ID"] . "</td>";
      echo "<td>" . $row_1201 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_1201 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_1201 ["Cantidad"] . "</td>";
      echo "<td>" . $row_1201 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }

?>

<?php

$apu1202 = "SELECT * FROM `1202`";

$result1202 = $conn -> query($apu1202);
?>

<table border="1" class="table_1202">
<tr>
    <th>ID</th>
    <th>Nombre del item</th>
    <th>Unidad de medida</th>
    <th>Cantidad</th>
    <th>Valor Unitario</th>
</tr> <br> <br>

<?php

    while ($row_1202 = $result1202->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_1202 ["ID"] . "</td>";
      echo "<td>" . $row_1202 ["Nombre del item"] . "</td>";
      echo "<td>" . $row_1202 ["Unidad de medida"] . "</td>";
      echo "<td>" . $row_1202 ["Cantidad"] . "</td>";
      echo "<td>" . $row_1202 ["Valor Unitario"] . "</td>";
      echo "</tr>";
    }


    

    $conn->close();
?>


