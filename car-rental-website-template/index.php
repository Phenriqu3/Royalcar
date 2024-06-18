<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon-16x16.png">
    <title>Car Website - Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
</head>
<body>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 350px;
    padding: 30px;
}

.logo {
    text-align: center;
    margin-bottom: 30px;
}

.logo img {
    width: 100px;
}

.title-login {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
    font-weight: bold;
    color: #333;
}

.field {
    margin-bottom: 15px;
}

.input-field {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

.input-field:focus {
    border-color: #007bff;
    outline: none;
}

.btn-login {
    background-color: #007bff;
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    transition: background-color 0.3s ease;
}

.btn-login:hover {
    background-color: #0062cc;
}

.login-link {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #333;
}

.login-link a {
    color: #007bff;
    text-decoration: none;
}

.login-link a:hover {
    text-decoration: underline;
}
    </style>

    <div class="form-card">
        <form class="form" id="form-login" method="POST" action="php/processar_login.php">
            <h2 class="title-login">Royal Cars</h2>
            <div class="field">
                <span class="input-icon icon icon-user-1"></span>
                <input type="email" id="email" class="input-field" placeholder="E-mail" name="email" required>
            </div>
            <div class="field">
                <span class="input-icon icon icon-locked"></span>
                <input type="password" id="senha" class="input-field" placeholder="Senha" name="senha" required>
            </div>
            <div class="box-btn">
                <button type="submit" class="btn-login">Entrar</button>
            </div>
            <p class="register-link">Não tem uma conta? <a href="cadastro.php">Cadastrar</a></p>
        </form>
       
    </div>
    <script>
        
        $(document).on('submit', '#form-login', function(e){
            e.preventDefault();

            let email = $('#email').val();
            let senha = $('#senha').val();

            $.ajax({
                url: 'php/processar_login.php',
                method: 'POST',
                data: {email: email, senha: senha},
                dataType: 'json',
                success: function(result){
                    if('error' in result){
                        alert(result.error);
                        location.reload();
                    }
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                    console.error(status);
                    console.error(error);
                }
            });
        });
        
    </script>
</body>
</html>