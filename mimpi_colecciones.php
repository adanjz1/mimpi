<div id="contenedor">
	<?php include('header.php');?>
	<div id="contenidos" style="background:url(imagenes/backs/mimpi_colecciones.png) no-repeat;">
		<?php
		if (!empty($_SESSION['k_username']) && ($_SESSION['k_username'] == "marinus2008" || $_SESSION['k_username'] == "marinus2010" || $_SESSION['k_username'] == "marinus2011" || $_SESSION['k_username'] == "marinus" || $_SESSION['k_username'] == "mimpi2012" || $_SESSION['k_username'] == "mimpi")){
				include ('menu_Colecciones1.php');
			} else {
				include ('menu_Colecciones0.php');
			}
		?>
		<div class="contenedorFotos">
		<div style="height:350px; overflow:auto; text-align:left; float:left;">
		<!-- fans -->
		<?php
		for($i = 1; $i <= 15; $i++){
			$orden[$i]= $i;
		}
		$tmp = serialize($orden); 
                $tmp = urlencode($tmp);
		@$tmp2 = serialize($orden2);
		$tmp2 = urlencode($tmp2);
		for($k = 1; $k <= sizeof($orden); $k++){ 
			echo '<a href="#" OnClick=window.open("foto2.php?id='.$k.'&amp;sec=fans","Foto","width=842,height=595,menubar=no,scrollbars=yes,toolbar=no,location=no,directories=no,resizable=yes")>
		<img src="imagenes/articulos/fans/thumb/'.$orden[$k].'.jpg" width="92" height="92" alt="#'.$orden[$k].'" border="0" class="img" /></a>'; 
		} 
		unset($orden);
		unset($orden2);
		?>
		</div>
		</div>
	</div>
</div>