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
  $data = $_SESSION['data'];

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Royal Cars</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>


    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
        <a class="navbar-brand" href="home.php"><h2>Royal <em>Cars</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="fleet.php">Carros Clássicos </a></li>
                <li class="nav-item"><a class="nav-link" href="offers.php">Carros de luxo</a></li>
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

    <!-- Page Content -->
      
    <!-- Banner Starts Here -->
    <ol class="carousel-indicators">
      <div class="row">
        <div class="col-md-10">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div id="simpleCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/Carros Esportivos/Ferrari GTS/2.webp" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/Carros Esportivos/porsche -911/Template-Foto-site-1-13.webp" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/Carros Esportivos/Aston Martin Vantage/Vantage-1.webp" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#simpleCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#simpleCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </div>
</div>
    <style>
      .carousel-item img {
        object-fit: cover;
        height: 580px; /* Ajuste a altura conforme necessário */
      }
    </style>

    
    <!-- Banner Ends Here -->
    
    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Mais Vendidos</h2>
              <h6>Carros de Luxo</h6>
              <a href="offers.php">Mais Informações <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="ferrari.php"><img src="img/Carros Esportivos/Ferrari GTS/5.webp" alt=""  width="100%" height="300">
              <div class="down-content">
                <a href="offers.php"><h4>Ferrari 296 GTS</h4></a>
                <h6><small>A partir</small> R$ 83.798,00 <small></small></h6>
                <p>A Ferrari 296 GTS 2024 é uma obra-prima moderna da icônica fabricante italiana, combinando inovação tecnológica com um design deslumbrante.</p>
              </div>
                </a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="porsche.php"><img src="img/Carros Esportivos/porsche -911/Template-Foto-site-1-12.webp" alt=""  width="100%" height="300">
              <div class="down-content">
                <a href="offers.php"><h4>Porsche 911 Carrera S</h4></a>
                <h6><small>A PARTIR</small> R$ 23.000,00 <small></small></h6>
                <p>Este carro esportivo de alta performance combina design icônico com tecnologia de ponta para oferecer uma experiência de condução incomparável.</p>
              </div>
              </a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="corvette.php"><img src="img/Carros Esportivos/corvette/3.webp" alt="CORVETTE" width="100%" height="300">
              <div class="down-content">
                <a href="offers.php"><h4>Corvette Stingray 1LT Targa</h4></a>
                <h6><small>A PARTIR</small> R$ 22.998,00 <small></small></h6>
                <p>O Corvette é uma fusão impressionante de poder, elegância e emoção. Como um ícone americano do mundo dos carros esportivos.</p>
              </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Sobre nós</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>Um lugar para realizar sonhos, fazer amigos e excelentes negócios.</p>
              <p> Na Clássicos Elite, estamos comprometidos em proporcionar uma experiência de aluguel de carros exclusivos que transcende o ordinário. Com uma paixão pela excelência e um compromisso com a performasse dos nosso cliente, nossa empresa se destaca como líder na indústria de aluguel de carros de prestígio.</p>
              <p>Nossa missão é oferecer aos nossos clientes acesso aos carros mais exclusivos do mundo, combinados com um serviço excepcional e personalizado. Cada detalhe de nossa operação é projetado para superar as expectativas e proporcionar uma experiência inigualável.</p>
             
            
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Mais Vendidos</h2>
              <h6>Carros Clássicos</h6>
              <a href="fleet.php">Mais Informações <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="mustang.php"><img src="img/Carros Classicos/Mustang/capa.webp" alt="" width="100%" height="250px"></a>
              <div class="down-content">
                <a href="fleet.php"><h4>Ford Mustang Hardtop</h4></a>
                <h6><small>A PARTIR DE</small> R$ 1.980,00 <small></small></h6>
                <p>O Ford Mustang Hardtop 1968 é um dos modelos mais emblemáticos da lendária linha de muscle cars da Ford.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="bmw325i.php"><img src="img/Carros Classicos/BMW 325i E30/IMG_8963-1.webp" alt="" width="100%" height="250px"></a>
              <div class="down-content">
                <a href="fleet.php"><h4>BMW 325i E30</h4></a>
                <h6><small>A PARTIR DE</small> R$ 750,00 <small></small></h6>
                <p>O BMW 325i E30 é um ícone da indústria automotiva, reconhecido por sua combinação de desempenho excepcional.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item" >
              <a href="opala.php"><img src="img/Carros Classicos/Opala/IMG_5880.jpg.webp " alt="CORVETTE"  width="100%" height="250px"></a>
              <div class="down-content">
                <a href="fleet.php"><h4>Opala Diplomata</h4></a>
                <h6><small>A PARTIR DE</small> R$ 500,00 <small></small></h6>
                <p>O Opala Diplomata 6 cilindros é uma verdadeira lenda entre os carros brasileiros, conhecido por seu estilo elegante. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Avaliação Dos Clientes</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="down-content">     
                  <img src="assets/images/3.jpg" alt="francisco">
                  <br>
                  <h4>Luan</h4>
                  <p class="n-m"><em>"Alugar um carro clássico através deste site foi uma experiência verdadeiramente inesquecível. O processo de reserva foi simples e rápido, e o carro estava em perfeitas condições. Mal posso esperar para voltar e alugar outro desses tesouros automotivos!"
                  </em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="down-content">     
                  <img src="assets/images/4.jpg" alt="francisco">
                  <br>
                  <h4>Stella</h4>
                  <p class="n-m"><em>"Fiquei impressionado com a variedade de carros clássicos disponíveis para aluguel neste site. Desde os icônicos Mustangs até os elegantes Rolls-Royces, havia algo para todos os gostos. Encontrei exatamente o carro dos meus sonhos e tive uma experiência incrível!"</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="down-content">     
                  <img src="assets/images/5.jpg" alt="francisco">
                  <br>
                  <h4>Matheus</h4>
                  <p class="n-m"><em>"Este site oferece um excelente valor pelo dinheiro quando se trata de aluguel de carros clássicos e de luxo. Os preços eram competitivos e justos, considerando a qualidade dos veículos e o serviço prestado. Definitivamente vou voltar para mais aluguéis no futuro."
                  </em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="down-content">     
                  <img src="assets/images/6.jpg" alt="francisco">
                  <br>
                  <h4>Vitoria</h4>
                  <p class="n-m"><em>"Minha experiência alugando um carro clássico neste site foi verdadeiramente de primeira classe. Desde o momento da reserva até a devolução do veículo, tudo correu sem problemas. O carro estava em condições impecáveis e proporcionou uma viagem verdadeiramente memorável. Mal posso esperar para fazer isso de novo!"</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="down-content">     
                  <img src="assets/images/2.jpg" alt="francisco">
                  <br>
                  <h4>Maria</h4>
                  <p class="n-m"><em>"Recomendo este site para qualquer pessoa que procure alugar um carro clássico ou de luxo. O atendimento ao cliente foi excelente, e o pessoal foi extremamente prestativo e profissional. O carro que aluguei estava impecável e proporcionou uma viagem verdadeiramente luxuosa."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="down-content">     
                  <img src="assets/images/1.jpg" alt="francisco">
                  <br>
                  <h4>Francisco</h4>
                  <p class="n-m"><em>"Alugar um carro clássico através deste site foi um sonho que se tornou realidade. A facilidade de navegação e reserva tornou o processo simples e sem complicações. O carro que escolhi estava em perfeitas condições, e a experiência de dirigi-lo foi absolutamente incrível. Foi o destaque da minha viagem e definitivamente farei isso novamente na próxima vez que estiver na cidade."</em></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Entre em Contato</h4>
                  <p>Tem alguma dúvida, sugestão ou precisa de ajuda com sua reserva? Entre em contato conosco! Nossa equipe está pronta para ajudar você a ter a melhor experiência possível.</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="contact.php" class="filled-button">Contate-nos</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
            </div>
          </div>
        </div>
      </div>
    </footer>

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


   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>


