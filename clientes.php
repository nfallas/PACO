<!DOCTYPE HTML> 
<html>
<head>

<title>Paco - Los Leones - Castro Fallas</title>

  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href="css/facybox.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="css/facybox_urls.css" media="screen" rel="stylesheet" type="text/css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <script src="js/facybox.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>

var xmlhttp;

if (window.XMLHttpRequest)

  {// code for IE7+, Firefox, Chrome, Opera, Safari

  xmlhttp=new XMLHttpRequest();

  }else{// code for IE6, IE5

  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

  }

xmlhttp.onreadystatechange=function()

  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)

    {

    document.getElementById("selectEmpresa").innerHTML=xmlhttp.responseText;

    }

  }

xmlhttp.open("GET","selectEmpresa.php?parametro=n");

xmlhttp.send();

</script>

<script>

function ordenarTabla(orden)
{
	var xmlhttp;

if (window.XMLHttpRequest)

  {// code for IE7+, Firefox, Chrome, Opera, Safari

  xmlhttp=new XMLHttpRequest();

  }else{// code for IE6, IE5

  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

  }

xmlhttp.onreadystatechange=function()

  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)

    {

    document.getElementById("selectEmpresa").innerHTML=xmlhttp.responseText;

    }

  }

xmlhttp.open("GET","selectEmpresa.php?parametro=" + orden);

xmlhttp.send();
}

function buscarCliente(tipo)
{
	var xmlhttp;

if (window.XMLHttpRequest)

  {// code for IE7+, Firefox, Chrome, Opera, Safari

  xmlhttp=new XMLHttpRequest();

  }else{// code for IE6, IE5

  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

  }

xmlhttp.onreadystatechange=function()

  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)

    {

    document.getElementById("selectEmpresa").innerHTML=xmlhttp.responseText;

    }

  }

var elemento = "";

if(tipo == 'cliente'){
	elemento = document.getElementById("buscarCliente").value;
}else{
	elemento = document.getElementById("buscarVendedor").value;
}

xmlhttp.open("GET","buscarEmpresa.php?parametro=" + elemento + "&tipo=" + tipo);

xmlhttp.send();
}
</script>

</head>
<body> 


<!-- SUPERPONER INFO -->
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	    <input type="hidden" name="business" value="gmauwolff@gmail.com">
	    <input type="hidden" name="cmd" value="_donations">
	    <input type="hidden" name="item_name" value="Facybox">
	    <input type="hidden" name="item_number" value="Facybox's Donation">
	    <input type="hidden" name="currency_code" value="USD">
	    <img alt="" border="0" width="1" height="1" src="https://www.paypal.com/en_US/i/scr/pixel.gif" >      
	</form>

	<div id="main">
	<header>
	<div id="logo">
        <!-- class="logo_colour", allows you to change the colour of the text -->
        <h1><br/><p><a href="index.html">Paco</a></p>
	<br/><p>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="index.html"><span class="logo_colour">Los Leones</span></a></p>
	<br/><p>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="index.html">Castro Fallas</a></p></h1>
        </div>

      <nav>

<!-- Menu -->

        <ul class="sf-menu" id="nav">
		<li><a href="inicio.html">Inicio</a></li>
		<li><a href="clientes.php">Clientes</a></li>
		<li><a href="#">Bodega</a>
			<ul>
        		<li><a href="bodega_inventario.html">Inventario</a></li>
			<li><a href="bodega_mercaderia.html">Mercaderia</a></li>
			<li><a href="bodega_bodegacr.html">Bodega C.R.</a></li>
            		</ul>
          	</li>
		<li><a href="#">Transporte</a>
			<ul>
        		<li><a href="transporte_furgon.html">Furgón</a></li>
			<li><a href="transporte_cabezal.html">Cabezal</a></li>
			<li><a href="transporte_conductor.html">Conductor</a></li>
            		</ul>
          	</li>
		<li><a href="#">Documentación</a>
			<ul>
        		<li><a href="factura.html">Factura</a></li>
			<li><a href="carta_porte.html">Carta Porte</a></li>
			<li><a href="manif_carga.html">Manifiesto de Carga</a></li>
              		<li><a href="mov_comercial.html">Movimiento Comercial</a></li>
              		<li><a href="recibo.html">Recibo</a></li>
            		</ul>
          	</li>
          	<li><a href="#">Mi Cuenta</a>
			<ul>
        		<li><a href="micuenta.html">Editar Información</a></li>
			<li><a href="index.html">Salir</a>
            		</ul></li>
        </ul>
	<!-- Menu -->	

</nav>
	</header>
	
	<div id="site_content1">
		<div class="form_settings">
       		<div class="sidebar1">
			<div class="sidebar1">
				<!-- Sub Menu -->
				<div class="form_settings">
					<!-- Buscar -->
					<p><br/><h4>Buscar Empresas por Cliente</h4><input id="buscarCliente" type="text" name="name" value="digite cliente"/>	
						
					<input class="submit" type="submit" name="name" value="Buscar" onclick="buscarCliente('cliente')"/>			
					</p>
					<p><br/><h4>Buscar Empresas por Vendedor</h4><input id="buscarVendedor" type="text" name="name" value="digite vendedor"/>	
						<input class="submit" type="submit" name="name" value="Buscar" onclick="buscarCliente('empresa')"/>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<!-- Botones -->
					  <a href="#nuevoCliente" rel="facybox">
						<input class="submit" type="submit" name="name" value="Nuevo Cliente"/></a>
					  <a href="#nuevaEmpresa" rel="facybox">
						<input class="submit" type="submit" name="name" value="Nueva Empresa"/></a>
					</p>
				</div>				

			</div>
			<!-- Sub Menu -->

<!-- Tabla -->

			<div id="selectEmpresa">
			</div>



       		</div><!--sidebar1-->
		</div>	<!--form seting-->
    	</div>

	<footer>
      		<!-- Menu Inferior -->
      		<p><a href="inicio.html">Inicio</a> | 
			<a href="clientes.html">Clientes</a> | 
			<a href="bodega.html">Bodega</a> | 
			<a href="transporte.html">Transporte</a> | 
			<a href="factura.html">Factura</a>| 
			<a href="carta_porte.html">Carta Porte</a> | 
			<a href="manif_carga.html">Manifiesto de Carga</a> |			
			<a href="mov_comercial.html">Movimiento Comercial</a> | 
			<a href="recibo.html">Recibo</a>
		</p>

<!-- Informacion Final -->
      		<p>Copyright &copy; Ulatina | Practica Empresarial Supervisada</p>
    	</footer>
    		<p>&nbsp;</p>
    		<p>&nbsp;</p>
  </div>

  <!-- SuperPoner Info -->
  <div id="nuevoCliente" style="display:none;">
	<div class="form_settings">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#nuevoCliente" >
			<!-- Usuario -->	
			<h2> Nuevo cliente </h2>
		<table>
			<tr>
				<td>	<p><br/><h4>Nombre</h4><input type="text" name="nombreCliente" value=""/> </p>	</td>
				<td>	<p><br/><h4>Primer Apellido</h4><input type="text" name="ap1Cliente" value=""/>	</p>	</td>
				<td>	<p><br/><h4>Segundo Apellido</h4><input type="text" name="ap2Cliente" value=""/>	</p>	</td>
			</tr>
			<tr>
				<td>	<p><br/><h4>Cédula</h4><input type="text" name="cedulaCliente" value=""/>	</p>	</td>
				<td>	<p><br/><h4>Dirección de Correo</h4><input type="text" name="emailCliente" value=""/>	</p> 	</td>
				<td>	<p><br/><h4>Teléfono</h4><input type="text" name="telCliente" value=""/>	</p>	</td>
			</tr>
			<tr>
				<td></td><td></td>
			   <td><a href="#"><input class="submit" type="submit" name="name" value="Insertar" position="absolute"/></a> </td>
			</tr>
		</table>
<p id="response"></p>
		</form>
	</div>
  </div>

  <div id="nuevaEmpresa" style="display:none;">
	<div class="form_settings">
		<!-- Usuario -->	
		<h2> Nueva Empresa </h2>
		<table>
			<tr>
			<p><br/><h4>Nombre de la Empresa</h4><input type="text" name="name" value=""/>	</p>
			<p><br/><h4>Cliente</h4>
				<select id="id" name="name">
					<option value="1">Cliente 1</option>
					<option value="2">Cliente 2</option>
				</select></p>
			<p><br/><h4>Vendedor</h4>
				<select id="id" name="name">
					<option value="1">Vendedor 1</option>
					<option value="2">Vendedor 2</option>
				</select></p>
			<p><br/><h4>Dirección</h4><input type="text" name="name" value=""/>	</p>
			<p><br/><h4>Dirección de Correo</h4><input type="email" name="email" value=""/>	</p>
			<p><br/><h4>Teléfono</h4><input type="text" name="tel" value=""/>	</p>

			<a href="#"><input class="submit" type="submit" name="name" value="Insertar" position="absolute"/></a>
		</table>
		
	</div>
  </div>
  <!-- SuperPoner Info -->				

	<!-- javascript at the bottom for fast page loading -->
	<script type="text/javascript" src="js/jquery.js"></script>
  	<script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  	<script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  	<script type="text/javascript" src="js/image_fade.js"></script>
  	<script type="text/javascript">
    		$(document).ready(function() {
      		$('ul.sf-menu').sooperfish();
    		});
  	</script>
	<script src="js/facybox.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
  	<script type="text/javascript">
    		$(document).ready(function() {
      		$('#images').kwicks({
        	max : 600,
        	spacing : 2
      		});
      		$('ul.sf-menu').sooperfish();
    		});
  	</script>
	<!-- SuperPoner Info -->
  	<script type="text/javascript">
    		jQuery(document).ready(function($) {
      		$('a[rel*=facybox]').facybox({
        	// noAutoload: true
      		});
      
      		$("h2",$("#changelog")).css("cursor","pointer").click(function(){
          	$(this).next().slideToggle('fast');
      		}).trigger("click");
      		});
  	</script>


<?php
//validacion

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$vacio = false;
	$mensaje = 'Es necesario que llene los siguientes espacios:';

	//echo "<SCRIPT language=\"JavaScript\"> 
	//	alert(\"caca\");
	// 	</script>";

	$nombre = $primer_apellido = $segundo_apellido = $correo = $telefono = $identificacion = "";

	if (empty($_POST["nombreCliente"]))
		{

		$vacio = true;
		$mensaje .= '\n-Nombre';

		}
	else
		{
		$nombre = test_input($_POST["nombreCliente"]);
		}

	if (empty($_POST["ap1Cliente"]))
		{
		
		$vacio = true;
		$mensaje .= '\n-Primer Apellido';

		}
	else
		{$primer_apellido = test_input($_POST["ap1Cliente"]);}

	if (empty($_POST["ap2Cliente"]))
		{
			$segundo_apellido = "";
		}
	else
		{$segundo_apellido = test_input($_POST["ap2Cliente"]);}

	if (empty($_POST["emailCliente"]))
		{
		$vacio = true;
		$mensaje .= '\n-Correo';
		}
	else
		{$correo = test_input($_POST["emailCliente"]);}

	if (empty($_POST["telCliente"]))
		{$telefono = "";}
	else
		{$telefono = test_input($_POST["telCliente"]);}

	if (empty($_POST["cedulaCliente"]))
		{

		$vacio = true;
		$mensaje .= '\n-Cedula';

		}
	else
		{$identificacion = test_input($_POST["cedulaCliente"]);}

	if($vacio)
	{	
		echo "<SCRIPT language=\"JavaScript\"> 
		alert(\"$mensaje\");
		jQuery.facybox({ div: '#nuevoCliente' });
	 	</script>";
	}
}

function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}

//validacion
?>

</body>
</html>
