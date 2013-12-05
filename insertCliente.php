<?php

$con=mysqli_connect("127.0.0.1","root","steph1","prueba");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//validacion

$nomErr = $ap1Err = $correoErr = $identiErr = "";

$nombre = $primer_apellido = $segundo_apellido = $correo = $telefono = $identificacion = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["nombreCliente"]))
		{$nomErr = "Se requiere el nombre";}
	else
		{$nombre = test_input($_POST["nombreCliente"]);}

	if (empty($_POST["ap1Cliente"]))
		{$ap1Err = test_input($_POST["ap1Cliente"])}
	else
		{$primer_apellido = test_input($_POST["ap1Cliente"]);}

	if (empty($_POST["ap2Cliente"]))
		{$segundo_apellido = "";}
	else
		{$segundo_apellido = $segundo_apellido = test_input($_POST["ap2Cliente"]);}

	if (empty($_POST["emailCliente"]))
		{$correoErr = "Falta el correo";}
	else
		{$correo = test_input($_POST["emailCliente"]);}

	if (empty($_POST["telCliente"]))
		{$telefono = "";}
	else
		{$telefono = test_input($_POST["telCliente"]);}

	if (empty($_POST["cedulaCliente"]))
		{$identiErr = "Falta la identificacion/cedula";}
	else
		{$identificacion = test_input($_POST["cedulaCliente"]);}

}

function text_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

//validacion


$sql="INSERT INTO cliente 
(nombre, primer_apellido, segundo_apellido, correo, telefono, identificacion)
VALUES
('$_POST[nombreCliente]', '$_POST[ap1Cliente]', '$_POST[ap2Cliente]', '$_POST[emailCliente]', '$_POST[telCliente]', '$_POST[cedulaCliente]');";

/*if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
*/

mysqli_close($con);
?>
