<!DOCTYPE HTML>
<html>

<head>
  <title>Paco - Los Leones - Castro Fallas</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
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
	
	<div id="site_content">
	
      		<div id="sidebar_container">
			
        		<!--<div class="sidebar">
          		</div>-->
			
      		</div>
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
</body>
</html>
