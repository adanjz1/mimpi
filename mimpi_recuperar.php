<div id="contenedor">
	<?php include('header.php');?>
	<div id="contenidos" style="background:url(imagenes/backs/mimpi_login.png) no-repeat;">
		<div id="contenedorClientes">
		  <div class="Tahoma blanco f13 izquierda" style="margin-left:70px; margin-top:26px; margin-right:5px;">
			<form method="post" name="formulario" action="?secc=recuperar_password">
			  <div style="margin-left:14px">
			  <span class="bold">Acceso al cat&aacute;logo</span>.<br />
			  <br />
			  Ingrese su email para recuperar su cotrase&ntilde;a:<br />
			  <br />
		Email:<br />
			  <label>
				<input type="text" name="usuario" id="usuario" />
			  </label>
			  </div><label>
				<br /><input name="enviar" type="submit" class="botonEnviar" id="enviar" value="&nbsp;" />
			  </label>
			</form>
		  </div>
		</div>
	</div>
</div>