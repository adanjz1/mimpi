<?php
$adminaddress = "ventas@cottonmimpi.com.ar"; 
$siteaddress ="http://www.cottonmimpi.com.ar";
$sitename = "Cottonmimpi";

//variables

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$provincia = $_POST['provincia'];
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];

$nombre = utf8_decode("$nombre");
$telefono = utf8_decode("$telefono");
$provincia = utf8_decode("$provincia");
$email = utf8_decode("$email");
$comentarios = utf8_decode("$comentarios");


$date = date("m/d/Y H:i:s");

mail("$adminaddress","Correo desde $sitename", 
"\n
Se ha hecho un comentario en el sitio de CottonMimpi. A continuaci�n se detallan los datos y comentarios de la persona:

Nombre: $nombre
Tel�fono: $telefono
Provincia: $provincia
Correo electr�nico: $email
Comentarios: $comentarios

Fecha y Hora: $date","FROM:$adminaddress"); 

mail("$email","Gracias por tus comentarios", "Hola $su_nombre,\n
Gracias por tus comentarios, y te esperamos pronto en $siteaddress","FROM:$adminaddress"); 

$respuesta = "Ya recibimos tu correo y gracias por tus comentarios";
/*
$sendresult = "Ya recibimos tu correo";
$send_answer = "answer=";
$send_answer .= rawurlencode($sendresult);
echo "$send_answer";
*/
?>
<link rel="stylesheet" href="css/mimpi.css" type="text/css" media="screen" />
<div id="contenedor">
	<?php include('header.php');?>
	<div id="contenidos" style="background:url(imagenes/backs/mimpi_contacto.jpg) no-repeat;">
		<div id="contenedorContacto">
		  <div class="Tahoma gris f13 izquierda" style="float:left; width:235px; margin-left:85px; margin-top:26px;">
			<br />
			<center><?php echo $respuesta;?></center>
		  </div>
		</div>
	</div>
</div>