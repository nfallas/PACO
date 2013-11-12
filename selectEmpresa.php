<?php

ini_set ('error_reporting', E_ALL);

$con = mysqli_connect('localhost','root','steph1','prueba');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }


$result = mysqli_query($con,"SELECT empresa.id_empresa, empresa.nombre, vendedor.nombre AS vendedor, cliente.nombre AS cliente, empresa.correo, empresa.telefono, empresa.direccion FROM empresa, cliente, vendedor WHERE empresa.cliente = cliente.id_cliente AND empresa.vendedor = vendedor.id_vendedor;");


echo "<table style=\"width:100%; border-spacing:0;\"><tr><th>ID</th><th>Empresa</th><th>Cliente</th><th>Vendedor</th><th>Correo</th><th>Telefono</th><th>Dirección</th></tr>";


while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row[id_empresa] . "</td>";
  echo "<td>" . $row[nombre] . "</td>";
  echo "<td>" . $row[vendedor] . "</td>";
  echo "<td>" . $row[cliente] . "</td>";
  echo "<td>" . $row[correo] . "</td>";
  echo "<td>" . $row[telefono] . "</td>";
  echo "<td>" . $row[direccion] . "</td>";
  echo "</tr>";

  }
echo "</table>";

mysqli_close($con);
?>
