<?php
	include 'cnn.php';

?>



<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//LV' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jelgavas pilsētas uzņēmumu karte</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

	    <!-- Custom styles for leaflet -->
	<link rel="stylesheet" type="text/css" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
    <!-- Custom js for leaflet -->
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js'></script>
    <script type='text/javascript' src='http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js'></script>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Uzņēmumu karte</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#par">Par karti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="adm.php">ADMIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#zuk">ZUK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Kontakti</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-dark d-flex">
      <div class="container my-auto">
				<div class="row">
					<div class="col-md-12" id="map" style="border: 1px solid #AAA;height: 700px;">
						<div>
						<p>Skatīt  <a href="#">karti pa visu ekrānu</a></p>
						</div>
					</div>

				</div>
			<div class="row" >
				<div class="col-md-12 text-dark text-left">
					<h2 class="section-heading" style="margin-top:10px;">Jelgavas pilsētas uzņēmumu karte</h3>



<?php

$result = mysqli_query($GLOBALS['connection'], "SELECT COUNT(*) AS skaits FROM uznemums") or die(mysql_error());
$uznem_skaits = mysqli_fetch_array($result);


?>
						<p class="mb-5">Projekta pirmajā kārtā atrodami <strong> <?php echo $uznem_skaits['skaits'];  ?> ēdināšanas uzņēmumi Jelgavas pilsētā</strong>. šobrīd pieejami ir objektu aplūkošana. Projekta izstrādes procesā tiek izstrādātas arī citas funkcijas kartes ērtākai lietošanai.</p>
						<p class="mb-5">Ja Tev ir zināms uzņēmums, kas vēl nav atrodams Jelgavas uzņēmumu kartē, nosūti to uz e-pastu agris.kalnins@zrkac.jelgava.lv un mēs pievienosim to kartē!</p>
				</div>
			</div>
      </div>
    </header>

    <section class="bg-primary" id="par">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Jelgavas pilsētas uzņēmumu karte</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Aplūko uzņēmumus, kas atrodami Jelgavas pilsētā!</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#page-top">Skatīt karti!</a>
          </div>
        </div>
      </div>
    </section>
<!--
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-gem text-primary mb-3 sr-icon-1"></i>
              <h3 class="mb-3">Sturdy Templates</h3>
              <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
              <h3 class="mb-3">Ready to Ship</h3>
              <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
              <h3 class="mb-3">Up to Date</h3>
              <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
              <h3 class="mb-3">Made with Love</h3>
              <p class="text-muted mb-0">You have to make your websites with love these days!</p>
            </div>
          </div>
        </div>
      </div>
    </section>-->
<!--
    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
-->
    <section class="bg-dark text-white" id="zuk">
      <div class="container text-center">
        <h2 class="mb-4">Zemgales uzņēmumu katalogs</h2>
        <a class="btn btn-light btn-xl sr-button" href="http://www.zrkac.lv/zuk">Aplūko uzņēmumus katalogā!</a>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Piesakies un esi atrodams arī Tu!</h2>
            <hr class="my-4">
            <p class="mb-5">Vai vēlies būt redzams ar savā nozarē esošiem uzņēmumiem? Piesakies! Un droši iesaki arī citiem saviem draugiem, paziņām  un sadarbības partneriem par šo iespēju!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>+371-630-12-149</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:agris.kalnins@zrkac.jelgava.lv">agris.kalnins@zrkac.jelgava.lv</a>
            </p>
          </div>
        </div>
      </div>
    </section>

	<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-5 text-center text-white"> &copy; ZRKAC Uzņēmējdarbības atbalsta nodaļa 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

    <!-- Custom scripts leaflet -->
		<script type='text/javascript' src='maps/markers.json'></script>
    <script type='text/javascript' src='maps/zrkac_leaflet.js'></script>

  </body>

</html>
