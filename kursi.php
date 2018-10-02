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


	if (isset($_GET["kompetence"]) and isset($_GET["subkomp"]))
	{


		$subkomp = strip_tags($_GET["subkomp"]);
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
		<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>Esošais kursu piedāvājums un norādītās cenas ir spēkā līdz 31. augustam.</strong></span></span></p>
		</div>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$sadaleID = $subkompe["id_sadala"];
		$kursi_result = mysqli_query($GLOBALS['connection'], "SELECT id_kursi, kursi_nos, kursi_info, kursi_stundas, sadala_id FROM web_kursi WHERE sadala_id='$sadaleID' ")or die(mysql_error());
		echo "<ul id=sadalas_kursi>";

		while($kursi = mysqli_fetch_array($kursi_result))
		{
				$kursiID = $kursi['id_kursi'];
				$NosaukumsKursi = $kursi['kursi_nos'];
				$StunduSkaits = $kursi['kursi_stundas'];

		echo "<a class='kursi_a' href=";if(isset($ser)){echo $ser;} echo "index.php?view=kursi_review&id=" . $kursiID . ">";

				echo "  <li id=sadalas_kursi_li>";
				echo $NosaukumsKursi . " <span class=stundas>(" . $StunduSkaits . " māc.st.)</span>";
				echo "</li></a>";
		}
		echo "</ul>";


		echo "
			<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
				<span class=event_title>Kursu grafiks</span><br>
			</div>";






		echo "
		<div width=100% style='margin-top:45px;margin-left:17px;margin-bottom:10px;'>
			<a href='#' onclick='history.go(-1);return false;'><b>&#139;</b> Atgriezties</a>
		</div>";

	}
	else if (isset($_GET["kompetence"]))
		{


			$kompetence = strip_tags($_GET["kompetence"]);
			$kom_result = mysqli_query($GLOBALS['connection'], "SELECT id_sadala, sadalas_nos, id_sadala_parent FROM web_kompetences_iedalijums WHERE id_sadala_parent = $kompetence");
	/*
			if (!$kom_result) {
				die(header('Location: /'));
			}
	*/
			$komp = mysqli_fetch_array($kom_result);
			$lapas_nosaukums1 = "Kursu katalogs - " . $komp["sadalas_nos"];

			echo "<div class='crumb' width=100%>";
			echo "<a href=";if(isset($ser)){echo $ser;} echo ">Sākums</a> &rsaquo;
					<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=kursi>Kursu katalogs</a> &rsaquo;
					<a href=";if(isset($ser)){echo $ser;} echo ">". $komp["sadalas_nos"] ."</a>";
			echo "</div>";

			echo "
				<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
					<span class=event_title>". $komp["sadalas_nos"] ."</span><br>
				</div>";

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		echo "
			<div width=100% style='margin-top:20px;margin-left:17px;margin-bottom:10px;'>
			<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>Esošais kursu piedāvājums un norādītās cenas ir spēkā līdz 31. augustam.</strong></span></span></p>
			</div>";
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	if ($kom_result->num_rows > 0) {
		while($kompe = $kom_result->fetch_assoc())
				{

	echo "<a href=";if(isset($ser)){echo $ser;} echo "?view=kursi&kompetence=" . $kompe['id_sadala'] . ">";
	echo " <div class=komp2>";
	echo $kompe['sadalas_nos'] . " </div></a>";
	}


	}

			echo "
			        <div style='clear: both'>
			        </div>";
			echo "
				<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
					<span class=event_title>Kursu grafiks</span><br>
				</div>";






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
					<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>Esošais kursu piedāvājums un norādītās cenas ir spēkā līdz 31. augustam.</strong></span></span></p>
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
