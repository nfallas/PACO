<?php

ini_set ('error_reporting', E_ALL);

$con = mysqli_connect('localhost','root','steph1','prueba');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

if($_GET['parametro'] != "n")
{
$select = "SELECT empresa.id_empresa, empresa.nombre, vendedor.nombre AS vendedor, cliente.nombre AS cliente, empresa.correo, empresa.telefono, empresa.direccion FROM empresa, cliente, vendedor WHERE empresa.cliente = cliente.id_cliente AND empresa.vendedor = vendedor.id_vendedor ORDER BY " . $_GET['parametro'] . ";";

	}else{

$select = "SELECT empresa.id_empresa, empresa.nombre, vendedor.nombre AS vendedor, cliente.nombre AS cliente, empresa.correo, empresa.telefono, empresa.direccion FROM empresa, cliente, vendedor WHERE empresa.cliente = cliente.id_cliente AND empresa.vendedor = vendedor.id_vendedor;";
}

$result = mysqli_query($con, $select);


echo "<table style=\"width:100%; border-spacing:0;\"><tr><th></th><th><a onclick=\"ordenarTabla('id_empresa')\">ID</a></th><th><a onclick=\"ordenarTabla('nombre')\">Empresa</a></th><th><a onclick=\"ordenarTabla('cliente')\">Dueño</a></th><th><a onclick=\"ordenarTabla('vendedor')\">Vendedor</a></th><th><a onclick=\"ordenarTabla('correo')\">Correo</a></th><th><a onclick=\"ordenarTabla('telefono')\">Telefono</a></th><th><a onclick=\"ordenarTabla('direccion')\">Dirección</a></th></tr>";


while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";

  echo "<td><input class=\"checkbox\" type=\"checkbox\" name=\"name\" value=\"\" /></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[id_empresa] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[nombre] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[cliente] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[vendedor] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[correo] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[telefono] . "</a></td>";
  echo "<td><a href=\"#info\" rel=\"facybox\">" . $row[direccion] . "</a></td>";
  echo "</tr>";

  }
echo "</table>";

mysqli_close($con);
?>
