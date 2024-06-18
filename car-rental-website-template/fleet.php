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
                    <a class="nav-link" href="home.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 
              
                <li class="nav-item active"><a class="nav-link" href="fleet.php">Carros Clássicos</a></li>
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

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>clássicos</h2>
              <h4>Modelos clássicos com o melhor preço</h4> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <!-- Os 3 Carrossel -->
          <div class="col-md-4">
            <a href="dodge.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel1" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/Carros Classicos/dodge charger/IMG_3099.webp " class="d-block w-100" alt="dodge" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/dodge charger/IMG_3118.webp " class="d-block w-100" alt="dodge " width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/dodge charger/IMG_3101.jpg.webp" class="d-block w-100" alt="dodge " width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/dodge charger/IMG_3104.jpg" class="d-block w-100" alt="dodge " width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/dodge charger/IMG_3105.webp" class="d-block w-100" alt="dodge " width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/dodge charger/IMG_3107.webp" class="d-block w-100" alt="dodge " width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/dodge charger/IMG_3109.webp" class="d-block w-100" alt="dodge " width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/dodge charger/IMG_3137.webp " class="d-block w-100" alt="dodge " width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/dodge charger/IMG_3128.webp " class="d-block w-100" alt="dodge " width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/dodge charger/IMG_3156.webp " class="d-block w-100" alt="dodge" width="100%" height="283px">
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
                <h5 class="card-title">Dodge Charger V8 383</h5><p></p>
                <h5><small>A partir</small> R$ 1.800,00 <small></small></h5> <br>
                <a href="dodge.php">
                <p class="card-text" href="dodge.php"><button type="button" class="btn btn-light">1969</button> 
                  <button type="button" class="btn btn-light" href="dodge.php">Automático</button>
                  <button type="button" href="dodge.php" class="btn btn-light">Gasolina</button></p>
                </a>
                </div>
            </div>
          </a>
          </div>
        
          <div class="col-md-4">
            <a href="cadillac.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel2" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    
                    <div class="carousel-item active">
                      <img src="img/Carros Classicos/Cadillac/IMG_3979.webp" class="d-block w-100" alt="Cadillac" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Cadillac/IMG_3980.jpg.webp" class="d-block w-100" alt="Cadillac" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Cadillac/IMG_3982.webp" class="d-block w-100" alt="Cadillac" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Cadillac/IMG_3975.webp" class="d-block w-100" alt="Cadillac" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Cadillac/IMG_3976.webp " class="d-block w-100" alt="Cadillac" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Cadillac/IMG_3977.webp" class="d-block w-100" alt="Cadillac" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Cadillac/IMG_3995.webp" class="d-block w-100" alt="Cadillac" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Cadillac/IMG_4012.webp" class="d-block w-100" alt="Cadillac" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Cadillac/IMG_4029.webp" class="d-block w-100" alt="Cadillac" width="100%" height="283px">
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
                <h5 class="card-title">Cadillac Eldorado </h5>
                <h5><small>A partir</small> R$ 870,00 <small></small></h5> <br>
                <a href="cadillac.php">
                <p class="card-text"><button type="button" class="btn btn-light">1974</button> 
                  <button type="button" class="btn btn-light">Automático</button> 
                  <button type="button" class="btn btn-light">Gasolina</button> </p>
                </a>
              </div>
            </div>
          </a>
          </div>
     
          <div class="col-md-4">
            <a href="bmw325i.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/Carros Classicos/BMW 325i E30/IMG_8960-1.webp" class="d-block w-100" alt="BMW 325i" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 325i E30/IMG_8963-1.webp" class="d-block w-100" alt="BMW 325i" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 325i E30/IMG_8966-1.webp" class="d-block w-100" alt="BMW 325i" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 325i E30/IMG_8969-1.webp" class="d-block w-100" alt="BMW 325i" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 325i E30/IMG_8971-1.webp" class="d-block w-100" alt="BMW 325i" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 325i E30/IMG_9008.webp" class="d-block w-100" alt="BMW 325i" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 325i E30/IMG_8997-1.webp" class="d-block w-100" alt="BMW 325i" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 325i E30/IMG_8994-1.webp" class="d-block w-100" alt="BMW 325i" width="100%" height="283px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 325i E30/IMG_8988-1.webp" class="d-block w-100" alt="BMW 325i" width="100%" height="283px">
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
                <h5 class="card-title">BMW  325i E30</h5>
                <h5><small>A partir</small> R$ 750,00 <small></small></h5> <br>
                <a href="bmw325i.php">
                <p class="card-text"><button type="button" class="btn btn-light">1989</button> 
                  <button type="button" class="btn btn-light">Manual</button> 
                  <button type="button" class="btn btn-light">Gasolina</button> </p>
                </a>
              </div>
            </div>
            </a>
          </div>
        </div>
        <!-- Adicione mais carrosséis conforme necessário  linha 2-->
        
        <!-- Os 3 Carrossel -->
        <div class="row">
          <div class="col-md-4">
            <a href="bmw320i.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel4" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/Carros Classicos/BMW 320I/IMG_4717.jpg" class="d-block w-100" alt="BMW" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 320I/IMG_4720.webp" class="d-block w-100" alt="BMW " width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 320I/IMG_4724.webp" class="d-block w-100" alt="BMW " width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 320I/IMG_4648.webp" class="d-block w-100" alt="BMW " width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 320I/IMG_4652.webp" class="d-block w-100" alt="BMW " width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 320I/IMG_4717.jpg" class="d-block w-100" alt="BMW " width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 320I/IMG_4670.webp" class="d-block w-100" alt="BMW " width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 320I/IMG_4671.webp " class="d-block w-100" alt="BMW " width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/BMW 320I/IMG_4694.webp " class="d-block w-100" alt="BMW " width="100$" height="255px">
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
                <h5 class="card-title">BMW 320i E30</h5>
                <h5><small>A partir</small> R$ 500,00 <small></small></h5> <br>
                <a href="bmw320i.php">
                <p class="card-text"><button type="button" class="btn btn-light">1989</button> 
                  <button type="button" class="btn btn-light">Manual</button> 
                  <button type="button" class="btn btn-light">Gasolina</button> </p>
                </a>
              </div>
            </div>
          </a>
          </div>
        
          <div class="col-md-4">
            <a href="fusca.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel5" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    
                    <div class="carousel-item active">
                      <img src="img/Carros Classicos/Fusca/1-1.jpg" class="d-block w-100" alt="Fusca" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Fusca/13.jpg" class="d-block w-100" alt="Fusca" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Fusca/6.jpg" class="d-block w-100" alt="Fusca" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Fusca/11.jpg" class="d-block w-100" alt="Fusca" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Fusca/10.jpg " class="d-block w-100" alt="Fusca" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Fusca/19.jpg" class="d-block w-100" alt="Fusca" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Fusca/14.jpg" class="d-block w-100" alt="Fusca" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Fusca/15.jpg" class="d-block w-100" alt="Fusca" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Fusca/3-1.jpg" class="d-block w-100" alt="Fusca" width="100$" height="255px">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel5" role="button" data-slide="prev" width="100$" height="255px">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel5" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                  </a>
                </div>
                <h5 class="card-title">Volksvagen Fusca 1600</h5>
                <h5><small>A partir</small> R$ 230,00 <small></small></h5> <br>
                <a href="fusca.php">
                <p class="card-text"><button type="button" class="btn btn-light">1996</button> 
                  <button type="button" class="btn btn-light">Manual</button> 
                  <button type="button" class="btn btn-light">Gasolina</button> 
                </a>
                </p>
              </div>
            </div>
          </a>
          </div>
     
          <div class="col-md-4">
            <a href="golgts.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel6" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/Carros Classicos/Gol Gts/1.webp" class="d-block w-100" alt="GOL GTS"width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Gol Gts/2.webp" class="d-block w-100" alt="GOL GTS" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Gol Gts/3.webp" class="d-block w-100" alt="GOL GTS" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Gol Gts/4.webp" class="d-block w-100" alt="GOL GTS" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Gol Gts/5.webp" class="d-block w-100" alt="GOL GTS" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Gol Gts/6.webp" class="d-block w-100" alt="GOL GTS" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Gol Gts/7.webp" class="d-block w-100" alt="GOL GTS" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Gol Gts/8.webp" class="d-block w-100" alt="GOL GTS" width="100$" height="255px">
                    </div>    
                  </div>
                  <a class="carousel-control-prev" href="#carousel6" role="button" data-slide="prev" width="100$" height="255px">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel6" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                  </a>
                </div>
                <h5 class="card-title">Volksvagen Gol GTS</h5>
                <h5><small>A partir</small> R$ 230,00 <small></small></h5> <br>
                <a href="golgts.php">
                <p class="card-text"><button type="button" class="btn btn-light">1989</button> 
                  <button type="button" class="btn btn-light">Manual</button> 
                  <button type="button" class="btn btn-light">Àlcool</button> </p>
                </a>
              </div>
            </div>
          </a>
          </div>
        </div>
        <!-- Adicione mais carrosséis conforme necessário lista 3 -->
          <!-- Os 3 Carrossel -->
        <div class="row">
          <div class="col-md-4">
            <a href="maverick.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel7" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/Carros Classicos/Maverick Super 1974/rs=w_984,h_738 (1).webp " class="d-block w-100" alt="Maverick" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Maverick Super 1974/rs=w_984,h_738 (2).webp " class="d-block w-100" alt="Maverick " width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Maverick Super 1974/rs=w_984,h_738 (3).webp" class="d-block w-100" alt="Maverick " width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Maverick Super 1974/rs=w_984,h_738 (4).webp" class="d-block w-100" alt="Maverick " width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Maverick Super 1974/rs=w_984,h_738 (5).webp" class="d-block w-100" alt="Maverick " width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Maverick Super 1974/rs=w_984,h_738 (6).webp" class="d-block w-100" alt="Maverick " width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Maverick Super 1974/rs=w_984,h_738.webp" class="d-block w-100" alt="Maverick " width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Maverick Super 1974/rs=w_984,h_738 (7).webp" class="d-block w-100" alt="Maverick " width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Maverick Super 1974/rs=w_984,h_738 (8).webp " class="d-block w-100" alt="Maverick " width="100$" height="255px">
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
                <h5 class="card-title">Maverick Super</h5>
                <h5><small>A partir</small> R$ 1.300,00 <small></small></h5> <br>
                <a href="maverick.php">
                <p class="card-text"><button type="button" class="btn btn-light">1974</button> 
                  <button type="button" class="btn btn-light">Manual</button> 
                  <button type="button" class="btn btn-light">Gasolina</button> </p>
                </a>

              </div>
            </div>
          </a>
          </div>
        
          <div class="col-md-4">
            <a href="opala.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel8" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    
                    <div class="carousel-item active">
                      <img src="img/Carros Classicos/Opala/IMG_5880.jpg.webp" class="d-block w-100" alt="Opala" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Opala/IMG_5883.webp" class="d-block w-100" alt="Opala" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Opala/IMG_5902.webp" class="d-block w-100" alt="Opala" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Opala/IMG_5885.webp" class="d-block w-100" alt="Opala" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Opala/IMG_5923.webp " class="d-block w-100" alt="Opala" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Opala/IMG_5918.webp" class="d-block w-100" alt="Opala" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Opala/IMG_5916.webp" class="d-block w-100" alt="Opala" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Opala/IMG_5935.webp" class="d-block w-100" alt="Opala" width="100$" height="255px">
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
                <h5 class="card-title">Opala Diplomata</h5>
                <h5><small>A partir</small> R$ 240,00 <small></small></h5> <br>
                <a href="opala.php">
                <p class="card-text"><button type="button" class="btn btn-light">1987</button> 
                  <button type="button" class="btn btn-light">Manual</button> 
                  <button type="button" class="btn btn-light">Gasolina</button> </p>
                </a>
              </div>
            </div>
          </a>
          </div>
     
          <div class="col-md-4">
            <a href="mustang.php">
            <div class="card">
              <div class="card-body">
                <div id="carousel9" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/Carros Classicos/Mustang/1.webp" class="d-block w-100" alt="Mustang" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Mustang/capa.webp" class="d-block w-100" alt="Mustang" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Mustang/2.webp" class="d-block w-100" alt="Mustang" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Mustang/3.webp" class="d-block w-100" alt="Mustang" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Mustang/4.webp" class="d-block w-100" alt="Mustang" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Mustang/5.webp" class="d-block w-100" alt="Mustang" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Mustang/6.webp" class="d-block w-100" alt="Mustang" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Mustang/7.webp" class="d-block w-100" alt="Mustang" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Mustang/8.webp" class="d-block w-100" alt="Mustang" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Mustang/9.webp" class="d-block w-100" alt="Mustang" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Mustang/10.webp" class="d-block w-100" alt="Mustang" width="100$" height="255px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/Carros Classicos/Mustang/11.webp" class="d-block w-100" alt="Mustang" width="100$" height="255px">
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
                <h5 class="card-title">Ford Mustang Hardtop</h5>
                <h5><small>A partir</small> R$ 1.980,00 <small></small></h5> <br>
                <a href="mustang.php">
                <p class="card-text"><button type="button" class="btn btn-light">1968</button> 
                  <button type="button" class="btn btn-light">Automático</button> 
                  <button type="button" class="btn btn-light">Gasolina</button> </p>
                </a>
              </div>
            </div>
          </a>
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

    <!-- Modelo -->
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
