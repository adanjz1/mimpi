<script language="javascript">
function validateOnSubmitMod(){


	if ( (document.formulario2.precio.value=="") )
		{
			alert('Debe ingresar un precio');
			return false;
	}
	if ( (document.formulario2.descripcion.value=="") )
		{
			alert('Debe ingresar una descripcion');
			return false;
		}
	return true;

}
</script>
<a href="admin_productos.php?secc=alta">Alta</a> | <a href="admin_productos.php?secc=baja">Baja</a> | <strong>Modificaci&oacute;n</strong><br><br>

<form method="post" name="formulario" action="?secc=mod">
  Ingrese el c&oacute;digo del producto a modificar:<br />
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
		$tabla = mysql_query("SELECT * FROM productosOKBETA WHERE codigo=".$cod);
		if($registro = mysql_fetch_array($tabla)){
			echo '
			<form enctype="multipart/form-data" method="post" name="formulario2" action="?secc=modificar&amp;cod='.$cod.'" onSubmit="return validateOnSubmitMod()">
				Modifique los datos que desee:<br />
				<br />';
			
				$tabla2 = mysql_query("SELECT * FROM categoriasOK ORDER BY codigo");
				echo '
				Categor&iacute;a:<br />
				<label>
					<select name="categoria" id="categoria">
						';
						while ($registro2 = mysql_fetch_array($tabla2)) {
							echo '<option value="'.$registro2["codigo"].'"';
							if($registro2["codigo"]==$registro["categoria"]){
								echo ' selected="selected"';
							}
							echo '>'.$registro2["categoria"].'</option>';
						}
						mysql_free_result($tabla2);
						echo '
					</select>
				</label>
				<br />
				
				Tipo de prenda:<br />
				';
				$tabla2 = mysql_query("SELECT * FROM tiposOK ORDER BY codigo");
				echo '
				<label>
					<select name="tipo" id="tipo">
						';
						while ($registro2 = mysql_fetch_array($tabla2)) {
							echo '<option value="'.$registro2["codigo"].'"';
							if($registro2["codigo"]==$registro["tipo"]){
								echo ' selected="selected"';
							}							
							echo '>'.$registro2["tipo"].'</option>';
						}
						mysql_free_result($tabla2);
						echo '
					</select>
				</label>
				<br />
				
				Talle:<br />
				';
				$tabla2 = mysql_query("SELECT * FROM tallesOK ORDER BY codigo");
				echo '
				<label>
					<select name="talle" id="talle">
						';
						while ($registro2 = mysql_fetch_array($tabla2)) {
							echo '<option value="'.$registro2["codigo"].'"';
							if($registro2["codigo"]==$registro["talle"]){
								echo ' selected="selected"';
							}	
							echo '>'.$registro2["talle"].'</option>';
						}
						mysql_free_result($tabla2);
						echo '
					</select>
				</label>
				<br />
				
				Precio:<br />
				<label>
					<input type="text" name="precio" id="precio" value="'.$registro["precio"].'" />
				</label>
				<br />
				
				Paleta de color:<br />
				<label>
					<select name="paleta" id="paleta">
						';
						for($i = 0; $i <= 22; $i++){ 
							echo '<option value="'.$i.'"';
							if($registro["paleta"]==$i){
								echo ' selected="selected"';
							}
							echo '>'.$i.'</option>';
						}
						for($i = 24; $i <= 26; $i++){ 
							echo '<option value="'.$i.'"';
							if($registro["paleta"]==$i){
								echo ' selected="selected"';
							}
							echo '>'.$i.'</option>';
						}
						echo '
					</select>
					<a href="#" OnClick=window.open("paletas.php","Paletas","width=930,height=605,menubar=no,scrollbars=no,toolbar=no,location=no,directories=no,resizable=no")>Ver paletas disponibles</a>
				</label>
				<br />
				
				Descripci&oacute;n:<br />
				<label>
				<textarea name="descripcion" rows="6" id="descripcion">'.$registro["descripcion"].'</textarea>
				</label>
					
				<hr />
				&nbsp;&nbsp;* Nota: Todos los campos son obligatorios.<br />
				<input name="aceptar" type="submit" id="enviar" value="Aceptar" />
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
	mysql_close();
}

?>