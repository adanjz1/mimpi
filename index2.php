<?php session_start();?>
<?php 
$secc = $_GET['secc'];
$sb = $_GET['sb'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>mimpi.com.ar | inicio</title>
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
<link rel="stylesheet" href="css/mimpi.css" type="text/css" media="screen" />
<!--<link rel="stylesheet" href="css/marinus_forma.css" type="text/css" media="screen" />-->
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
	<script src="js/marinus.js" type="text/javascript"></script>
	<!--<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/easySlider1.7.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true, 
				continuous: true,
				pause: 3000

			});
		});	
	</script>-->
</head>
<body>
<center>
<?php include('mimpi_'.$secc.'.php');
if($secc != ""){
	echo '<div id="footer" class="Tahoma f10 negro">
    	<div class="float" style="margin-left:4px;"><strong>| Showroom:</strong> Neuquén 2788 - Cap. Fed. Tel: 4637.6203 <strong>| Distribuci&oacute;n y ventas:</strong> Avellaneda 2970 - Cap. Fed. Tel: 4611.4762 <strong>|</strong></div><div class="floatRight" style="margin-right:4px;">|by <strong><a style="text-decoration:none; color:#000000" href="mailto:mungadigital@gmail.com">Munga Digital</a></strong>|</div>
    	
	</div>';
} else {
	echo '<div id="botonEntrar"><div style="float:right;"><a href="?secc=institucional"><img src="imagenes/entrar.png" alt="Entrar" width="123" height="35" border="0" /></a></div></div>';
}
?>
</center>

</body>
</html>
