<?php
// Simulação de um banco de dados de usuários
$usuarios = [
    ['email' => 'usuario1@example.com', 'senha' => 'senha1'],
    ['email' => 'usuario2@example.com', 'senha' => 'senha2'],
    // Adicione mais usuários conforme necessário
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'];
    $password = $_POST['password'];

    // Simulação de validação do token (poderia ser uma consulta ao banco de dados)
    $tokenValido = true; // Neste exemplo, consideramos que o token é válido

    if ($tokenValido) {
        // Atualizar a senha (simulação de atualização no banco de dados)
        foreach ($usuarios as &$usuario) {
            if ($usuario['email'] === $_SESSION['email']) {
                $usuario['senha'] = $password; // Atualiza a senha
                break;
            }
        }
        echo "Senha alterada com sucesso!";
    } else {
        echo "Token inválido. Por favor, verifique o link enviado por email.";
    }
}
?>
