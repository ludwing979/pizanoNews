<?php

require 'conexion.php';

$_POST = json_decode(file_get_contents('php://input'), true);

function emptyData() {
    if (!isset($_POST['correo'])) {
        echo 0;
        return true;
    }
    if ($_POST['correo'] == '' || $_POST['password'] == '') {
        echo 4;
        return true;
    }
    return false;
}

function getData() {
    global $conn;

    $sql = "SELECT * FROM usuarios WHERE correo LIKE '" . $_POST['correo'] . "';";
    $datosUsr = mysqli_query($conn,$sql);

    if (mysqli_num_rows($datosUsr) == 1) {
        return $datosUsr->fetch_assoc();
    }

    echo 3;
    return null;
}

if (!emptyData()) {
    $datos = getData();
    if ($datos != null && $datos['contrasena'] == $_POST['password']){
        session_regenerate_id();
        $_SESSION['id'] = session_id();
        foreach ($datos as $key => $value) {
            $_SESSION[$key] = $value;
        } 
        session_write_close();
        echo 1;
    }
} else {
    echo 5;
}
?>