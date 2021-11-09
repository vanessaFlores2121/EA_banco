<!DOCTYPE html>
<html lang="en">
    <head>
        <!--NOMBRE: Vanessa Esmeralda Flores Cervantes MATRICULA: ES172004305-->
        <meta charset="UTF-8">
        <title>CLIENTES ALTA</title>
        <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estiloprivada.css">
    <link rel="stylesheet" href="css/estilos_boton.css" media="all">
   </head>
<body>
   <!--cabecera 
    <header> 
        <nav class="navegacion">
            <ul class="menu">
                         <li><a href="index.html">Inicio</a></li>
                        <li><a href="registros.html">Registrar usuarios</a></li>
                        <li><a href="index.html">Regresar</a></li>
            </ul>
        </nav>
    </header>-->
 <!--Divicion registro FORMULARIO-->
    <div class= "registro">
        <form action="#" method="POST">
                    <P>.</P><!--Nombre -->
                    <h1>!!NUEVO CLIENTE!!</h1>
                    <label for="Nombre"> Nombre :</label> 
                    <br>
                    <input type="text" placeholder="Nombres" name="nombre" required>
                    <P>.</P><!--ApellidoP-->
                    <label for="ApellidoPaterno">Apellido Paterno :</label> 
                    <br>
                    <input type="text" placeholder="Apellido Parterno" name="apellidoP" required>
                    <br>
                    <P>.</P><!--ApellidoM-->
                    <label for="ApellidoMaterno">ApellidoMaterno:</label> 
                    <br>
                    <input type="text" placeholder="ApellidoMaterno" name="apellidoM" required>
                    <P>.</P><!--Domicilio-->
                    <label for="domicilio">Domicilio:</label> 
                    <br>
                    <input type="text" placeholder="Domicilio" name="domicilio" required>
                    <P>.</P><!--Telefono-->
                    <label for="telefono">Telefono:</label> 
                    <br>
                    <input type="text" placeholder="telefono" name="telefono" required>
                    <br>
                     <!--BOTON-->
                    <input type="submit" value="Registrar" name="btnRegistrar" >
                    <br>
                    <!--REGISTRAR-->
                    <a href="index.html"> Regresar </a>

        </form>
    </div>
                    <?php
                    include("Altas_Total.php");
                    ?>
</body>
</html>