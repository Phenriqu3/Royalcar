<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $subject = "Assunto do Email";
    $message = "Esta é uma mensagem de teste:".$email;
    $headers = "From: seuemail@dominio.com\r\n" .
               "Reply-To: seuemail@dominio.com\r\n" .
               "X-Mailer: PHP/" . phpversion();

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "E-mail inválido.";
        exit;
    }

    
    $mainMailSuccess = mail($email, $subject, $message, $headers);

    if ($mainMailSuccess) {
        
        $confirmSubject = "Confirmação de Pedido";
        $confirmMessage = "Seu pedido foi concluído com sucesso.";
        $confirmMailSuccess = mail($email, $confirmSubject, $confirmMessage, $headers);
        
        if ($confirmMailSuccess) {
            echo "Email enviado com sucesso para $email. Uma mensagem de confirmação foi enviada.";
        } else {
            error_log("Falha ao enviar email de confirmação para $email");
            echo "Email enviado com sucesso, mas houve uma falha ao enviar a mensagem de confirmação.";
        }
    } else {
        // Envia email de erro
        $errorSubject = "Erro no Pedido";
        $errorMessage = "Houve um erro ao processar seu pedido. Por favor, tente novamente.";
        $errorMailSuccess = mail($email, $errorSubject, $errorMessage, $headers);
        
        if ($errorMailSuccess) {
            echo "Falha no envio do email. Uma mensagem de erro foi enviada.";
        } else {
            error_log("Falha ao enviar email principal e ao enviar email de erro para $email");
            echo "Falha no envio do email. E também falhou ao enviar a mensagem de erro.";
        }
    }
}
?>
