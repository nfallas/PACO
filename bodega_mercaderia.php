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

    document.getElementById("tablaMercaderia").innerHTML=xmlhttp.responseText;

    }

  }

xmlhttp.open("GET","selectMercaderia.php?parametro=n");

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

    document.getElementById("tablaMercaderia").innerHTML=xmlhttp.responseText;

    }

  }

xmlhttp.open("GET","selectMercaderia.php?parametro=" + orden);

xmlhttp.send();
}

function buscar(tipo)
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

    document.getElementById("tablaMercaderia").innerHTML=xmlhttp.responseText;

    }

  }

var elemento = "";

if(tipo == 'id_mercaderia'){
	elemento = document.getElementById("buscarId").value;
}else{
	elemento = document.getElementById("buscarMC").value;
}

alert(elemento);
xmlhttp.open("GET","buscarMercaderia.php?parametro=" + elemento + "&tipo=" + tipo);

xmlhttp.send();
}

function agregarDel(id)
{
	if(document.getElementById(id).checked)
	{
		eliminar.push(document.getElementById(id).name);
	}else{
		var aux = eliminar.indexOf(id);
		eliminar.splice(id);
	}
eliminar.push(document.getElementById(id).name);
}

function eliminar()
{
	for (var i=0;i<eliminar.length;i++){ //empieza for
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

    document.getElementById("tablaMercaderia").innerHTML=xmlhttp.responseText;

    }

  }

xmlhttp.open("GET","eliminarEmpresa.php?parametro=" + eliminar[i]);

xmlhttp.send();
	} //termina for
}
</script>

</head>

<body>
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
        		<li><a href="bodega_inventario.php">Inventario</a></li>
			<li><a href="bodega_mercaderia.php">Mercaderia</a></li>
			<li><a href="bodega_bodegacr.php">Bodega C.R.</a></li>
            		</ul>
          	</li>
		<li><a href="#">Transporte</a>
			<ul>
        		<li><a href="transporte_furgon.php">Furgón</a></li>
			<li><a href="transporte_cabezal.php">Cabezal</a></li>
			<li><a href="transporte_conductor.php">Conductor</a></li>
            		</ul>
          	</li>
		<li><a href="#">Documentación</a>
			<ul>
        		<li><a href="factura.php">Factura</a></li>
			<li><a href="carta_porte.php">Carta Porte</a></li>
			<li><a href="manif_carga.php">Manifiesto de Carga</a></li>
              		<li><a href="mov_comercial.php">Movimiento Comercial</a></li>
              		<li><a href="recibo.php">Recibo</a></li>
            		</ul>
          	</li>
          	<li><a href="#">Mi Cuenta</a>
			<ul>
        		<li><a href="micuenta.php">Editar Información</a></li>
			<li><a href="index.html">Salir</a>
            		</ul></li>
        </ul>
	<!-- Menu -->

	
	

	</nav>
	</header>
	
	<div id="site_content1">
       		<div class="sidebar1">
			<div class="sidebar1">
				<!-- Sub Menu -->
				<div class="form_settings">
					<!-- Buscar -->
					<p><br/><h4>Buscar Mercaderia por ID</h4><input type="text" id="buscarId" name="name" value="digite id"/>	
						
						<input class="submit" type="submit" name="name" value="Buscar" onClick="buscar('id_mercaderia')"/>			
					</p>
					<p><br/><h4>Buscar Mercaderia por Movimiento Comercial</h4><input type="text" id="buscarMC" name="name" value="digite numero de movimiento"/>	
						
						<input class="submit" type="submit" name="name" value="Buscar" onClick="buscar('movimiento_comercial')"/>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<!-- Botones -->
					  <a href="#nuevaMercaderia" rel="facybox">
						<input class="submit2" type="submit" name="name" value="Nueva Mercadería"/></a>
					</p>
				</div>				

			</div>
			<!-- Sub Menu -->
			<!-- Editar y deshabilitar 
			  <a href="#">
				<input class="submit2" type="submit" name="name" value="Editar Mercadería"/></a>
			  <a href="#">
				<input class="submit2" type="submit" name="name" value="Deshabilitar Mercadería"/></a> -->
			<!-- Tabla -->
			<h2>Listado de Mercadería</h2>
		  	
			<div id="tablaMercaderia"></div>		  	
	
			<p>
				<input class="submitE" type="submit" name="name" value="Eliminar" onclick="eliminar()"/>
				<input class="submitE" type="submit" name="name" value="Refrescar" onclick="ordenarTabla('n')"/></p>

       		</div><!--sidebar1-->
    	</div>

	<footer>
      		<!-- Menu Inferior -->
      		<p><a href="inicio.html">Inicio</a> | 
			<a href="clientes.php">Clientes</a> | 
			<a href="bodega_inventario.php">Inventario</a> |
			<a href="bodega_mercaderia.php">Mercadería</a> | 
			<a href="bodega_bodegacr.php">Bodega C.R.</a> |  
			<a href="transporte_furgon.php">Furgón</a> | 
			<a href="transporte_cabezal.php">Cabezal</a> | 
			<a href="transporte_conductor.php">Conductor</a> | 
			<a href="factura.php">Factura</a>| 
			<a href="carta_porte.php">Carta Porte</a> | 
			<a href="manif_carga.php">Manifiesto de Carga</a> |			
			<a href="mov_comercial.php">Movimiento Comercial</a> | 
			<a href="recibo.php">Recibo</a>
		</p>
			
			

		<!-- Informacion Final -->
      		<p>Copyright &copy; Ulatina | Practica Empresarial Supervisada</p>
    	</footer>
    		<p>&nbsp;</p>
    		<p>&nbsp;</p>
  </div>

  <!-- SuperPoner Info -->
  <div id="nuevaMercaderia" style="display:none;">
	<div class="form_settings">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#nuevaMercaderia" >
		<!-- Usuario -->	
		<h2> Nueva Mercadería </h2>
		<table>
			<p><tr><h4>Cantidad de Bultos</h4><input type="text" id="inputBultos" name="inputBultos" value=""/></p>
			<p><tr><h4>Peso</h4><input type="text" id="inputPeso" name="inputPeso" value="" /></p>
			<p><tr><h4>Descripción</h4><input type="text" id="inputDescripcion" name="inputDescripcion" value="" /></p>
			<p><tr><h4>Movimiento Comercial</h4><select id="selectMC" name="selectMC">
								<option value="1">MC 1</option>
							</select></p>
			<p><tr><h4>Clase</h4><input type="text" id="inputClase" name="inputClase" value=""/></p>
			<p><tr><h4>Cantidad</h4><input type="text" id="inputCantidad" name="inputCantidad" value=""/></p>
			<p><tr><h4>Precio Unidad</h4><input type="text" id="inputPrecioUnidad" name="inputPrecioUnidad" value="" /></p>
			<p><tr><h4>Total</h4><input type="text" id="inputTotal" name="inputTotal" value="" /></p>
			<p><tr><h4>Arancel</h4><input type="text" id="inputArancel" name="inputArancel" value="" /></p>
		

		<a href="#"><input class="submit" type="submit" name="name" value="Insertar" position="absolute"/></a>
	</form>
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

<script>


var eliminar = new Array();
 


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

	$cantidad_bultos = $peso = $descripcion = $clase = $cantidad = $precio_unidad = $total = $arancel = $movimiento_comercial = "";


/* ids
inputBultos
inputPeso
inputDescripcion
selectMC
inputClase
inputCantidad
inputPrecioUnidad
inputTotal
inputArancel
*/


	if (empty($_POST["inputBultos"]))
		{

		$vacio = true;
		$mensaje .= '\n-Bultos';

		}
	else
		{
		$cantidad_bultos = test_input($_POST["inputBultos"]);
		}

	if (empty($_POST["inputPeso"]))
		{
		
		$vacio = true;
		$mensaje .= '\n-Peso';

		}
	else
		{$peso = test_input($_POST["inputPeso"]);}

	if (empty($_POST["inputDescripcion"]))
		{
			$descripcion = "";
		}
	else
		{$descripcion = test_input($_POST["inputDescripcion"]);}

	if (empty($_POST["selectMC"]))
		{
		
		}

	if (empty($_POST["inputClase"]))
		{
			$vacio = true;
			$mensaje .= '\n-Clase';
		}
	else
		{$clase = test_input($_POST["inputClase"]);}

	if (empty($_POST["inputCantidad"]))
		{

		$vacio = true;
		$mensaje .= '\n-Cantidad';

		}
	else
		{$cantidad = test_input($_POST["inputCantidad"]);}

	if (empty($_POST["inputPrecioUnidad"]))
		{

		$vacio = true;
		$mensaje .= '\n-Precio por Unidad';

		}
	else
		{$precio_unidad = test_input($_POST["inputPrecioUnidad"]);}

	if (empty($_POST["inputTotal"]))
		{

		$vacio = true;
		$mensaje .= '\n-Total';

		}
	else
		{$total = test_input($_POST["inputTotal"]);}

	if (empty($_POST["inputArancel"]))
		{

		$vacio = true;
		$mensaje .= '\n-Arancel';

		}
	else
		{$arancel = test_input($_POST["inputArancel"]);}

	//echo "<script>
	//	document.getElementById(\"rueba\").innerHTML=\"caca\";
	//	document.getElementById(\"inputCliente\").value=\"mafe\";
//</script>";

	if($vacio)
	{	
		echo '<SCRIPT language="JavaScript"> 
		alert("'.$mensaje.'");
		jQuery.facybox({ div: \'#nuevaMercaderia\' });
	 	</script>';
		$vacio = false;
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
