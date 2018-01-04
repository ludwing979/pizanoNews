<?php 
    require 'controles/session.php';
    session_destroy();
    header('location:index.php');
?>