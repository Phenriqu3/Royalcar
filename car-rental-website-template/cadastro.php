<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon-16x16.png">
    <title>Royal Cars - Cadastro</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
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
        <form class="form" id="login-form" method="POST" action="php/realizarCadastro.php" onsubmit="return validateForm()">
            <h2 class="title-login">Acesso Restrito</h2>
            <div class="field">
                <span class="input-icon icon icon-user-1"></span>
                <input type="text" id="nome" class="input-field" placeholder="Seu nome" name="nome" required>
            </div>
            <div class="field">
                <span class="input-icon icon icon-user-1"></span>
                <input type="text" id="telefone" class="input-field" placeholder="Telefone" name="telefone" required>
            </div>
            <div class="field">
                <span class="input-icon icon icon-user-1"></span>
                <input type="email" id="email" class="input-field" placeholder="E-mail" name="email" required>
            </div>
            <div class="field">
                <span class="input-icon icon icon-locked"></span>
                <input type="password" id="password" class="input-field" placeholder="Senha" name="senha" required>
            </div>
            <div class="field">
                <span class="input-icon icon icon-locked"></span>
                <input type="password" id="confirm-password" class="input-field" placeholder="Confirme a Senha" name="confirm_senha" required>
            </div>
            <div class="field">
                <span class="input-icon icon icon-user-1"></span>
                <input type="date" id="dt_nascimento" class="input-field" placeholder="Data de nascimento" name="data_nascimento" required>
            </div>
            <div class="box-btn">
                <button type="submit" class="btn-login">Cadastrar</button>
            </div>
            <p class="login-link">Já possuo uma conta? <a href="index.php">Login</a></p>
        </form>
    </div>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script>

        const validacoes = {
            email: false,
            senha: false
        };

        $(document).on('submit', '#login-form', function(e){
            e.preventDefault();

            let nome = $('#nome').val();
            let telefone = $('#telefone').val();
            let email = $('#email').val();
            let senha = $('#password').val();
            let confirmSenha = $('#confirm-password').val();
            let data = $('#dt_nascimento').val();

            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if((!emailPattern.test(email)) || (senha !== confirmSenha)){
                alert('Email ou senha inválidos');
            }else{
                $.ajax({
                    url: 'php/realizarCadastro.php',
                    method: 'POST',
                    data: {
                        nome: nome,
                        telefone: telefone,
                        email: email,
                        senha: senha,
                        data: data
                    },
                    dataType: 'json',
                    success: function(result){
                        if('error' in result){
                            alert(result.error);
                            location.reload();
                        }else{
                            alert(result.mensagem);
                            window.location.href = 'index.php';
                        }
                    },
                    error: function(xhr, status, error){
                        console.error(xhr.responseText);
                        console.error(status);
                        console.error(error);
                    }
                });
            }


        });

        /*
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('status')) {
                const status = urlParams.get('status');
                if (status === 'success') {
                    alert("Cadastro realizado com sucesso! Por favor, faça login.");
                } else if (status === 'error') {
                     alert("Erro ao cadastrar. Por favor, tente novamente.");
                }
            }
        });

        function validateForm() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm-password").value;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailPattern.test(email)) {
                alert("Por favor, insira um email válido.");
                return false;
            }

            if (password !== confirmPassword) {
                alert("As senhas não coincidem. Por favor, verifique.");
                return false;
            }

            return true;
        }
        */

    </script>
</body>
</html>
