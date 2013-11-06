<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Foto</title>
<meta name="author" content="Diego Barmat">
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
<link rel="stylesheet" href="css/marinus.css" type="text/css" media="screen" />
<?php
$array = $_GET["arr"];
$array2 = $_GET["arr2"];
$pos = $_GET["pos"];
$orden = stripslashes($array); 
$orden = urldecode($orden); 
$orden = unserialize($orden);
$orden2 = stripslashes($array2); 
$orden2 = urldecode($orden2); 
$orden2 = unserialize($orden2);
if($_GET["ref"]){
	$ref='fans';
} else {
	$ref='ultimo';
}

$conexion = mysql_connect('localhost','darioa','14k8d4uae752')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('darioa_web')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

if($pos>30){
	$tabla = mysql_query("SELECT productosOK.codigo AS 'cod', productosOK.descripcion AS 'desc', productosOK.precio AS 'precio', productosOK.paleta AS 'paleta', tallesOK.talle AS 'talle' FROM productosOK JOIN tallesOK ON productosOK.talle=tallesOK.codigo WHERE productosOK.codigo=".$orden2[$pos-30]);
} else {
	$tabla = mysql_query("SELECT productosOK.codigo AS 'cod', productosOK.descripcion AS 'desc', productosOK.precio AS 'precio', productosOK.paleta AS 'paleta', tallesOK.talle AS 'talle' FROM productosOK JOIN tallesOK ON productosOK.talle=tallesOK.codigo WHERE productosOK.codigo=".$orden[$pos]);
}

while ($registro = mysql_fetch_array($tabla)) {
	$cod=$registro["cod"];
	$desc=$registro["desc"];
	$precio=$registro["precio"];
	$paleta=$registro["paleta"];
	$talle=$registro["talle"];
}
$tmp = serialize($orden); 
$tmp = urlencode($tmp);
$tmp2 = serialize($orden2);
$tmp2 = urlencode($tmp2);
?>
<div id="Producto">
	<div id="Header">
		<div id="Cerrar">
			<a href="javascript:window.close()"><img src="imagenes/cerrarFoto.png" border="0" class="img" /></a>
		</div>
	</div>
	<div id="PrecioTalle">
		<?php
		if($ref!='fans'){
		echo '
		<div id="Precio" class="Century blanco f29">
			<br>
			$'.$precio.'
		</div>
		<div id="Talle" class="Century blanco f24">
			<br>
			<strong>Talles</strong><br>
			'.$talle.'
		</div>';
		}
		?>
	</div>
	<div id="FotoProducto">
		<?php
		if($ref=='fans'){
			echo '<img src="imagenes/articulos/fans/'.$orden[$pos].'.jpg" alt="Fans #'.$orden[$pos].'" border="0" class="img" />';
		} else {
			echo '<img src="imagenes/articulos/ultimo/'.$cod.'.jpg" alt="Art. #'.$cod.'" border="0" class="img" />';
		}
		?>
	</div>
	<div id="ContPaleta">
		<?php
		if($ref!='fans'){
		echo '
		<div id="Paleta" class="Century blanco f24">
		<strong>Colores</strong><br>
		<img src="imagenes/paletas/'.$paleta.'.jpg" style="border:2px solid white" class="img" />
  		</div>';
		}
		?>
	</div>
	<div id="FooterFoto">
		<div id="Anterior">
			<a href="?pos=<?php if($pos==1){
									echo (sizeof($orden)+sizeof($orden2));
								} else {
									echo ($pos-1);
								} ?>&amp;arr=<?php echo $tmp ?>&amp;arr2=<?php echo $tmp2 ?><?php if($ref=='fans'){
																									echo "&amp;ref=fans";
																								}?>"><img src="imagenes/anterior.png" border="0" class="img" /></a>
		</div>
		<?php
		if($ref!='fans'){
		echo '
		<div id="Descripcion" class="Century negro f15">
			<strong>#' . $cod . ' - ' . $desc . '</strong>
		</div>';
		}
		?>
		<div id="Siguiente"><a href="?pos=<?php if($pos==(sizeof($orden)+sizeof($orden2))){
									echo '1';
								} else {
									echo ($pos+1);
								} ?>&amp;arr=<?php echo $tmp ?>&amp;arr2=<?php echo $tmp2 ?><?php if($ref=='fans'){
																									echo "&amp;ref=fans";
																								}?>"><img src="imagenes/siguiente.png" border="0" class="img" /></a>
		</div>
	</div>
</div>
</body>
</html>
