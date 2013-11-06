<div id="contenedor">
	<?php include('header.php');?>
	<div id="contenidos" style="background:url(imagenes/backs/mimpi_login.png) no-repeat;">
		<div id="contenedorClientes">
		  <div class="Tahoma blanco f13 izquierda" style="margin-left:70px; margin-top:26px; margin-right:5px;">
		  <div style="margin-left:14px">
		  <span class="bold">Acceso al cat&aacute;logo</span>.<br />
			<br />
			<?php
				session_destroy();
				unset($_SESSION['k_username']);
				echo "Se cerro correctamente la sesi&oacute;n, ahora sera dirigido al la p&aacute;gina principal.
				<SCRIPT LANGUAGE=\"javascript\">
				location.href = \"index.php?\";
				</SCRIPT>";
			?>
			Cerrando sesi&oacute;n </div>
			</div>
		</div>
	</div>
</div>