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
        $email = $_SESSION['email'];
        $nome = $_SESSION['nome'];
        $telefone = $_SESSION['telefone'];
        $data = $_SESSION['data'];

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="aimg/favicon-16x16.png">
    <title>Royal Cars</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <style>
        .info-box {
            border: 4px solid rgb(255, 255, 255); 
            padding: 20px;          
            margin: 20px 0;          
            border-radius: 10px;    
            font-weight: bold; 
            background-color: rgb(235, 235, 235);  
            left: black;   
        }
        .col-md-6 p{
            text-align: justify;
        }
    </style>
    
</head>
<body>
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand" href="home.php"><h2>Royal <em>Cars</em></h2></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="fleet.php">Carros Clássicos</a></li>
                        <li class="nav-item"><a class="nav-link" href="offers.php">Carros de Luxo</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Aluga-se</a></li>
                        <li class="nav-item"><a class="nav-link" href="perfil.php">Perfil</Cadastra-se></a></li>
                        <form id="searchForm" class="" role="search">
                <input id="searchInput" class="form-control" type="search" placeholder="Search" aria-label="Search">
                
              </form>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Modelos de Luxo com o melhor preço</h4>
                        <h2>Corvette</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="main-image" style="background-image: url('img/Carros Classicos/ferrari-sf90-stradale/main.jpg');"></div>
        <div class="row mt-4">
            <div class="col-md-8">
                <div id="carouselFerrari" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/Carros Esportivos/corvette/1.webp" class="d-block w-100" alt="Ferrari SF90 Stradale 1" height="600px">
                        </div> 
                        <div class="carousel-item">
                            <img src="img/Carros Esportivos/corvette/2.webp" class="d-block w-100" alt="Ferrari SF90 Stradale 2" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Carros Esportivos/corvette/3.webp" class="d-block w-100" alt="Ferrari SF90 Stradale 3" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Carros Esportivos/corvette/4.webp" class="d-block w-100" alt="Ferrari SF90 Stradale 3" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Carros Esportivos/corvette/5.webp" class="d-block w-100" alt="Ferrari SF90 Stradale 3" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Carros Esportivos/corvette/6.webp" class="d-block w-100" alt="Ferrari SF90 Stradale 3" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Carros Esportivos/corvette/7.webp" class="d-block w-100" alt="Ferrari SF90 Stradale 3" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Carros Esportivos/corvette/8.webp" class="d-block w-100" alt="Ferrari SF90 Stradale 3" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Carros Esportivos/corvette/9.webp" class="d-block w-100" alt="Ferrari SF90 Stradale 3" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Carros Esportivos/corvette/10.webp" class="d-block w-100" alt="Ferrari SF90 Stradale 3" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Carros Esportivos/corvette/11.webp" class="d-block w-100" alt="Ferrari SF90 Stradale 3" height="600px">
                        </div>
                       
                       
                        <!-- Adicione mais imagens conforme necessário -->
                    </div>
                    <a class="carousel-control-prev" href="#carouselFerrari" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselFerrari" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="details">

                    <div class="container mt-5">
                        <h2>Chevrolet Corvette Stingray 1LT Targa</h2>
                        <p>
                            <span> 2023 </span>
                            <span class="dot-separator">&bull;</span>
                            <span> 7.300 km </span>
                            <span class="dot-separator">&bull;</span>     
                            <span> 6.2 </span>
                            <span class="dot-separator">&bull;</span>
                            <span> 485 cv </span>
                        </p>
                    </div>    
                    <div class="modal-footer">
                     </div>
                     <h2><b> R$ 22.998,00</b></h2>

                    <div class="info-box">
                    <p><strong><b>Marca</b></strong> Chevrolet</p>
                    <p><strong><b>Modelo</b></strong> Corvette</p>
                    <p><strong><b>Ano</b></strong> 2023</p>
                    <p><strong><b>Cor </b></strong> Vermelho</p>
                    <p><strong><b>Motor</b></strong> 6.2 495 cv</p>
                    <p><strong><b>Tipo de combustível</b></strong> Gasolina</p>
                    <p><strong><b>Quilometragem</b></strong> 7.300 km</p>
                    <p><strong><b>Transmissão</b></strong> Automática</p>          
                    <p><strong><b>Portas</b></strong> 2</p>
                    <p><strong><b></b></strong></p>
                    </div> 
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <a href="offers.php" class="filled-button mr-2">Voltar</a>
                                <a href="contact.php" class="filled-button">Contate-nos</a>
                       </div>
                    </div>            
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h4>Descrição</h4>
                <p>O Chevrolet Corvette Stingray 1LT Targa é a definição de potência, estilo e precisão na condução. Projetado com uma estética arrojada e esportiva, este veículo incorpora elementos de design que destacam sua presença imponente nas ruas. Ainda mais com sua carroceria na cor Torch Red, com rodas modelo Tridente na cor preta e pacote Stingray R, enaltecem sua beleza por onde passa. Seu perfil aerodinâmico é complementado por linhas fluídas e agressivas.</p>
            </div>
        </div>
        
        
    </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 2000
        });
    </script>
    <script>
document.getElementById('searchForm').addEventListener('submit', function(event) {
  event.preventDefault()

  var searchValue = document.getElementById('searchInput').value.toLowerCase();

  
  var carPages = {
    'ferrari': 'ferrari.php',
    'porsche911': 'porsche.php',
    'corvette': 'corvette.php',
    'mustang': 'mustang.php',
    'bmw x6': 'bmwx6.php',
    'opala': 'opala.php',
    'aston martin': 'aston.php',
    'audi': 'audiq3.php',
    'bmw 320i': 'bmw320i.php',
    'bmw 325i': 'bmw325i.php',
    'cadillac': 'cadillac.php',
    'dodge': 'dodge.php',
    'dodge charllenger': 'dodgecharllenger.php',
    'gol gts': 'golgts.php',
    'maverick': 'maverick.php',
    'mustang shelbi': 'mustangsheibi.php',
    'porsche 911': 'porsche911.php',
    'porsche panamera': 'porschepanamera.php',


  
  };

  if (carPages[searchValue]) {
    window.location.href = carPages[searchValue];
  } else {
    alert('Modelo de carro não encontrado');
  }
});
</script>

</body>
</html>