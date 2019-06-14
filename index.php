<?php

    include("login.php");//uključujemo login
		if(isset($_SESSION['login_user'])){
		if($_SESSION["login_user"] == "admin"){
			header("Location: admin/admin.php");//preusmjeravanje na drugu stranicu
		}else{
			header("location: dashboard.php");
		}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jadrolinija</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Jadrolinija</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Putovanja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Kontakt</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Vaše putovanje počinje ovdje</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Jadrolinija nudi dnevna putovanja i izlete duž jadranske obale</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="Luke/dubrovnik/dubrovnik.php">Dubrovnik</a>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="Luke/rijeka/rijeka.php">Rijeka</a>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="Luke/zadar/zadar.php">Zadar</a>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="Luke/split/split.php">Split</a><br/></br>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="Luke/ploce/ploce.php">Ploce</a>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="Luke/sibenik/sibenik.php">Sibenik</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Onama -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Znate gdje ste pošli!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Sve redovne plovidbe možete (kao i obaviti vaše rezervacije) klikom na gumb ispod!</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Spremni?!</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Putovanja -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Pristup adminu</h2>
      <hr class="divider my-4">
      <div class="row">
      <form class="form-input" action="" method="POST">
                                    <div class="form-group">
                                      <label for="exampleInputUsername1">Korisničko ime</label>
                                      <input type="text" class="form-control" id="exampleInputUsernamel1" placeholder="Korisničko ime" name="user">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Šifra</label>
                                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Šifra" name="pass">
                                    </div>
                                    <input type="submit" class="btn" value="Prijava" name="login">
                                    <span><?php echo $error; ?></span>
                                  </form>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        
      </div>
    </div>
  </section>



  <!-- Kontakt -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Kontaktirajte nas!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Zamimaju vas naši posebni izleti, ili želite planirati svoj a trebaju vam naše usluge, žašto nas ne kontaktirate a mi ćemo vam odgovorit u što bržem roku!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+385 91 000 55 00</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:upit@jadrolinija.hr">upit@jadrolinija.hr</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>
