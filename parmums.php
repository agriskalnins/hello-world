<?php


$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);


/*----------------------------------------------------------------------------- Te nāks ziņas un visi citi zvēri -----------------------------------------------*/
	include('var.php');


	$sd_id = strip_tags($_GET["id"]);


		switch ($sd_id)
		{
			case "17":
					$lapas_nosaukums1 = "Par ZR KAC";

				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=parmums&id=17>Par mums</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Par Zemgales reģiona kompetenču attīstības centru</span><br>
					</div>";

				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sd_id");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Atvainojiet!</span><br></div>";
					echo "<div class=teksts >";
					echo "Šī sadaļa šobrīd nav pieejama!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "100":

				$lapas_nosaukums1 = "Iepirkumi";

				$GadaMenesisN = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
				$GadaMenesisD = array("janvārim","februārim","martam","aprīlim","maijam","jūnijam","jūlijam","augustam","septembrim","oktobrim","novembrim","decembrim");
				$GadaMenesisG = array("janvāra","februāra","marta","aprīļa","maija","jūnija","jūlija","augusta","septembra","oktobra","novembra","decembra");
				$NedelasDiena = array("Pirmdiena", "Otrdiena", "Trešdiena", "Ceturtdiena", "Piektdiena", "Sestdiena", "Svētdiena");




				$result_iepirkumi = mysqli_query($GLOBALS['connection'], "
										SELECT
											id_iepirkums,
											iepirkums_nos,
											iepirkums_datno,
											iepirkums_datlidz,
											iepirkums_apraksts
										FROM web_iepirkumi
										ORDER BY iepirkums_datno DESC");



				$count = @mysqli_num_rows($result_iepirkumi);




				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Atvainojiet!</span><br></div>";
					echo "<div class=teksts >";
					echo "Šī sadaļa šobrīd nav pieejama!";
					echo "</div>";
				}
				else
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=parmums&id=100>Iepirkumi</a>";
					echo "</div>";

					echo "
						<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
							<span class=event_title>Zemgales reģiona kompetenču attīstības centra iepirkumi</span><br>
						</div>";
					echo "<div class=teksts style='margin-top:30px;'>";
				   	while($row = mysqli_fetch_array($result_iepirkumi))
				   	{
				   		echo "<p style='margin-bottom:10px;'><b><span style='font-size:14px;'>";




				   		echo $row['iepirkums_nos'];
				   		echo "</span></b> <span style='font-size:11px; color:#7C7C7C'> Publicēts: " . date('d', $row['iepirkums_datno']) . "." . date('m', $row['iepirkums_datno']) . "." . date('Y', $row['iepirkums_datno'])."</span></p>No <b>";

				   		echo date('Y', $row['iepirkums_datno']) . ". gada " . date('j.', $row['iepirkums_datno']) . " " . $GadaMenesisG[date('n', $row['iepirkums_datno'])-1] . "</b> līdz <b>";
						echo date('Y', $row['iepirkums_datlidz']) . ". gada " . date('j.', $row['iepirkums_datlidz']) . " " . $GadaMenesisD[date('n ', $row['iepirkums_datlidz'])-1] . "</b> ";
				   		echo $row['iepirkums_apraksts'];

						echo "<div class=pielikumi>";
						echo "<img src=img/att.png width=14px border=0> <span style='font-size:14px;'>  Pielikumi</span><br><br>";

						$iepirkums = $row['id_iepirkums'];



						/*Failu ielādes SQL*/
						$result_iepirkumi_files = mysqli_query($GLOBALS['connection'], "SELECT id_file, file_name, file_caption, file_iepirkums_id FROM web_iepirkumi_files ORDER BY file_iepirkums_id DESC");

						while($row_files = mysqli_fetch_array($result_iepirkumi_files))
				   		{


				   		$fails = $row_files['file_iepirkums_id'];
						if ($fails == $iepirkums)
						{
						$dok_nosaukums = $row_files['file_caption'];

						if ($dok_nosaukums == NULL)
							{
								$dok_nosaukums = $row_files['file_name'];

								/*** get the path info ***/
								$info = pathinfo($dok_nosaukums);

								/*** show the extension ***/

								switch (strtolower($info['extension']))
								{
								    case 'ppt':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'pptx':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'doc':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'docx':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xls':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xlsx':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'pdf':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'png':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'gif':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpeg':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpg':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									default:
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								}
							}
						else
							{
								$filename = $row_files['file_name'];

								/*** get the path info ***/
								$info = pathinfo($filename);

								/*** show the extension ***/

								switch (strtolower($info['extension']))
								{
								    case 'ppt':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'pptx':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'doc':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'docx':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xls':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xlsx':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'pdf':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'png':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'gif':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpeg':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpg':
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									default:
										echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								}
								}
							}}
						echo "
							</div>";

				   		echo "<img src=".$cel_img."Line.png> <br><br><br>";
				   		}
					echo "</div>";
				}



			break;
			case "18":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=pakalpojumi&id=25>Mēs lepojamies</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Mēs lepojamies</span><br>
					</div>";

				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sd_id");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Atvainojiet!</span><br></div>";
					echo "<div class=teksts >";
					echo "Šī sadaļa šobrīd nav pieejama!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "24":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=pakalpojumi&id=25>Pakalpojumi</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=pakalpojumi&id=24>Citi pakalpojumi</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Citi pakalpojumi</span><br>
					</div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sd_id");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Atvainojiet!</span><br></div>";
					echo "<div class=teksts >";
					echo "Šī sadaļa šobrīd nav pieejama!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text'];
					}
					echo "</div>";
				}

			break;

		}











/*----------------------------------------------------------------------------- Te beidzas ziņas un visi citi zvēri -----------------------------------------------*/


?>
