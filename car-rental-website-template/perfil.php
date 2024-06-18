<?php 
        session_start();

        if((!isset($_SESSION['email']) === TRUE) && (!isset($_SESSION['senha']) === TRUE)){
            session_unset();
            session_destroy();
            echo "
                <script>
                    window.location.href = 'index.php';
                </script>
            ";
        }
        $id = $_SESSION['id_usuario'];
        $email = $_SESSION['email'];
        $nome = $_SESSION['nome'];
        $telefone = $_SESSION['telefone'];
        $dataf = $_SESSION['data'];
        $senha = $_SESSION['senha'];

        $data = date('d-m-Y', strtotime($dataf));
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="icon" href="img/favicon-16x16.png">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 20px 0;
            background-color: #ccc;
            color: white;
        }
        .header h1 {
            margin: 0;
        }
        .section {
            margin: 20px 0;
        }
        .section h2 {
            border-bottom: 2px solid ;
            padding-bottom: 10px;
            color: #ccc;
        }
        .section p {
            line-height: 1.6;
        }
        .profile-info {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .profile-info div {
            margin: 10px 0;
            width: 100%;
            text-align: left;
        }
        .profile-info label {
            font-weight: bold;
        }
        .profile-info span {
            margin-left: 10px;
        }
        .form-group {
            margin: 10px 0;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
    </style>
    
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="header">
                <h1>Perfil do Usuário</h1>
            </div>
 
            <div class="section">
                <h2>Informações do Perfil</h2>
                <div class="profile-info" id="profile-info">
                    <div>
                        <label>Nome:</label><span><?php echo $nome; ?></span>
                    </div>
                    <div>
                        <label>Telefone:</label><span><?php echo $telefone; ?></span>
                    </div>
                    <div>
                        <label>Email:</label><span><?php echo $email; ?></span>
                    </div>
                    <div>
                        <label>Senha:</label><span id="senha"><?php echo $senha; ?></span>
                        <i class="fas fa-eye" id="toggleSenha" style="cursor: pointer; margin-left: 10px;"></i>
                    </div>
                    <div>
                        <label>Data:</label><span><?php echo $data; ?></span>
                    </div>
                    <div>
                        <button id="updateButton">Atualizar Cadastro</button>
                        <a href="home.php"><input type="button" value="Voltar para o Home"></a>
                        <form method="post" action="php/logout.php">
                            <button type="submit" name="logout">Sair</button>
                        </form>
                    </div>
                    
                </div>
                <div id="updateFormContainer" style="display: none;">
                    <form id="update-form">
                        <div class="form-group">
                            <label for="updateNome">Nome:</label>
                            <input type="hidden" value="<?php echo $id?>" id="id_usuario_update">
                            <input type="text" id="updateNome" name="nome" value="<?php echo $nome;?>" required>
                        </div>
                        <div class="form-group">
                            <label for="updateEmail">Email:</label>
                            <input type="email" id="updateEmail" name="email" value="<?php echo $email;?>" required>
                        </div>
                        <div class="form-group">
                            <label for="updateTelefone">Telefone:</label>
                            <input type="text" id="updateTelefone" name="telefone" value="<?php echo $telefone;?>" required>
                        </div>
                        <div class="form-group">
                            <label for="updateSenha">Senha:</label>
                            <input type="password" id="updateSenha" name="senha" value="<?php echo $senha;?>" required>
                        </div>
                        <div class="form-group">
                            <button type="submit">Salvar</button>
                        </div>
                    </form>
                    <button onclick="deletar_conta(event,<?php  echo $id;?>)" id="deleteButton">Deletar Conta</button>
                    <button onclick="cancelar()">Cancelar</button>
                </div>
            </div>
        </div>
        
    </div>

    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script>

        function cancelar(){
            location.reload();
        }

        $(document).on('submit', '#update-form', function(e){
            e.preventDefault();

            let id_usuario = $('#id_usuario_update').val();
            let nome = $('#updateNome').val();
            let email = $('#updateEmail').val();
            let telefone = $('#updateTelefone').val();
            let senha = $('#updateSenha').val();

            console.log(`
                ID: ${id_usuario}
                Nome: ${nome}
                Email: ${email}
                Telefone: ${telefone}
                Senha: ${senha}
            `);

            $.ajax({
                url: 'php/update_profile.php',
                method: 'POST',
                data: {id: id_usuario, nome: nome, email: email, telefone: telefone, senha: senha},
                dataType: 'json',
                success: function(result){
                    if(result.error) {
                        alert(result.error);
                    } else {
                        alert(result.mensagem);
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


        function deletar_conta(e,id){
            e.preventDefault();
           
            if(confirm('Deseja excluir sua conta?')){
                $.ajax({
                    url: 'php/deletar_conta.php',
                    method: 'POST',
                    data:{id: id}, 
                    dataType: 'json',
                    success: function(result){
                        alert(result.mensagem);
                        location.reload();
                    },
                    error: function(xhr,status,error){
                        console.error(xhr.responseText);
                        console.error(status);
                        console.error(error);
                    }
                });
            }            
        }
        
        let senha_oculta = "";
        let validacao = false;

        function exibirSenha(){
            let span = document.getElementById('senha');
            let senha = <?php echo json_encode($senha); ?>;
            
            for (let i = 0; i < senha.length; i++) {
                senha_oculta += "*";
            }

            span.innerText = senha_oculta;
        }

        function mostrarSenha(){
            let span = document.getElementById('senha');
            let senha = <?php echo json_encode($senha); ?>;
            let icon = document.getElementById('toggleSenha');
            
            if (!validacao) {
                span.innerText = senha;
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
                validacao = true;
            } else {
                span.innerText = senha_oculta;
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
                validacao = false;
            }
        }

        document.addEventListener('DOMContentLoaded', exibirSenha);
        document.getElementById('toggleSenha').addEventListener('click', mostrarSenha);

        document.getElementById('updateButton').addEventListener('click', function() {
            document.getElementById('profile-info').style.display = 'none';
            document.getElementById('updateFormContainer').style.display = 'block';
        });
    </script>
</body>
</html>
