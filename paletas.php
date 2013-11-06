<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Paletas</title>
<meta name="author" content="Diego Barmat">
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
</head>

<body>
<link rel="stylesheet" href="css/mimpi.css" type="text/css" media="screen" />
	<?php
	for($i = 0; $i <= 8; $i++){ 
		echo '<div class="Century blanco f24" style="width:95px; height:auto; background:#A6CE3A; float:left; margin-left:5px;">
				<strong>'.$i.'</strong><br>
				<img src="imagenes/paletas/' .$i. '.jpg" style="border:2px solid white" class="img" />&nbsp;
			</div>';
	}
	echo '<div style="clear:both;"><br /></div>';
	for($i = 9; $i <= 17; $i++){ 
		echo '<div class="Century blanco f24" style="width:95px; height:auto; background:#A6CE3A; float:left; margin-left:5px;">
				<strong>'.$i.'</strong><br>
				<img src="imagenes/paletas/' .$i. '.jpg" style="border:2px solid white" class="img" />&nbsp;
			</div>';
	}
	echo '<div style="clear:both;"><br /></div>';
	for($i = 18; $i <= 26; $i++){ 
		echo '<div class="Century blanco f24" style="width:95px; height:auto; background:#A6CE3A; float:left; margin-left:5px;">
				<strong>'.$i.'</strong><br>
				<img src="imagenes/paletas/' .$i. '.jpg" style="border:2px solid white" class="img" />&nbsp;
			</div>';
	}
	for($i = 27; $i <= 27; $i++){ 
		echo '<div class="Century blanco f24" style="width:95px; height:auto; background:#A6CE3A; float:left; margin-left:5px;">
				<strong>'.$i.'</strong><br>
				<img src="imagenes/paletas/' .$i. '.jpg" style="border:2px solid white" class="img" />&nbsp;
			</div>';
	}
	?>
</body>
</html>
