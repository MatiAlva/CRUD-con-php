<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM vehiculo WHERE cod_vehiculo='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
      
       
        
    </head>
    <body>
                <div class="container mt-5">
                    
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="cod_vehiculo" value="<?php echo $row['cod_vehiculo']  ?>">
                                <input type="text" class="form-control mb-3" name="marca" placeholder="Marca " value="<?php echo $row['marca']  ?>">
                                <input type="text" class="form-control mb-3" name="modelo" placeholder="Modelo" value="<?php echo $row['modelo']  ?>">
                                <input type="color" class="form-control mb-3" name="color" placeholder="Patente" value="<?php echo $row['color']  ?>">
                                <input type="text" class="form-control mb-3" name="patente" placeholder="Patente" value="<?php echo $row['patente']  ?>">
                                <input type="date" class="form-control mb-3" name="año" placeholder="Año" value="<?php echo $row['año']  ?>">
                                <input type="int" class="form-control mb-3" name="km" placeholder="Km" value="<?php echo $row['km']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
