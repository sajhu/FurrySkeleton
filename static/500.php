<?php
/**
 * Activar SAS ERP
 * aplicacion para www.activarsas.com Copyright (C) Activar SAS
 *
 * Developed by:
 * 	Santiago Rojas - www.santiagorojas.co
 *  Sergio Hernandez Charpak 
 *
 * basado en el FrameWork FurrySkeleteton - https://github.com/sajhu/FurrySkeleton
 */

 // -----------------------------------------------

 // Esta pagina es especial, pues en esta es donde se crea la sesión de usuario
 // por lo tanto, al incluir al core.FurrySkeleton, este intentaría enviarme de nuevo aquí
 // Si no existe una sesión válida
 
 // -----------------------------------------------	

	include_once('../core.Settings.php');

?><!DOCTYPE html>
<html lang="es">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>Error del Servidor - Activar ERP</title>
	<meta name="description" content="ACME Dashboard Bootstrap Admin Template." />
	<meta name="author" content="Łukasz Holeczek" />
	<meta name="keyword" content="ACME, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina" />
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo CSS_URL;?>bootstrap.css" rel="stylesheet" />
	<link href="<?php echo CSS_URL;?>bootstrap-responsive.css" rel="stylesheet" />
	<link id="base-style" href="<?php echo CSS_URL;?>style.css" rel="stylesheet" />
	<link id="base-style-responsive" href="<?php echo CSS_URL;?>style-responsive.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css' />
	
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="./css/ie.css" rel="stylesheet" />
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="./css/ie9.css" rel="stylesheet" />
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo IMAGE_URL;?>favicon.ico" />
	<!-- end: Favicon -->
	
		<style type="text/css">
			body { background: url(<?php echo IMAGE_URL;?>bg-login.jpg) !important; }
		</style>
		
		
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
		<div class="container-fluid">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="./"><i class="halflings-icon home"></i></a>
						<a href="../contactenos.html"><i class="halflings-icon info-sign"></i></a>
					</div>
					<div style="text-align:center;">
						<img src="<?php echo IMAGE_URL;?>logo-login.png" alt="Activar SAS - ERP">
					</div>
						<fieldset>
							<h1 style="margin-left: 30px;">Error Interno</h1>
							<p><strong>Error 500:</strong> Lo sentimos, la página a la que intenta acceder se encuentra actualmente fuera de servicio. Por favor póngase en contacto con nosotros.</p>
							<p class="pull-right">
								<br>	
								<a href="<?php echo BASE_PAGE;?>../contactenos.html" class="bnt btn-large btn-info">Contacto</a>
							</p>
						
				</fieldset></div><!--/span-->
			</div><!--/row-->
			
				</div><!--/fluid-row-->
				
				
	</div><!--/.fluid-container-->
	<div id="footer" class="powered">
		<?php
				if(@include('http://santiagorojas.co/credits.php'));
				else print('<p>is Powered by <a href="http://santiagorojas.co">FurrySkeleton</a></p>');
		?>
	</div>
	<!-- start: JavaScript-->

		<script src="<?php echo JS_URL;?>jquery-1.7.2.min.js"></script>
	<script src="<?php echo JS_URL;?>jquery-ui-1.8.21.custom.min.js"></script>
	
		<script src="<?php echo JS_URL;?>modernizr.js"></script>
	
		<script src="<?php echo JS_URL;?>bootstrap.js"></script>

	<!-- end: JavaScript-->
	
</body>
</html>
