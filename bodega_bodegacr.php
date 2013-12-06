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
					<p><br/><h4>Buscar Mercaderia  por ID</h4><input type="text" name="name" value="digite id"/>	
						<a href="#" rel="facybox">
						<input class="submit" type="submit" name="name" value="Buscar"/></a>			
					</p>
					<p><br/><h4>Buscar Mercaderia por Inventario</h4><input type="text" name="name" value="digite Movimiento de Inventario"/>	
						<a href="#" rel="facybox">
						<input class="submit" type="submit" name="name" value="Buscar"/></a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<!-- Botones -->
					  <a href="#nuevoMovBodega" rel="facybox">
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
			<h2>Bodega C.R.</h2>
		  	
		  	<table style="width:100%; border-spacing:0;">
			    	<tr><th> </th>	
					<th>ID</th>
					<th>Bodega</th>	
					<th>Identificador</th>
					<th>Rack</th>
					<th>Nivel</th>
					<th>Pista</th>
					<th>Carta Porte</th>
					<th>Inventario</th>
				</tr>
			    	<tr>
					<td><input class="checkbox" type="checkbox" name="name" value="" /></td>
					<td>ID</td>
					<td>bodega</td>	
					<td>identificador</td>
					<td>#rack</td>
					<td>#nivel</td>
					<td>#pista</td>
					<td>id_cartaporte</td>
					<td>id_inventario</td>
				</tr>
			    	<tr>
					<td><input class="checkbox" type="checkbox" name="name" value="" /></td>
					<td>ID</td>
					<td>bodega</td>	
					<td>identificador</td>
					<td>#rack</td>
					<td>#nivel</td>
					<td>#pista</td>
					<td>id_cartaporte</td>
					<td>id_inventario</td>
				</tr>
			    	<tr>
					<td><input class="checkbox" type="checkbox" name="name" value="" /></td>	
					<td>ID</td>
					<td>bodega</td>	
					<td>identificador</td>
					<td>#rack</td>
					<td>#nivel</td>
					<td>#pista</td>
					<td>id_cartaporte</td>
					<td>id_inventario</td>
				</tr>
		  	</table>

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
  <div id="nuevoMovBodega" style="display:none;">
	<div class="form_settings">
		<!-- Usuario -->	
		<h2> Nuevo Movimiento en Bodega</h2>
		<p><br/><h4>Bodega</h4>
			<select id="id" name="name">
				<option value="1">B 1</option>
				<option value="2">B 2</option>
			</select></p>
		<p><br/><h4>Identificador</h4><input type="text" name="name" value=""/>	</p>
		<p><br/><h4>Rack</h4><input type="text" name="name" value=""/>	</p>
		<p><br/><h4>Nivel</h4><input type="text" name="name" value=""/>	</p>
		<p><br/><h4>Pista</h4><input type="text" name="name" value=""/>	</p>
		<p><br/><h4>Carta Porte</h4>
			<select id="id" name="name">
				<option value="1">CP 1</option>
				<option value="2">CP 2</option>
			</select></p>
		<p><br/><h4>Inventario</h4>
			<select id="id" name="name">
				<option value="1">I 1</option>
				<option value="2">I 2</option>
			</select></p>

		<a href="#"><input class="submit" type="submit" name="name" value="Insertar" position="absolute"/></a>
		
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
