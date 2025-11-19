<?php
    session_start();
    
    $endereco = "sql209.infinityfree.com";
    $usuario = "if0_40456018";
    $password = "ISKD3mVBSwK";
    $dbname = "if0_40456018_dontlookatme";

    $con = mysqli_connect($endereco, $usuario, $password, $dbname);

    if($con) {
        $_SESSION['conectou'] = 1;
    }
    else {
        $_SESSION['conectou'] = 0;
        die("Erro na conexão".mysqli_connect_error());
    }
?>
