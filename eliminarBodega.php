<?php

ini_set ('error_reporting', E_ALL);

$con = mysqli_connect('localhost','root','steph1','prueba');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

//$select = "DELETE FROM bodegaCR WHERE id=" . $_GET['parametro'] . ";";


$result = mysqli_query($con, $select);


echo "<table style=\"width:100%; border-spacing:0;\"><tr><th></th><th><a onclick=\"ordenarTabla('id_bodegaCR')\">ID</a></th><th><a onclick=\"ordenarTabla('identificador')\">Identificador</a></th><th><a onclick=\"ordenarTabla('rack')\">Rack</a></th><th><a onclick=\"ordenarTabla('nivel')\">Nivel</a></th><th><a onclick=\"ordenarTabla('pista')\">Pista</a></th><th><a onclick=\"ordenarTabla('id_carta_porte')\">Carta Porte</a></th></tr>";

$contador = 0;

while($row = mysqli_fetch_array($result))
  {
  
 echo "<tr>";
  echo "<td><input class=\"checkbox\" type=\"checkbox\" id=\"" . $contador . "\" name=\"" . $row[id_bodegaCR] . "\" onclick=\"agregarDel(" . $contador . ")\"/></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[id_bodegaCR] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[identificador] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[rack] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[nivel] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[pista] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[id_carta_porte] . "</a></td>";
  echo "</tr>";
  $contador = $contador + 1;

  }
echo "</table>";

mysqli_close($con);
?>
