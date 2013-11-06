<div id="contenedor">
	<?php include('header.php');?>
	<div id="contenidos" style="background:url(imagenes/backs/mimpi_login.png) no-repeat;">
		<div id="contenedorClientes">
		  <div class="Tahoma blanco f13 izquierda" style="margin-left:70px; margin-top:26px; margin-right:5px;">
			<div style="margin-left:14px">
			  <span class="bold">Acceso al cat&aacute;logo</span>.<br />
			  <br />
							   <?php
		function quitar($mensaje)
		{
			$nopermitidos = array("'",'\\','<','>',"\"");
			$mensaje = str_replace($nopermitidos, "", $mensaje);
			return $mensaje;
		}
		if(trim($HTTP_POST_VARS["usuario"]) != "")
		{
			// Puedes utilizar la funcion para eliminar algun caracter en especifico
			//$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
			//$password = $HTTP_POST_VARS["password"];
			// o puedes convertir los a su entidad HTML aplicable con htmlentities
			$usuario = strtolower(htmlentities($HTTP_POST_VARS["usuario"], ENT_QUOTES));
			//$clave = $HTTP_POST_VARS["clave"];
			$result = mysql_query("SELECT id, usuario, clave FROM usuarios WHERE usuario='$usuario' order by id desc");
			if($row = mysql_fetch_array($result)){
				if($row["usuario"] == $usuario){
					//$_SESSION["k_username"] = $row['usuario'];
					$_SESSION["k_username"] = $row['clave'];
					//if ($clave != "marinus"){
					//	sb = "";
					//}
					//echo 'Has sido logueado correctamente '.$_SESSION['k_username'].' <p>';
					//echo 'id'.$row["id"];
					//echo 'usuario'.$row["usuario"];
					//echo 'contrase�a'.$row["clave"];
					//echo '<a href="index.php">Index</a></p>';
					//Elimina el siguiente comentario si quieres que re-dirigir autom�ticamente a index.php
					//echo "Clave" = $row['clave'];
					$subject = "Mimpi, recupero de contrase�a"; //subject
					$cabeceras = "From: Mimpi <ventas@mimpi.com.ar>\n";
					$cabeceras .= "Reply-To: Mimpi <ventas@mimpi.com.ar>\n";
					$cabeceras .= "Return-path: Mimpi <ventas@mimpi.com.ar>\n";
					$cabeceras .= "MIME-Version: 1.0\n";
					$cabeceras .= "Content-type: text/html; charset=iso-8859-1\n";
					$recipient = $row["usuario"]; //recipient
					$mail_body = "Gracias por contactarnos, le recordamos que su contrase�a para ingresar a la coleccion es <strong><em>" . $row["clave"] . "</em></strong>.
					<br/><br/>
					Nota: Debe de ingresar su email en el campo de usuario. 
					
					Cualquier consulta o sugerencia, no dude en contactarnos.
					<br/><br/>
					Saluda atentamente
					<br/><br/>
					Mimpi<br/>
					www.mimpi.com.ar<br/>
					ventas@mimpi.com.ar<br/>
					Tel: 4637-6203";
					mail($recipient, $subject, $mail_body, $cabeceras);
					echo "Su contrase�a ha sido recuperada. En breve le llegara la clave a su email! Muchas gracias.";
				}else{
					echo '1 Usuario no registrado, por favor registrese dando <a href="?secc=registro" style="text-decoration:underline; color:#990000">clic aqu&iacute;</a>';
				}
			}else{
				echo '2 Usuario no registrado, por favor registrese dando <a href="?secc=registro" style="text-decoration:underline; color:#990000">clic aqu&iacute;</a>';
			}
			mysql_free_result($result);
		}else{
			echo 'Debe especificar un correo electr&oacute;nico<br />
		<br />
		Intentar nuevamente dando <a href="?secc=recuperar" style="text-decoration:underline; color:#990000">clic aqu&iacute;</a>';
		}
		mysql_close();
		?>
			</div>
		  </div>
		</div>
	</div>
</div>