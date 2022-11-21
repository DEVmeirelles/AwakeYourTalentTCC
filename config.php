<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $bdname="pia_bd";

    $mysqli = new mysqli($servidor , $usuario , $senha , $bdname); 

    if($mysqli->error){
        die("Erro de conexão com o banco de dados: " . $mysqli->error);
    }
?>