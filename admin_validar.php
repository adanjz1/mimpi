<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>mimpi.com.ar | administrador</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="ropa para chicos, ropa para niños, ropa para ninos, ropa para bebes, ropa de chicos, ropa de niños, ropa de ninos, ropa de bebes, mayorista de ropa para chicos, mayorista ropa para chicos, mayorista ropa chicos, mayorista de ropa para bebes, mayorista ropa para bebes, mayorista ropa bebes mayorista de ropa para niños, mayorista ropa para niños, mayorista ropa niños, mayorista de ropa para ninos, 
mayorista ropa para ninos, mayorista ropa ninos">
<meta name="description" content="Ropa divertida para bebes y chicos. Venta mayorista y minorista">
<meta name="author" content="Diego Barmat">
<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Language" content="en-us">
<meta name="ROBOTS" content="ALL">
<meta name="Copyright" content="Copyright (c) 2011">
<meta http-equiv="imagetoolbar" content="no">
<meta name="MSSmartTagsPreventParsing" content="true">
<meta name="Rating" content="General">
<link rel="stylesheet" href="css/marinus.css" type="text/css" media="screen" />
<!--<link rel="stylesheet" href="css/marinus_forma.css" type="text/css" media="screen" />-->
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
	<script src="js/marinus.js" type="text/javascript"></script>
</head>

<body>
<?php
if(trim($_POST["usuario"]) != "" && trim($_POST["clave"]) != "")
{
	$usuario = strtolower(htmlentities($_POST["usuario"], ENT_QUOTES));
	$clave = $_POST["clave"];
	if($usuario == "mimpiadmin"){
		if($clave == "14k8d4uae752"){
			echo "Ingreso exitoso, ahora ser&aacute; dirigido al &aacute;rea de administrador.
			<SCRIPT LANGUAGE=\"javascript\">
			location.href = \"admin_productos.php?secc=alta\";
			</SCRIPT>";
		}else{
			echo 'Password incorrecto<br />
			<br />
			Intentar nuevamente haciendo <a href="admin.php">clic aqu&iacute;</a>';
		}
	}else{
		echo 'Usuario incorrecto<br />
		<br />
		Intentar nuevamente haciendo <a href="admin.php">clic aqu&iacute;</a>';
	}
}else{
	echo 'Debe especificar un usuario y password<br />
	<br />
	Intentar nuevamente dando <a href="admin.php" style="text-decoration:underline; color:#990000">clic aqu&iacute;</a>';
}
?>
</body>
</html>