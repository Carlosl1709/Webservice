<?php 
include'conexion.php';

$codigo =$_POST["codigo"];


$consulta=" DELETE FROM caja WHERE codigo='".$codigo."' ";
mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);

 ?>