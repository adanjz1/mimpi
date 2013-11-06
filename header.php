<div id="HeaderNuevo">
	<div id="LogoHeader">
            <a href="?">
                <?
                    if($secc == 'recnac' || $secc == 'bebes' || $secc == 'bebas' || $secc == 'nenes' || $secc == 'nenas'){
                        $secc_logo = 'colecciones';
                    }elseif($secc =='recuperar' || $secc =='recuperar_password'){
                        $secc_logo = 'registro';
                    }else{
                        $secc_logo = $secc;
                    }
                ?>
                <img class="color_base_<?=$secc?>" src= "imagenes/logo_<?=$secc_logo?>.jpg" alt="Home" width="105" height="105" border="0" />
            </a>
        </div>
	
	<div id="RestoDeHeader">
		<div id="AccesosDirectos">
			<div style="float:left;">
				<a href="#" onClick="window.open('http://www.facebook.com/Mimpikids','popup','');"><img src="imagenes/iconos/icono1.png" alt="Salvemos nuestro planeta" border="0" /></a>
			</div>
			<div style="float:left; margin-left:7px;">
				<a href="#" onClick="window.open('http://www.facebook.com/Mimpikids','popup','');"><img src="imagenes/iconos/icono3.png" alt="Facebook" width="28" height="29" border="0" /></a>
			</div>
			<div style="float:left; margin-left:7px;">
				<a href="?secc=contacto"><img src="imagenes/iconos/icono4.png" alt="Contacto" width="28" height="29" border="0" /></a>
			</div>
		</div>
            <div class="tit" style="position: relative;
top: -13px;
line-height: 15px;
text-align: left;">
		<div class="Tahoma gris f12" style="float:left; height:10px; margin-top:<?php if($secc == ""){ echo '74'; } else { echo '36'; } ?>px;">
			<strong><b>Mimpi Kids</b></strong>
		</div>
		<div class="Tahoma gris f10" style="float:left; clear:left; height:8px; margin-top:5px;">
                    <strong><b>Primavera - Verano<br/> 2013 / 2014</b></strong>
                </div>
            </div>
                <div class="<?=(empty($secc))?'landing':''?> decoradoTemporada"></div>
		<?php 
		if($secc != ""){
			include('Botonera.php'); 
		}
		?>
	</div>
</div>