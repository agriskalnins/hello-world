<?php



$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);

	include_once('include/function.php');
	include 'cnn.php';

	$ser = 'http://' . ServerNos() . '/';


	$cel = '';
	$cel_img = 'img/';
	$cel_img3 = 'design/';
	$galery_images = 'http://' . ServerNos() . '/gal/';
	$banner_img = 'http://' . ServerNos() . '/dev_webadm/banners/';
	$attachment_path = 'http://' . ServerNos() . '/dev_webadm/doc/';

	$idkursi = $_GET["id"];


	$kurss_result = mysql_query("SELECT
									web_kursi.id_kursi,
									web_kursi.kursi_nos,
									web_kursi.kursi_info,
									web_kursi.kursi_stundas,
									web_kursi.sadala_id,
									web_kompetences_iedalijums.id_sadala,
									web_kompetences_iedalijums.sadalas_nos,
									web_kompetences_iedalijums.id_sadala_parent
								FROM
									web_kursi
								JOIN
									web_kompetences_iedalijums
								WHERE
								id_kursi='$idkursi'
								AND web_kursi.sadala_id = web_kompetences_iedalijums.id_sadala
								");

		if (!$kurss_result) {
			die(header('Location: /'));
		}

while($kurss = mysql_fetch_array($kurss_result))
   {
   $title = $kurss['kursi_nos'];
   $info = $kurss['kursi_info'];
   $stundas = $kurss['kursi_stundas'];
   $kompe2 = $kurss['sadalas_nos'];
   $kompe3 = $kurss['id_sadala_parent'];
   $sad_result = mysql_query("SELECT id_sadala, sadalas_nos, id_sadala_parent FROM web_kompetences_iedalijums WHERE id_sadala = $kompe3 ")or die(mysql_error());


   	echo "<div class='crumb' width=100%>";
	echo "	<a href=".$ser."index.php>Sākums</a> &rsaquo;
			<a href=".$ser. "index.php?view=kursi>Kursu katalogs</a> &rsaquo;
			<a href=";if(isset($ser)){echo $ser;}echo "index.php?view=kursi&kompetence=". $kompe3. ">"; while($k = mysql_fetch_array($sad_result)){echo $k['sadalas_nos'];}echo "</a>";
	echo " &rsaquo; " . $kompe2;
	echo "
		</div>";
   echo "
   <div class=kursu_katalogs>";

   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	echo "
		<div width=100% style='margin-top:20px;margin-left:17px;margin-bottom:10px;'>
		<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>Esošais kursu piedāvājums un norādītās cenas ir spēkā līdz 31. augustam.</strong></span></span></p>
		</div>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

   	echo "
		<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
			<span class=event_title>". $title . "</span><br>
		</div>";



	echo "
		<div class=laiks width=100%>";
	echo "
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--<img src=img/print.png width=14px border=0 alt='Drukāt'>&nbsp;&nbsp;&nbsp;Drukāt&nbsp;&nbsp;&nbsp;&nbsp;| --></div>";
    echo " <table width=550px>
        <tr>
        <td id=tabula_head colspan=2 align=left style='font-size:22px;'>";

   echo "
        <tr>
        <td id=kursu_teksts>";
   echo $info;
      echo "</td>
        </tr>
        </table>";

        echo "<script type=\"text/javascript\">
			// Popup window code
			function newPopup(url) {
				popupWindow = window.open(
				url,'popUpWindow','height=600,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
			}
			</script>";

	echo "<div style='margin-left:27px;margin-top:5px;font-size:14px;' align=center><span style=font-size:2px;font-color:#ffffff;>&nbsp;</span><strong>Iespējams pieteikties ";
echo "<a href=\"JavaScript:newPopup('http://www.zrkac.lv/piet.php');\">šeit</a>!</strong></div></div>";

   }
echo "
		<div width=100% style='margin-top:45px;margin-left:17px;margin-bottom:10px;'>
			<a href='#' onclick='history.go(-1);return false;'><b>&#139;</b> Atgriezties</a>
		</div>";



?>
