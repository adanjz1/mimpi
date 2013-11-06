<?php session_start();?>
<?php 
@$secc = $_GET['secc'];
@$sb = $_GET['sb'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>mimpi.com.ar | inicio</title>
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
<?php 
//mysql_connect('localhost','prons_darriens','bFUUR$gTAdCu')or die ('Ha fallado la conexi�n: '.mysql_error());
//mysql_select_db('prons_test')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
//mysql_connect('localhost','root','123456')or die ('Ha fallado la conexi�n: '.mysql_error());
//mysql_select_db('mimpi')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

// $dbh=mysql_connect ("localhost", "darioa","14k8d4uae752") or die('Cannot connect to the database because: ' . mysql_error());
// mysql_select_db ("darioa_web");
 $dbh=mysql_connect ("localhost", "muse0b0_admin","cma*219") or die('Cannot connect to the database because: ' . mysql_error());
 mysql_select_db ("muse0b0_mimpi");
 
include('mimpi_'.$secc.'.php');

	echo '<div id="footer" class="Tahoma negro">
    	<div class="float" style="margin-left:14px;margin-top: -10px; font-family:Memphis; font-size:12pt !important; color:#464646">
        <a href="http://qr.afip.gob.ar/?qr=xZO2O13ip7nuXvnfEebRCg,," target="_F960AFIPInfo">
            <div class="afip" style="background: url(\'http://www.afip.gob.ar/images/f960/DATAWEB.jpg\') no-repeat;
height: 50px;
margin-top: -30px;
background-size: 53%;
position: absolute;
width: 70px;"></div>
        </a>
        <strong style="font-family:Memphis Bold; font-size:12pt !important; color:#1E1E1E;margin-left: 30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Showroom:</strong> Av Corrientes 2685 - Cap. Fed. Tel: 4966.0018 </div>
        
        <div class="floatRight" style="margin-right:14px;margin-top: -10px;"> Dise&ntilde;o by <strong><a style="text-decoration:none; font-family:Memphis Bold; font-size:12pt !important; color:#1E1E1E;" href="http://www.behance.net/lunaticadg">Lun&aacute;tica</a></strong> | Desarrollo by <strong><a style="text-decoration:none; font-family:Memphis Bold; font-size:12pt !important; color:#1E1E1E;" href="mailto:mungadigital@gmail.com">Munga Digital</a></strong></div>
    	
	</div>';

?>
</center>

</body>
</html>
