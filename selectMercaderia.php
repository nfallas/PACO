<?php

ini_set ('error_reporting', E_ALL);

$con = mysqli_connect('localhost','root','steph1','prueba');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

if($_GET['parametro'] != "n")
{
$select = "SELECT mercaderia.id_mercaderia, mercaderia.cantidad_bultos, mercaderia.peso, mercaderia.descripcion, movimiento_comercial.id_movimiento_comercial FROM mercaderia, movimiento_comercial WHERE mercaderia.movimiento_comercial = movimiento_comercial.id_movimiento_comercial ORDER BY " . $_GET['parametro'] . ";";

	}else{

$select = "SELECT mercaderia.id_mercaderia, mercaderia.cantidad_bultos, mercaderia.peso, mercaderia.descripcion, movimiento_comercial.id_movimiento_comercial FROM mercaderia, movimiento_comercial WHERE mercaderia.movimiento_comercial = movimiento_comercial.id_movimiento_comercial;";
}

$result = mysqli_query($con, $select);


echo "<table style=\"width:100%; border-spacing:0;\"><tr><th></th><th><a onclick=\"ordenarTabla('id_mercaderia')\">ID</a></th><th><a onclick=\"ordenarTabla('cantidad_bultos')\">Cantidad de Bultos</a></th><th><a onclick=\"ordenarTabla('peso')\">Peso</a></th><th><a onclick=\"ordenarTabla('descripcion')\">Descripció</a></th><th><a onclick=\"ordenarTabla('movimiento_comercial')\">Movimiento Comercial</a></th>";

$contador = 0;

while($row = mysqli_fetch_array($result))
  {
  
  echo "<tr>";
  echo "<td><input class=\"checkbox\" type=\"checkbox\" id=\"" . $contador . "\" name=\"" . $row[id_empresa] . "\" onclick=\"agregarDel(" . $contador . ")\"/></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[id_mercaderia] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[cantidad_bultos] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[peso] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[descripcion] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[id_movimiento_comercial] . "</a></td>";
  echo "</tr>";
  $contador = $contador + 1;

  }
echo "</table>";

mysqli_close($con);
?>
