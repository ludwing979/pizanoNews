<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="formato">
		<div id="titulo">
		</div>
	</div>
	<div id="fondo">
		<div id="formulario">
			<p>Ingresa tu correo</p>
			<input type="email" id="correo">
			<p>Contraseña</p>
			<input type="password" id="pass"><br>
			<button onclick="login()">Ingresar</button>
		</div>
	</div>
	<div id="mensaje">
		<p id="falsosDatos" style="color: red">La contraseña o el correo son incorrectos</p>
	</div>
</body>
<script>

    function login() {
        correo = document.getElementById('correo').value;
        password = document.getElementById('pass').value;

        fetch("controles/iniciarSesion.php",{
            method:'POST',
            credentials: 'same-origin',
            body: JSON.stringify({
                correo: correo,
                password: password,
            }),
        }).then(
            response => response.text()
        )
        .then(
            result => {
                console.log(result);
                if (Number(result) == 1){
                    window.location.href = "index.php";
                }else{
                    usuario = document.getElementById('correo');
                    password = document.getElementById('pass');
                     mensaje = document.getElementById('falsosDatos');
                    if(usuario.value == ""){
                        usuario.style.border = "2px solid #e74c3c";
                        mensaje.style.opacity = "0";
                    }else{
                        usuario.style.border = "none";
                        mensaje.style.opacity = "'";
                    }
                    if(password.value == ""){
                        password.style.border= "2px solid #e74c3c";
                        mensaje.style.opacity = "0";
                    }else{
                        password.style.border = "none";
                        mensaje.style.opacity = "0";
                    }
                    if(usuario.value!="" && password.value!=""){
                        mensaje.style.opacity = "1";
                    }
                }
            }
        )
        .catch (
            error => {
                console.log(error);
            }
        );
    }
</script>
</html>