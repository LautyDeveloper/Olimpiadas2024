<?php 
    include("conexion.php");

    if (isset($_GET['limite'])) {
        $limite = $_GET['limite'];
        $limite = $limite +3;

        header("Location: ../index.php#vermasid?limite=$limite");
    }


?>