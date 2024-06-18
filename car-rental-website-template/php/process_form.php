<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $model = $_POST['model'];

    $to = "seuemail@example.com";  // Substitua pelo seu e-mail
    $subject = "Novo Modelo de Carro Selecionado";
    $message = "O usuário selecionou o seguinte modelo de carro: " . $model;
    $headers = "From: noreply@seusite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha ao enviar o e-mail.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
