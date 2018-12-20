<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nacionālie dārgumi</title>
    <link rel='shortcut icon' href='nbadm/img/fav.ico'>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/ndstyle.css" rel="stylesheet">
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
            $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
                return false;
            });
        
        $('#back-to-top').tooltip('show');

});
    </script>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lobster|PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/"><img width="300px"  src="img/logo.png" alt="Nacionālie dārgumi" ></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Jaunumi</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#object">Nacionālie dārgumi</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Par iniciatīvu</a>
                    </li>
                       <!-- <li class="dropdown">
                                <a class="page-scroll dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>-->

                    <li>
                        <a class="page-scroll" href="#contact">Kontakti</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">Jaunatklāj nacionālās bagātības, gatavojot dāvanu<img class="simts-logo" src="img/lv100-logo-rgb-horizontal.png" alt="Nacionālie dārgumi" ></div>
                <a href="jaunatklajejs" class="page-scroll btn btn-xl">Jaunatklājējiem</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Aktualitātes</h2>
                    <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
                </div>
            </div>
            <div class="row text-center">
        

<?php

include("include/news.php");

?>
    
                <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="aktualitates" class="page-scroll btn btn-xl">Skatīt citas aktualitātes</a>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="object" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nacionālie dārgumi</h2>
                    <p class="text-muted">Nacionālo dārgumu jaunatklāšanas procesā no 2016. gada 26. janvāra līdz 2018. gada novembrim dalībnieki tiks aicināti iepazīt Latvijas nacionālās bagātības un Jelgavas, Jelgavas un Ozolnieku novadu lokālās bagātības.</p>
                    <p class="text-muted">Nacionālo dārgumu jaunatklāšanā klases no Jelgavas pilsētas, Jelgavas un Ozolnieku novadu pašvaldībām tiks aicinātas apmeklēt un iepazīt nacionālas nozīmes objektus, kā arī atklāt un apmeklēt lokālās bagātības. Citas interešu grupas un ģimenes tiks aicinātas apmeklēt gan nacionālos, gan lokālos iniciatīvas objektus, veidojot par to piedzīvojuma dienasgrāmatas un maršrutus, iesaistoties sacensībā par neparastām balvām.</p>
                     
                </div>
            </div>
            <div class="row">

<?php
        include("include/national.php");
?>
                  
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="nacionaliedargumi" class="page-scroll btn btn-xl">Atklāt citus nacionālos dārgumus</a>
                </div>
            </div>
        </div>
    </section>
	
	    <!-- Portfolio Grid Section -->
    <section id="local" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Lokālie dārgumi</h2>
                    <p class="text-muted"> Iniciatīvas gaitā iespējams pieteikt arī lokālos objektus, kas atrodas Jelgavas pilsētā, Jelgavas vai Ozolnieku novados, tādējādi iesakot šos objektus apmeklēt iniciatīvas dalībniekiem. </p>
                    <p class="text-muted"><strong>Aicinām apmeklēt pieteiktos objektus, kuri ir apstiprināti un par kuriem publicēta informācija un uzdevumi. </strong></p>
                        <p class="text-muted">Iniciatīvā pieteiktie lokālie dārgumi: </p>
                     
                </div>
            </div>
            <div class="row">

<?php
        include("include/local.php");
?>
                  
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="lokaliedargumi" class="page-scroll btn btn-xl">Atklāt citus lokālos dārgumus</a>
                </div>
            </div>
        </div>
    </section>
	

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Iniciatīva Latvijas simtgadei "Nacionālo dārgumu jaunatklāšana"</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        
                        <li class="timeline-inverted">
                            
                            <div class="timeline-panel">
                                
<?php
                                
$query_sadala = "SELECT * FROM nb_sadalas WHERE sad_pos='1' ORDER BY sad_kartiba ASC";

    if ($result_sadala = $mysqli->query($query_sadala)) {
       
        /* fetch associative array */
        while ($sadalarow = $result_sadala->fetch_assoc()) {
            
            $idsa = $sadalarow['id_sad'];
            
           echo " <a class='portfolio-link' data-toggle='modal' href='#portfolioModal".$idsa."'><div class='timeline-heading'>
                    <!--<h4>March 2011</h4>-->
                        <h2 class='subheading'>".$sadalarow['sad_nosaukums']." </h2>
                </div></a>";

        }
             
    /* free result set */
    $result_sadala->free();
    }
else {
    echo " ";
}
                                
?>
                                
                                
                                
                               
                            </div>
                        </li>
                     
                    </ul>
                </div>
            </div>
        </div>
    </section>

  
    <!-- Clients Aside -->
    <aside class="supporters">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Atbalstītāju goda siena</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4 class="text-h3">Patronese:</h4>
                    <a href="#">
                        <img src="img/logos/LVP.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4 class="text-h3">Aizbildņi:</h4>
                    <a href="#">
                        <img src="img/logos/Ozolnieki.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4 class="text-h3">&nbsp;</h4>
                    <a href="#">
                        <img src="img/logos/Jelgava.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4 class="text-h3">&nbsp;</h4>
                    <a href="#">
                        <img src="img/logos/Jenov.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4 class="text-h3">Iedvesmo:</h4>
                    <a href="#">
                        <img src="img/logos/LV100.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4 class="text-h3">Sadarbības partneris:</h4>
                    <a href="#">
                        <img src="img/logos/ZRKAC.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4 class="text-h3">Atbalsta:</h4>
                    <a href="#">
                        <img src="img/logos/Karamelu.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4 class="text-h3">&nbsp;</h4>
                        <img src="img/logos/Tukss.jpg" class="img-responsive img-centered" alt="">
                </div>
            </div>
        </div>
    </aside>
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kontakti</h2>
                    <p class="text-muted">Veidosim dāvanu Latvijas simtgadei kopā! Gaidīsim Jūsu ieteikumus, idejas un jautājumus, lai radītu šo projektu par lielisku un neatkārtojamu piedzīvojumu ikvienam!</p>
                    <p class="text-muted">Kā ar mums sazināties?</p>
                    <p class="text-muted">Rakstiet uz e-pastu: nacionaliedargumi@gmail.com vai aizpildiet jautājumu formu:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Vārds, Uzvārds *" id="name" required data-validation-required-message="Ievadi savu un uzvārdu!">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="E-pasts *" id="email" required data-validation-required-message="Ievadi e-pasta adresi!">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Telefons *" id="phone" required data-validation-required-message="Ievadi telefona numuru!">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Ziņojums *" id="message" required data-validation-required-message="Ievadi ziņojumu!"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl" name="btn-send">Nosūtīt</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Uz augšu" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
            <div class="row">
                <div class="col-md-5">
                    <span class="copyright"> &copy; 2016 Iniciatīva Latvijas simtgadei "Nacionālo dārgumu jaunatklāšana"</span>
                </div>
                <div class="col-md-3">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/NDJ_LV100"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/nacionaliedargumi.lv/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/nacionaliedargumi.lv/"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
 
                    </ul>
                </div>
            </div>
        </div>
    </footer>



   
    
    <?php
    
    $query_dargumi = "SELECT * FROM nb_objekti WHERE obj_id_regions='0' ORDER BY id_objekts DESC LIMIT 3";

    if ($result = $mysqli->query($query_dargumi)) {
       
        /* fetch associative array */
        while ($dargumirow = $result->fetch_assoc()) {
            
            echo "<!-- Portfolio Modal  -->
            <div class='portfolio-modal modal fade' id='portfolioModal". $dargumirow['id_objekts']."' tabindex='-1' role='dialog' aria-hidden='true'>
                <div class='modal-content'>
                    <div class='close-modal' data-dismiss='modal'>
                        <div class='lr'>
                            <div class='rl'>
                            </div>
                        </div>
                    </div>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-lg-8 col-lg-offset-2'>
                                <div class='modal-body'>
                                    <!-- Project Details Go Here -->
                                     <h2 class='modal-title'>";
            echo $dargumirow['obj_nosaukums'];
            echo "</h2>";
            if ($dargumirow['obj_img'] != NULL)
            {
                echo "<img class='img-responsive img-centered' src='nbadm/img/objekti/";
                echo $dargumirow['obj_img'];
                echo "' alt=''>";     
            }
            echo $dargumirow['obj_apraksts'];
            
            $idDA = $dargumirow['id_objekts'];
            $query_obj_uzd = "SELECT * FROM nb_uzdevumi WHERE uzd_id_objekts=$idDA";
            if ($result_objuzd = $mysqli->query($query_obj_uzd)) {
            echo "<div class='modal-body-quest' style='background-color: #e7e5e5; padding:15px; margin-bottom:20px;'><h3>Uzdevumi klasēm</h3>";
            /* fetch associative array */
                    while ($obj_uzd_row = $result_objuzd->fetch_assoc()) {
                        echo "<span style=font-size:18px;font-weight:bold;>".$obj_uzd_row['uzd_nosaukums']."</span>".$obj_uzd_row['uzd_apraksts'];
                    }
                echo "</div>";
            }
            echo " <button type='button' class='btn btn-primary' data-dismiss='modal'><i class='fa fa-times'></i> Aizvērt</button> <button type='button' class='btn btn-primary' data-dismiss='modal'><i class='fa fa-floppy-o'></i> Jaunatklājējs</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
            
        }
    }
    
    ?>
    
    <?php
    
    $query_dargumi_loc = "SELECT * FROM nb_objekti WHERE obj_id_regions>0 AND obj_accept=1 ORDER BY id_objekts DESC LIMIT 3";

    if ($result_loc = $mysqli->query($query_dargumi_loc)) {
       
        /* fetch associative array */
        while ($dargumilocrow = $result_loc->fetch_assoc()) {
            
            echo "<!-- Portfolio Modal  -->
            <div class='portfolio-modal modal fade' id='portfolioModal". $dargumilocrow['id_objekts']."' tabindex='-1' role='dialog' aria-hidden='true'>
                <div class='modal-content'>
                    <div class='close-modal' data-dismiss='modal'>
                        <div class='lr'>
                            <div class='rl'>
                            </div>
                        </div>
                    </div>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-lg-8 col-lg-offset-2'>
                                <div class='modal-body'>
                                    <!-- Project Details Go Here -->
                                     <h2 class='modal-title'>";
            echo $dargumilocrow['obj_nosaukums'];
            echo "</h2>";
            if ($dargumilocrow['obj_img'] != NULL)
            {
                echo "<img class='img-responsive img-centered' src='nbadm/img/objekti/";
                echo $dargumilocrow['obj_img'];
                echo "' alt=''>";     
            }
            echo $dargumilocrow['obj_apraksts'];
            
            $idDALO = $dargumilocrow['id_objekts'];
            $query_locobj_uzd = "SELECT * FROM nb_uzdevumi WHERE uzd_id_objekts=$idDALO";
            if ($result_locobjuzd = $mysqli->query($query_locobj_uzd)) {
            echo "<div class='modal-body-quest' style='background-color: #e7e5e5; padding:15px; margin-bottom:20px;'><h3>Uzdevumi klasēm</h3>";
            /* fetch associative array */
                    while ($locobj_uzd_row = $result_locobjuzd->fetch_assoc()) {
                        echo "<span style=font-size:18px;font-weight:bold;>".$locobj_uzd_row['uzd_nosaukums']."</span>".$locobj_uzd_row['uzd_apraksts'];
                    }
                echo "</div>";
            }
            echo " <button type='button' class='btn btn-primary' data-dismiss='modal'><i class='fa fa-times'></i> Aizvērt</button> <button type='button' class='btn btn-primary' data-dismiss='modal'><i class='fa fa-floppy-o'></i> Jaunatklājējs</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
            
        }
    }
    
    ?>
    
    
    
<?php

    
$query_sadala = "SELECT * FROM nb_sadalas WHERE sad_pos='1' ORDER BY sad_kartiba ASC";

    if ($result_sadala = $mysqli->query($query_sadala)) {
       
        /* fetch associative array */
        while ($sadalarow = $result_sadala->fetch_assoc()) {
            
            
 echo "<!-- Portfolio Modal  -->
    <div class='portfolio-modal modal fade' id='portfolioModal". $sadalarow['id_sad']."' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class='modal-content'>
            <div class='close-modal' data-dismiss='modal'>
                <div class='lr'>
                    <div class='rl'>
                    </div>
                </div>
            </div>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-8 col-lg-offset-2'>
                        <div class='modal-body'>
                            <!-- Project Details Go Here -->
                             <h2 class='modal-title'>";
            echo $sadalarow['sad_nosaukums'];
            echo "</h2>";
            if ($sadalarow['akt_titulbilde'] != NULL)
            {
                echo "<img class='img-responsive img-centered' src='nbadm/img/aktualitates/";
                echo $sadalarow['akt_titulbilde'];
                echo "' alt=''>";     
            }
            echo $sadalarow['sad_text'];
            echo " <button type='button' class='btn btn-primary' data-dismiss='modal'><i class='fa fa-times'></i> Aizvērt</button> <button type='button' class='btn btn-primary' data-dismiss='modal'><i class='fa fa-floppy-o'></i> Jaunatklājējs</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
        }
    }

    
    
    
    
$query_text = "SELECT * FROM nb_aktualitates ORDER BY akt_piev_laiks DESC LIMIT 3";

    if ($result = $mysqli->query($query_text)) {
       
        /* fetch associative array */
        while ($textrow = $result->fetch_assoc()) {
    
            $idak = $textrow['id_akt'];
            
            echo "<!-- Portfolio Modal  -->
    <div class='portfolio-modal modal fade' id='portfolioModal".$textrow['id_akt']."' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class='modal-content'>
            <div class='close-modal' data-dismiss='modal'>
                <div class='lr'>
                    <div class='rl'>
                    </div>
                </div>
            </div>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-8 col-lg-offset-2'>
                        <div class='modal-body' >
                            <!-- Project Details Go Here -->
                             <h2 class='modal-title'>";
            echo $textrow['akt_nosaukums'];
            echo "</h2>";
            if ($textrow['akt_titulbilde'] != NULL)
            {
                echo "<img name='galerija".$idak."' class='img-responsive img-centered' src='nbadm/img/aktualitates/";
                echo $textrow['akt_titulbilde'];
                echo "' alt=''>";     
            }
            
            
            $query_akt_gal = "SELECT * FROM nb_akt_img WHERE img_id_akt=$idak";
            if ($result_akt_gal = $mysqli->query($query_akt_gal)) {
            echo "<div class='thumbnails'>";
            /* fetch associative array */
                $i = 0;
                while ($akt_gal_row = $result_akt_gal->fetch_assoc()) {
                        $i++;
                        echo "<img";
                        echo " src='nbadm/img/aktualitates/".$akt_gal_row['img']."' name=img".$i." onmouseover=galerija".$idak.".src='nbadm/img/aktualitates/".$akt_gal_row['img']."' alt=''/>";
                }
                echo "</div><br>";
            }
            
            echo $textrow['akt_apraksts'];
            echo " <button type='button' class='btn btn-primary' data-dismiss='modal'><i class='fa fa-times'></i> Aizvērt</button> <button type='button' class='btn btn-primary' data-dismiss='modal'><i class='fa fa-floppy-o'></i> Jaunatklājējs</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
        }
    }
    ?>
    
    
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/ndstyle.js"></script>

</body>

</html>
