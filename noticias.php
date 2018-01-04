<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Publicar Noticia</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="titu">
		<h1>Publicar Noticia</h1>
	</div>
	<div id="fondo">
		<div  id="formulario">
			<p>Título de la noticia</p>
			<input type="text" id="titleNoticia">
			<p>Descripción de la noticia</p>
			<textarea id="info"></textarea>
			<p>Categoría</p>
			<select id="categoria">
				<option value=""></option>
				<option value="1">Lo más Nuevo</option>
				<option value="2">Música Nueva</option>
				<option value="3">Nuevos Artistas</option>
				<option value="4">El dj del año</option>
			</select>
			<button onclick="registrar()">Publicar</button>
		</div><br>
	</div>
</body>
<script type="text/javascript">
    function registrar() {
        title = document.getElementById('titleNoticia').value;
        informacion = document.getElementById('info').value;
        categoria = document.getElementById('categoria').value;

        fetch("controles/registrarNoticia.php", {
            method: 'POST',
            credentials: 'same-origin',
            body: JSON.stringify({
            	titulo: title,
            	info: informacion,
            	categoria: categoria,
        	}),
        })
        .then(
            response => response.text()
        ).then(
            html => {
                // alert(html);
                console.log(html);
                if(Number(html)==1){
                    alert("Noticia registrada")
                    location.assign('index.php');
                }
                else{
                    console.log("no");
                }

            }
        );
    }
</script>
</html>