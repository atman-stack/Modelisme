<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>PHP</title>

    <link rel="stylesheet" href="css/styles.css">

    <!-- cdn bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!--cdn Fontawesome pour les icones  -->


    <!-- JS -->
    <script src="js/main.js" defer></script>

</head>
<body class="w-100 p-0 m-0">
    <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
            <a class="navbar-brand" href="index.php"><img id="logo" src="images/logo/atman.png" alt="logo" class=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>
    <main class="m-0 p-0">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><img src="images/theme/trucktor.jpg" alt=""> <rect width="100%" height="100%" fill="#777"/></svg>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><img src="images/theme/472109.jpg" alt=""><rect width="100%" height="100%" fill="#777"/></svg>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><img src="images/theme/77113.jpg" alt=""><rect width="100%" height="100%" fill="#777"/></svg>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
        <?php include $template.".php"; ?>
    </main>
    <!-- Pied de page commun de l'application -->
    <footer class="container-fluid bg-primary">        
        <div>
            <h4 class="text-center text-white">- Atmans -</h4>
            <div class="d-flex justify-content-around">
                <i class="fab fa-facebook-f fa-2x text-white"></i>
                <i class="fab fa-instagram  fa-2x text-white"></i>
                <i class="fab fa-twitter fa-2x text-white"></i>
                <i class="fab fa-pinterest fa-2x text-white"></i>
            </div>
        </div>
    </footer>

    <!-- cdn bootstrap js jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>