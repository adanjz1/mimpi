<link rel="stylesheet" href="css/mimpi.css" type="text/css" media="screen" />
<div id="contenedor">
	<?php include('header.php');?>
	<div id="contenidos" style="background:url(imagenes/backs/mimpi_login.png) no-repeat;">

		<?php
		import_request_variables("gP", "rvar_");
		
		
		
		
		if ($rvar_group1 == "1"){
			$rvar_apellido = "Buscadores";
			}
			else
			if ($rvar_group1 == "2"){
			$rvar_apellido = "Local Marinus";
			}
			else
			if ($rvar_group1 == "3"){
			$rvar_apellido = "Exposiciones";
			}
			else
			if ($rvar_group1 == "4"){
			$rvar_apellido = "Recomendaci�n";
			}
			else
			if ($rvar_group1 == "5"){
			$rvar_apellido = "Otros";
		}
		
		
		
		if ($rvar_group2 == "1"){
			$rvar_cp = "Comercio Propio";
			$rvar_clave = "mimpi2012";
			}
			else
			if ($rvar_group2 == "2"){
			$rvar_cp = "Reventa";
			$rvar_clave = "mimpi2012";
			}
			else
			if ($rvar_group2 == "3"){
			$rvar_cp = "Distribuci�n";
			$rvar_clave = "mimpi2012";
			}
			else
			if ($rvar_group2 == "4"){
			$rvar_cp = "Particular";
			$rvar_clave = "mimpi";
		}
		
		$rvar_usuario = $rvar_rmail;
		$rvar_email = $rvar_mail;
		$rvar_razonsocial = "razonSocial";
		
		
		$query="INSERT INTO `darioa_web`.`usuarios` (
		`nombre` ,
		`apellido` ,	
		`usuario`  ,
		`clave`  ,
		`email`  ,
		`fecha`  ,
		`telefono`  ,
		`direccion`  ,
		`provincia`  ,
		`pais`  ,
		`localidad`  ,
		`cp`  ,
		`razonsocial`  ,
		`news` 
		)
		VALUES (
		'$rvar_nombre',
		'$rvar_apellido', 
		'$rvar_usuario', 
		'$rvar_clave', 
		'$rvar_email', 
		now(), 
		'$rvar_telefono', 
		'$rvar_direccion', 
		'$rvar_provincia', 
		'$rvar_pais', 
		'$rvar_localidad', 
		'$rvar_cp',
		'$rvar_razonsocial',
		'$rvar_news'
		);";
		mysql_query($query) or die(mysql_error());
		
		// Para enviar correo HTML, la cabecera Content-type debe definirse
		$cabeceras = "From: Cotton Mimpi <ventas@cottonmimpi.com.ar>\n";
		$cabeceras .= "Reply-To: Cotton Mimpi <ventas@cottonmimpi.com.ar>\n";
		$cabeceras .= "Return-path: Cotton Mimpi <ventas@cottonmimpi.com.ar>>\n";
		$cabeceras .= "MIME-Version: 1.0\n";
		$cabeceras .= "Content-type: text/html; charset=iso-8859-1\n";
		
		//subjects
		$subject = "Cotton Mimpi - Gracias por registrarse";
		
		//mails dirigidos
		$marinus = "ventas@cottonmimpi.com.ar";
//		$cabeceras = "From: Mimpi <ventas@mimpi.com.ar>\n";
//		$cabeceras .= "Reply-To: Mimpi <ventas@mimpi.com.ar>\n";
//		$cabeceras .= "Return-path: Mimpi <ventas@mimpi.com.ar>>\n";
//		$cabeceras .= "MIME-Version: 1.0\n";
//		$cabeceras .= "Content-type: text/html; charset=iso-8859-1\n";
//		
//		//subjects
//		$subject = "Mimpi - Gracias por registrarse";
//		
//		//mails dirigidos
//		$marinus = "ventas@mimpi.com.ar";
		//$marinus = "juancarlos_meza@hotmail.com";
		
		$mensaje="Datos del registrante<br />
		Nombre = $rvar_nombre <br />
		Telefono = $rvar_telefono <br />
		Correo = $rvar_email <br />
		Direccion = $rvar_direccion <br />
		Localidad = $rvar_localidad <br />
		Provincia = $rvar_provincia <br />
		Pais = $rvar_pais <br />
		�Por que medio accedi� a Mimpi? = $rvar_apellido <br />
		Est� interesada en ver los productos de nuestra colecci�n o recibir informaci�n para: = $rvar_cp <br />
		�Compr� alguna vez en Cotton Mimpi?: = $rvar_news
		";
		
		$mensaje1="
		Gracias por registrarse en la p�gina de Cotton Mimpi.<br /><br />
		Para acceder a la colecci�n clickee aqu�: http://www.cottonmimpi.com.ar/?secc=login<br />
		<br />
		Usuario = $rvar_usuario<br />
		Contrase�a = $rvar_clave<br />
		<br />
		All� podr� encontrar nuestra colecci�n  Primavera-Verano 2011/12.<br />
		<br />
		Por condiciones generales de de ventas cont�ctenos por correo electr�nico a ventas@cottonmimpi.com.ar o telef�nicamente al (11) 4966-0018 , donde un vendedor los atender�.<br />
		<br />
		Muchas gracias por contactarnos.<br /><br />
		Sigue disfrutando de nuestro sitio web en www.mimpi.com.ar
		";
		
		mail($marinus, $subject, $mensaje, $cabeceras);
		mail($rvar_email, $subject, $mensaje1, $cabeceras);
		
		?>
		
		<div id="contenedorClientes">
		  <div class="Tahoma blanco f13">
		  <div style="margin-left:70px; margin-top:26px; margin-right:5px;">
		   <span class="bold">Acceso al cat&aacute;logo</span>.<br />
			<br />
			Sus datos han sido ingresados satisfactoriamente.<br />
			<br />
			En breve le llegara la clave a su mail! <br />
			<br />
			Muchas gracias </div></div>
		</div>
	</div>
</div>