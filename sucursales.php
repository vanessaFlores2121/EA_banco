<!DOCTYPE html>
<html lang="en">
    <head>
        <!--NOMBRE: Vanessa Esmeralda Flores Cervantes MATRICULA: ES172004305-->
        <meta charset="UTF-8">
        <title>SUCURSALES ALTA</title>
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

                    <h1>!!DATOS GENERALES SUCURSALES!!</h1>
                    <P>.</P><!--Clave Sucursal -->
                    <label for="Clave"> Clave :</label> 
                    <br>
                    <input type="text" placeholder="clave folio" name="clave_S" required>
                    <P>.</P><!-- NOMBRE SUCURSAL -->
                    <label for="Sucursal"> Sucursal :</label> 
                    <br>
                    <input type="text" placeholder="Nombre_sucursal" name="sucursal_S" required>
                    <P>.</P><!--RFC -->
                    <label for="RFC">RFC:</label> 
                    <br>
                    <input type="text" placeholder="RFC VECJ880326 XXX" name="rfc_S" required>
                    <br>
                    <P>.</P><!--Municipio -->
                    <label for="Municipio"> Municipio</label> 
                    <br>
                    <input type="text" placeholder="municipio" name="municipio_S" required>
                    <P>.</P><!--PAIS-->
                    <label for="Pais"> Pais</label> 
                    <br>
                    <input type="text" placeholder="pais" name="pais_S" required>
                    <P>.</P><!--TELEFONO-->
                    <label for="telefono"> Telefono</label> 
                    <br>
                    <input type="text" placeholder="telefono" name="telefono_S" required>
                    <br>
                    <P>.</P><!--Correo Electronico-->
                    <label for="correo">Correo Electronico:</label> 
                    <br>
                    <input type="email"  placeholder="Ej.: usuario@servidor.com" name="correo_S" required>
                    <br>
                     <!--BOTON-->
                    <input type="submit" value="Registrar" name="btnRegistrarSucursal" >
                    <br><br>
                   
                    <!--REGISTRAR-->
                    <a href="index.html"> Regresar </a>

        </form>
    </div>
                    <?php
                    include("Altas_Total.php");
                    ?>
</body>
</html>