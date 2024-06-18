<?php
    header('Content-Type: application/json');
    session_start();


    $servername = "localhost";
    $username = "root";
    $password = "290703";
    $dbname = "login";

    $conecta = new mysqli($servername, $username, $password, $dbname);

    if ($conecta->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_POST['id'];
    $sql = "delete from usuario where id = $id ";

    if ($conecta->query ($sql)=== true){
        echo json_encode(array('mensagem' => 'Usuário deletado com sucesso'));
        session_unset();
        session_destroy();
    }else{
        echo json_encode(array('mensagem' => 'Erro ao deletar usuario'));
    }

    $conecta->close();

