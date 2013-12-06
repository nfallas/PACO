<?php

ini_set ('error_reporting', E_ALL);

$con = mysqli_connect('localhost','root','steph1','prueba');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

//$select = "DELETE FROM empresa WHERE id=" . $_GET['parametro'] . ";";


$result = mysqli_query($con, $select);


echo "<table style=\"width:100%; border-spacing:0;\"><tr><th></th><th><a onclick=\"ordenarTabla('id_empresa')\">ID</a></th><th><a onclick=\"ordenarTabla('nombre')\">Empresa</a></th><th><a onclick=\"ordenarTabla('cliente')\">Dueño</a></th><th><a onclick=\"ordenarTabla('vendedor')\">Vendedor</a></th><th><a onclick=\"ordenarTabla('correo')\">Correo</a></th><th><a onclick=\"ordenarTabla('telefono')\">Telefono</a></th><th><a onclick=\"ordenarTabla('direccion')\">Dirección</a></th></tr>";

$contador = 0;

while($row = mysqli_fetch_array($result))
  {
  
  echo "<tr>";
  echo "<td><input class=\"checkbox\" type=\"checkbox\" id=\"" . $contador . "\" name=\"" . $row[id_empresa] . "\" onclick=\"agregarDel(" . $contador . ")\"/></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[id_empresa] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[nombre] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[cliente] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[vendedor] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[correo] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[telefono] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[direccion] . "</a></td>";
  echo "</tr>";
  $contador = $contador + 1;

  }
echo "</table>";

mysqli_close($con);
?>
