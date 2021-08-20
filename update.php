<?php

include("conexion.php");
$con=conectar();

$cod_vehiculo=$_POST['cod_vehiculo'];
$Marca=$_POST['marca'];
$Modelo=$_POST['modelo'];
$Color=$_POST['color'];
$Patente=$_POST['patente'];
$Año=$_POST['año'];
$Km=$_POST['km'];

$sql="UPDATE vehiculo SET  marca='$Marca',modelo='$Modelo',color='$Color', patente='$Patente', año='$Año', km='$Km' WHERE cod_vehiculo='$cod_vehiculo'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>