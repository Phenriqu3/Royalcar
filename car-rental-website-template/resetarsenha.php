<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{
            display: block;
            margin-bottom: 10px;

        }
        .borda{
            border: 1px solid #ccc;
            padding: 10px;
            background-color: rgb(0,0,0,0.1);
            width: 255px;
            height: 100%;
            text-align: center;
            margin-top: auto;

        }
    </style>
</head>
<body>
    <div class="borda">
    <form action="recuperar.php" method="POST" onsubmit="return ValidatePassword()">
    <input type="hidden" name="token" value="<?php echo isset($_GET['token']) ? htmlspecialchars($_GET['token']) : ''; ?>">
    <label for="password"> Nova Senha:</label>
        <input type="password" id="password" name="password" required><br>
        <label for="password2"> Confirmar Senha:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>
        <input type="submit" value="Recuperar Senha">
    </form>
    </div>
    <script>
        function ValidatePassword(){
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;
            if (password != confirm_password){
                alert("As senhas não coincidem");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>