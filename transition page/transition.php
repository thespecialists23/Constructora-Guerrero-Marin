<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Crea tu Presupuesto</title>
</head>
<body>
    
<div class="todo">
    <div class="contenedor_todo">
        <div class="container_content_inner">
       
        <div class="titulo">
            <h2>Bienvenido!</h2>
            <h1>Crea Tu Cotización </h1>
        </div>
        <!-- ///////////////////////// -->
        <div class="inputs">



				<form method="post"  >
					<input type="text" class="nombre" id="nombre" name="nombre" placeholder="Nombre de la Empresa" required>
					<input type="text" class="direccion" id="direccion" name="direccion" placeholder="Ubicación" required>
					<input type="email" class="correo" id="correo" name="correo" placeholder="Correo Electrónico" required>
                    <input type="text" class="proyecto" id="proyecto" name="proyecto" placeholder="Nombre Del Proyecto" required>
                    <div class="btn">
            
            
                     <input value=" + NUEVO PROYECTO" name="submit" class="transition" type="submit" >
                     
    
        </div>



                </form>
			</div>


            
   






            <?php
            include("form.php");
            ?>
           
            <!-- //////////////////// -->
        <div class="parrafo">
            <p class="texto">Bienvenido a nuestra sección de cotizaciones de obras. 
            <p> ㅤ</p>
                Ya sea que estés buscando construir la casa de tus sueños, renovar un espacio o desarrollar un proyecto comercial, aquí, puedes hacerlo brevemente y obtener los costos asociados con tu obra arquitectónica personalizada.
                Se consideran aspectos como los materiales de construcción, la cantidad y los valores unitarios y cualquier otro factor relevante para proporcionarte una cotización precisa en pocos minutos!
                Te invitamos a completar el formulario para comenzar el proceso.
                <p> ㅤ ㅤ ㅤ
        ㅤ ㅤㅤ ㅤ</p>
                Nos pondremos en contacto contigo para discutir más detalles, si tienes una pregunta adicional o requieres más información, no dudes en comunicarte con nuestro equipo de atencion al cliente.
            </p>
        </div>
        <!-- ///////////////////////////////BOTON////////////// -->

        
    </div>
</div>
<div class="cont_imagen">
    <div class="img">
        <img src="" class="imagen">
    </div>
</div>
</div>

<div class="capa"></div>

</body>
</html>