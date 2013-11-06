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
		<div style="height:340px; overflow:auto; text-align:left; float:left;">
		<!-- bebas -->
		<?php
		
		$tabla = mysql_query("SELECT distinct id FROM productosOKBETA WHERE categoria=2 order by id asc");
		$i=1;
		while ($registro = mysql_fetch_array($tabla)) {
			echo '<a href="#" OnClick=window.open("foto2.php?id='.$registro['id'].'","Foto","width=842,height=595,menubar=no,scrollbars=yes,toolbar=no,location=no,directories=no,resizable=no")>
		<img src="imagenes/articulos/Nuevo/'.$registro['id'].'.JPG" style="max-width:92px;max-height:92px;" alt="#'.$registro['id'].'" border="0" class="img" /></a>'; 
			
		} 
		 
		mysql_free_result($tabla);
		?>
		
		</div>
		</div>
	</div>
</div>