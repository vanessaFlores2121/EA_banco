<!DOCTYPE html>
<html lang="en">
    <head>
        <!--NOMBRE: Vanessa Esmeralda Flores Cervantes MATRICULA: ES172004305-->
        <meta charset="UTF-8">
        <title>ASESOR ALTA</title>
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

                    <h1>!!DATOS GENERALES ASESOR!!</h1>

                    <P>.</P><!--Folio Asesor -->
                    <label for="Nombre"> Folio Asesor :</label> 
                    <br>
                    <input type="text" placeholder="Folio Asesor" name="folio_A" required>
                    <P>.</P><!--Nombre -->
                    <label for="Nombre"> Nombre Asesor :</label> 
                    <br>
                    <input type="text" placeholder="Nombres" name="nombre_A" required>
                    <P>.</P><!--ApellidoP-->
                    <label for="ApellidoPaterno">Apellido Paterno Asesor:</label> 
                    <br>
                    <input type="text" placeholder="Apellido Parterno" name="apellidoP_A" required>
                    <br>
                    <P>.</P><!--ApellidoM-->
                    <label for="ApellidoMaterno">ApellidoMaterno Asesor :</label> 
                    <br>
                    <input type="text" placeholder="ApellidoMaterno" name="apellidoM_A" required>
                    <P>.</P><!--Telefono-->
                    <label for="telefono">Telefono:</label> 
                    <br>
                    <input type="text" placeholder="telefono" name="telefono_A" required>
                    <br>
                    <P>.</P><!--Correo Electronico-->
                    <label for="correo">Correo Electronico:</label> 
                    <br>
                    <input type="email"  placeholder="Ej.: usuario@servidor.com" name="correo_A" required>
                    <br>
                     <!--BOTON-->
                    <input type="submit" value="Registrar" name="btnRegistrarAsesor" >
                    <br><br><br><br><br><br><br><br>
                   
                    <!--REGISTRAR-->
                    <a href="index.html"> Regresar </a>

        </form>
    </div>
                    <?php
                    include("Altas_Total.php");
                    ?>
</body>
</html>