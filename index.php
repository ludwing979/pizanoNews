<?php require 'controles/session.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PizzanoNews</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body id="cuerpo">
<div id="wrapper">
	<?php if (isset($_SESSION['correo'])){ ?>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li><a href="enlaces.html">Enlaces</a></li>
			<li><a href="contactos.html">Contacto</a></li>
			<li><a href="noticias.php">Publicar Noticia</a></li>
			<li><a href="logout.php">Cerrar Sesión</a></li>
		</ul>
	</div>
	<?php }else{ ?>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li><a href="enlaces.html">Enlaces</a></li>
			<li><a href="contactos.html">Contacto</a></li>
			<li><a href="login.php">Iniciar Sesión</a></li>
		</ul>
	</div>
	<?php } ?>
	<!-- end #menu -->
	<div id="header">
		<div id="logo">		
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Bienvenido a PizzanoNews   </a></h2>
				<p class="meta"><span class="date">Noviembre 27, 2017</span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">					
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.</p>
					<p class="links"><a href="#">Read More</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Comments</a></p>
				</div>
			</div>
			<div class="post">
				<h2 class="title"><a href="#">Canción del año</a></h2>
				<p class="meta"><span class="date">Septiembre 1, 2017</span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.</p>
					<p class="links"><a href="#">Read More</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Comments</a></p>
				</div>
			</div>
			<div class="post">
				<h2 class="title"><a href="#">Mariana Bo, La DJane Favorita Del Mundo.</a></h2>
				<p class="meta"><span class="date">Agosto 18, 2017</span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.</p>
					<p class="links"><a href="#">Read More</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Comments</a></p>
				</div>
			</div>
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<div id="search" >
					<form method="get" action="#">
						<div>
							<input type="text" name="s" id="search-text" value="" />
							<input type="submit" id="search-submit" value="GO" />
						</div>
					</form>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</li>
				<li>
					<h2>Categorias</h2>
					<ul>
						<li><a href="#">Lo mas nuevo</a></li>
						<li><a href="#">New Music</a></li>
						<li><a href="#">Nuevos Artistas</a></li>
						<li><a href="#">El DJ del Año</a></li>
					</ul>
				</li>
				<li>
					<h2>Archivos</h2>
					<ul>
						<li><a href="#">Fresh Music & Mixes</a></li>
						<li><a href="#">Underground</a></li>
						<li><a href="#">Track del mes</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<div id="footer">
		<p><a href="https://www.facebook.com/marco.pizano">Hola Mundo :v</a>.</p>
	</div>
	<!-- end #footer -->
</body>
</html>
