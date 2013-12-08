<?php

ini_set ('error_reporting', E_ALL);

$con = mysqli_connect('localhost','root','steph1','prueba');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

//$select = "DELETE FROM mercaderia WHERE id=" . $_GET['parametro'] . ";";


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
