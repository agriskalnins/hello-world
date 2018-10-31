<?php


$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);



	include 'var.php';
	$galery_images = 'http://' . ServerNos() . '/gal/';
	$cel_img = 'img/';
	$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';


				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;

						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=archive>Arhīvs</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:20px;'>
						<span class=event_title>Notikumu arhīvs</span><br>
					</div>";


	$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
	$NedelasDiena = array("Pirmdiena", "Otrdiena", "Trešdiena", "Ceturtdiena", "Piektdiena", "Sestdiena", "Svētdiena");
	$html_tagi = array("<b>", "</b>", "<i>", "</i>", "<B>", "</B>", "<strong>", "</strong>", "<p>", "</p>", "<stop>", "style", "</span>", "<br />");

	date_default_timezone_set("Europe/Helsinki");
	$sodiena = time();

		$result = mysqli_query($GLOBALS['connection'], "SELECT
								web_notikumi_laiki.id_laiks,
								web_notikumi_laiki.not_id,
							MAX(web_notikumi_laiki.not_laiks) As N_L,
								web_notikumi_laiki.not_laiks_lidz,
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
								web_notikumi.not_piev_laiks,
								web_notikumi.not_red_laiks
							FROM web_notikumi_laiki
							JOIN web_notikumi
							ON web_notikumi.id_not = web_notikumi_laiki.not_id
							WHERE (web_notikumi.not_tips_id = '1' OR web_notikumi.not_tips_id = '8')
							AND CHAR_LENGTH(web_notikumi.not_atskats) > 9
							GROUP BY web_notikumi_laiki.not_id
							ORDER BY N_L DESC");




	$count = @mysqli_num_rows($result);

	if($count == 0)
	{
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Notikusi kļūda</span><br>
					</div>";

				echo "<div style='height:120px;margin-left:17px;margin-top:20px;'>";
					echo "Atgriezties <a href=";if(isset($ser)){echo $ser;} echo "index.php>sākumlapā</a>";
				echo "</div>";
	}
	else
	{

		while($row = mysqli_fetch_array($result))
		{



			   	echo "<div style='height:125px;margin-left:17px;margin-right:17px;text-align:justify;'>";
				echo "	<div align=left style='margin-bottom:10px;border: solid 0px #CCC; border-left:solid 5px #C60202; padding-left:7px;'>
		  				<span style='font-family:Arial; font-size: 15px; font-weight: 700; text-decoration: none;'><a class='h1_a' href=";
				if(isset($ser))
				{
					echo $ser;
				}
				echo  "event.php?id=" .$row['id_not']. ">" . $row['not_nosaukums'] ;
				echo "		</a></span> ";

				$idn=$row['id_not'];
		//___________________________________ pārbauda vai ir galerija

				$result_gal = mysqli_query($GLOBALS['connection'], "SELECT *
															FROM
																web_notikumi_gal not_gal,
																web_gal gal,
																web_gal_img bild
															WHERE
																not_gal.gal_id_gal = gal.id_gal
															AND
																gal.id_gal = bild.gal_id
															AND
																not_gal.gal_id_not=$idn
															ORDER BY RAND()
															LIMIT 1
																");
				$row_gal = mysqli_fetch_array($result_gal);
				if ($row_gal['gal_id_gal'] == null)
				{
					$result_fil = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
					$row_file = mysqli_fetch_array($result_fil);


					if ($row_file['id_file'] == null)
					{
								echo " ";
							}
					else
					{
								echo "  <img src=img/att.png width=12px border=0>";
							}

					echo "	</div>";

					echo "	<span style='font-family:Tahoma;font-size:11px;color:#adaaaa;'>";
					echo 		date('j.', $row['not_piev_laiks']) . " " . $GadaMenesis[date('n ', $row['not_piev_laiks'])-1]. ", ". date('Y', $row['not_piev_laiks']) ;

		 			echo "	&nbsp;</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
									{
									echo "<div  class=main_pct_small_archive style='background-image: url(Sem2.png);border: solid 2px #13529d;'>
							 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=85px '>
							 			  </div>";
									}
								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
				}
				else
				{
					echo "  <img src=img/photo.png width=12px  border=0>";

					$result_fil = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
					$row_file = mysqli_fetch_array($result_fil);


					if ($row_file['id_file'] == null) 
					{
								echo " ";
							}
					else
					{
								echo "  <img src=img/att.png width=12px border=0>";
							}

					echo "	</div>";

					echo "	<span style='font-family:Tahoma;font-size:11px;color:#adaaaa;'>";
					echo 		date('j.', $row['not_piev_laiks']) . " " . $GadaMenesis[date('n ', $row['not_piev_laiks'])-1]. ", ". date('Y', $row['not_piev_laiks']) ;

		 			echo "	&nbsp;</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
										{
											echo "<div  class=main_pct_small_archive style='background-image: url(Sem2.png);border: solid 2px #13529d;'>
								 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=85px >
								 			  </div>";
										}
									else
										{
											echo "<div  class=main_pct_small_archive style='background-image: url(Sem2.png);border: solid 2px #13529d;'>
								 				<img src=" . $galery_images . $row_gal['img'] . " align=left width=85px>
								 			  </div>";
										}
										//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------

					}
					echo "<p style='margin-top:4px; line-height:17px'>";

					//--------------------------------------------------------------teksts - apraksts--------------------------------------------------------
					$position = 300;

					if ($row['not_atskats'] == NULL)
					{
						$post = "Lasīt vairāk";
					}
					elseif (strlen(strip_tags($row['not_atskats'])) <= $position)
					{
						$post = strip_tags($row['not_atskats']);
					}
					else
					{
				 		$post = substr(strip_tags($row['not_atskats']),$position,1);
																			                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
				 		if($post != " ")
				    	{
				       		while($post != " ")
				        	{
				      	     	$i=1;
								$position=$position+$i;
								$post = substr(strip_tags($row['not_atskats']),$position,1);
							}
				    	}
						else
						{
							$post = strip_tags($row['not_atskats']);
						}
							$post = substr(strip_tags($row['not_atskats']),0,$position);
					}																									// Attēlo īso ziņu kas ir sagatavota
					echo $post;															//izņem html tagus, lai tie nepārveido tekstu aktualitāšhu tekstā!

				 	echo "...<a href=";
									if(isset($ser))
										{
											echo $ser;
										}
								echo  "event.php?id=" .$row['id_not']. "><span style='font-size:12px;color:red;'> Lasīt vairāk <b>&#187;</b></span></a></p>";

					echo "</div>";

		   			echo "<img src=".$cel_img."bot_desc.png style='margin:7px 0px 0px 17px;'> ";

			}

		}

echo "<div class='crumb' width=100% align=right>";
			echo "<!--<a href=";if(isset($ser)){echo $ser;}echo "index.php>Visi notikumi &rsaquo;</a>--> ";
			echo "</div>";



?>
