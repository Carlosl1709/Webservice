<?php 
include'conexion.php';

$codigo =$_POST["codigo"];
$producto =$_POST["producto"];
$precio=$_POST['precio'];
$fabricante =$_POST["fabricante"];

$consulta="INSERT INTO caja VALUES('".$codigo."','".$producto."','".$precio."','".$fabricante."')";
mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);

 ?>