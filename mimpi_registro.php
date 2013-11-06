<div id="contenedor">
	<?php include('header.php');?>
	<div id="contenidos" style="background:url(imagenes/backs/mimpi_login.png) no-repeat;">
		<div id="contenedorRegistro">
			<div id="texto" class="Tahoma blanco f13" style=" margin-top:20px;">
			<form method="post" name="formulario" action="?secc=registro_" onSubmit="return validateOnSubmitEnvio()">
			  <span class="bold">Acceso al cat&aacute;logo</span>.<br />
			  <br />
			  Si deseas conocer nuestro cat&aacute;logo completa el siguiente formulario:<br />
			  <br />
			  <div style="margin-left:50px;">
			  <div class="float clear">
				<div class="caja float"> Nombre completo:
				  
					<input name="nombre" type="text" id="nombre" style="float:left; margin-right:20px;"/>
				  
				</div>
				<div class="caja float clear"> Tel&eacute;fono:
				  <br /><input type="text" name="telefono" id="telefono"  style="float:left; margin-right:20px;"/>
				</div>
			  </div>
			  <div class="float clear">
				<div class="caja float">Email:
				  <br /><input name="mail" type="text" id="mail" style="float:left; margin-right:20px;"/>
				</div>
				<div class="caja float">Repetir Email:
				  <br /><input name="rmail" type="text" id="rmail" style="float:left; margin-right:20px;"/>
				</div>
				</div>
			  <div class="float clear">
				<div class="caja float clear">Direcci&oacute;n:
				  <br /><input type="text" name="direccion" id="direccion"  style="float:left; margin-right:20px;"/>
				</div>
			  <div class="caja float clear">Localidad:
				  <br /><input type="text" name="localidad" id="localidad" style="float:left; margin-right:20px;"/>
				</div>
			  </div>
			  <div class="float clear">
				<div class="caja float">Provincia:
				  <br /><input name="provincia" type="text" id="provincia" style="float:left; margin-right:20px;"/>
				</div>
			  </div>
			  <div class="float clear">
				<div class="caja float">Pa&iacute;s:&nbsp;&nbsp;&nbsp;&nbsp;
				  <br /><input name="pais" type="text" id="pais" style="float:left; margin-right:20px;"/>
				</div>
			  </div>
			  </div>
			  <div style="clear:left;">
			  &iquest; Por que medio accedio a Mimpi ?:<br />
				<input type="radio" name="group1" id="r1" value="1">
				Buscadores          
				|
				<input type="radio" name="group1" id="r1" value="2">
				Local Mimpi
				|
				<input type="radio" name="group1" id="r1" value="3">
				Mabyn
				|
				<input type="radio" name="group1" id="r1" value="4">
				Recomendaci&oacute;n
				|
				<input type="radio" name="group1" id="r1" value="5">
				Otros </div><hr />
			  <div>
			 
			  Est&aacute; interesada en ver los productos de nuestra colecci&oacute;n o recibir informaci&oacute;n para:<br />
			  <input type="radio" name="group2" id="r1" value="1">
				Local Propio          
				|
				<input type="radio" name="group2" id="r1" value="2">
				Reventa
				|
				<input type="radio" name="group2" id="r1" value="3">
				Distribuci&oacute;n
				|
				<input type="radio" name="group2" id="r1" value="4">
				Particular </div>
				<hr />
			  <div>&iquest; Compr&oacute; alguna vez en Mimpi ?<br />
				<input type="radio" name="group3" id="r1" value="1">
				Si          
				|
				<input type="radio" name="group3" id="r1" value="2">
				No </div>
				<hr />
			  &nbsp;&nbsp;* Nota: Todos los campos son obligatorios.
			  <input type="hidden" name="accion" value="<?php echo $accion;?>">
			  <input type="hidden" name="id" value="<?php echo $id;?>">
			  <br />
			  <input name="aceptar" type="submit" class="botonEnviar" id="enviar" value="&nbsp;" />
			  
			</form>
		  </div>
		</div>
	</div>
</div>