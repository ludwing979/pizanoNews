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
	<div>
		<img src="images/facebook.png"> <a href="https://www.facebook.com/marco.pizano">www.facebook.com/marco.pizano</a>
	</div>
	<div>
		<img src="images/Instagram.png"> <a href="https://www.instagram.com/marcopizano/?hl=es">www.instagram.com/marcopizano/?hl=es</a>
	</div>

	<div>
		<img src="images/twitter.png"> <a href="https://twitter.com/marcoivanpizano">twitter.com/marcoivanpizano</a>
	</div>
	<div>
		<img src="images/whats.jpg"> <p> 4423323803 LLamame bebé! :v </p>
	</div>
	<div>
		<img src="images/snapcode.png"> <a href="https://www.snapchat.com/add/pizano130996">!¡Añádeme en Snapchat! Nombre de usuario: pizano130996!</a>
	</div>
</div>
</body>
</html>
