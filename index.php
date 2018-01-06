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
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<div id="search" >
					<form method="get" action="#">
						<div>
							<input type="text" name="s" id="search-text" value="" />
							<button id="search-submit" onclick="buscar()">Go</button>
						</div>
					</form>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</li>
				<li>
					<h2>Categorias</h2>
					<ul>
						<li><a onclick="noticiasCategoria(1)">Lo mas nuevo</a></li>
						<li><a onclick="noticiasCategoria(2)">New Music</a></li>
						<li><a onclick="noticiasCategoria(3)">Nuevos Artistas</a></li>
						<li><a onclick="noticiasCategoria(4)">El DJ del Año</a></li>
					</ul>
				</li>
				<li>
					<h2>Archivos</h2>
					<ul>
						<li><a href="CancionesPopulares.html">Canciones Populares</a></li>
						<li><a href="TrackDelMes.html">Underground</a></li>
						<li><a href="Underground.html">Track del mes</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
	</div>
	</div>
	</div>
	<!-- end #page -->
</body>
<script>
	function noticias(){
        contenido = document.getElementById('content');
        fetch("controles/news.php",{
            method: 'POST',
            body: JSON.stringify({
            	post: true,
            })
        })
        .then(
            response => response.text()
        ).then(
            html => {
                contenido.innerHTML = html;
            }
        );
    }

    function noticiasCategoria(categoria){
    	fetch("controles/categorias.php",{
            method: 'POST',
            body: JSON.stringify({
            	idCategoria: categoria,
            })
        })
        .then(
            response => response.text()
        ).then(
            html => {
                contenido.innerHTML = html;
            }
        );
    }

    function buscar(){
    	valor = document.getElementById('search-text').value;
    	fetch("controles/buscador.php",{
            method: 'POST',
            body: JSON.stringify({
            	titulo: valor,
            })
        })
        .then(
            response => response.text()
        ).then(
            html => {
                contenido.innerHTML = html;
            }
        );
    }
    noticias();
</script>
</html>
