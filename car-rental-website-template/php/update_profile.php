<?php
include 'conecta.php';

header('Content-Type: application/json');

session_start();

function atualizarUsuario($conecta) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $sql = "UPDATE usuario SET ";
    $fields = [];
    $params = [];
    $types = '';

    if (!empty($nome)) {
        $fields[] = "nome = ?";
        $params[] = $nome;
        $types .= 's';
    }
    if (!empty($email)) {
        $fields[] = "email = ?";
        $params[] = $email;
        $types .= 's';
    }
    if (!empty($telefone)) {
        $fields[] = "Telefone = ?";
        $params[] = $telefone;
        $types .= 's';
    }
    if (!empty($senha)) {
        $fields[] = "Senha = ?";
        $params[] = $senha;
        $types .= 's';
    }

    if (count($fields) > 0) {
        $sql .= implode(', ', $fields);
        $sql .= " WHERE id = ?";
        $params[] = $id;
        $types .= 'i';

        $stmt = $conecta->prepare($sql);
        if ($stmt === false) {
            echo json_encode(array('error' => 'Erro na preparação da consulta: ' . $conecta->error));
            return;
        }

        $stmt->bind_param($types, ...$params);

        if ($stmt->execute()) {
            $response = array('mensagem' => 'Usuário atualizado com sucesso!');
            if (!empty($nome)) {
                $_SESSION['nome'] = $nome;
            }
            if (!empty($email)) {
                $_SESSION['email'] = $email;
            }
            if (!empty($telefone)) {
                $_SESSION['telefone'] = $telefone;
            }
            if (!empty($senha)) {
                $_SESSION['senha'] = $senha;
            }
        } else {
            $response = array('error' => 'Erro ao atualizar dados do usuário: ' . $stmt->error);
        }

        $stmt->close();
    } else {
        $response = array('error' => 'Nenhum campo para atualizar');
    }

    echo json_encode($response);
}

atualizarUsuario($conecta);

$conecta->close();
?>
