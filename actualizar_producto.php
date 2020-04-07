<?php
include'conexion.php';

$codigo =$_POST["codigo"];
$producto =$_POST["producto"];
$precio=$_POST['precio'];
$fabricante =$_POST["fabricante"];

$consulta="UPDATE caja SET producto='".$producto."', precio='".$precio."', fabricante ='".$fabricante."'' WHERE codigo='".$codigo."'; ";
mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);

 ?>