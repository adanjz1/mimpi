<div id="contenedor">
	<?php include('header.php');?>
	<div id="contenidos" style="background:url(imagenes/backs/mimpi_login.png) no-repeat;">
		<div id="contenedorClientes">
		  <div class="Tahoma blanco f13 izquierda" style="margin-left:70px; margin-top:26px; margin-right:5px;color: #931276;
font-size: 16px;">
			<form method="post" name="formulario" action="?secc=validar&amp;ref=<?php echo $_GET['ref'];?>">
			  <div style="margin-left:14px">
			  <span class="bold">Acceso al cat&aacute;logo</span>.<br />
			  <br />
			  Para ingresar a nuestro cat&aacute;logo en l&iacute;nea ingresa tus datos a continuaci&oacute;n:<br />
			  <br />
			  Usuario:<br />
			  <label>
				<input type="text" name="usuario" id="usuario" />
			  </label>
			  <br />
			  Contrase&ntilde;a:<br />
			  <label>
				<input type="password" name="clave" id="clave" />
			  </label>
			  <br />
			  </div><label>
				<input name="enviar" type="submit" class="botonEnviar2" id="enviar" value="&nbsp;" />
			  </label>
			</form>
			<div style="margin-top:50px; margin-left:14px;">Si no cuentas con usuario y contrase&ntilde;a te invitamos a registrarte dando <a href="?secc=registro" style="text-decoration:underline; color:#FFFFFF">clic aqu&iacute;</a></div>
			<div style="margin-top:30px; margin-left:14px;">Si deseas recuperar tu contrase&ntilde;a da <a href="?secc=recuperar" style="text-decoration:underline; color:#FFFFFF">clic aqu&iacute;</a></div>
		  </div>
		</div>
	</div>
</div>