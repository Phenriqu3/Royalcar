<?php

    header('Content-Type: application/json');

    session_start();

    include 'conecta.php';

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $dt_nascimento = $_POST['data'];

    $data = date('Y-m-d', strtotime($dt_nascimento));

    $sql = "INSERT INTO usuario (nome, email, Telefone, Senha, dt_nascimento)
            VALUES ('$nome', '$email', '$telefone', '$senha', '$data')";

    if($conecta->query($sql) === true){
        echo json_encode(array('mensagem' => 'Usuário cadastrado com sucesso!'));
    }else{
        echo json_encode(array('error' => 'Erro ao cadastrar usuário '.$conecta->error));
    }

    exit;
?>
