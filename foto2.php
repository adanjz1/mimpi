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
                                       
                                        $pos = $_GET["id"];
                                       
                                        if (!empty($_GET["sec"]) && $_GET["sec"]) {
                                            $ref = 'fans';
                                        } else {
                                            $ref = 'ultimo';
                                        }

//                                        $conexion = mysql_connect('localhost', 'root', '123456') or die('Ha fallado la conexi�n: ' . mysql_error());
//                                        mysql_select_db('mimpi') or die('Error al seleccionar la Base de Datos: ' . mysql_error());
//                                        $conexion = mysql_connect('localhost', 'prons_darriens', 'bFUUR$gTAdCu') or die('Ha fallado la conexi�n: ' . mysql_error());
//                                        mysql_select_db('prons_test') or die('Error al seleccionar la Base de Datos: ' . mysql_error());

//$conexion = mysql_connect('localhost','darioa','14k8d4uae752')or die ('Ha fallado la conexi�n: '.mysql_error());
//mysql_select_db('darioa_web')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
 $dbh=mysql_connect ("localhost", "muse0b0_admin","cma*219") or die('Cannot connect to the database because: ' . mysql_error());
 mysql_select_db ("muse0b0_mimpi");
                                        if(empty($_GET['sec'])){
                                            $tabla = mysql_query("SELECT productosOKBETA.codigo AS 'cod',productosOKBETA.categoria AS 'categoria', productosOKBETA.descripcion AS 'desc', productosOKBETA.precio AS 'precio', productosOKBETA.paleta AS 'paleta', tallesOK.talle AS 'talle' FROM productosOKBETA JOIN tallesOK ON productosOKBETA.talle=tallesOK.codigo WHERE productosOKBETA.codigo=" . $pos);

                                            while ($registro = mysql_fetch_array($tabla)) {
                                                $cod = $registro["cod"];
                                                $idC = $registro["cod"];
                                                $desc = $registro["desc"];
                                                $precio = $registro["precio"];
                                                $paleta = $registro["paleta"];
                                                $cat = $registro["categoria"];
                                                $talle = $registro["talle"];
                                            }
                                        }else{
                                            
                                        }
                                        ?>
                                        <center>
                                            <div id="contenedorProducto">
                                                <div id="HeaderProducto">
                                                    <div id="LogoProducto"></div>
                                                    <div id="TextoEmpresaProducto">
                                                        <div class="Tahoma gris f10" style="float:left; height:8px; margin-top:11px; margin-left:7px;">
                                                            <strong><b>Mimpi Kids</b></strong>
                                                        </div>
                                                        <div class="Tahoma gris f8" style="text-align: left;float:left; height:6px; margin-left:7px; margin-top:2px; clear:left;">
                                                            <strong><b>Primavera - Verano <br/> 2013 / 2014</b></strong>
                                                        </div>
                                                        <div class="decoradoTemporada" style="background-size: 80%;
                                                             background-repeat: no-repeat;
                                                             margin-top: 4px !important;
                                                            margin-left: 65px !important;"></div>
                                                    </div>	
                                                </div>
                                                <div id="Producto">
                                                    <div id="DatosProducto">
                                                        <div id="PrecioTalle">
                                                            <?php
                                                            if ($ref != 'fans') {
                                                                echo '
				<div id="Talle" class="Tahoma gris f14">
					<strong>Talles</strong><br>
					' . $talle . '
				</div><br>
				<div id="Sombra"></div>
				<div id="Precio" class="Tahoma gris f14">
					<strong>Precio</strong><br>
					$' . $precio . '
				</div><br><br>
				<div id="Sombra"></div>';
                                                            }
                                                            ?>
                                                        </div>
                                                        <div id="ContPaleta" class="Tahoma gris f14">
                                                            <?php
                                                            if ($ref != 'fans') {
                                                                if(empty($paleta)){
                                                                    $paleta = 0;
                                                                }else{
                                                                    echo '
                                    <strong>Colores</strong><br>
                                    <img src="imagenes/paletas/' . $paleta . '.jpg" style="border:2px solid; border-color:#727272;height: 100px;" class="img" />';
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div id="FotoProducto">
                                                        <?php
                                                        if ($ref == 'fans') {
                                                            echo '<img src="imagenes/articulos/fans/' . $pos . '.jpg" alt="Fans #' . $pos . '" border="0" class="imgBig" />';
                                                        }else{
                                                            echo '<img src="imagenes/articulos/Nuevo/' . $pos . '.JPG" alt="Fans #' . $pos . '" border="0" class="imgBig" />';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div id="FooterProducto">
                                                    <div id="Anterior">
                                                        <? 
                                                        if(empty($_GET['sec'])){
                                                           $tabla = mysql_query("(SELECT id FROM productosOKBETA WHERE id < ".$pos." and categoria = ".$cat." ORDER BY id DESC LIMIT 1)
UNION (SELECT id FROM productosOKBETA WHERE id = (SELECT MAX(id) FROM productosOKBETA) and categoria = ".$cat.")
LIMIT 1");     
                                                         if ((!empty($tabla)) && $registro = mysql_fetch_array($tabla)) {
                                                                $cod = $registro["id"];
                                                        }
                                                        if(empty($cod) || $cod == $idC){
                                                            $tabla = mysql_query("SELECT MAX(id) as id FROM productosOKBETA WHERE categoria = ".$cat." LIMIT 1");
                                                            if ((!empty($tabla)) && $registro = mysql_fetch_array($tabla)) {
                                                             $cod = $registro["id"];
                                                            }
                                                         }  
                                                        }else{
                                                            $cod = $pos-1;
                                                            if($cod < 1){
                                                                $cod = 16;
                                                            }
                                                        }
                                                        ?>
                                                        <a href="?id=<?= $cod ?><?= (!empty($_GET['sec']))?'&sec=fans':''?>"><img src="imagenes/anterior2.jpg" border="0" /></a>
                                                    </div>
                                                    <div id="Descripcion" class="Tahoma gris f12">
                                                        <?php
                                                        if ($ref != 'fans') {
                                                            echo '<strong>#' . $idC . ' - ' . $desc . '</strong>';
                                                        }
                                                        ?>
                                                    </div>
                                                       <? 
                                                       $cod ='';
                                                       if(empty($_GET['sec'])){
                                                            $tabla = mysql_query("(SELECT id FROM productosOKBETA WHERE id > ".$pos." and categoria = ".$cat." ORDER BY id ASC LIMIT 1)
 UNION (SELECT id FROM productosOKBETA WHERE id = (SELECT MAX(id) FROM productosOKBETA) and categoria = ".$cat.")
 LIMIT 1");     
                                                          if ((!empty($tabla)) && $registro = mysql_fetch_array($tabla)) {
                                                             $cod = $registro["id"];
                                                         }
                                                         if(empty($cod) || $cod == $idC){
                                                            $tabla = mysql_query("SELECT MIN(id) as id FROM productosOKBETA WHERE categoria = ".$cat." LIMIT 1");
                                                            if ((!empty($tabla)) && $registro = mysql_fetch_array($tabla)) {
                                                             $cod = $registro["id"];
                                                            }
                                                         }
                                                        }else{
                                                            $cod = $pos+1;
                                                            if($cod > 16){
                                                                $cod = 1;
                                                            }
                                                        }
                                                        ?>
                                                    <div id="Siguiente"><a href="?id=<?= $cod ?><?= (!empty($_GET['sec']))?'&sec=fans':''?>">														
                                                            <img src="imagenes/siguiente2.jpg" border="0" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </center>
                                    </body>
                                    </html>
