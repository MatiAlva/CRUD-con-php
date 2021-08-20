<?php

include("conexion.php");
$con=conectar();

$cod_vehiculo=$_GET['id'];

$sql="DELETE FROM vehiculo  WHERE cod_vehiculo='$cod_vehiculo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>