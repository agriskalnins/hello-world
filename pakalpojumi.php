<?php

$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);



	$lapas_nosaukums1 = "Pakalpojumi";
/*----------------------------------------------------------------------------- Te nāks ziņas un visi citi zvēri -----------------------------------------------*/

	$sd_id = strip_tags($_GET["id"]);


		switch ($sd_id)
		{
			case "25":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=pakalpojumi&id=25>Pakalpojumi</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=pakalpojumi&id=25>Konsultācijas</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Konsultācijas</span><br>
					</div>";

				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sd_id");

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

				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "82":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=pakalpojumi&id=25>Pakalpojumi</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=pakalpojumi&id=25>Eksaminācija</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Eksaminācija</span><br>
					</div>";

				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sd_id");

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

				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "22":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=pakalpojumi&id=25>Pakalpojumi</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=pakalpojumi&id=". $sd_id .">Telpu noma</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Telpu noma</span><br>
					</div>";

				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sd_id");

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

				   		echo $row['sad_text'];
					}
					echo "</div>";
				}

			break;
			case "23":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=pakalpojumi&id=25>Pakalpojumi</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=pakalpojumi&id=23>Kursi, semināri, konferences</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Kursi, semināri, konferences</span><br>
					</div>";

				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sd_id");

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

				   		echo $row['sad_text'];
					}
					echo "</div>";
				}

			break;

		}











/*----------------------------------------------------------------------------- Te beidzas ziņas un visi citi zvēri -----------------------------------------------*/


?>
