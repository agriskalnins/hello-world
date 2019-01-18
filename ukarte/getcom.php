<?php

include 'cnn.php';


$q = $_GET['q'];

$uznem_result2 = mysqli_query($GLOBALS['connection'], "SELECT id_uznemums, uz_tips_id, knosaukums, uznosaukums, uzadrese, uzlogo
                                                      FROM uznemums JOIN ukomersants WHERE id_uznemums='$q' AND uzkomersants_id = id_komersants")
                                                      or die(mysql_error());


echo  "<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>";
while($uznem2 = mysqli_fetch_array($uznem_result2))
{
  echo "<img src='img/ukarte.png' width=300px><br> ";
  echo "<h1 class='nosauk'>" . $uznem2['uznosaukums'] . "</h1>";
  echo "<span><em>". $uznem2['knosaukums']. "</em></span>";

  echo "<h3>Pakalpojumi:</h3> ";
  echo "<div class='col-lg-6 mx-auto text-left' style='-webkit-columns: 250px 2;-moz-columns: 250px 2; columns: 250px 2; text-align:left;'>
    <img src='img/icona/Publisks_1.jpg' width=30px > Pieejams visiem<br>
    <img src='img/icona/banketi_1.jpg' width=30px> Organizē banketus<br>
    <img src='img/icona/bars_1.jpg' width=30px> Pieejams bārs<br>
    <img src='img/icona/gimene_1.jpg' width=30px> Ģimenēm draudzīgs<br>
    <img src='img/icona/invalidi_1.jpg' width=30px > Pieejams ratiņkrēslā<br>
    <img src='img/icona/kafejnica_1.jpg' width=30px> Kafejnīca<br>
    <img src='img/icona/pasutijumi_0.jpg' width=30px> Pieņem pasūtījumus<br>
    <img src='img/icona/arsuni_1.jpg' width=30px> Dzīvniekiem draudzīgs<br>
    <img src='img/icona/terase_0.jpg' width=30px> Pieejama terase<br>
    <img src='img/icona/stavvieta_1.jpg' width=30px> Stāvvieta<br>
    <img src='img/icona/telpunoma_1.jpg' width=30px> Telpu noma<br>
    </div>";


  echo "<h3>Informācija:</h3> ";
  echo $uznem2['uzinfo'];

  echo "<h3>Kontaktinformācija:</h3> ";
  echo "Adrese:" . $uznem2['uzadrese']. "<br>";
  echo "Telefons: " . $uznem2['uztelefons']. "<br>";
  echo "E-pasts: " . $uznem2['uzepasts'];


  echo "<h3>Kategorijas:</h3> ";

  $cat_id = $uznem2['id_uznemums'];
  $uznem_kat_result = mysqli_query($GLOBALS['connection'], "SELECT uzn_ID, kat_ID, kat_nosaukums
                                                        FROM ukat_uzn JOIN ukategorija WHERE uzn_ID='$cat_id' AND kat_ID =	id_kategorija")
                                                        or die(mysql_error());
  while($uzn_cat = mysqli_fetch_array($uznem_kat_result))
    {
      echo "<a href='#'>" . $uzn_cat['kat_nosaukums']. " </a>";
    }

  echo "<br><br><br><a class='btn btn-light btn-xl js-scroll-trigger' onclick=\"closeNav()\" >Aizvērt &times;</a>";


}

?>
