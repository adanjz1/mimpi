<div id="contenedor">
	<?php include('header.php');?>
	<div id="contenidos" style="background:url(imagenes/backs/mimpi_contacto.jpg) no-repeat;">
		<div id="contenedorContacto">
		  <div class="Tahoma gris f13 izquierda" style="margin-left:85px; margin-top:26px;">
			<form id="form1" name="form1" method="post" style="color: #464646;" action="?secc=envio">
			  <div style="float:left; width:235px;">
			  Si quer&eacute;s saber m&aacute;s sobre nuestros productos complet&aacute; el siguiente formulario:<br />
			  <br />
			  Nombre Completo:<br />
			  <label>
				<input type="text" name="nombre" id="nombre" />
			  </label>
			  <br />
			  Tel&eacute;fono:<br />
			  <label>
				<input type="text" name="telefono" id="telefono" />
			  </label>
			  <br />
			  Provincia:<br />
			  <label>
				<input type="text" name="provincia" id="provincia" />
			  </label>
			  <br />
			  Correo electr&oacute;nico:<br />
			  <label>
				<input type="text" name="email" id="email" />
			  </label>
			  <br />
			  Comentarios:<br />
			  <label>
				<textarea name="comentarios" rows="5" id="comentarios"></textarea>
			  </label>
			  </div>
			  <div style="float:right; float: right;
position: absolute;
top: 530px;
margin-left: 160px !important;">
			  <label>
				<input name="enviar" type="submit" class="botonEnviar" id="enviar" value="&nbsp;" />
			  </label>
			  </div>
			</form>
		  </div>
		</div>
	</div>
</div>