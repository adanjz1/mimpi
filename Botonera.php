<link rel="stylesheet" href="css/mimpi.css" type="text/css" media="screen" />
<script type="text/javascript">
function changeImage(imgId)
{
document.images[imgId].src= "imagenes/botones/"+imgId+"2.png";
return true;
}
function changeImageBack(imgId)
{
 document.images[imgId].src = "imagenes/botones/"+imgId+"1.png";
 return true;
}
</script>
<style>
    .divBotonera{
        background-color:#fff; 
        
        padding:0px 10px;
        font-size:14pt;
        margin: 0px 20px;
    }
    .aBotonera{
        font-size:14pt;
        color:#fff;
        margin: 0px 20px;
        
    }
    .aBotonera:hover{
        opacity:0.5;
    }
</style>
<div id="Botonera" class="color_base_<?=$secc?>" style="clear:left;">

<!--	<div style="float:left; margin-top:4px; margin-left:100px;">
	<?php
	if($secc == "institucional"){
//		echo '<div class="divBotonera" style="color:#E73840;">Institucional</div>';
	} else {
		$var="'institucional'";
//		echo '<a href="?secc=institucional" class="aBotonera" >Institucional</a>';
	}
	?>
	</div>-->

	<div style="float:left; margin-top:4px; margin-left:4px;">
	<?php
	if($secc == "colecciones" || $secc == "bebes" || $secc == "recnac" || $secc == "bebas" || $secc == "nenes" || $secc == "nenas"){
		echo '<div  class="divBotonera"  style="color:#F27338;">Colecciones</div>';
	} else {
		$var="'colecciones'";
		echo '<a href="?secc=colecciones"
		class="aBotonera">Colecciones</a>';
	}
	?>
	</div>
	
	<div style="float:left; margin-top:4px; margin-left:4px;">
	<?php
	if($secc == "sucursales"){
		echo '<div  class="divBotonera" style="color:#FE4B83">Sucursales</div>';
	} else {
		$var="'sucursales'";
		echo '<a href="?secc=sucursales" class="aBotonera">Sucursales</a>';
	}
	?>
	</div>
	
	<div style="float:left; margin-top:4px; margin-left:4px;">
	<?php
	if($secc == "contacto" || $secc == "envio"){
		echo '<div  class="divBotonera" style="color:#3BDAC5">Contacto</div>';
	} else {
		$var="'contacto'";
		echo '<a href="?secc=contacto"
		class="aBotonera">Contacto</a>';
	}
	?>
	</div>
</div>