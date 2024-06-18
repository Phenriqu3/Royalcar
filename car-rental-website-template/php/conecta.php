<?php

    $local = "localhost";
    $user = "root";
    $senha = "290703";
    $banco = "login";

    $conecta = new mysqli($local, $user, $senha, $banco);

    if($conecta->connect_error === TRUE){
        echo 'Deu ruim malandro'.$conecta->connect_error;
    }