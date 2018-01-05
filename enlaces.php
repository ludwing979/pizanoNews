<?php require 'controles/session.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PizzanoNews</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>
<div id="wrapper">
	<?php if (isset($_SESSION['correo'])){ ?>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li><a href="enlaces.php">Enlaces</a></li>
			<li><a href="contactos.php">Contacto</a></li>
			<li><a href="noticias.php">Publicar Noticia</a></li>
			<li><a href="logout.php">Cerrar Sesión</a></li>
		</ul>
	</div>
	<?php }else{ ?>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li><a href="enlaces.php">Enlaces</a></li>
			<li><a href="contactos.php">Contacto</a></li>
			<li><a href="login.php">Iniciar Sesión</a></li>
		</ul>
	</div>
	<?php } ?>
	<h1>Enlaces De Informacion</h1>
	<div>
		<a href="https://djmag.com">djmag.com</a>
	</div>
	<div>
		<a href="http://www.plurlifemx.com">http://www.plurlifemx.com</a>
	</div>
	<div>
		<a href="http://empo.news">http://empo.news</a>
	</div>
	<div>
		<a href="http://nightlifemexico.com">http://nightlifemexico.com</a>
	</div>
</div>
</body>
</html>