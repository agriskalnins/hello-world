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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

	  <!-- Custom styles for leaflet -->
		<link rel="stylesheet" type="text/css" href="css/leaflet.css" />
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Ēdināšanas uzņēmumu karte</a>
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
						<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="tests.php">TESTS</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <header class="masthead text-center text-dark d-flex">
      <div class="container my-auto">
				<div class="row">
					<div class="col-md-12">
						<div id="mySidenav" class="sidenav">
						<div id="txtHint"> Informācija par uzņēmumu
						</div>
						</div>
						<div id="map" style="border: 1px solid #AAA;height: 700px;"></div>
						<p class="mb-5">Skatīt  <a href="#">karti pa visu ekrānu</a></p>
					</div>
				</div>
			<div class="row" >
				<div class="col-md-12 text-dark text-left">
					<h2 class="section-heading" style="margin-top:10px;">Jelgavas pilsētas uzņēmumu karte</h3>



<?php

$result = mysqli_query($GLOBALS['connection'], "SELECT COUNT(*) AS skaits FROM uznemums") or die(mysql_error());
$uznem_skaits = mysqli_fetch_array($result);


?>
						<p class="mb-5">Projekta pirmajā kārtā Jelgavas pilsētas uzņēmumu kartē atrodami <strong> <?php echo $uznem_skaits['skaits']+1;  ?> ēdināšanas uzņēmumi</strong>. </p>
						<p class="mb-5">Ja Jums ir zināms ēdināšanas uzņēmums, kas vēl nav atrodams Jelgavas uzņēmumu kartē, nosūti to uz e-pastu agris.kalnins@zrkac.jelgava.lv un mēs pievienosim to kartē!</p>
						<p class="mb-5">Šobrīd kartē pieejama tikai objektu aplūkošana. 2018. gada nogalē būs pieejama arī šo objektu detalizētākas informācijas aplūkošana. Tostarp tiek izstrādāta arī kartes administrēšanas vide - Jelgavas pilsētas kartes ērtākai apsaimniekošanai. Projekta izstrādes procesā tiks paredzētas un izstrādātas arī citas funkcijas Jelgavas pilsētas kartes ērtākai lietošanai.</p>

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
    <section class="bg-dark text-white" id="zuk">
      <div class="container text-center">
				<div class="row">
					<div class="col-md-12">
						  <a href="http://zrkac.lv/zuk"><img src="img\ZUK.png"></a><br>
							<p class="text-faded mb-4">Aplūko uzņēmumus, kas atrodami Zemgales uzņēmumu katalogā!</p>
		        <a class="btn btn-light btn-xl sr-button" href="http://www.zrkac.lv/zuk">Apmeklēt uzņēmumu katalogu!</a>
					</div>
				</div>

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
				<div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <a href=""><img src="img\ukarte.png"></a>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <a href="http://zrkac.lv/"><img src="img\zrkac.png"></a>
          </div>
					<div class="col-lg-4 mr-auto text-center">
            <a href="http://www.jelgava.lv"><img src="img\Jelgava.png"></a>
          </div>
        </div>
        <p class="m-5 text-center text-white"> &copy; ZRKAC Uzņēmējdarbības atbalsta nodaļa 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

		<!-- Custom js for leaflet -->
		<script type='text/javascript' src='http://cdn.leafletjs.com/leaflet/v1.4.0/leaflet.js'></script>


    <!-- Custom scripts leaflet -->
		<script type='text/javascript' src='maps/markers.json'></script>
    <script type='text/javascript' src='maps/zrkac_leaflet.js'></script>
		<script>
		function openNav(str) {
		  if (str == "") {
		        document.getElementById("txtHint").innerHTML = "";
		        return;
		    } else {
		        if (window.XMLHttpRequest) {
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		            xmlhttp = new XMLHttpRequest();
		        } else {
		            // code for IE6, IE5
		            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		        }
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById("txtHint").innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","getcom.php?q="+str,true);
		        xmlhttp.send();
		    }
		  document.getElementById("mySidenav").style.width = "100%";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		}
		</script>



  </body>

</html>
