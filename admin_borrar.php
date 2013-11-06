<?php

echo '<a href="admin_productos.php?secc=alta">Alta</a> | <a href="admin_productos.php?secc=baja">Baja</a> | <a href="admin_productos.php?secc=mod">Modificaci&oacute;n</a><br>
';
$cod=$_GET["cod"];
$foto="imagenes/articulos/Nuevo/".$cod.".JPG";
$thumb="imagenes/articulos/Nuevo/".$cod.".JPG";
if(mysql_query("DELETE FROM productosOKBETA WHERE id=".$cod))
{
	if(unlink($foto) && unlink($thumb)){
		echo "El producto fue eliminado exitosamente de la base de datos.<br />
		<br />
		Muchas gracias.";
	} else {
		echo 'El producto se pudo eliminar de la base de datos pero hubo un error al borrar las fotos.<br />
		Por favor consultarlo manualmente.<br />
		Disculpe las molestias.';
	}
}else{
	echo 'El producto no pudo ser borrado:'.mysql_error().'<br />
	<br />
	Intentar nuevamente haciendo <a href="admin_productos.php?secc=baja">clic aqu&iacute;</a>';
}
?>