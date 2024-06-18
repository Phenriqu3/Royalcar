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
    <link rel="icon" href="img/favicon-16x16.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="fleet.php">Carros Clássicos</a></li>
                <li class="nav-item active"><a class="nav-link" href="offers.php">Carros de Luxo</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Aluga-se</a></li>
                <li class="nav-item"><a class="nav-link" href="home.php">Perfil</Cadastra-se></a></li>
                <form id="searchForm" class="" role="search">
                <input id="searchInput" class="form-control" type="search" placeholder="Search" aria-label="Search">
                
              </form>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Lorem ipsum dolor sit amet</h4>
              <h2>Carros De Luxo</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        
        <!-- Carrossel 1 lista-->
        <div class="row">  
          <div class="col-md-4">
            <a href="BMWX6.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel1" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/Carros Esportivos/BMW-X6M/BMW-X6M-DIANT.webp" class="d-block w-100" alt="BMW X6M" width="100" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/BMW-X6M/BMW-X6M-DIANT-DIR.webp " class= "d-block w-100" alt="BMW X6M" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/BMW-X6M/BMW-X6M-LATERAL-ESQ.webp" class="d-block w-100" alt="BMW X6M" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/BMW-X6M/BMW-X6M-TRA.webp" class="d-block w-100" alt="BMW X6M" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/BMW-X6M/BMW-X6M-TRAS-ESQ.webp" class="d-block w-100" alt="BMW X6M" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/BMW-X6M/BMW-X6M-BADGE.webp" class="d-block w-100" alt="BMW X6M" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/BMW-X6M/BMW-X6M-MOTORISTA.webp" class="d-block w-100" alt="BMW X6M" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/BMW-X6M/BMW-X6M-CARONA.webp" class="d-block w-100" alt="BMW X6M" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/BMW-X6M/BMW-X6M-PAINEL.webp" class="d-block w-100" alt="BMW X6M" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/BMW-X6M/BMW-X6M-BANCO-TRAS.webp" class="d-block w-100" alt="BMW X6M" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/BMW-X6M/BMW-X6M-CONSOLE-CENTRAL.webp" class="d-block w-100" alt="BMW X6M" width="100%" height="255px">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                  </a>
                </div>
                <h5 class="card-title">BMW X6 M Competition</h5>
                <h5><small>A partir</small> R$ 18.598,00 <small></small></h5> <br>
                <a href="BMWX6.php">
                <p class="card-text"><button type="button"class="btn btn-light">2023</button> 
                  <button type="button" class="btn btn-light">Automático</button> </p>
                </a>
              </div>
            </div>
          </a>
          </div>
          
          <!-- Carrossel 2 lista 1-->
          <div class="col-md-4">
            <a href="dodgecharllenger.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel2" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">  
                    <div class="carousel-item active">
                      <img src="img/carros esportivos/dodge/dodge.jpeg" class="d-block w-100" alt="Dodge" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/dodge/WhatsApp Image 2024-05-24 at 21.52.46 (4).jpeg" class="d-block w-100" alt="Dodge" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/dodge/dodge-esq.webp" class="d-block w-100" alt="Dodge" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/dodge/WhatsApp Image 2024-05-24 at 21.52.46 (2).jpeg" class="d-block w-100" alt="Dodge" width="100%" height="255px" >
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/dodge/WhatsApp Image 2024-05-24 at 21.52.46 (1).jpeg" class="d-block w-100" alt="Dodge" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/dodge/WhatsApp Image 2024-05-24 at 21.52.45.jpeg" class="d-block w-100" alt="Dodge" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/dodge/WhatsApp Image 2024-05-24 at 21.52.47 (1).jpeg" class="d-block w-100" alt="Dodge" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/dodge/dentro.webp" class="d-block w-100" alt="Dodge" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/dodge/WhatsApp Image 2024-05-24 at 21.52.46.jpeg" class="d-block w-100" alt="Dodge" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/dodge/WhatsApp Image 2024-05-24 at 21.52.46 (3).jpeg" class="d-block w-100" alt="Dodge" width="100%" height="255px">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                  </a>
                </div>
                <h5 class="card-title">Dodge Charllenger SRT</h5>
                <h5><small>A partir</small> R$ 29.800,00<small></small></h5> <br>
              <a href="dodgecharllenger.php">
                <p class="card-text"><button type="button" class="btn btn-light">2023</button> 
                  <button type="button" class="btn btn-light">Automático</button> 
                </a>
                  </p>
              </div>
            </div>
          </a>
          </div>
    
          <!-- Carrossel 3 lista 1 -->
          <div class="col-md-4">
            <a href="porsche911.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/carros esportivos/porsche -911/Template-Foto-site-1-14.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/porsche -911/Template-Foto-site-1-13.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/porsche -911/Template-Foto-site-1-12.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/porsche -911/Template-Foto-site-1-11.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/porsche -911/Template-Foto-site-1-9.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/porsche -911/Template-Foto-site-1-2.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                      <div class="carousel-item"> 
                      <img src="img/carros esportivos/porsche -911/Template-Foto-site-1-1.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/porsche -911/Console-Porsche-carrera-s-giz.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                  </a>
                </div>
                <h5 class="card-title">Porsche Carrera 911 S</h5>
                <h5><small>A partir</small> R$ 22.998,00 <small></small></h5> <br>
                <a href="porsche911.php">
                <p class="card-text"><button type="button" class="btn btn-light">2023</button> 
                  <button type="button" class="btn btn-light">Automático</button>
                </a> 
              </div>
            </div>
          </a>
          </div>
        </div>
        <!-- Adicione mais carrosséis conforme necessário -->
        <div class="row"> 
          <!-- Carrossel 1 lista 2--> 
          <div class="col-md-4">
            <a href="audiq3.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel4" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/Carros Esportivos/Audi RS Q3/1.webp" class="d-block w-100" alt="Q3" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/Audi RS Q3/2.webp " class= "d-block w-100" alt="Q3" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/Audi RS Q3/3.webp" class="d-block w-100" alt="Q3 " width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/Audi RS Q3/4.webp" class="d-block w-100" alt="Q3" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/Audi RS Q3/5.webp" class="d-block w-100" alt="Q3 " width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/Audi RS Q3/6.webp" class="d-block w-100" alt="Q3 " width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/Audi RS Q3/7.webp" class="d-block w-100" alt="Q3 " width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/Audi RS Q3/8.webp" class="d-block w-100" alt="Q3 " width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/Audi RS Q3/9.webp" class="d-block w-100" alt="Q3 " width="100%" height="255px">
                    </div>
                    
            
                  </div>
                  <a class="carousel-control-prev" href="#carousel4" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel4" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                  </a>
                </div>
                <h5 class="card-title">Audi RS Q3</h5>
                <h5><small>A partir</small> R$ 8.198,00 <small></small></h5> <br>
                <a href="audiq3.php">
                <p class="card-text"><button type="button"class="btn btn-light">2021</button> 
                  <button type="button" class="btn btn-light">Automático</button> </p>
                  </a>
              </div>
            </div>
          </a>
          </div>
          
          <!-- Carrossel 2 lista 2-->
          <div class="col-md-4">
            <a href="ferrari.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel5" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                  
                    <div class="carousel-item active">
                      <img src="img/Carros Esportivos/Ferrari GTS/1.webp" class="d-block w-100" alt="Ferrari" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Ferrari GTS/2.webp" class="d-block w-100" alt="Ferrari" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Ferrari GTS/3.webp" class="d-block w-100" alt="Ferrari" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Ferrari GTS/4.webp" class="d-block w-100" alt="Ferrari" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Ferrari GTS/5.webp" class="d-block w-100" alt="Ferrari" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Ferrari GTS/6.webp" class="d-block w-100" alt="Ferrari" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Ferrari GTS/7.webp" class="d-block w-100" alt="Ferrari" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Ferrari GTS/8.webp" class="d-block w-100" alt="Ferrari" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Ferrari GTS/9.webp" class="d-block w-100" alt="Ferrari" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Ferrari GTS/10.webp" class="d-block w-100" alt="Ferrari" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Ferrari GTS/11.webp" class="d-block w-100" alt="Ferrari" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Ferrari GTS/12.webp" class="d-block w-100" alt="Ferrari" width="100%" height="255px">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel5" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel5" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                  </a>
                </div>
                <h5 class="card-title">Ferrari 296 GT-S</h5>
                <h5><small>A partir</small> R$ 83.798,00 <small></small></h5> <br>
                <a href="ferrari.php">
                <p class="card-text"><button type="button"class="btn btn-light">2024</button> 
                  <button type="button" class="btn btn-light">Automático</button> </p>
                  </a>         
              </div>
            </div>
          </a>
          </div>
    
          <!-- Carrossel 3 lista 2-->
          <div class="col-md-4">
            <a href="aston.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel6" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/carros esportivos/Aston Martin Vantage/Vantage-4.webp" class="d-block w-100" alt="Aston Martin" width="100%" height="225px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Aston Martin Vantage/Vantage-1.webp" class="d-block w-100" alt="Aston Martin" width="100%" height="225px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Aston Martin Vantage/Vantage-2.webp" class="d-block w-100" alt="Aston Martin" width="100%" height="225px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Aston Martin Vantage/Vantage-5.png" class="d-block w-100" alt="Aston Martin" width="100%" height="225px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Aston Martin Vantage/Vantage-11.png" class="d-block w-100" alt="Aston Martin" width="100%" height="225px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Aston Martin Vantage/Vantage-12.webp" class="d-block w-100" alt="Aston Martin" width="100%" height="225px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Aston Martin Vantage/Vantage-7.png" class="d-block w-100" alt="Aston Martin" width="100%" height="225px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/Aston Martin Vantage/Vantage-8.png" class="d-block w-100" alt="Aston Martin" width="100%" height="225px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/carros esportivos/Aston Martin Vantage/Vantage-9.png" class="d-block w-100" alt="Aston Martin" width="100%" height="225px">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel6" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel6" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                  </a>
                </div>
                <h5 class="card-title">Aston Martin Vantage V12 </h5>
                <h5><small>A partir</small> R$ 390.000,00 <small></small></h5> <br>
                <a href="aston.php">
                <p class="card-text"><button type="button"class="btn btn-light">2024</button> 
                  <button type="button" class="btn btn-light">Automático</button> </p>  
                </a>        
              </div>
            </div>
          </a>
          </div>
        </div>
        <!-- Adicione mais carrosséis conforme necessário -->
        <div class="row">  
          <!-- Carrossel 1 lista 3-->
          <div class="col-md-4">
            <a href="corvette.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel7" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/Carros Esportivos/corvette/1.webp" class="d-block w-100" alt=" " width="100%" height="255px">
                    </div>  
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/corvette/2.webp" class="d-block w-100" alt=" corvette" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/corvette/4.webp" class="d-block w-100" alt=" corvette" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/corvette/11.webp" class="d-block w-100" alt="corvette" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/corvette/3.webp" class="d-block w-100" alt="corvette " width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/corvette/6.webp" class="d-block w-100" alt=" corvette" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/corvette/5.webp" class="d-block w-100" alt=" corvette" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/corvette/8.webp" class="d-block w-100" alt="corvette" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/corvette/9.webp" class="d-block w-100" alt="corvette" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/corvette/10.webp" class="d-block w-100" alt="corvette" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/corvette/7.webp" class="d-block w-100" alt="corvette" width="100%" height="255px">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel7" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel7" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                  </a>
                </div>
                <h5 class="card-title">Chevrolet Corvette Stingray 1LT Targa</h5>
                <h5><small>A partir</small> R$ 22.998,00 <small></small></h5> <br>
                <a href="corvette.php">
                <p class="card-text"><button type="button"class="btn btn-light">2023</button> 
                  <button type="button" class="btn btn-light">Automático</button> </p>
                </a>        
              </div>
              </a>
            </div>
          </div>
          
          <!-- Carrossel 2 lista 3-->
          <div class="col-md-4">
            <a href="porschepanamera.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel8" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    
                    <div class="carousel-item active">
                      <img src="img/Carros Esportivos/porsche-panamera/9-2.webp" class="d-block w-100" alt="" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/porsche-panamera/7-2.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/porsche-panamera/5-2.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/porsche-panamera/2-2.webp" class="d-block w-100" alt="porsche" width="100%" height="255px" >
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/porsche-panamera/1-2.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/porsche-panamera/22.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/porsche-panamera/13-1.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/porsche-panamera/14.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/porsche-panamera/20.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/porsche-panamera/18.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/porsche-panamera/25.webp" class="d-block w-100" alt="porsche" width="100%" height="255px">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel8" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel8" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                  </a>
                </div>
                <h5 class="card-title">Porsche Panamera 4 e-hybrid</h5>
                <h5><small>A partir</small> R$ 11.200,00 <small></small></h5> <br>     
                <a href="porschepanamera.php">
                <p class="card-text"><button type="button"class="btn btn-light">2018</button> 
                  <button type="button" class="btn btn-light">Automático</button> </p>
                </a>
                </a>
              </a>
              </div>
            </div>
          </div>
    
          <!-- Carrossel 3 lista 3-->
          <div class="col-md-4">
            <a href="mustangsheibi.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel9" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/Carros Esportivos/mustang/1.webp" class="d-block w-100" alt="mustang" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/mustang/3.webp" class="d-block w-100" alt="mustang" width="100%" height="255px">
                    </div> 
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/mustang/9.webp" class="d-block w-100" alt="mustang" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/mustang/10.webp" class="d-block w-100" alt="mustang" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/mustang/4.webp" class="d-block w-100" alt="mustang" width="100%" height="255px">
                    </div>
                      <div class="carousel-item"> 
                      <img src="img/Carros Esportivos/mustang/5.webp" class="d-block w-100" alt="mustang" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/mustang/6.webp" class="d-block w-100" alt="mustang" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/mustang/7.webp" class="d-block w-100" alt="mustang" width="100%" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Esportivos/mustang/8.webp" class="d-block w-100" alt="mustang" width="100%" height="255px">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel9" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel9" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                  </a>
                </div>
                <h5 class="card-title">Ford Mustang Shelbi GT500</h5>
                <h5><small>A partir</small> R$ 22.000,00 <small></small></h5> <br>
                <a href="mustangsheibi.php">
                <p class="card-text"><button type="button"class="btn btn-light">2021</button> 
                  <button type="button" class="btn btn-light">Automático</button> </p>
                  </a>
                </a>
              </a>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>

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
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
