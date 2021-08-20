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


$sql="INSERT INTO vehiculo VALUES('$cod_vehiculo','$Marca','$Modelo','$Color','$Patente', '$Año', '$Km')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>