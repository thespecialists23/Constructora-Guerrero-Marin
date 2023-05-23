<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/proyecto actualizado/style(a).css">
    <title>Cotización</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <!-- //////////////////////////////// -->
<div class="menubtn">
<details class="details1">
  <summary class="summary1"></summary>
  <nav class="menu">
    <a href="http://127.0.0.1:3000/web.html">Home</a>
    <a href="http://localhost:3000/transition%20page/transition.php">Nuevo Proyecto</a>
  </nav>
</details></div>
<!-- //////////////////// -->
<div class="menuayuda">
<details class="details2">
  <summary class="summary2">AYUDA</summary>
  <nav class="menu2">
    <p class="parrafoayuda">En esta sección podras consultar el presupuesto exacto que requiere tu obra, para ello deberas ingresar la cantidad y dar click en el botón "agregar elemento", para cada actividad que considere necesaria, y al final podrá calcular su presupuesto total dando click al botón "Total"</p>
  </nav>
</details></div>
    <div class="header">
        <center>
    <h1>Cotiza tu Obra</h1>
    </div>
    </center>
    <!-- //////////////PARA ACT 1/////////////////// -->
    
    <main class="todo">
    <hr>
        <section class="cont-todo">
<h2>0100 - ACTIVIDADES PRELIMINARES</h2>
 <br>
    <form method="post">
        <label >Nombre de la Actividad :</label>
        <input type="text"  name="nombre1" id="nombre1" value="ACTIVIDADES PRELIMINARES" readonly class="borderless" required style="width: 400px;">
        <br>

        <label for="cantidad1">Cantidad:</label>
        <input type="number" step="any" name="cantidad1" id="cantidad1" value="" required>
        <br>

        <label for="unidad1">Unidad de Medida:</label>
        <input type="text"  name="unidad1" id="unidad1" value="M2"  readonly class="borderless" required>
        <br>

        <label for="precio1">Precio por Unidad:</label>
        <input type="number" step="0.01" name="precio1" id="precio1" value="214943" readonly  class="borderless" required>
        <br>

        <input type="submit" name="submit1" id="submit1"  value="Agregar elemento">
    </form>

    <?php
 
    include("form.php");
 

    // Conexión a la base de datos
    $conn = new mysqli('localhost', 'root', '', 'items');

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
/* ////////////////////////////////////////////////////////////////////// */

    // Obtener elementos de la base de datos tabla 1////////////////////////////
    $sql = "SELECT * FROM a1";
    $result1 = $conn->query($sql);

    if ($result1->num_rows > 0) {
        echo "<br>";
        echo "<table>";
        echo "<tr><th>Nombre del Item</th><th>Cantidad</th><th>Unidad de Medida</th><th>Precio Unitario</th></tr>";
        
        while ($row = $result1->fetch_assoc()) {
            echo "<tr><td>" . $row['nombre'] . "</td><td>" . $row['cantidad'] . "</td><td>" . $row['unidad'] . "</td><td>" . $row['V_Unitario'] . "</td></tr>";
        }
        
        echo "</table>";
    } else {
        echo "<p>Por favor ingrese una cantidad válida.</p>";
    }

   // Calcular presupuesto total
$sql = "SELECT SUM(cantidad * V_Unitario) AS total FROM a1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total = $row['total'];

echo "<h2>Valor Subtotal: " . $total . "</h2>";

    
    ?>
     <hr>
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- *///////////////////////////////////PARA A2/////////////////////// -->
<h2>0200 - CIMENTACIONES</h2>
 <br>
    <form method="post">
        <label >Nombre de la Actividad :</label>
        <input type="text"  name="nombre2" id="nombre2" value="CIMENTACIONES" readonly class="borderless" required style="width: 400px;">
        <br>

        <label for="cantidad2">Cantidad:</label>
        <input type="number" step="any" name="cantidad2" id="cantidad2" value="" required>
        <br>

        <label for="unidad2">Unidad de Medida:</label>
        <input type="text"  name="unidad2" id="unidad2" value="M3"  readonly class="borderless" required>
        <br>

        <label for="precio2">Precio por Unidad:</label>
        <input type="number" step="0.01" name="precio2" id="precio2" value="214943" readonly  class="borderless" required>
        <br>

        <input type="submit" name="submit2" id="submit2"  value="Agregar elemento">

        </form>
        <?php
 
 include("form.php");


 // Conexión a la base de datos
 $conn = new mysqli('localhost', 'root', '', 'items');

 // Verificar la conexión
 if ($conn->connect_error) {
     die("Error de conexión: " . $conn->connect_error);
 }

        // Obtener elementos de la base de datos tabla 2////////////////////////////
    // Obtener elementos de la base de datos tabla 2
$sql2 = "SELECT * FROM a2";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    echo "<br>";
    echo "<table>";
    echo "<tr><th>Nombre del Item</th><th>Cantidad</th><th>Unidad de Medida</th><th>Precio Unitario</th></tr>";
    
    while ($row2 = $result2->fetch_assoc()) {
        echo "<tr><td>" . $row2['nombre'] . "</td><td>" . $row2['cantidad'] . "</td><td>" . $row2['unidad'] . "</td><td>" . $row2['V_Unitario'] . "</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "<p>Por favor ingrese una cantidad válida.</p>";
}

// Calcular presupuesto total de la tabla a2
$sql2_total = "SELECT SUM(cantidad * V_Unitario) AS total FROM a2";
$result2_total = $conn->query($sql2_total);
$row2_total = $result2_total->fetch_assoc();
$total2 = $row2_total['total'];

echo "<h2>Valor Subtotal: " . $total2 . "</h2>";
?>
     <hr>

<!-- /////////////////////////////////////////////// -->

<!-- /////////////////////////////PARA A3////////////////////////// -->

<h2>0300 - DESAGÜES</h2>
 <br>
    <form method="post">
        <label >Nombre de la Actividad :</label>
        <input type="text"  name="nombre3" id="nombre3" value="DESAGÜES" readonly class="borderless" required style="width: 400px;">
        <br>

        
        <label for="cantidad3">Cantidad:</label>
        <input type="number" step="any" name="cantidad3" id="cantidad3" value="" required>
        <br>

        <label for="unidad3">Unidad de Medida:</label>
        <input type="text"  name="unidad3" id="unidad3" value="ML"  readonly class="borderless" required>
        <br>

        <label for="precio3">Precio por Unidad:</label>
        <input type="number" step="0.01" name="precio3" id="precio3" value="2027900" readonly  class="borderless" required>
        <br>

        <input type="submit" name="submit3" id="submit3"  value="Agregar elemento">

        </form>
        <?php
 
 include("form.php");


 // Conexión a la base de datos
 $conn = new mysqli('localhost', 'root', '', 'items');

 // Verificar la conexión
 if ($conn->connect_error) {
     die("Error de conexión: " . $conn->connect_error);
 }

        // Obtener elementos de la base de datos tabla 3////////////////////////////
    // Obtener elementos de la base de datos tabla 3
$sql3 = "SELECT * FROM a3";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
    echo "<br>";
    echo "<table>";
    echo "<tr><th>Nombre del Item</th><th>Cantidad</th><th>Unidad de Medida</th><th>Precio Unitario</th></tr>";
    
    while ($row3 = $result3->fetch_assoc()) {
        echo "<tr><td>" . $row3['nombre'] . "</td><td>" . $row3['cantidad'] . "</td><td>" . $row3['unidad'] . "</td><td>" . $row3['V_Unitario'] . "</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "<p>Por favor ingrese una cantidad válida.</p>";
}

// Calcular presupuesto total de la tabla a3
$sql3_total = "SELECT SUM(cantidad * V_Unitario) AS total FROM a3";
$result3_total = $conn->query($sql3_total);
$row3_total = $result3_total->fetch_assoc();
$total3 = $row3_total['total'];

echo "<h2>Valor Subtotal: " . $total3 . "</h2>";
?>
     <hr>


<!-- ////////////////////////////////////////////// -->
<!-- *///////////////////////////////////PARA A4/////////////////////// -->
<h2>0400 - PISOS - BASES</h2>
 <br>
    <form method="post">
        <label >Nombre de la Actividad :</label>
        <input type="text"  name="nombre4" id="nombre4" value="PISOS - BASES" readonly class="borderless" required style="width: 400px;">
        <br>

        <label for="cantidad4">Cantidad:</label>
        <input type="number" step="any" name="cantidad4" id="cantidad4" value="" required>
        <br>

        <label for="unidad4">Unidad de Medida:</label>
        <input type="text"  name="unidad4" id="unidad4" value="M2"  readonly class="borderless" required>
        <br>

        <label for="precio4">Precio por Unidad:</label>
        <input type="number" step="0.01" name="precio4" id="precio4" value="1440756" readonly  class="borderless" required>
        <br>

        <input type="submit" name="submit4" id="submit4"  value="Agregar elemento">

        </form>
        <?php
 
 include("form.php");


 // Conexión a la base de datos
 $conn = new mysqli('localhost', 'root', '', 'items');

 // Verificar la conexión
 if ($conn->connect_error) {
     die("Error de conexión: " . $conn->connect_error);
 }

        // Obtener elementos de la base de datos tabla 4////////////////////////////
    // Obtener elementos de la base de datos tabla 4
$sql4 = "SELECT * FROM a4";
$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
    echo "<br>";
    echo "<table>";
    echo "<tr><th>Nombre del Item</th><th>Cantidad</th><th>Unidad de Medida</th><th>Precio Unitario</th></tr>";
    
    while ($row4 = $result4->fetch_assoc()) {
        echo "<tr><td>" . $row4['nombre'] . "</td><td>" . $row4['cantidad'] . "</td><td>" . $row4['unidad'] . "</td><td>" . $row4['V_Unitario'] . "</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "<p>Por favor ingrese una cantidad válida.</p>";
}

// Calcular presupuesto total de la tabla a4
$sql4_total = "SELECT SUM(cantidad * V_Unitario) AS total FROM a4";
$result4_total = $conn->query($sql4_total);
$row4_total = $result4_total->fetch_assoc();
$total4 = $row4_total['total'];

echo "<h2>Valor Subtotal: " . $total4 . "</h2>";
?>
     <hr>

<!-- /////////////////////////////////////////////// -->

<!-- ////////////////PARA A5/////////////////// -->

<h2>0500 - ESTRUCTURAS DE CONCRETO</h2>
 <br>
    <form method="post">
        <label >Nombre de la Actividad :</label>
        <input type="text"  name="nombre5" id="nombre5" value=" ESTRUCTURAS DE CONCRETO " readonly class="borderless" required style="width: 400px;">
        <br>

        <label for="cantidad5">Cantidad:</label>
        <input type="number" step="any" name="cantidad5" id="cantidad5" value="" required>
        <br>

        <label for="unidad5">Unidad de Medida:</label>
        <input type="text"  name="unidad5" id="unidad5" value="M3"  readonly class="borderless" required>
        <br>

        <label for="precio5">Precio por Unidad:</label>
        <input type="number" step="0.01" name="precio5" id="precio5" value="7075149" readonly  class="borderless" required>
        <br>

        <input type="submit" name="submit5" id="submit5"  value="Agregar elemento">

        </form>
        <?php
 
 include("form.php");


 // Conexión a la base de datos
 $conn = new mysqli('localhost', 'root', '', 'items');

 // Verificar la conexión
 if ($conn->connect_error) {
     die("Error de conexión: " . $conn->connect_error);
 }

        // Obtener elementos de la base de datos tabla 5////////////////////////////
    // Obtener elementos de la base de datos tabla 5
$sql5 = "SELECT * FROM a5";
$result5 = $conn->query($sql5);

if ($result5->num_rows > 0) {
    echo "<br>";
    echo "<table>";
    echo "<tr><th>Nombre del Item</th><th>Cantidad</th><th>Unidad de Medida</th><th>Precio Unitario</th></tr>";
    
    while ($row5 = $result5->fetch_assoc()) {
        echo "<tr><td>" . $row5['nombre'] . "</td><td>" . $row5['cantidad'] . "</td><td>" . $row5['unidad'] . "</td><td>" . $row5['V_Unitario'] . "</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "<p>Por favor ingrese una cantidad válida.</p>";
}

// Calcular presupuesto total de la tabla a5
$sql5_total = "SELECT SUM(cantidad * V_Unitario) AS total FROM a5";
$result5_total = $conn->query($sql5_total);
$row5_total = $result5_total->fetch_assoc();
$total5 = $row5_total['total'];

echo "<h2>Valor Subtotal: " . $total5 . "</h2>";
?>
     <hr>

<!-- ////////////////////////////////////////////// -->

<!-- ///////////////////////PARA A6////////////////////////////// -->


<h2>0600 - CUBIERTAS</h2>
 <br>
    <form method="post">
        <label >Nombre de la Actividad :</label>
        <input type="text"  name="nombre6" id="nombre6" value=" CUBIERTAS" readonly class="borderless" required style="width: 400px;">
        <br>

        <label for="cantidad6">Cantidad:</label>
        <input type="number" step="any" name="cantidad6" id="cantidad6" value="" required>
        <br>

        <label for="unidad6">Unidad de Medida:</label>
        <input type="text"  name="unidad6" id="unidad6" value="ML"  readonly class="borderless" required>
        <br>

        <label for="precio6">Precio por Unidad:</label>
        <input type="number" step="0.01" name="precio6" id="precio6" value="2819593" readonly  class="borderless" required>
        <br>

        <input type="submit" name="submit6" id="submit6"  value="Agregar elemento">

        </form>
        <?php
 
 include("form.php");


 // Conexión a la base de datos
 $conn = new mysqli('localhost', 'root', '', 'items');

 // Verificar la conexión
 if ($conn->connect_error) {
     die("Error de conexión: " . $conn->connect_error);
 }

        // Obtener elementos de la base de datos tabla 6////////////////////////////
    // Obtener elementos de la base de datos tabla 6
$sql6 = "SELECT * FROM a6";
$result6 = $conn->query($sql6);

if ($result6->num_rows > 0) {
    echo "<br>";
    echo "<table>";
    echo "<tr><th>Nombre del Item</th><th>Cantidad</th><th>Unidad de Medida</th><th>Precio Unitario</th></tr>";
    
    while ($row6 = $result6->fetch_assoc()) {
        echo "<tr><td>" . $row6['nombre'] . "</td><td>" . $row6['cantidad'] . "</td><td>" . $row6['unidad'] . "</td><td>" . $row6['V_Unitario'] . "</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "<p>Por favor ingrese una cantidad válida.</p>";
}

// Calcular presupuesto total de la tabla a6
$sql6_total = "SELECT SUM(cantidad * V_Unitario) AS total FROM a6";
$result6_total = $conn->query($sql6_total);
$row6_total = $result6_total->fetch_assoc();
$total6 = $row6_total['total'];

echo "<h2>Valor Subtotal: " . $total6 . "</h2>";
?>
     <hr>

<!-- //////////////////////////////////////////////////////////// -->

<!-- ////////////////////////////////PARA A7//////////////////// -->



<h2>0700 - MAMPOSTERÍA</h2>
 <br>
    <form method="post">
        <label >Nombre de la Actividad :</label>
        <input type="text"  name="nombre7" id="nombre7" value=" MAMPOSTERÍA" readonly class="borderless" required style="width: 400px;">
        <br>

        <label for="cantidad7">Cantidad:</label>
        <input type="number" step="any" name="cantidad7" id="cantidad7" value="" required>
        <br>

        <label for="unidad7">Unidad de Medida:</label>
        <input type="text"  name="unidad7" id="unidad7" value="M2"  readonly class="borderless" required>
        <br>

        <label for="precio7">Precio por Unidad:</label>
        <input type="number" step="0.01" name="precio7" id="precio7" value="7084609" readonly  class="borderless" required>
        <br>

        <input type="submit" name="submit7" id="submit7"  value="Agregar elemento">

        </form>
        <?php
 
 include("form.php");


 // Conexión a la base de datos
 $conn = new mysqli('localhost', 'root', '', 'items');

 // Verificar la conexión
 if ($conn->connect_error) {
     die("Error de conexión: " . $conn->connect_error);
 }

        // Obtener elementos de la base de datos tabla 7////////////////////////////
    // Obtener elementos de la base de datos tabla 7
$sql7 = "SELECT * FROM a7";
$result7 = $conn->query($sql7);

if ($result7->num_rows > 0) {
    echo "<br>";
    echo "<table>";
    echo "<tr><th>Nombre del Item</th><th>Cantidad</th><th>Unidad de Medida</th><th>Precio Unitario</th></tr>";
    
    while ($row7 = $result7->fetch_assoc()) {
        echo "<tr><td>" . $row7['nombre'] . "</td><td>" . $row7['cantidad'] . "</td><td>" . $row7['unidad'] . "</td><td>" . $row7['V_Unitario'] . "</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "<p>Por favor ingrese una cantidad válida.</p>";
}

// Calcular presupuesto total de la tabla a7
$sql7_total = "SELECT SUM(cantidad * V_Unitario) AS total FROM a7";
$result7_total = $conn->query($sql7_total);
$row7_total = $result7_total->fetch_assoc();
$total7 = $row7_total['total'];

echo "<h2>Valor Subtotal: " . $total7 . "</h2>";
?>
     <hr>

<!-- /////////////////////////////////////////// -->

<!-- //////////////////////////PARA A8/////////////////// -->




<h2>0800 - INSTALACIONES HIDRÁULICAS</h2>
 <br>
    <form method="post">
        <label >Nombre de la Actividad :</label>
        <input type="text"  name="nombre8" id="nombre8" value=" INSTALACIONES HIDRÁULICAS" readonly class="borderless" required style="width: 400px;">
        <br>

        <label for="cantidad8">Cantidad:</label>
        <input type="number" step="any" name="cantidad8" id="cantidad8" value="" required>
        <br>

        <label for="unidad8">Unidad de Medida:</label>
        <input type="text"  name="unidad8" id="unidad8" value="UN"  readonly class="borderless" required>
        <br>

        <label for="precio8">Precio por Unidad:</label>
        <input type="number" step="0.01" name="precio8" id="precio8" value="891980" readonly  class="borderless" required>
        <br>

        <input type="submit" name="submit8" id="submit8"  value="Agregar elemento">

        </form>
        <?php
 
 include("form.php");


 // Conexión a la base de datos
 $conn = new mysqli('localhost', 'root', '', 'items');

 // Verificar la conexión
 if ($conn->connect_error) {
     die("Error de conexión: " . $conn->connect_error);
 }

        // Obtener elementos de la base de datos tabla 8////////////////////////////
    // Obtener elementos de la base de datos tabla 8
$sql8 = "SELECT * FROM a8";
$result8 = $conn->query($sql8);

if ($result8->num_rows > 0) {
    echo "<br>";
    echo "<table>";
    echo "<tr><th>Nombre del Item</th><th>Cantidad</th><th>Unidad de Medida</th><th>Precio Unitario</th></tr>";
    
    while ($row8 = $result8->fetch_assoc()) {
        echo "<tr><td>" . $row8['nombre'] . "</td><td>" . $row8['cantidad'] . "</td><td>" . $row8['unidad'] . "</td><td>" . $row8['V_Unitario'] . "</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "<p>Por favor ingrese una cantidad válida.</p>";
}

// Calcular presupuesto total de la tabla a8
$sql8_total = "SELECT SUM(cantidad * V_Unitario) AS total FROM a8";
$result8_total = $conn->query($sql8_total);
$row8_total = $result8_total->fetch_assoc();
$total8 = $row8_total['total'];

echo "<h2>Valor Subtotal: " . $total8 . "</h2>";
?>
     <hr>
<!-- ////////////////////////////////////////////// -->

<!-- /////////////////////////PARA A9/////////////////////////// -->

<h2>0900 - INSTALACIONES ELÉCTRICAS</h2>
 <br>
    <form method="post">
        <label >Nombre de la Actividad :</label>
        <input type="text"  name="nombre9" id="nombre9" value=" INSTALACIONES ELÉCTRICAS" readonly class="borderless" required style="width: 400px;">
        <br>

        <label for="cantidad9">Cantidad:</label>
        <input type="number" step="any" name="cantidad9" id="cantidad9" value="" required>
        <br>

        <label for="unidad9">Unidad de Medida:</label>
        <input type="text"  name="unidad9" id="unidad9" value="UN"  readonly class="borderless" required>
        <br>

        <label for="precio9">Precio por Unidad:</label>
        <input type="number" step="0.01" name="precio9" id="precio9" value="3652820" readonly  class="borderless" required>
        <br>

        <input type="submit" name="submit9" id="submit9"  value="Agregar elemento">

        </form>
        <?php
 
 include("form.php");


 // Conexión a la base de datos
 $conn = new mysqli('localhost', 'root', '', 'items');

 // Verificar la conexión
 if ($conn->connect_error) {
     die("Error de conexión: " . $conn->connect_error);
 }

        // Obtener elementos de la base de datos tabla 9////////////////////////////
    // Obtener elementos de la base de datos tabla 9
$sql9 = "SELECT * FROM a9";
$result9 = $conn->query($sql9);

if ($result9->num_rows > 0) {
    echo "<br>";
    echo "<table>";
    echo "<tr><th>Nombre del Item</th><th>Cantidad</th><th>Unidad de Medida</th><th>Precio Unitario</th></tr>";
    
    while ($row9 = $result9->fetch_assoc()) {
        echo "<tr><td>" . $row9['nombre'] . "</td><td>" . $row9['cantidad'] . "</td><td>" . $row9['unidad'] . "</td><td>" . $row9['V_Unitario'] . "</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "<p>Por favor ingrese una cantidad válida.</p>";
}

// Calcular presupuesto total de la tabla a9
$sql9_total = "SELECT SUM(cantidad * V_Unitario) AS total FROM a9";
$result9_total = $conn->query($sql9_total);
$row9_total = $result9_total->fetch_assoc();
$total9 = $row9_total['total'];

echo "<h2>Valor Subtotal: " . $total9 . "</h2>";
?>
     <hr>

<!-- ////////////////////////////////////////////////// -->

<!-- ///////////////////////PARA A10////////////////////////// -->


<h2>1000 - PISOS - ACABADOS</h2>
 <br>
    <form method="post">
        <label >Nombre de la Actividad :</label>
        <input type="text"  name="nombre10" id="nombre10" value= "PISOS - ACABADOS" readonly class="borderless" required style="width: 400px;">
        <br>

        <label for="cantidad10">Cantidad:</label>
        <input type="number" step="any" name="cantidad10" id="cantidad10" value="" required>
        <br>

        <label for="unidad10">Unidad de Medida:</label>
        <input type="text"  name="unidad10" id="unidad10" value="M2"  readonly class="borderless" required>
        <br>

        <label for="precio10">Precio por Unidad:</label>
        <input type="number" step="0.01" name="precio10" id="precio10" value="4598464" readonly  class="borderless" required>
        <br>

        <input type="submit" name="submit10" id="submit10"  value="Agregar elemento">

        </form>
        <?php
 
 include("form.php");


 // Conexión a la base de datos
 $conn = new mysqli('localhost', 'root', '', 'items');

 // Verificar la conexión
 if ($conn->connect_error) {
     die("Error de conexión: " . $conn->connect_error);
 }

        // Obtener elementos de la base de datos tabla 10////////////////////////////
    // Obtener elementos de la base de datos tabla 10
$sql10 = "SELECT * FROM a10";
$result10 = $conn->query($sql10);

if ($result10->num_rows > 0) {
    echo "<br>";
    echo "<table>";
    echo "<tr><th>Nombre del Item</th><th>Cantidad</th><th>Unidad de Medida</th><th>Precio Unitario</th></tr>";
    
    while ($row10 = $result10->fetch_assoc()) {
        echo "<tr><td>" . $row10['nombre'] . "</td><td>" . $row10['cantidad'] . "</td><td>" . $row10['unidad'] . "</td><td>" . $row10['V_Unitario'] . "</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "<p>Por favor ingrese una cantidad válida.</p>";
}

// Calcular presupuesto total de la tabla a10
$sql10_total = "SELECT SUM(cantidad * V_Unitario) AS total FROM a10";
$result10_total = $conn->query($sql10_total);
$row10_total = $result10_total->fetch_assoc();
$total10 = $row10_total['total'];

echo "<h2>Valor Subtotal: " . $total10 . "</h2>";
?>
     <hr>


<!-- ////////////////////////////////////////////////////// -->

<!-- //////////////////PARA A11///////////////// -->


<h2>1100 - ENCHAPES Y ACCESORIOS</h2>
 <br>
    <form method="post">
        <label >Nombre de la Actividad :</label>
        <input type="text"  name="nombre11" id="nombre11" value= "ENCHAPES Y ACCESORIOS" readonly class="borderless" required style="width: 400px;">
        <br>

        <label for="cantidad11">Cantidad:</label>
        <input type="number" step="any" name="cantidad11" id="cantidad11" value="" required>
        <br>

        <label for="unidad11">Unidad de Medida:</label>
        <input type="text"  name="unidad11" id="unidad11" value="UN"  readonly class="borderless" required>
        <br>

        <label for="precio11">Precio por Unidad:</label>
        <input type="number" step="0.01" name="precio11" id="precio11" value="3654833" readonly  class="borderless" required>
        <br>

        <input type="submit" name="submit11" id="submit11"  value="Agregar elemento">

        </form>
        <?php
 
 include("form.php");


 // Conexión a la base de datos
 $conn = new mysqli('localhost', 'root', '', 'items');

 // Verificar la conexión
 if ($conn->connect_error) {
     die("Error de conexión: " . $conn->connect_error);
 }

        // Obtener elementos de la base de datos tabla 11////////////////////////////
    // Obtener elementos de la base de datos tabla 11
$sql11 = "SELECT * FROM a11";
$result11 = $conn->query($sql11);

if ($result11->num_rows > 0) {
    echo "<br>";
    echo "<table>";
    echo "<tr><th>Nombre del Item</th><th>Cantidad</th><th>Unidad de Medida</th><th>Precio Unitario</th></tr>";
    
    while ($row11 = $result11->fetch_assoc()) {
        echo "<tr><td>" . $row11['nombre'] . "</td><td>" . $row11['cantidad'] . "</td><td>" . $row11['unidad'] . "</td><td>" . $row11['V_Unitario'] . "</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "<p>Por favor ingrese una cantidad válida.</p>";
}

// Calcular presupuesto total de la tabla a11
$sql11_total = "SELECT SUM(cantidad * V_Unitario) AS total FROM a11";
$result11_total = $conn->query($sql11_total);
$row11_total = $result11_total->fetch_assoc();
$total11 = $row11_total['total'];

echo "<h2>Valor Subtotal: " . $total11 . "</h2>";
?>
     <hr>
<!-- /////////////////////////////////////// -->

<!-- ////////////////PARA A12///////////////////////// -->



<h2>1200 - CARPINTERÍA METÁLICA</h2>
 <br>
    <form method="post">
        <label >Nombre de la Actividad :</label>
        <input type="text"  name="nombre12" id="nombre12" value= "CARPINTERÍA METÁLICA" readonly class="borderless" required style="width: 400px;">
        <br>

        <label for="cantidad12">Cantidad:</label>
        <input type="number" step="any" name="cantidad12" id="cantidad12" value="" required>
        <br>

        <label for="unidad12">Unidad de Medida:</label>
        <input type="text"  name="unidad12" id="unidad12" value="UN"  readonly class="borderless" required>
        <br>

        <label for="precio12">Precio por Unidad:</label>
        <input type="number" step="0.01" name="precio12" id="precio12" value="1618126" readonly  class="borderless" required>
        <br>

        <input type="submit" name="submit12" id="submit12"  value="Agregar elemento">

        </form>
        <?php
 
 include("form.php");


 // Conexión a la base de datos
 $conn = new mysqli('localhost', 'root', '', 'items');

 // Verificar la conexión
 if ($conn->connect_error) {
     die("Error de conexión: " . $conn->connect_error);
 }

        // Obtener elementos de la base de datos tabla 12////////////////////////////
    // Obtener elementos de la base de datos tabla 12
$sql12 = "SELECT * FROM a12";
$result12 = $conn->query($sql12);

if ($result12->num_rows > 0) {
    echo "<br>";
    echo "<table>";
    echo "<tr><th>Nombre del Item</th><th>Cantidad</th><th>Unidad de Medida</th><th>Precio Unitario</th></tr>";
    
    while ($row12 = $result12->fetch_assoc()) {
        echo "<tr><td>" . $row12['nombre'] . "</td><td>" . $row12['cantidad'] . "</td><td>" . $row12['unidad'] . "</td><td>" . $row12['V_Unitario'] . "</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "<p>Por favor ingrese una cantidad válida.</p>";
}

// Calcular presupuesto total de la tabla a12
$sql12_total = "SELECT SUM(cantidad * V_Unitario) AS total FROM a12";
$result12_total = $conn->query($sql12_total);
$row12_total = $result12_total->fetch_assoc();
$total12 = $row12_total['total'];

echo "<h2>Valor Subtotal: " . $total12 . "</h2>";
?>
     

<!-- //////////////////////////////////////////////////// -->
<?php
$conn->close();
?>
 <!-- /////////////////////////////////////////////////// -->
<hr>
<section class="section2">

<button  onclick="sumarVariables();" class="total" id="total" name="total"> Total Obra
</button>

<label class="labelResultado" id="labelResultado"></label>
<br>
<br>
<br>
</section>


<script>
        function sumarVariables() {

            
            


            // Obtener los valores de las variables
            var num1= <?php echo $total; ?>;
            var num2 =<?php echo $total2; ?>;
            var num3 =<?php echo $total3; ?>;
            var num4 =<?php echo $total4; ?>;
            var num5 =<?php echo $total5; ?>;
            var num6 =<?php echo $total6; ?>;
            var num7 =<?php echo $total7; ?>;
            var num8 =<?php echo $total8; ?>;
            var num9 =<?php echo $total9; ?>;
            var num10 =<?php echo $total10; ?>;
            var num11=<?php echo $total11; ?>;
            var num12=<?php echo $total12; ?>;
            
            var suma = num1 + num2 + num3 + num4 + num5 + num6 + num7 + num8 + num9 + num10 + num11 + num12;

            document.getElementById("labelResultado").innerHTML = "LA COTIZACION TOTAL DE TU OBRA ES:   $" + suma;
        }
            </script>







 </section>
 </main>
</body>




</html>