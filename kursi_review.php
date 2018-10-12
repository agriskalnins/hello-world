<?php



$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);

	include_once('include/function.php');
	include 'cnn.php';

	$ser = 'http://' . ServerNos() . '/hello-world/';


	$cel = '';
	$cel_img = 'img/';
	$cel_img3 = 'design/';
	$galery_images = 'http://' . ServerNos() . '/gal/';
	$banner_img = 'http://' . ServerNos() . '/dev_webadm/banners/';
	$attachment_path = 'http://' . ServerNos() . '/dev_webadm/doc/';

	$idkursi = $_GET["id"];


	$kurss_result = mysqli_query($GLOBALS['connection'], "SELECT
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

		while($kurss = mysqli_fetch_array($kurss_result))
   	{
	   $title = $kurss['kursi_nos'];
	   $info = $kurss['kursi_info'];
	   $stundas = $kurss['kursi_stundas'];
	   $kompe2 = $kurss['sadalas_nos'];
	   $kompe3 = $kurss['id_sadala_parent'];
	   $sad_result = mysqli_query($GLOBALS['connection'], "SELECT id_sadala, sadalas_nos, id_sadala_parent FROM web_kompetences_iedalijums WHERE id_sadala = $kompe3 ")or die(mysql_error());


   		echo "<div class='crumb' width=100%>";
			echo "	<a href=".$ser."index.php>Sākums</a> &rsaquo;
				<a href=".$ser. "index.php?view=kursi>Kursu katalogs</a> &rsaquo;
				<a href=";if(isset($ser)){echo $ser;}echo "index.php?view=kursi&kompetence=". $kompe3. ">"; while($k = mysqli_fetch_array($sad_result)){echo $k['sadalas_nos'];}echo "</a>";
			echo " &rsaquo; " . $kompe2;
			echo "
				</div>";
   		echo "
   			<div class=kursu_katalogs>";

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			echo "
				<div width=100% style='margin-top:20px;margin-left:17px;margin-bottom:10px;'>
				<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>Jaunais kursu katalogs pieejams izstrādes režīmā.</strong></span></span></p>
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

			echo "<div class='pieteikums' style='margin-left:27px;margin-top:5px;font-size:14px;'><a target='_blank' href='http://www.zrkac.lv/piet.php?idk=".$idkursi."' class='pogapiet_liela'>Pieteikties</a></div></div>";

			echo "
				<div id='kursugrafiks' class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
					<span class=event_title>Kursu grafiks</span><br>
				</div>";

//////////////////////////////////////////////////
////////////////////////////////////////////////////
$sodiena1 = mktime( date('H')+2, date('i'), date('s'), date('n'), date('j'), date('Y'));
$kg_result = mysqli_query($GLOBALS['connection'], "SELECT kg_id_kursi, kg_datums, kg_laiki FROM web_kursi_grafiks WHERE kg_id_kursi = $idkursi AND kg_datums > $sodiena1 ")or die(mysql_error());


if ($kg_result->num_rows > 0)
{

		echo "<table style='margin-left:17px;'>";
		echo "
		<tr>
			<td align=center height=20px style='border-bottom:1pt solid #aaa;'></td>
			<td align=left style='border-bottom:1pt solid #aaa;'><span style='color:#aaa;'>Kursa nosaukums</span></td>
			<td colspan=2 align=left style='border-bottom:1pt solid #aaa;'><span  style='color:#aaa;'>Nodarbību sākums un laiks</span></td>

			<td style='border-bottom:1pt solid #aaa;'></td>
		</tr>";

	while($kg = mysqli_fetch_array($kg_result))
	{
		$angliski = array('/January/','/February/','/March/','/April/','/May/','/June/','/July/','/August/','/September/','/October/','/November/','/December/');
		$latviski = array('janvārī', 'februārī', 'martā', 'aprīlī', 'maijā', 'jūnijā', 'jūlijā', 'augustā', 'septembrī', 'oktobrī', 'novembrī', 'decembrī');
		$datums = preg_replace($angliski, $latviski, date("j. F", $kg['kg_datums']));

		echo "<tr><td width=30px align=center  style='border-bottom:1pt solid #aaa;'>
					</td>";
		echo "<td width=280px style='border-bottom:1pt solid #aaa;'>";
		echo "<p>" . $title . "</p></td>
					<td align=left  width=100px style='border-bottom:1pt solid #aaa;'> <span style='color:#b22222;font-weight:bolder;'>". $datums ."</span></td>
					<td align=left  width=80px style='border-bottom:1pt solid #aaa;'><pre class=stundas>" . $kg['kg_laiki']. "</pre></td>
					<td align=center  width=100px style='border-bottom:1pt solid #aaa;'><a target='_blank' href='http://www.zrkac.lv/piet.php?idk=".$idkursi."' class='pogapiet'>Pieteikties</a></td>";
		echo "</a>";

	}



	echo "</table>";
}
else {
	echo "
		<div width=100% style='margin-top:20px;margin-left:17px;margin-bottom:10px;'>
		<p><span style='font-size:14px;'><span style='color:#aaa;'><strong>Šobrīd nav aktuālā piedāvājuma!</strong></span></span></p>
		</div>";
}


   }
	 		echo "
				<div width=100% style='margin-top:45px;margin-left:17px;margin-bottom:10px;'>
					<a href='#' onclick='history.go(-1);return false;'><b>&#139;</b> Atgriezties</a>
				</div>";



?>
