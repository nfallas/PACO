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
		<div class="form_settings">
	       		<div class="sidebar1">
				<!-- Sub Menu -->
				<div class="sidebar1">
					<!-- Buscar -->
					<p><br/><h4>Buscar Carta Porte</h4><input type="text" name="name" value="digite el número"/>	
						<a href="#" rel="">
						<input class="submit" type="submit" name="name" value="Buscar"/></a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<!-- Botones -->
					        <a href="#nuevaCartaPorte" rel="facybox">
						<input class="submit2" type="submit" name="name" value="Nueva Carta Porte"/></a>
					</p>
				</div><!--sidebar1-->
				<!-- Sub Menu -->
	       		</div><!--sidebar1-->
			<!-- Botones Editar y Deshabilitar -->
			<!--<a href="#">
			 <input class="submit1" type="submit" name="name" value="..."/>
			</a>
			<a href="#">
 			  <input class="submit1" type="submit" name="name" value=" X "/>
			</a>-->


			
		</div>	<!-- Form -->
			
    	</div> <!--side_content1-->

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
  </div> <!--main -->

  <!-- SuperPoner Info -->
  <div id="nuevaCartaPorte" style="display:none;">
	<div class="form_settings">
		<h2> Nueva Carta Porte </h2>
		<table style="width:100%; border-spacing:0;">
				<tr>
					<td>
						<p>	<br/>	<h4> N° </h4>	<h4> 0001 </h4>	</p>	</td>	
					<td>	</td>	
					<td>	
						<p><br/><h4>Fecha</h4><input type="date" name="date" value=""/>	</p>
					</td>
				</tr>

				<tr>
					<td>
						<p><br/><h4>Empresa Transporte</h4><input type="text" name="name" value=""/>	</p>	</td>
					<td>
						<p><br/><h4>Manifiesto de Carga</h4>
							<select id="id" name="name">
								<option value="1">mc 1</option>
								<option value="2">mc 2</option>
							</select></p>	</td>	
					<td>
						<p><br/><h4>Movimiento Comercial</h4>
							<select id="id" name="name">
								<option value="1">MovC 1</option>
								<option value="2">MovC 2</option>
							</select></p>	</td>
				</tr>
				<tr>
					<td>
						<p><br/><h4>Remitente</h4><input type="text" name="name" value=""/>	</p>	</td>
					<td>
						<p><br/><h4>Expedidor</h4><input type="text" name="name" value=""/>	</p>	</td>
					<td>
						<p><br/><h4>Consignatario</h4><input type="text" name="name" value=""/>	</p>	</td>
				</tr>
				<tr>
					<td>	</td>				
					<td>	</td>
					<td>
						<a href="#"><input class="submit" type="submit" name="name" value="Insertar" position="absolute"/></a>
					</td>
				</tr>
				<tr>
					<td> 
						<p> <h4>Pendiente de definir:</h4>
							Pais destino | Cédula(de quien?) | Direccion | </p>
						<p>Lugar de Embarque | Valor Flete </p>
						<p>** Se toma de Movimiento Comercial ??</p>	</td>				
					<td>	</td>	
					<td>	</td>
				</tr>
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
</body>
</html>
