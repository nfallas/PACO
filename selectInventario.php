<?php

ini_set ('error_reporting', E_ALL);

$con = mysqli_connect('localhost','root','steph1','prueba');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

if($_GET['parametro'] != "n")
{
$select = "SELECT inventario.id_inventario, inventario.fecha_ingreso, inventario.bultos, mercaderia.id_mercaderia, empresa.nombre FROM inventario, mercaderia, empresa WHERE inventario.empresa = empresa.id_empresa AND inventario.mercaderia = mercaderia.id_mercaderia ORDER BY " . $_GET['parametro'] . ";";

	}else{

$select = "SELECT inventario.id_inventario, inventario.fecha_ingreso, inventario.bultos, mercaderia.id_mercaderia, empresa.nombre FROM inventario, mercaderia, empresa WHERE inventario.empresa = empresa.id_empresa AND inventario.mercaderia = mercaderia.id_mercaderia;";
}

$result = mysqli_query($con, $select);


echo "<table style=\"width:100%; border-spacing:0;\"><tr><th></th><th><a onclick=\"ordenarTabla('id_inventario')\">ID</a></th><th><a onclick=\"ordenarTabla('fecha_ingreso')\">Fecha de Ingreso</a></th><th><a onclick=\"ordenarTabla('bultos')\">Bultos</a></th><th><a onclick=\"ordenarTabla('id_mercaderia')\">ID de Mercaderia</a></th><th><a onclick=\"ordenarTabla('nombre')\">Empresa</a></th>";

$contador = 0;

while($row = mysqli_fetch_array($result))
  {
  
  echo "<tr>";
  echo "<td><input class=\"checkbox\" type=\"checkbox\" id=\"" . $contador . "\" name=\"" . $row[id_inventario] . "\" onclick=\"agregarDel(" . $contador . ")\"/></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[id_inventario] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[fecha_ingreso] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[bultos] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[id_mercaderia] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[nombre] . "</a></td>";
  echo "</tr>";
  $contador = $contador + 1;

  }
echo "</table>";

mysqli_close($con);
?>
