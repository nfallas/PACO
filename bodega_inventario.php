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

    document.getElementById("tablaInventario").innerHTML=xmlhttp.responseText;

    }

  }

xmlhttp.open("GET","selectInventario.php?parametro=n");

xmlhttp.send();

</script>

<script>
function buscarInventario(tipo)
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

    document.getElementById("selectInventario").innerHTML=xmlhttp.responseText;

    }

  }

var elemento = "";

if(tipo == 'id_inventario'){
	elemento = document.getElementById("buscar_inventario_id").value;
}else{
	if(tipo == 'empresa')
	{	
		elemento = document.getElementById("buscar_inventario_empresa").value;
	}else{
		elemento = document.getElementById("buscar_inventario_fecha").value;
	}
}

xmlhttp.open("GET","buscarInventario.php?parametro=" + elemento + "&tipo=" + tipo);

xmlhttp.send();
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
					<p><br/><h4>Buscar Inventario por ID</h4><input type="text" id="buscar_inventario_id" name="name" value="digite id"/>	
						<a href="#" rel="facybox">
						<input class="submit" type="submit" name="name" value="Buscar" onClick="buscarInventario('id_inventario')"/></a>			
					</p>
					<p><br/><h4>Buscar Inventario por Empresa Cliente</h4><input id="buscar_inventario_empresa" type="text" name="name" value="digite empresa"/>	
						<a href="#" rel="facybox">
						<input class="submit" type="submit" name="name" value="Buscar" onClick="buscarInventario('empresa')"/></a>			
					</p>
					<p><br/><h4>Buscar Inventario por Fecha</h4><input type="date" id="buscar_inventario_fecha" name="date" value=""/>	
						<a href="#" rel="facybox">
						<input class="submit" type="submit" name="name" value="Buscar" onClick="buscarInventario('fecha')"/></a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<!-- Botones --> 
					  <a href="#nuevoMovInventario" rel="facybox">
						<input class="submit2" type="submit" name="name" value="Nuevo Movimiento"/></a>
					</p>
				</div>				

			</div>
			<!-- Sub Menu -->
			<!-- Editar y Deshabilitar 
			<a href="#">
				<input class="submit" type="submit" name="name" value="Editar Bulto"/></a>
			  <a href="#">
				<input class="submit2" type="submit" name="name" value="Deshabilitar Bulto"/></a> -->
			<!-- Tabla -->
			<h2>Inventario</h2>
		  	
		  	<div id="tablaInventario"></div>

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
  <div id="nuevoMovInventario" style="display:none;">
	<div class="form_settings">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
		<!-- Usuario -->	
		<h2> Nuevo Movimiento en Inventario </h2>
		<table>
			<tr>
				<td> </td>
				<td>
					<p><br/><h4>Fecha de Ingreso</h4><input type="date" id="id_fecha_ingreso" name="date" value=""/>	</p>	</td>
			</tr>
			<tr>
				<td>
					<p><br/><h4>Mercadería</h4>
						<select id="id_mercaderia" name="mercaderia">
<?php //script de select mercaderia

ini_set ('error_reporting', E_ALL);

$con = mysqli_connect('localhost','root','steph1','prueba');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

$select = "SELECT id_mercaderia FROM mercaderia";

$result = mysqli_query($con, $select);

$contador = 1;

while($row = mysqli_fetch_array($result))
  {
  
  echo "<option value=\"" . $contador . "\">" . $row[id_mercaderia] . "</option>";
  $contador = $contador + 1;
  }

mysqli_close($con);
 //fin de select mercaderia 
?>
						</select></p>	</td>
				<td>
					<p><br/><h4>Empresa</h4>
						<select id="id" name="empresa">
<?php //script de select empresa

ini_set ('error_reporting', E_ALL);

$con = mysqli_connect('localhost','root','steph1','prueba');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

$select = "SELECT nombre FROM empresa";

$result = mysqli_query($con, $select);

$contador = 1;

while($row = mysqli_fetch_array($result))
  {
  
  echo "<option value=\"" . $contador . "\">" . $row[nombre] . "</option>";
  $contador = $contador + 1;
  }

mysqli_close($con);
 //fin de select empresa 
?>
						</select></p>	</td>
			</tr>
			<tr>
				<td>	</td>
				<td>	
				<a href="#"><input class="submit" type="submit" name="name" value="Insertar" position="absolute"/></a>	
				</td> 
			</tr>


		</table>
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

<?php
//validacion de insert e insert
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	echo '<script> 
	alert("Ingresado los siguientes datos:\n-Fecha: '. $_POST["date"] .'\n-Bulto: '. $_POST["mercaderia"] .'\n-Empresa: '. $_POST["empresa"].'"); 
</script>';
}

//validacion
?>

</body>
</html>
