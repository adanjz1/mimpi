<script language="javascript">
function validateOnSubmitAlta(){


	if ( (document.formulario.codigo.value=="") )
	{
		alert('Debe ingresar un codigo');
		return false;
	}
	if ( (document.formulario.precio.value=="") )
		{
			alert('Debe ingresar un precio');
			return false;
	}
	if ( (document.formulario.foto.value=="") )
		{
			alert('Debe seleccionar una foto');
			return false;
	}
	if ( (document.formulario.thumb.value=="") )
		{
			alert('Debe seleccionar una foto chica');
			return false;
		}
	if ( (document.formulario.descripcion.value=="") )
		{
			alert('Debe ingresar una descripcion');
			return false;
		}
	return true;

}
</script>
<strong>Alta</strong> | <a href="admin_productos.php?secc=baja">Baja</a> | <a href="admin_productos.php?secc=mod">Modificaci&oacute;n</a><br><br>

<div style="float:left; width:200px;">
	<strong>Especificaciones:</strong><br />
	Ancho m�x. foto grande = 525px<br />
	Altura m�x. foto grande = 520px<br />
	Foto chica = 92px x 92px<br />
	Para poner un precio con centavos, utilice el punto(.) en vez de la coma(,)
</div>
<div style="float:left; margin-left:250px;">
<form enctype="multipart/form-data" method="post" name="formulario" action="?secc=subir" onSubmit="return validateOnSubmitAlta()">
	Ingrese los datos del nuevo producto:<br />
	<br />

	C&oacute;digo:<br />
	<label>
		<input name="codigo" type="text" id="codigo"/>
	</label>
	<br />
	<?php
	$tabla = mysql_query("SELECT * FROM categoriasOK ORDER BY codigo");
	?>
	Categor&iacute;a:<br />
	<label>
		<select name="categoria" id="categoria">
			<?php
			while ($registro = mysql_fetch_array($tabla)) {
				echo '<option value="'.$registro["codigo"].'">'.$registro["categoria"].'</option>';
			}
			mysql_free_result($tabla);
			?>
		</select>
	</label>
	<br />
	
	Tipo de prenda:<br />
	<?php
	$tabla = mysql_query("SELECT * FROM tiposOK ORDER BY codigo");
	?>
	<label>
		<select name="tipo" id="tipo">
			<?php
			while ($registro = mysql_fetch_array($tabla)) {
				echo '<option value="'.$registro["codigo"].'">'.$registro["tipo"].'</option>';
			}
			mysql_free_result($tabla);
			?>
		</select>
	</label>
	<br />
	
	Talle:<br />
	<?php
	$tabla = mysql_query("SELECT * FROM tallesOK ORDER BY codigo");
	?>
	<label>
		<select name="talle" id="talle">
			<?php
			while ($registro = mysql_fetch_array($tabla)) {
				echo '<option value="'.$registro["codigo"].'">'.$registro["talle"].'</option>';
			}
			mysql_free_result($tabla);
			?>
		</select>
	</label>
	<br />
	
	Precio:<br />
	<label>
		<input type="text" name="precio" id="precio"/>
	</label>
	<br />
	
	Foto grande:
	<label>
		<input type="hidden" name="MAX_FILE_SIZE" value="300000"/>
		<input type="file" name="foto" id="foto" accept="image/jpeg"/>
	</label>
	<br />
	
	Foto chica:
	<label>
		<input type="hidden" name="MAX_FILE_SIZE" value="100000"/>
		<input type="file" name="thumb" id="thumb" accept="image/jpeg"/>
	</label>
	<br />
	
	Paleta de color:<br />
	<label>
		<select name="paleta" id="paleta">
			<?php
			for($i = 0; $i <= 27; $i++){ 
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
			?>
		</select>
		<a href="#" OnClick=window.open("paletas.php","Paletas","width=930,height=605,menubar=no,scrollbars=no,toolbar=no,location=no,directories=no,resizable=no")>Ver paletas disponibles</a>
	</label>
	<br />
	
	Descripci&oacute;n:<br />
	<label>
	<textarea name="descripcion" rows="6" id="descripcion"></textarea>
	</label>
		
	<hr />
	&nbsp;&nbsp;* Nota: Todos los campos son obligatorios.<br />
	<input name="aceptar" type="submit" id="enviar" value="Aceptar" />
</form>
</div>
<?php
mysql_close($conexion);
?>