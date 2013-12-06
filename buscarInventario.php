<?php

ini_set ('error_reporting', E_ALL);

$con = mysqli_connect('localhost','root','steph1','prueba');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

if($_GET['tipo'] == 'id_inventario')
{
$select = "SELECT inventario.id_inventario, inventario.fecha_ingreso, inventario.bultos, mercaderia.id_mercaderia, empresa.nombre FROM inventario, mercaderia, empresa WHERE inventario.empresa = empresa.id_empresa AND inventario.mercaderia = mercaderia.id_mercaderia AND inventario.id_inventario LIKE '" . $_GET['parametro'] . "%';";
}else{
	if($_GET['tipo'] == 'empresa')
	{
		"SELECT inventario.id_inventario, inventario.fecha_ingreso, inventario.bultos, mercaderia.id_mercaderia, empresa.nombre FROM inventario, mercaderia, empresa WHERE inventario.empresa = empresa.id_empresa AND inventario.mercaderia = mercaderia.id_mercaderia AND empresa.nombre LIKE '" . $_GET['parametro'] . "%';";
	}else{
		"SELECT inventario.id_inventario, inventario.fecha_ingreso, inventario.bultos, mercaderia.id_mercaderia, empresa.nombre FROM inventario, mercaderia, empresa WHERE inventario.empresa = empresa.id_empresa AND inventario.mercaderia = mercaderia.id_mercaderia AND inventario.fecha_ingreso LIKE '" . $_GET['parametro'] . "%';";
	}
}

$result = mysqli_query($con, $select);


echo "<table style=\"width:100%; border-spacing:0;\"><tr><th><a onclick=\"ordenarTabla('id_empresa')\">ID</a></th><th><a onclick=\"ordenarTabla('nombre')\">Empresa</a></th><th><a onclick=\"ordenarTabla('cliente')\">Cliente</a></th><th><a onclick=\"ordenarTabla('vendedor')\">Vendedor</a></th><th><a onclick=\"ordenarTabla('correo')\">Correo</a></th><th><a onclick=\"ordenarTabla('telefono')\">Telefono</a></th><th><a onclick=\"ordenarTabla('direccion')\">Dirección</a></th></tr>";


while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row[id_empresa] . "</td>";
  echo "<td>" . $row[nombre] . "</td>";
  echo "<td>" . $row[cliente] . "</td>";
  echo "<td>" . $row[vendedor] . "</td>";
  echo "<td>" . $row[correo] . "</td>";
  echo "<td>" . $row[telefono] . "</td>";
  echo "<td>" . $row[direccion] . "</td>";
  echo "</tr>";

  }
echo "</table>";

mysqli_close($con);
?>
