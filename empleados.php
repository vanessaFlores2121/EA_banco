<!DOCTYPE html>
<html lang="en">
    <head>
        <!--NOMBRE: Vanessa Esmeralda Flores Cervantes MATRICULA: ES172004305-->
        <meta charset="UTF-8">
        <title>EMPLEADOS ALTA</title>
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

                    <h1>!!DATOS GENERALES EMPLEADOS!!</h1>
                    <P>.</P><!--Clave Sucursal -->
                    <label for="Clave"> clave :</label> 
                    <br>
                    <input type="text" placeholder="clave" name="clave_E" required>
                    <P>.</P><!-- NOMBRE EMPLEADO -->
                    <label for="Sucursal"> Nombre :</label> 
                    <br>
                    <input type="text" placeholder="Nombre_Empleado" name="nombre_E" required>
                    <P>.</P><!--APÉELLIDO PATERNO -->
                    <label for="RFC">Apellido Paterno:</label> 
                    <br>
                    <input type="text" placeholder="Apellido Paterno" name="apellidoP_E" required>
                    <br>
                    <P>.</P><!--APELLIDO MATERNO -->
                    <label for="Municipio"> Apellido Materno</label> 
                    <br>
                    <input type="text" placeholder="apellido Materno" name="apellidoM_E" required>
                    <P>.</P><!--TURNO-->
                    <label for="Pais"> Turno empresarial</label> 
                    <br>
                    <input type="text" placeholder="T1 o T2 o T3" name="turno_E" required>
                    <P>.</P><!--CARGO-->
                    <label for="telefono"> Cargo</label> 
                    <br>
                    <input type="text" placeholder="Cargo" name="cargo_E" required>
                    <br>
                    <P>.</P><!--TELEFONO-->
                    <label for="telefono"> Telefono</label> 
                    <br>
                    <input type="text" placeholder="Telefono" name="telefono_E" required>
                    <br>
                     <!--BOTON-->
                    <input type="submit" value="Registrar Sucursal" name="btnRegistrarEmpleado" >
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