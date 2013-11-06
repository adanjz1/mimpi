<link rel="stylesheet" href="css/marinus.css" type="text/css" media="screen" />
<div class="contenedorMenu" 
<?php 
if($secc=="institucional" || $secc=="validar" || $secc=="registro_" || $secc=="registro" || $secc=="recuperar_password" || $secc=="recuperar" || $secc=="logout" || $secc=="login"){
	echo 'style="background:#336799;"';
}else{
	if($secc=="sucursales"){
		echo 'style="background:#CC3467;"';
	}else{
		if($secc=="contacto" || $secc=="envio"){
			echo 'style="background:#5C2E91;"';
		}else{
			if($secc=="colecciones" || $secc=="bebes" || $secc=="bebas" || $secc=="nenes" || $secc=="nenas"){
				echo 'style="background:#03AF43;"';
			}
		}
	}
}
?>
>
  <div id="LogoMenu"><a href="?"><img src="imagenes/logomenu.png" alt="Mimpi" width="120" height="120" border="0"></a></div>
  <div class="division"></div>
  <div class="menuOff"><a href="?secc=institucional" class="Century blanco f20 negrillasMenu" style="text-decoration:none">INSTITUCIONAL</a></div>
  <div class="menuOff"><a href="?secc=colecciones" class="Century blanco f20 negrillasMenu" style="text-decoration:none">COLECCIONES</a></div>
  <div class="menuOff"><a href="?secc=sucursales" class="Century blanco f20 negrillasMenu" style="text-decoration:none">SUCURSALES</a></div>
  <div class="menuOff"><a href="?secc=contacto" class="Century blanco f20 negrillasMenu" style="text-decoration:none">CONTACTO</a></div>
  <div class="divisionInf"></div>
  <div class="banners"><a href="?secc=login&amp;ref=colecciones"><img src="imagenes/login-clientes.png" alt="Atenci&oacute;n a Clientes" width="204" height="90" border="0" /></a></div>
  <div class="banners"><a href="#" onClick="window.open('http://www.facebook.com/pages/Mimpi-Ropa-divertida-para-chicos-by-Marinus/132946816778945#!/pages/Mimpi-Ropa-divertida-para-chicos-by-Marinus/132946816778945?sk=wall','popup','');"><img src="imagenes/banner-facebook.png" alt="Facebook" width="204" height="90" border="0" /></a></div>
</div>
