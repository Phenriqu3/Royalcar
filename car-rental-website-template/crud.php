<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <script>
        function validateForm() {
            var email = document.getElementById("email").value;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Por favor, insira um e-mail válido.");
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
  <div class="container">
    <div class="header">
      <span>Cadastro de Funcionários</span>
      <button onclick="openModal()" id="new">Incluir</i></button>
        
    </div>

    <div class="divTable">
      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Modelo</th>
            <th>Val. Disponível</th>
            <th class="acao">Editar</th>
            <th class="acao">Excluir</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>

    <div class="modal-container">
      <div class="modal">
        <form>
          <label for="m-nome">Nome</label>
          <input id="m-nome" type="text" required />
  
          <label for="m-funcao">Modelo</label>
          <input id="m-funcao" type="text" required />
  
          <label for="m-salario">Val. Disponível</label>
          <input id="m-salario" type="number" required />
          <button id="btnSalvar">Salvar</button>
        </form>
      </div>
    </div>
   

  </div>
  <script src="assets/js/scripts.js"></script>
</body>

</html>