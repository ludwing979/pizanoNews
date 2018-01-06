<?php
require 'conexion.php';

$_POST = json_decode(file_get_contents('php://input'), true);
$sql_noticias = "SELECT * FROM `noticias` WHERE titulo = %'" . $_POST['titulo'] . "%';";
$noticias = mysqli_query($conn, $sql_noticias);

if (! is_bool($noticias)){
    if (mysqli_num_rows($noticias) > 0) {
        while ($row = mysqli_fetch_assoc($noticias)) {
            
            echo '<div class="post">';
            echo '<h2 class="title"><p>'. $row['titulo'] .'</p></h2>';
            echo '<p class="meta"><span class="date">'.  $row['fechaPublicacion'] .'</span></p>';
            echo '<div class="entry">
                    <p>'. $row['informacion'] .'</p>
                    <p class="links"><a href="noticia.php">Read More</a>
                </div>';
            echo '</div>';
        }
    } else {
     echo "<h1><center>No hay noticias que coincidan con la busqueda</center></h1>";
    }
}else{
    echo "<h1><center>No hay noticias que coincidan con la busqueda</center></h1>";
}
?>