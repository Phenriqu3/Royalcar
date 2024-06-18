<?php 

    session_start();

    include 'conecta.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND Senha = '$senha'";

    $result = $conecta->query($sql);

    if($result->num_rows > 0){
        
        while($row = $result->fetch_assoc()){
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['telefone'] = $row['Telefone'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['data'] = $row['dt_nascimento'];
            $_SESSION['id_usuario'] = $row['id'];
        }

        echo "
            <script>
                window.location.href = '../home.php';
            </script>
        ";
    }else{
        session_unset();
        session_destroy();
        echo json_encode(array('error' => 'Usuário nao encontrado, email ou senha '.$conecta->error));
    }