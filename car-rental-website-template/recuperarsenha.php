<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <style>
        label {
            display: block;
            margin-bottom: 10px;
        }
        .borda {
            border: 1px solid #ccc;
            padding: 10px;
            width: 300px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <div class="borda">
        <form id="recoveryForm" action="recuperar.php" method="POST">
            <label for="email">Digite seu email:</label>
            <input type="email" id="email" name="email" required><br>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <div id="resetForm" class="borda" style="display: none;">
        <form id="newPasswordForm" action="recuperar.php" method="POST" onsubmit="return validatePassword()">
            <input type="hidden" id="token" name="token" value="">
            <label for="password">Nova Senha:</label>
            <input type="password" id="password" name="password" required><br>
            <label for="confirm_password">Confirmar Senha:</label>
            <input type="password" id="confirm_password" name="confirm_password" required><br>
            <input type="submit" value="Salvar Nova Senha">
        </form>
    </div>

    <script>
        function validatePassword() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;
            if (password != confirm_password) {
                alert("As senhas não coincidem");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
