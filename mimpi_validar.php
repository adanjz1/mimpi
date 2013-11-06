<div id="contenedor">
	<?php include('header.php');?>
	<div id="contenidos" style="background:url(imagenes/backs/mimpi_validar.png) no-repeat;">
		<div id="contenedorClientes">
		  <div class="Tahoma blanco f13 izquierda" style="margin-left:84px; margin-top:26px; margin-right:5px;"> <span class="bold">Acceso al cat&aacute;logo</span>.<br />
			<br />
			<?php
		function quitar($mensaje)
		{
			$nopermitidos = array("'",'\\','<','>',"\"");
			$mensaje = str_replace($nopermitidos, "", $mensaje);
			return $mensaje;
		}
		if(trim($_POST["usuario"]) != "" && trim($_POST["clave"]) != "")
		{
			// Puedes utilizar la funcion para eliminar algun caracter en especifico
			//$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
			//$password = $HTTP_POST_VARS["password"];
			// o puedes convertir los a su entidad HTML aplicable con htmlentities
			$usuario = strtolower(htmlentities($HTTP_POST_VARS["usuario"], ENT_QUOTES));
			$clave = $HTTP_POST_VARS["clave"];
			$result = mysql_query("SELECT id, usuario, clave FROM usuarios WHERE usuario='$usuario' order by id desc");
			if($row = mysql_fetch_array($result)){
				if($row["clave"] == $clave){
					//$_SESSION["k_username"] = $row['usuario'];
					$_SESSION["k_username"] = 'mimpi';
					//if ($clave != "marinus"){
					//	sb = "";
					//}
					//echo 'Has sido logueado correctamente '.$_SESSION['k_username'].' <p>';
					//echo 'id'.$row["id"];
					//echo 'usuario'.$row["usuario"];
					//echo 'contrase�a'.$row["clave"];
					//echo '<a href="index.php">Index</a></p>';
					//Elimina el siguiente comentario si quieres que re-dirigir autom�ticamente a index.php
					echo "Ingreso exitoso, ahora sera dirigido al cat&aacute;logo.
					<SCRIPT LANGUAGE=\"javascript\">
					location.href = \"index.php?secc=".$_GET['ref']."\";
					</SCRIPT>";
				}else{
					echo 'Password incorrecto<br />
		<br />
		Intentar nuevamente dando <a href="?secc=login" style="text-decoration:underline; color:#990000">clic aqu&iacute;</a>';
				}
			}else{
				echo 'Usuario no existente en la base de datos<br />
		<br />
		Lo invitamos a registrarse dando dando <a href="?secc=registro" style="text-decoration:underline; color:#990000">clic aqu&iacute;</a>';
			}
			mysql_free_result($result);
		}else{
			echo 'Debe especificar un usuario y password<br />
		<br />
		Intentar nuevamente dando <a href="?secc=login" style="text-decoration:underline; color:#990000">clic aqu&iacute;</a>';
		}
		mysql_close();
		?>
		  </div>
		</div>
	</div>
</div>