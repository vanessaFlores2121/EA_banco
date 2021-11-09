<!--
    pagina para los registrados en la pagina web
-->



<!--//Registro Clientes OK-->
<?php 

    include ("conexion.php");
    //_________________________________________________________________
    if(isset($_POST['btnRegistrar']))
    {
                $nombre = trim($_POST['nombre']);
                $apellidoP = trim($_POST['apellidoP']);
                $apellidoM = trim($_POST['apellidoM']);
                $domicilio = trim($_POST['domicilio']);
                $telefono = trim($_POST['telefono']);


                $consulta = "INSERT INTO clientes(nombre, apellidoP, apellidoM,domicilio,telefono) VALUES ('$nombre','$apellidoP','$apellidoM','$domicilio', '$telefono')";
                $resultado = mysqli_query($conex,$consulta);
                echo "resultlado es $resultado";
                if ($resultado) {
                    ?> 
                    <h3 class="ok">¡Te has inscripto correctamente!</h3>
                   <?php
                } else {
                    ?> 
                     <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                   <?php
                }
    }
    //_________________________________________________________________
    else
    {
        //BOTON DE Asesor OK
        //____________________________________________________________
                    if(isset($_POST['btnRegistrarAsesor']))
                   {
                        $folio = trim($_POST['folio_A']);
                        $nombre = trim($_POST['nombre_A']);
                        $apellidoP = trim($_POST['apellidoP_A']);
                        $apellidoM = trim($_POST['apellidoM_A']);
                        $telefono = trim($_POST['telefono_A']);
                        $correo = trim($_POST['correo_A']);


                        $consulta = "INSERT INTO asesor(folio_A,nombre_A, apellidoP_A, apellidoM_A,telefono_A,correo_A) VALUES ('$folio','$nombre','$apellidoP','$apellidoM','$telefono', '$correo')";
                        $resultado = mysqli_query($conex,$consulta);
                        echo "resultlado es $resultado";
                        if ($resultado) {
                            ?> 
                            <h3 class="ok">¡Te has inscripto correctamente!</h3>
                        <?php
                        } else {
                            ?> 
                            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                        <?php
                            
                         } 
                
                    }

     
        //____________________________________________________________
    }
         if(isset($_POST['btnRegistrarSucursal']))
         {
            //BOTON DE Asesor OK
            //____________________________________________________________
                        if(isset($_POST['btnRegistrarSucursal']))
                       {
                            $clave = trim($_POST['clave_S']);
                            $sucursal = trim($_POST['sucursal_S']);
                            $rfc = trim($_POST['rfc_S']);
                            $municipio = trim($_POST['municipio_S']);
                            $pais = trim($_POST['pais_S']);
                            $telefono_s = trim($_POST['telefono_S']);
                            $correo_s = trim($_POST['correo_S']);
    
    
                            $consulta = "INSERT INTO sucursales(clave_S,sucursal_S,rfc_S,municipio_S,pais_S,telefono_S,correo_S) VALUES ('$clave','$sucursal','$rfc','$municipio','$pais', '$telefono_s','$correo_s')";
                            $resultado = mysqli_query($conex,$consulta);
                            echo "resultlado es $resultado";
                            if ($resultado) {
                                ?> 
                                <h3 class="ok">¡Te has inscripto correctamente!</h3>
                            <?php
                            } else {
                                ?> 
                                <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                            <?php
                                
                             } 
                    
                        }
            }
            //____________________________________________________________

            if(isset($_POST['btnRegistrarEmpleado']))
            {
               //BOTON DE EMPLEADOS
               //____________________________________________________________
                           if(isset($_POST['btnRegistrarEmpleado']))
                          {
                               $clave_E = trim($_POST['clave_E']);
                               $nombre_Em = trim($_POST['nombre_E']);
                               $apellidoP_Em = trim($_POST['apellidoP_E']);
                               $apellidoM_Em = trim($_POST['apellidoM_E']);
                               $turno_E = trim($_POST['turno_E']);
                               $cargo_E = trim($_POST['cargo_E']);
                               $telefono_E = trim($_POST['telefono_E']);
                              
       
       
                               $consulta = "INSERT INTO empleados(clave_E,nombre_E,apellidoP_E,apellidoM_E,turno_E,cargo_E,telefono_E) VALUES ('$clave_E','$nombre_Em','$apellidoP_Em','$apellidoM_Em','$turno_E', '$cargo_E','$telefono_E')";
                               $resultado = mysqli_query($conex,$consulta);
                               echo "resultlado es $resultado";
                               if ($resultado) {
                                   ?> 
                                   <h3 class="ok">¡Te has inscripto correctamente!</h3>
                               <?php
                               } else {
                                   ?> 
                                   <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                               <?php
                                   
                                } 
                       
                           }
               }
               //____________________________________________________________
                  
?>
