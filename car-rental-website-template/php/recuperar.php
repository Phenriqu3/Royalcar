<?php
// Simulação de um banco de dados de usuários
$usuarios = [
    ['email' => 'usuario1@example.com', 'senha' => 'senha1'],
    ['email' => 'usuario2@example.com', 'senha' => 'senha2'],
    // Adicione mais usuários conforme necessário
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Verifica se o email existe na lista de usuários
    $usuarioEncontrado = false;
    foreach ($usuarios as $usuario) {
        if ($usuario['email'] === $email) {
            $usuarioEncontrado = true;
            break;
        }
    }

    if ($usuarioEncontrado) {
        // Gerar token único para este email (pode ser um UUID, por exemplo)
        $token = bin2hex(random_bytes(32)); // Gera um token de 64 caracteres hexadecimal

        // Simular envio de email (neste exemplo, apenas exibir o token)
        echo "Um link para redefinir a senha foi enviado para o seu email. Token: $token";

        // Pode-se enviar o link por email usando a função mail() do PHP ou algum serviço de email
        // Aqui, estamos apenas exibindo o token para fins de demonstração.
    } else {
        echo "Email não encontrado. Por favor, verifique o email digitado.";
    }
}
?>
