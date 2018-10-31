<?php



$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);



	if (isset($_GET["view"]) && isset($_GET["dat"]))
	{

			list($year, $month, $day) = explode('-', strip_tags($_REQUEST["dat"]));


		if (!isset($month) && !isset($day) && !isset($year))
		{
			echo "<div class=main_act_error>";
		   	echo "<span style='font-size:13px;color:red;'> <b>Nav notikuma, ko attēlot. Lūdzu, izvēlies datumu no Notikumu kalendāra!</b></span> ";
			echo "</div>";
		}
		elseif (isset($month) && !isset($day) && isset($year))
		{
			$GadaMenesisDat = array("Janvārī","Februārī","Martā","Aprīlī","Maijā","Jūnijā","Jūlijā","Augustā","Septembrī","Oktobrī","Novembrī","Decembrī");


			$hour_begin = '03';
			$min_begin = '00';
			$sec_begin = '00';

			$hour_end = '02';
			$min_end = '59';
			$sec_end = '59';


			$today1 = mktime($hour_begin, $min_begin, $sec_begin, $month, '01', $year) . "<br>";
			$today3 = mktime( date('H')+3, date('i'), date('s'), date('n'), date('j'), date('Y')). "<br>";
			$today4 = mktime($hour_end, $min_end, $sec_end, $month, $day+1, $year). "<br><br>";

			$first_second = date('Y-m-01', $today1);
			list($fyear, $fmonth, $fday) = explode('-', $first_second);

			$last_second = date('Y-m-t', $today1); // A leap year!
			list($lyear, $lmonth, $lday) = explode('-', $last_second);


			$today6 = mktime($hour_begin, $min_begin, $sec_begin, $fmonth, $fday, $fyear) . "<br>";
			$today7 = mktime( date('H')+3, date('i'), date('s'), date('n'), date('j'), date('Y')). "<br>";
			$today8 = mktime($hour_end, $min_end, $sec_end, $lmonth, $lday+1, $lyear). "<br><br>";

			$menesisDat = $GadaMenesisDat[$mon];





			echo "<div class='crumb' width=100%>";
			echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
					<a href=";if(isset($ser)){ echo $ser;}echo"index.php?view=calendar&dat=". strip_tags($_REQUEST["dat"]) . ">Notikumu kalendārs</a> ";
			echo "</div>";

			echo "
				<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
					<span class=event_title>Notikumu kalendārs</span><br>
				</div>";
			echo "<div class=teksts>";



			$result_calend = mysqli_query($GLOBALS['connection'], "SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi kas,
											web_notikumi_tipi kadi
											WHERE kas.id_not = kad.not_id
											AND kadi.id_tips = kas.not_tips_id
											AND kad.not_laiks >= '$today6'
											AND kad.not_laiks <= '$today8'
											AND kadi.id_tips > '1'
											AND kadi.id_tips <> '14'
											AND kas.not_piederiba = '1'
											AND kas.attelot_web  = '1'
											GROUP BY kadi.tips_nosaukums
											ORDER BY kadi.id_tips ASC

											")or die(mysqli_error());



			$count = @mysqli_num_rows($result_calend);


			if($count == 0)
			{

				echo "<div align=center>";
			   	echo "<span style='font-size:14px;color:#a50b0b;'> <b>".$notikums."</b></span> ";
				echo "</div>";
				echo  "<br>";

				echo "<div>";
			   	echo "<span style='font-size:12px;color:red;'> <b>". $day . ". " . lcfirst($menesisDat)." nav notikumu</b></span> ";
				echo "</div>";
			}
			else
			{
				echo "<div align=center>";
			   	echo "<span style='font-size:14px;color:#a50b0b;'> <b>".$notikums."</b></span> ";
				echo "</div>";
				echo  "<br>";
				$i = 0;


				while($row_calend = mysqli_fetch_array($result_calend))
	   			{
	   				echo "<p ><span style='font-family:tahoma;color:#cf0b0b;font-size:13px;'><strong>". $row_calend['tips_nosaukums'] ."</strong></span></p>";

	   							$tipinsh = $row_calend['id_tips'];
								$result_notik = mysqli_query($GLOBALS['connection'], "SELECT *
																FROM
																web_notikumi_laiki kad,
																web_notikumi kas,
																web_notikumi_tipi kadi
																WHERE kas.id_not = kad.not_id
																AND kadi.id_tips = kas.not_tips_id
																AND kad.not_laiks >= '$today6'
																AND kad.not_laiks <= '$today8'
																AND kadi.id_tips = '$tipinsh'
																AND kas.not_piederiba = '1'
																AND kas.attelot_web  = '1'
																ORDER BY kad.not_laiks ASC

																")or die(mysqli_error());



								$count = @mysqli_num_rows($result_notik);


								if($count == 0)
								{


								}
								else
								{


									$i = 0;


									while($row_notikums = mysqli_fetch_array($result_notik))
						   			{
						   				echo "<p class='calendar'><span style='font-size:11px; color:#7C7C7C'>" . date('d', $row_notikums['not_laiks']) . "." . date('m', $row_notikums['not_laiks']) . "." . date('Y', $row_notikums['not_laiks']). " ";
						   				echo "</span><span style='font-family:tahoma;color:#073060;'><a href=";	if(isset($ser)){ echo $ser; } echo  "event.php?id=" .$row_notikums['id_not']. ">". $row_notikums['not_nosaukums'] ."<span style='font-size:10px;color:red;'> <b>&#187;</b></span></a></strong></p>";





									}
						   				echo " <br>";
								}



				}

			}

			echo "</div>";


		}
		elseif (isset($month) && isset($day) && isset($year))
		{
			$GadaMenesisDat = array("Janvārī","Februārī","Martā","Aprīlī","Maijā","Jūnijā","Jūlijā","Augustā","Septembrī","Oktobrī","Novembrī","Decembrī");
	        $WeekDaysDat = array("Pirmdien","Otrdien","Trešdien","Ceturtdien","Piektdien","Sestdien","Svētdien");


	            $diena = date("N", mktime(0, 0, 0, $month, $day, $year));
	            $mon = $month-1;
	            $dien = $diena-1;
	            $menesisDat = $GadaMenesisDat[$mon];
	            $dienaDat = $WeekDaysDat[$dien];
	            $notikums = $dienaDat . ", " . $day . ". " . lcfirst($menesisDat);






			echo "<div class='crumb' width=100%>";
			echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
					<a href=";if(isset($ser)){ echo $ser;}echo"index.php?view=calendar&dat=". strip_tags($_REQUEST["dat"]) . ">Notikumu kalendārs</a> ";
			echo "</div>";

			echo "
				<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
					<span class=event_title>Notikumu kalendārs</span><br>
				</div>";
			echo "<div class=teksts>";

			$hour_begin = '00';
			$min_begin = '00';
			$sec_begin = '00';

			$hour_end = '23';
			$min_end = '59';
			$sec_end = '59';



			$today1 = mktime($hour_begin, $min_begin, $sec_begin, $month, $day, $year) . "<br>";
			$today3 = mktime( date('H')+3, date('i'), date('s'), date('n'), date('j'), date('Y')). "<br>";
			$today4 = mktime($hour_end, $min_end, $sec_end, $month, $day, $year). "<br><br>";

			$first_second = date('m-01-Y 00:00:00', $today3);
			$last_second = date('m-t-Y 12:59:59', $today3); // A leap year!




			$result_calend = mysqli_query($GLOBALS['connection'], "SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi kas,
											web_notikumi_tipi kadi
											WHERE kas.id_not = kad.not_id
											AND kadi.id_tips = kas.not_tips_id
											AND kad.not_laiks >= '$today1'
											AND kad.not_laiks <= '$today4'
											AND kas.not_tips_id > '1'
											AND kadi.id_tips <> '14'
											AND kas.not_piederiba = '1'
											AND kas.attelot_web  = '1'
											GROUP BY kadi.tips_nosaukums
											ORDER BY kadi.id_tips ASC

											")or die(mysqli_error());



			$count = @mysqli_num_rows($result_calend);


			if($count == 0)
			{

				echo "<div align=center>";
			   	echo "<span style='font-size:14px;color:#a50b0b;'> <b>".$notikums."</b></span> ";
				echo "</div>";
				echo  "<br>";

				echo "<div>";
			   	echo "<span style='font-size:12px;color:red;'> <b>". $day . ". " . lcfirst($menesisDat)." nav notikumu</b></span> ";
				echo "</div>";
			}
			else
			{
				echo "<div align=center>";
			   	echo "<span style='font-size:14px;color:#a50b0b;'> <b>".$notikums."</b></span> ";
				echo "</div>";
				echo  "<br>";
				$i = 0;


				while($row_calend = mysqli_fetch_array($result_calend))
	   			{
	   				echo "<span style='font-family:tahoma;color:#cf0b0b;font-size:13px;margin-left:15px;margin-bottom:3px;'><strong>". $row_calend['tips_nosaukums'] ."</strong></span>";

	   							$tipinsh = $row_calend['id_tips'];
								$result_notik = mysqli_query($GLOBALS['connection'], "SELECT *
																FROM
																web_notikumi_laiki kad,
																web_notikumi kas,
																web_notikumi_tipi kadi
																WHERE kas.id_not = kad.not_id
																AND kadi.id_tips = kas.not_tips_id
																AND kad.not_laiks >= '$today1'
																AND kad.not_laiks < '$today4'
																AND kadi.id_tips = '$tipinsh'
																AND kas.not_piederiba = '1'
																AND kas.attelot_web  = '1'
																ORDER BY kad.not_laiks ASC

																")or die(mysqli_error());



								$count = @mysqli_num_rows($result_notik);


								if($count == 0)
								{


								}
								else
								{

									
									$i = 0;

									echo "<table>";
									while($row_notikums = mysqli_fetch_array($result_notik))
						   			{
						   				$stunda = date('H', $row_notikums['not_laiks']);
										$minute = date('i', $row_notikums['not_laiks']);
										echo "<tr height=10px>";

										if ($stunda == '00')
										{
											echo "<td width=65px align=right valign=top style='padding-top:5px;'><span style='font-size:11px; color:#7C7C7C; margin-right:5px;'>līdz ". date('d', $row_notikums['not_laiks']) . "." . date('m', $row_notikums['not_laiks']) ."</td>";
										}
										else{
											echo "<td width=65px align=right valign=top>";

											if ($row_notikums['not_laiks_lidz'] == NULL)
							   				{
												echo "<span style='font-size:11px; color:#7C7C7C;margin-bottom:3px;margin-right:5px;'>" . $stunda . "<sup>" . $minute . "</sup> ";
											}
											else
											{
												echo "<span style='font-size:11px; color:#7C7C7C;margin-bottom:3px;margin-right:0px;'>" . $stunda . "<sup>" . $minute . "</sup> ";
											}
											if ($row_notikums['not_laiks_lidz'] !=NULL)
							   				{
							   					echo "- <span style='font-size:11px; color:#7C7C7C;margin-bottom:3px;margin-right:5px;'>" . date('H', $row_notikums['not_laiks_lidz']) . "<sup>" . date('i', $row_notikums['not_laiks_lidz']) . "</sup> </span>";
							   				}
											else{
												echo "</span></td>";
											}
										}



										echo "</span><td width=450px><p class='calendar'><span style='font-family:tahoma;color:#000;'><a href=";if(isset($ser)){ echo $ser; } echo  "event.php?id=" .$row_notikums['id_not']. ">". $row_notikums['not_nosaukums'] ."<span style='font-size:10px;color:red;'> <b>&#187;</b></span></a></strong></p></td>";




										echo "</tr>";
									}

						   				echo " </table><br>";
								}



				}

			}

			echo "</div>";
		}
	}
	else
	{
		echo "<div class=main_act_error>";
	   	echo "<span style='font-size:13px;color:red;'> <b>Nav notikuma, ko attēlot. Lūdzu, izvēlies datumu no Notikumu kalendāra!</b></span> ";
		echo "</div>";
	}




?>
