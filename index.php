



<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM vehiculo";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> CRUD CON PHP </title>
        <link rel="stylesheet" type="text/css" href="Estilos/styles.css">
     
    </head>

    <body>
        <header>         
            <h1> Grupo 1 </h1>
           
          
            <a href="info.html" class="info">+info</a>
        </header>


                <form action="insertar.php" method="POST">
                    <h1> Datos del vehiculo </h1>
                    <input type="int" name="cod_vehiculo" placeholder="Codigo unico del vehiculo" required/>
                    <input type="text" name="marca" placeholder="Marca"/>
                    <input type="text" name="modelo" placeholder="Modelo"/>
                    <h3> Ingrese el color: </h3>
                    <input type="color" name="color" placeholder="Color" class="color"/>
                    <input type="text" name="patente" placeholder="Patente"/>
                    <h3> Año de su compra: </h3>
                    <input type="date" name="año" placeholder="Año"/>
                    <input type="int" name="km" placeholder="Kilometros recorridos"/>
                    <input type="submit" value="Enviar Datos" class="enviar"/>
                    
            
                </form>
                       
                <table class="table">
                    <tr>
                        <th>Codigo</th>
                        <th>Marca_auto</th>
                        <th>Modelo_auto</th>
                        <th>Color_auto</th>
                        <th>Patente_auto</th>
                        <th>Año_auto</th>
                        <th>Km_auto</th>
                    </tr>
                                             
                    <?php
                        while($row=mysqli_fetch_array($query)){
                    ?>

                    <tr>
                        <th><?php  echo $row['cod_vehiculo']?></th>
                        <th><?php  echo $row['marca']?></th>
                        <th><?php  echo $row['modelo']?></th>
                        <th><?php  echo $row['color']?></th>
                        <th><?php  echo $row['patente']?></th>    
                        <th><?php  echo $row['año']?></th>
                        <th><?php  echo $row['km']?></th>    
                        <th><a class="editar" href="actualizar.php?id=<?php echo $row['cod_vehiculo'] ?>">Editar</a></th>
                        <th><a class="eliminar" href="delete.php?id=<?php echo $row['cod_vehiculo'] ?>">Eliminar</a></th>                                        
                    </tr>

                    <?php 
                        }
                    ?>                            
                </table>    
                
                <footer>
                    <h1> Alvarez Matias | Samia Lian | Fernandez Alejandro </h1>
                </footer>
    </body>
</html>
