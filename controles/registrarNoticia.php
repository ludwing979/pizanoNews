<?php

require 'conexion.php';

$_keys = array('titulo','info','categoria');
$missing = count($_keys) - 1;
$columns = null;
$values = null;

$_POST = json_decode(file_get_contents('php://input'), true);

foreach ($_POST as $key => $value) if (in_array($key, $_keys)) {
    if ($value != ""){
        $columns .= '`' . $key . '`,';
        $values .= '"' . $_POST[$key] . '",';
        $missing--;
    }
}

$columns = substr($columns, 0,-1);
$values = substr($values, 0, -1);

function validData($missing) {
    if ($missing > 0) {
        echo "Por favor llena todos los campos";
        return false;
    }
    return true;
}

if (validData($missing)) {
    $sql = "INSERT INTO `noticias` ({$columns}) VALUES({$values});";
    $response = mysqli_query($conn, $sql);
    if ($response) {
        echo 1;
    } else {
        echo "No se a podido llevar a cabo el registro";
    }
}
?>
