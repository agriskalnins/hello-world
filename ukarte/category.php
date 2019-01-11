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

    <title>Jelgavas pilsētas uzņēmumu kartes administrēšana</title>


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

  <body>
    <section class="bg-primary" id="par">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <h2 class="section-heading text-white">Pievienot jaunu kategoriju</h2>
            <hr class="light my-4">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-left">

<?php
/////////////////////////uzņēmumu tipi////////////////////////
				$ukategorija_result = mysqli_query($GLOBALS['connection'], "SELECT * FROM ukategorija WHERE kat_subkategorija_id='0' ")or die(mysql_error());



?>
<!--///////////////////////////////////////////////////Kategorijas pievienošana//////////////////////////////////////////-->
            <form action="addkom.php" method="post">
								<div class="form-group text-white">
									<label for="inputState">Kategorija:</label>
									<select id="inputState" class="form-control" name="Kategorija" >
										<option selected>Izvēlies kategoriju...</option>
										<?php
										while($ukategorija_dropdown = mysqli_fetch_array($ukategorija_result))
										{ echo "<option value=". $ukategorija_dropdown["id_kategorija"] . ">". $ukategorija_dropdown["kat_nosaukums"] . "</option>";}
										?>
									</select>
								</div>


              <div class="form-group text-white">
                <label for="inputAddress">Kategorijas nosaukums:</label>
                <input type="text" class="form-control" id="subkategorija" name="sub_kategorija" placeholder="Jaunās kategorijas nosaukums">
              </div>
              <button type="submit" class="btn btn-light btn-xl js-scroll-trigger">Pievienot</button>
            </form>
<!--///////////////////////////////////////////////////kategorijas pievienošana//////////////////////////////////////////-->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <h2 class="section-heading text-white">&nbsp;</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <h2 class="section-heading text-white">Kategoriju saraksts datubāzē</h2>
            <hr class="light my-4">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-left">

<?php
						/////////////////////////Kategoriju saraksts////////////////////////
						$ukategorija_result = mysqli_query($GLOBALS['connection'], "SELECT * FROM ukategorija WHERE kat_subkategorija_id='0' ")or die(mysql_error());

						            while($ukategorija = mysqli_fetch_array($ukategorija_result))
						            {
						                echo "<p class='h4 text-left text-white'><input type='checkbox' class='form-check-input' id='exampleCheck1'> ". $ukategorija["kat_nosaukums"] . "</p>";
						                $ukategorija = $ukategorija["id_kategorija"];

						                /////////////////////////apakškategorijas////////////////////////
						                $ukategorija_parent_result = mysqli_query($GLOBALS['connection'], "SELECT * FROM ukategorija WHERE kat_subkategorija_id='$ukategorija' ")or die(mysql_error());
						                while($ukategorija_parent = mysqli_fetch_array($ukategorija_parent_result))
						                {
						                    echo "<p class='text-left text-white'> <input type='checkbox' class='form-check-input' id='exampleCheck1'>". $ukategorija_parent["kat_nosaukums"] . "</p>";


						                }
						            }

						?>


          </div>


        </div>
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <a class="btn btn-light btn-xl js-scroll-trigger" href="index.php">Skatīt karti</a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <h2 class="section-heading text-white">Kartē atzīmēto uzņēmumu saraksts</h2>
            <hr class="light my-4">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <p class="mb-5">Pārskatāms saraksts ar kartē atzīmētiem uzņēmumiem!</p>


<?php
/////////////////////////uzņēmumu tipi////////////////////////
          $utips_result = mysqli_query($GLOBALS['connection'], "SELECT id_tips, tnosaukums, tparent_id FROM uktips WHERE tparent_id='0' ")or die(mysql_error());

            while($utips = mysqli_fetch_array($utips_result))
            {
                echo "<p class='h2 text-left'>". $utips["tnosaukums"] . "</p>";
                $utips = $utips["id_tips"];

                /////////////////////////apakštipi////////////////////////
                $utips_parent_result = mysqli_query($GLOBALS['connection'], "SELECT id_tips, tnosaukums, tparent_id FROM uktips WHERE tparent_id='$utips' ")or die(mysql_error());
                while($utips_parent = mysqli_fetch_array($utips_parent_result))
                {
                    echo "<p class='h4 text-left'>". $utips_parent["tnosaukums"] . "</p>";
                    $uzntips = $utips_parent["id_tips"];
                    /////////////////////////uzņēmumi////////////////////////
                    $uznem_result = mysqli_query($GLOBALS['connection'], "SELECT id_uznemums, uz_tips_id, knosaukums, uznosaukums, uzadrese, uzlogo
                                                                          FROM uznemums JOIN ukomersants WHERE uz_tips_id='$uzntips' AND uzkomersants_id = id_komersants")
                                                                          or die(mysql_error());
                    echo "<table class='table table-hover'>
                      <tbody>";
                    while($uznem = mysqli_fetch_array($uznem_result))
                    {
                      echo "<tr>
                        <th scope='row'>". $uznem["id_uznemums"] . "</th>
                        <td align='left' style='line-height:15px;'><p style='margin-bottom:0;'><strong>". $uznem["uznosaukums"] . "</strong><span style='font-size:11px;'> <br>" . $uznem["uzadrese"]. "</span><span style='font-size:12px;'> <br>" . $uznem["knosaukums"] . "</span></p></td>
                        <td align='left'><div width='33px'><a href='edituzn.php?id=". $uznem["id_uznemums"] . "'><img src='img/EDIT.png' width=30px alt='Labot'></a><img src='img/DEL.png' width=30px alt='Dzēst'><a href='index.php'><img src='img/VIEW.png' width=30px alt='Labot'></a></div></td>
                      </tr>";


                    }
                    echo "</tbody></table>";

                }
            }

						$uznem_result = mysqli_query($GLOBALS['connection'], "SELECT id_uznemums, uz_tips_id, knosaukums, uznosaukums, uzadrese, uzlogo, uz_lat, uz_lng
																																	FROM uznemums JOIN ukomersants WHERE uzkomersants_id = id_komersants")
																																	or die(mysql_error());
						$returnArray = array();
						if (count($uznem_result) > 0) {
								 foreach ($uznem_result as $rs) {
							 			$returnArray[] = $rs;
									}
						}


						$fp = fopen('maps/markers.json', 'w+');
						fwrite($fp,  'markers = ' );
						fwrite($fp,  json_encode($returnArray) );
						fclose($fp);






?>


          </div>


        </div>
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <a class="btn btn-light btn-xl js-scroll-trigger" href="index.php">Skatīt karti</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->
      <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white"> &copy; ZRKAC Uzņēmējdarbības atbalsta nodaļa 2018</p>
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
