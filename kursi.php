<?php

//function stripslashes_deep($val)
//{
//$val=is_array($val) ? array_map('stripslashes_deep', $val) : stripslashes($val);
//return $val;
//}

$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);



/* zemāk ir ---------------------------        $banner_img = 'http://' . ServerNos() . '/dev_webadm/banners/';*/

/*----------------------------------------------------------------------------- Te nāks ziņas un visi citi zvēri -----------------------------------------------*/


	if (isset($_GET["kompetence"]) and isset($_GET["sub"]))
	{
		//Ievieto mainīgos no faila
		include 'var.php';


		$subkomp = strip_tags($_GET["sub"]);
		$subkom_result = mysqli_query($GLOBALS['connection'], "SELECT id_sadala, sadalas_nos, id_sadala_parent FROM web_kompetences_iedalijums WHERE id_sadala = $subkomp");

		$subkompe = mysqli_fetch_array($subkom_result);
		$lapas_nosaukums1 = "Kursu katalogs - " . $subkompe["sadalas_nos"];

		echo "<div class='crumb' width=100%>";
		echo "<a href=";if(isset($ser)){echo $ser;} echo ">Sākums</a> &rsaquo;
				<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=kursi>Kursu katalogs</a> &rsaquo;
				<a href=";if(isset($ser)){echo $ser;} echo ">". $subkompe["sadalas_nos"] ."</a>";
		echo "</div>";

		echo "
			<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
				<span class=event_title>". $subkompe["sadalas_nos"] ."</span><br>
			</div>";

			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
				echo "
					<div width=100% style='margin-top:20px;margin-left:17px;margin-bottom:10px;'>
					<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>Jaunais kursu katalogs pieejams izstrādes režīmā.</strong></span></span></p>
					</div>";
			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$sadaleID = $subkompe["id_sadala"];
		$kursi_result = mysqli_query($GLOBALS['connection'], "SELECT id_kursi, kursi_nos, kursi_info, kursi_stundas, sadala_id FROM web_kursi WHERE sadala_id='$sadaleID' ")or die(mysql_error());

		echo "<table style='margin-left:17px;'>";
		echo "
		<tr>
			<td align=center height=20px style='border-bottom:1pt solid #aaa;'></td>
			<td align=left style='border-bottom:1pt solid #aaa;'><span style='color:#aaa;'>Kursu nosaukums</span></td>
			<td  align=center style='border-bottom:1pt solid #aaa;'><span  style='color:#aaa;'>Māc. st.</span></td>
			<td style='border-bottom:1pt solid #aaa;'></td>
		</tr>";
		while($kursi = mysqli_fetch_array($kursi_result))
		{
				$kursiID = $kursi['id_kursi'];
				$NosaukumsKursi = $kursi['kursi_nos'];
				$StunduSkaits = $kursi['kursi_stundas'];
			echo "<tr><td width=30px align=center  style='border-bottom:1pt solid #aaa;'><a class='kursi_a' href=";if(isset($ser)){echo $ser;} echo "index.php?view=kursi_review&id=" . $kursiID . ">
						<img src=". $cel_img3 . "info.png style='width:20px;'></td>";
			echo "<td width=360px style='border-bottom:1pt solid #aaa;'>";
			echo "<a class='kursi_a' href=";if(isset($ser)){echo $ser;} echo "index.php?view=kursi_review&id=" . $kursiID . "><p>" . $NosaukumsKursi . "</p></a></td>
						<td align=center  width=50px style='border-bottom:1pt solid #aaa;'> <span class=stundas>" . $StunduSkaits . " </span></td>
						<td align=center  width=100px style='border-bottom:1pt solid #aaa;'><button type=button onclick=alert(Pieteicies!)>Pieteikties</button></td>";
			echo "</a>";

		}
echo "</table>";

		echo "
		<div width=100% style='margin-top:45px;margin-left:17px;margin-bottom:10px;'>
			<a href='#' onclick='history.go(-1);return false;'><b>&#139;</b> Atgriezties</a>
		</div>";

	}
	else if (isset($_GET["kompetence"]))
		{
			//Ievieto mainīgos no faila
			include 'var.php';

			$kompetence = strip_tags($_GET["kompetence"]);
			$kom_result = mysqli_query($GLOBALS['connection'], "SELECT id_sadala, sadalas_nos, id_sadala_parent FROM web_kompetences_iedalijums WHERE id_sadala = $kompetence");


			if (!$kom_result) {
				die(header('Location: /'));
			}


			$kompe = mysqli_fetch_array($kom_result);
			$lapas_nosaukums1 = "Kursu katalogs - " . $kompe["sadalas_nos"];

			echo "<div class='crumb' width=100%>";
			echo "<a href=";if(isset($ser)){echo $ser;} echo ">Sākums</a> &rsaquo;
					<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=kursi>Kursu katalogs</a> &rsaquo;
					<a href=";if(isset($ser)){echo $ser;} echo ">". $kompe["sadalas_nos"] ."</a>";
			echo "</div>";

			echo "
				<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
					<span class=event_title>". $kompe["sadalas_nos"] ."</span><br>
				</div>";

				////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					echo "
						<div width=100% style='margin-top:20px;margin-left:17px;margin-bottom:10px;'>
						<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>Jaunais kursu katalogs pieejams izstrādes režīmā.</strong></span></span></p>
						</div>";
				////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

				echo "<img src=". $cel_img3 . $kompe["id_sadala"]. ".jpg style='margin-bottom:2px;margin-left:17px;width:555px;'>";

				echo "
					<div>
					<a href=#><div style='margin-top:20px;margin-left:17px;margin-bottom:30px;width:270px;float:left' align=center >
					<p><span style='font-size:14px;'><span style='color:#000;'>Ieskats procesā</span></span></p>
					</div></a>
					<a href=#><div style='margin-top:20px;margin-right:17px;margin-bottom:30px;width:270px;float:right' align=center >
					<p><span style='font-size:14px;'><span style='color:#000;'>Kursu grafiks</span></span></p>
					</div></a>
					</div>";



			$kompet_result = mysqli_query($GLOBALS['connection'], "SELECT id_sadala, sadalas_nos, id_sadala_parent FROM web_kompetences_iedalijums WHERE id_sadala_parent = $kompetence");

			if ($kompet_result->num_rows > 0)
			{
				while($k2 = $kompet_result->fetch_assoc())
						{
						echo "<a href=";if(isset($ser)){echo $ser;} echo "?view=kursi&kompetence=" . $kompe["id_sadala"]. "&sub=" . $k2['id_sadala'] . ">";
						echo " <div class=komp2>";
						echo $k2['sadalas_nos'] . " </div></a>";
						}
			}

			echo "
			        <div style='clear: both'>
			        </div>";
			echo "
				<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
					<span class=event_title>Kursu grafiks</span><br>
				</div>";

//////////////////////////////////////////////////////
/////////////////////////////////////////////////////////


$subkom_result = mysqli_query($GLOBALS['connection'], "SELECT
								web_kursi.id_kursi,
								web_kursi.kursi_nos,
								web_kursi.kursi_info,
								web_kursi.kursi_stundas,
								web_kursi.sadala_id,
								web_kursi_grafiks.kg_datums,
								web_kursi_grafiks.kg_id_kursi,
								web_kursi_grafiks.kg_laiki,
								web_kompetences_iedalijums.id_sadala,
								web_kompetences_iedalijums.sadalas_nos,
								web_kompetences_iedalijums.id_sadala_parent
							FROM
								web_kursi
							JOIN
								web_kursi_grafiks, web_kompetences_iedalijums
							WHERE
							id_sadala_parent='$kompetence'
							AND web_kursi.sadala_id = web_kompetences_iedalijums.id_sadala
							AND web_kursi.id_kursi = web_kursi_grafiks.kg_id_kursi");




echo "<table style='margin-left:17px;'>";
echo "
<tr>
	<td align=center height=20px style='border-bottom:1pt solid #aaa;'></td>
	<td align=left style='border-bottom:1pt solid #aaa;'><span style='color:#aaa;'>Kursu nosaukums</span></td>
	<td colspan=2 align=left style='border-bottom:1pt solid #aaa;'><span  style='color:#aaa;'>Sākums un norises laiks</span></td>

	<td style='border-bottom:1pt solid #aaa;'></td>
</tr>";

while($kursi = mysqli_fetch_array($subkom_result))
{
		$kursiID = $kursi['id_kursi'];
		$NosaukumsKursi = $kursi['kursi_nos'];
		$StunduSkaits = $kursi['kursi_stundas'];
		$angliski = array('/January/','/February/','/March/','/April/','/May/','/June/','/July/','/August/','/September/','/October/','/November/','/December/');
		$latviski = array('janvārī', 'februārī', 'martā', 'aprīlī', 'maijā', 'jūnijā', 'jūlijā', 'augustā', 'septembrī', 'oktobrī', 'novembrī', 'decembrī');
		$datums = preg_replace($angliski, $latviski, date("j. F", $kursi['kg_datums']));

	echo "<tr><td width=30px align=center  style='border-bottom:1pt solid #aaa;'><a class='kursi_a' href=";if(isset($ser)){echo $ser;} echo "index.php?view=kursi_review&id=" . $kursiID . ">
				<img src=". $cel_img3 . "info.png style='width:20px;'></td>";
	echo "<td width=280px style='border-bottom:1pt solid #aaa;'>";
	echo "<a class='kursi_a' href=";if(isset($ser)){echo $ser;} echo "index.php?view=kursi_review&id=" . $kursiID . "><p>" . $NosaukumsKursi . "</p></a></td>

				<td align=left  width=100px style='border-bottom:1pt solid #aaa;'> <span style='color:#b22222;font-weight:bolder;'>". $datums ."</span></td>
				<td align=left  width=80px style='border-bottom:1pt solid #aaa;'><pre class=stundas>" . $kursi['kg_laiki']. "</pre></td>
				<td align=center  width=100px style='border-bottom:1pt solid #aaa;'><button type=button onclick=alert(Pieteicies!)>Pieteikties</button></td>";
	echo "</a>";

}
echo "</table>";
////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////




			echo "
			<div width=100% style='margin-top:45px;margin-left:17px;margin-bottom:10px;'>
				<a href='#' onclick='history.go(-1);return false;'><b>&#139;</b> Atgriezties</a>
			</div>";

		}
		else
			{

// Galvenās kompetenču sadaļas izvade

		$result_komp = mysqli_query($GLOBALS['connection'], "SELECT id_sadala, sadalas_nos, id_sadala_parent FROM web_kompetences_iedalijums WHERE id_sadala_parent = 0");

		$lapas_nosaukums1 = "Kursu katalogs";

		echo "<div class='crumb' width=100%>";
		echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
					<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=kursi>Kursu katalogs</a>";
		echo "</div>";


		echo "
			<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
				<span class=event_title>". $lapas_nosaukums1 ."</span><br>
			</div>";

			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
				echo "
					<div width=100% style='margin-top:20px;margin-left:17px;margin-bottom:10px;'>
					<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>Jaunais kursu katalogs pieejams izstrādes režīmā.</strong></span></span></p>
					</div>";
			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




			if ($result_komp->num_rows > 0) {
				while($komp = $result_komp->fetch_assoc())
						{

			echo "<a href=";if(isset($ser)){echo $ser;} echo "?view=kursi&kompetence=" . $komp['id_sadala'] . ">";
			echo " <div class=komp>";
			echo $komp['sadalas_nos'] . " </div></a>";
}


			}










////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	/*echo "
		<div width=100% style='margin-top:20px;margin-left:17px;margin-bottom:10px;'>
		<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>Esošais kursu piedāvājums un norādītās cenas ir spēkā līdz 31. augustam.</strong></span></span></p>
		</div>";*/
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//Show_competences();

/*
			$result = mysql_query("SELECT *
										FROM web_notikumi kas
										WHERE kas.id_not = '268'
										")or die(mysql_error());

			$row = mysql_fetch_array($result);
*/

		/*Eventa nosaukums*/
	/*echo "
		<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
			<span class=event_title>". $row['not_nosaukums'] ."</span><br>
		</div>";*/



	/*banerim vieta*/
	/*if ($row['not_banners']!= NULL)
	{
		echo "
			<div class=banners align=center>
				<img src=". $banner_img . $row['not_banners'] . " width=540px>
			</div>";
	}*/

	/*teksta izklāsts*/
	/*echo "
		<div class=teksts>";

		if (strlen($row['not_apraksts']) < 9)
		{
			echo $row['not_atskats'];
		}
		else {
				echo $row['not_apraksts'];
		}

	echo "
		</div>";


		echo "
		<div width=100% style='margin-top:45px;margin-left:17px;margin-bottom:10px;'>
			<a href='#' onclick='history.go(-1);return false;'><b>&#139;</b> Atgriezties</a>
		</div>";*/
	}


/*----------------------------------------------------------------------------- Te beidzas ziņas un visi citi zvēri -----------------------------------------------*/


?>
