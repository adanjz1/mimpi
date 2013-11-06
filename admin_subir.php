<?php


$cod=$_POST["codigo"];
$cat=$_POST["categoria"];
$tipo=$_POST["tipo"];
$talle=$_POST["talle"];
$precio=$_POST["precio"];
$paleta=$_POST["paleta"];
$desc=$_POST["descripcion"];
$destinofoto="imagenes/articulos/Nuevo/".$cod.".JPG";
$tmpfoto=$_FILES["foto"]["tmp_name"];
$destinothumb="imagenes/articulos/Nuevo/".$cod.".JPG";
$tmpthumb=$_FILES["thumb"]["tmp_name"];


$query="INSERT INTO productosOKBETA (
id ,
codigo ,	
categoria  ,
tipo  ,
talle  ,
precio  ,
paleta  ,
descripcion
)
VALUES (
'$cod',
'$cod', 
'$cat', 
'$tipo', 
'$talle', 
'$precio', 
'$paleta', 
'$desc'
);";
echo '<a href="admin_productos.php?secc=alta">Alta</a> | <a href="admin_productos.php?secc=baja">Baja</a> | <a href="admin_productos.php?secc=mod">Modificaci&oacute;n</a><br>
';
if(mysql_query($query)){
	if(move_uploaded_file($tmpfoto, $destinofoto) && move_uploaded_file($tmpthumb, $destinothumb)){
		echo '<br />
		El producto ha sido agregado a la base de datos.<br />
		<br />
		Muchas gracias.';
	} else{
		echo '<br />
		El producto se pudo agregar a la base de datos pero hubo un error al subir las fotos.<br />
		Por favor consultarlo manualmente.<br />
		Disculpe las molestias.';
	}
} else {
	echo '<br />
	Hubo un error: '.mysql_error().' El producto no pudo ser agregado a la base de datos.<br />
	<br />
	Intente nuevamente.';
}
?>