<?php


$cod=$_GET["cod"];
$cat=$_POST["categoria"];
$tipo=$_POST["tipo"];
$talle=$_POST["talle"];
$precio=$_POST["precio"];
$paleta=$_POST["paleta"];
$desc=$_POST["descripcion"];


$query="UPDATE productosOKBETA SET
id='$cod',
codigo='$cod',	
categoria='$cat',
tipo='$tipo', 
talle='$talle', 
precio='$precio',
paleta='$paleta',
descripcion='$desc'
WHERE id=".$cod;

echo '<a href="admin_productos.php?secc=alta">Alta</a> | <a href="admin_productos.php?secc=baja">Baja</a> | <a href="admin_productos.php?secc=mod">Modificaci&oacute;n</a><br>
';
if(mysql_query($query)){
	echo '<br />
	El producto ha sido modificado en la base de datos.<br />
	<br />
	Muchas gracias.';
} else {
	echo '<br />
	Hubo un error: '.mysql_error().' El producto no pudo ser modificado en la base de datos.<br />
	<br />
	Intente nuevamente.';
}
?>