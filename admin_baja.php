<a href="admin_productos.php?secc=alta">Alta</a> | <strong>Baja</strong> | <a href="admin_productos.php?secc=mod">Modificaci&oacute;n</a><br><br>

<form method="post" name="formulario" action="?secc=baja">
  Ingrese el c&oacute;digo del producto a borrar:<br />
  <br />
  	C&oacute;digo:
	<label>
	<input name="codigo" type="text" id="codigo"/>
	</label><br />
	<input name="aceptar" type="submit" id="aceptar" value="Aceptar" />
</form>

<?php
if(isset($_POST["aceptar"])){
	$cod=trim($_POST["codigo"]);
	if(is_numeric($cod)){
		$tabla = mysql_query("SELECT productosOKBETA.codigo AS 'codigo',
		productosOKBETA.precio AS 'precio',
		productosOKBETA.descripcion AS 'descripcion',
		productosOKBETA.paleta AS 'paleta',
		categoriasOK.categoria AS 'categoria',
		tiposOK.tipo AS 'tipo',
		tallesOK.talle AS 'talle'
		FROM (((productosOKBETA JOIN categoriasOK ON categoriasOK.codigo=productosOKBETA.categoria) JOIN tiposOK ON tiposOK.codigo=productosOKBETA.tipo) JOIN tallesOK ON tallesOK.codigo=productosOKBETA.talle) WHERE productosOKBETA.codigo=".$cod);
		if($registro = mysql_fetch_array($tabla)){
			echo 'C&oacute;digo: '. $registro["codigo"] .'<br>
			Categor&iacute;a: '.$registro["categoria"].'<br />
			Tipo: '.$registro["tipo"].'<br />
			Talle: '.$registro["talle"].'<br />
			Precio: '.$registro["precio"].'<br />
			Paleta: '.$registro["paleta"].'<br />
			Descripci&oacute;n: '.$registro["descripcion"].'<br />';
			
			echo '<form method="post" name="formulario_borrar" action="?secc=borrar&amp;cod='.$registro["codigo"].'">
		  	Desea borrar el producto seleccionado?<br />
			<input name="borrar" type="submit" id="borrar" value="Borrar" />
			</form>';
		}else{
			echo 'No existe un producto con ese c&oacute;digo.<br />
			Puede agregarlo haciendo <a href="?secc=alta">clic aqu&iacute;</a>';
		}
		mysql_free_result($tabla);
	}else{
		echo 'No ha ingresado un c&oacute;digo v&aacute;lido.<br />
		<br />
		Intente nuevamente.';
	}
	mysql_close($conexion);
}

?>