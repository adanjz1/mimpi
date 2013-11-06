<?php 
$secc = $_GET['secc'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>mimpi.com.ar | administrador</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="ropa para chicos, ropa para ni�os, ropa para ninos, ropa para bebes, ropa de chicos, ropa de ni�os, ropa de ninos, ropa de bebes, mayorista de ropa para chicos, mayorista ropa para chicos, mayorista ropa chicos, mayorista de ropa para bebes, mayorista ropa para bebes, mayorista ropa bebes mayorista de ropa para ni�os, mayorista ropa para ni�os, mayorista ropa ni�os, mayorista de ropa para ninos, 
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
<h2>P&aacute;gina de administradores</h2>
En esta p&aacute;gina usted podr&aacute; manejar los productos que aparecer&aacute;n en el sitio web <a href="index.php">www.mimpi.com.ar</a> para que lo vean los clientes.
La secci&oacute;n "Alta" le permitir&aacute; agregar nuevos productos, la secci&oacute;n "Baja" le permitir&aacute; borrar productos y la secci&oacute;n "Modificaci&oacute;n" le permitir&aacute; cambiar los datos o im&aacute;genes de un producto existente. A continuaci&oacute;n, elija la operaci&oacute;n deseada:<br>
<?php 
// mysql_connect ("localhost", "root","123456") or die('Cannot connect to the database because: ' . mysql_error());
//mysql_select_db('mimpi')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

mysql_connect ("localhost", "darioa","14k8d4uae752") or die('Cannot connect to the database because: ' . mysql_error());
mysql_select_db('darioa_web')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

 
include('admin_'.$secc.'.php');?>
</body>

</html>