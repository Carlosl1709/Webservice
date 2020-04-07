<?php 
include 'conexion.php';

$codigo= $_GET['codigo'];
$consulta= "SELECT * FROM caja WHERE codigo= '$codigo'";
$resultado = $conexion -> query($consulta);

while ($fila=$resultado ->fetch_array()) {
	$producto[] =  array_map('utf8_encode',$fila);
}
echo json_encode($producto);
$resultado -> close();

 ?>