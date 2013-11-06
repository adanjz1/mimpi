<?php
mysql_connect('localhost','darioa','14k8d4uae752')or die ('Ha fallado la conexi�n: '.mysql_error());
mysql_select_db('darioa_web')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

$tabla = mysql_query("SELECT * FROM productosOKBETA");
while ($registro = mysql_fetch_array($tabla)) {
    $precio = intVal($registro['precio']).'.99';
    $query = 'update productosOKBETA set precio= '.$precio.' where id ='.$registro['id'];
    echo $query;
    mysql_query($query);
}