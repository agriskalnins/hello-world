<?php

$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);


	if (!isset($_GET["id"]))
	{
			echo "<div class='crumb' width=100%>";
			echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
					<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=projekti>Projekti</a> ";
			echo "</div>";

			echo "
				<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
					<span class=event_title>Par projektiem</span><br>
				</div>";
			echo "<div class=teksts>";

			echo "<p>Zemgales reģiona Kompetenču attīstības centra īstenojamie projekti nodrošina:</p>
						<ul><li>Iespēju piesaistīt finansējumu Zemgales reģiona Kompetenču attīstības centra uzdevumu veikšanai, līdz ar to nodrošinot iedzīvotāju plašākas izglītības iespējas bez maksas</li>
						<li>Pieredzes apmaiņu un jaunu sadarbību veidošanu gan starptautiskā, gan vietējā mērogā</li>
						<li>Līdzdalība projektos ļauj izveidot ne vien Jelgavas un Latvijas, bet arī Eiropas standartiem atbilstošu materiāltehnisko bāzi izglītošanas procesam.</li>";
			echo "</div>";
			echo "
				<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
					<span class=event_title>Īstenotie projekti</span><br>
				</div>";


		$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
		$NedelasDiena = array("Pirmdiena", "Otrdiena", "Trešdiena", "Ceturtdiena", "Piektdiena", "Sestdiena", "Svētdiena");
		$html_tagi = array("<b>", "</b>", "<i>", "</i>", "<B>", "</B>", "<strong>", "</strong>", "<p>", "</p>", "<stop>", "style", "</span>", "<br />");


		date_default_timezone_set("Europe/Helsinki");
		$sodiena = time();

		$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_projekti ORDER BY proj_datlidz DESC");

		$count = @mysqli_num_rows($result);


		if($count == 0)
		{
			echo "<div class=main_act>";
		   	echo "<span style='font-size:13px;color:red;'> <b>Dati nav pieejami.<br>Lūdzu sazinies ar mums! </b></span> ";
			echo "</div>";
		}
		else
		{
			$i = 0; //counter start
			echo "<div class=teksts >";
		   	while($row = mysqli_fetch_array($result))
		   	{


				echo "<p style='margin-bottom:30px;'><b><span style='font-size:13px;'>";
		   		echo $row['proj_nos'];
		   		echo "</span></b>";

		   		echo "<br>";
		   		echo date('Y', $row['proj_datno']) . ". gada " . date('j.', $row['proj_datno']) . " " . $GadaMenesis[date('n ', $row['proj_datno'])-1] . " - ";
				echo date('Y', $row['proj_datlidz']) . ". gada " . date('j.', $row['proj_datlidz']) . " " . $GadaMenesis[date('n ', $row['proj_datlidz'])-1];
		   		echo "<br><a href=".$ser. "index.php?view=projekti&id=". $row['id_projekts'] ."> Vairāk par projektu <span style='font-size:12px;color:red;'><b>&#187;</b></span></a></p>";

			}
			echo "</div>";
		}
	}
	else
	{
		$proj_id = strip_tags($_GET["id"]);
		/***********************************************************************************baneru vietne*****************************************/
		$banner_img = 'http://' . ServerNos() . '/dev_webadm/logo/';

		$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_projekti WHERE id_projekts = $proj_id");



		$count = @mysqli_num_rows($result);
		if($count == 0)
		{
			header('Location: /');
		}
		else
		{
			$i = 0; //counter start
			echo "<div class=teksts >";
		   	while($row = mysqli_fetch_array($result))
		   	{
			echo "	<div class='crumb' width=100% style='margin-top:-8px;margin-bottom:0px;margin-left:0px;'>";
			echo "		<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=projekti>Projekti</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=projekti&id=". $proj_id .">";
						if (strlen($row['proj_nos'])<=60)
						{
							echo $row['proj_nos'];
						}
						else
						{
							echo substr($row['proj_nos'], 0, 30);
							echo "...";
						}
						echo "</a>";
			echo "	</div>";

			echo "	<div class=event_tittle_space align=left style='margin-top:20px;margin-bottom:20px;'>
						<span class=event_title>" . $row['proj_nos'] . "</span><br>
					</div>";

			/*banerim vieta*/
			if ($row['proj_logo']!= NULL)
			{
				echo "
					<div class=banners align=left>
						<img src=". $banner_img . $row['proj_logo'] . ">
					</div>";
			}

			echo $row['proj_apraksts'];



				$result_acti = mysqli_query($GLOBALS['connection'], "SELECT
												web_projekti_notikumi.id_not_pn,
												web_projekti_notikumi.id_proj_pn,
												web_notikumi.id_not,
												web_notikumi.not_nosaukums,
												web_notikumi.not_apraksts,
												web_notikumi.not_atskats,
												web_notikumi.not_vieta,
												web_notikumi.not_atbildigais,
												web_notikumi.not_klase,
												web_notikumi.not_banners,
												web_notikumi.not_titulbilde,
												web_notikumi.not_tips_id,
												web_notikumi.not_piev_laiks
											FROM web_projekti_notikumi
											JOIN web_notikumi
											ON web_notikumi.id_not = web_projekti_notikumi.id_not_pn
											WHERE web_projekti_notikumi.id_proj_pn = $proj_id
											ORDER BY web_notikumi.not_piev_laiks ASC");

				$count = @mysqli_num_rows($result_acti);
				if($count == 0)
				{
					echo "";
				}
				else {
									echo "<p style='margin-bottom:7px;margin-top:30px;'><b><span style='font-size:14px;'>";
		   							echo "Projekta aktivitātes:";
		   							echo "</span></b>";
					while($row_act = mysqli_fetch_array($result_acti))
	   				{
	   					echo "<p><a href=";if(isset($ser)){ echo $ser;} echo  "event.php?id=" .$row_act['id_not']. ">" . $row_act['not_nosaukums'] . "</a></p>";
	   				}
				}




			}
			echo "</div>";
		}
	}

	/*Atgriešanās poga*/
echo "
		<div width=100% style='margin-top:45px;margin-left:17px;margin-bottom:10px;'>
			<a href='#' onclick='history.go(-1);return false;'><b>&#139;</b> Atgriezties</a>
		</div>";
?>
