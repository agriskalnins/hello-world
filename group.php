<?php


	$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);



	/*-----------jānomaina $Notikuma_titulbilde @ case 26-------------*/
		/*-----------jānomaina $Notikuma_titulbilde @ case 28-------------*/
			/*-----------jānomaina $Notikuma_titulbilde @ case 50-------------*/
				/*-----------jānomaina $Notikuma_titulbilde @ case 42-------------*/
					/*-----------jānomaina $Notikuma_titulbilde @ case 32-------------*/
						/*-----------jānomaina $Notikuma_titulbilde @ case 38-------------*/
						/*-----------jānomaina $Notikuma_titulbilde @ case 52 ------------*/
						/*-----------jānomaina $Notikuma_titulbilde @ case 54 ------------*/
						/*-----------jānomaina $Notikuma_titulbilde @ case 33 ------------*/

	include 'var.php';
	$kam = strip_tags($_REQUEST["group"]);
	$sad_id = strip_tags($_GET["id"]);

		/*$result_kam = mysql_query("SELECT *	FROM web_sadalas WHERE id_sad = $kam");
		while($row_group = mysql_fetch_array($result_kam))
	   	{
	   		echo $row_group['sad_nosaukums'];
		}
*/
		switch ($sad_id)
		{

			case "84":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Bibliotēka &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=4&id=84>E-katalogs</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>E-katalogs</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");


				$count = @mysql_num_rows($result);


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
				   	while($row = mysql_fetch_array($result))
				   	{

				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "56":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Bibliotēka &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=4&id=56>Par bibliotēku</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Par bibliotēku</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");


				$count = @mysql_num_rows($result);


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
				   	while($row = mysql_fetch_array($result))
				   	{

				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "57":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Bibliotēka &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=4&id=57>Jaunumi</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Jaunumi</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
				   	while($row = mysql_fetch_array($result))
				   	{

				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "58":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Bibliotēka &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=4&id=58>Lietotāja ceļvedis</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Lietotāja ceļvedis</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
				   	while($row = mysql_fetch_array($result))
				   	{

				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "59":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Bibliotēka &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=4&id=59>Noderīgas saites</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Noderīgas saites</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "40":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Vecākiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=12&id=40>Miniphänomenta</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Miniphänomenta</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "77":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Vecākiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=12&id=77>Mācies eksperimentējot!</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Mācies eksperimentējot</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
            case "80":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Vecākiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=12&id=80>FasTracKids</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>FasTracKids Fundamentals</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "86":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Jauniešiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=11&id=86>Pašvaldības atbalsts</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Jelgavas pilsētas pašvaldības atbalsts jauniešu ideju realizēšanā</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
            case "81":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=0&id=81> Vakances</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Vakances</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "90":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=0&id=90>Ieskats procesā</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Pedagogu profesionālā kompetence: Ieskats procesā</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


				if($count == 0)
				{

					echo "<div class=event_tittle_space align=left style='margin-top:40px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Atvainojiet!</span><br></div>";
					echo "<div class=teksts >";
					echo "Šī sadaļa šobrīd nav pieejama!";
					echo "</div>";
					echo "
					<div width=100% style='margin-top:45px;margin-left:17px;margin-bottom:10px;'>
						<a href='#' onclick='history.go(-1);return false;'><strong style='color:#13529d;'>&#139; Atgriezties</strong> </a>
					</div>";
				}
				else
				{
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
					echo "
					<div width=100% style='margin-top:45px;margin-left:17px;margin-bottom:10px;'>
						<a href='#' onclick='history.go(-1);return false;'><strong style='color:#13529d;'>&#139; Atgriezties</strong> </a>
					</div>";

				}
			break;
            case "87":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=0&id=87>Darbinieku atalgojums</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Darbinieku atalgojums</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "85":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=0&id=81> Vēlējumu grāmata</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Vēlējumu grāmata</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "78":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Pedagogiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=12&id=78>Mācies eksperimentējot!</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Mācies eksperimentējot</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "41":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Vecākiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=12&id=41>Montesori</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Pedagoģijas praktikumi \"Montesori pedagoģija bērna attīstībai\"</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "35":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Jauniešiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=11&id=35>IT Academy</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title><i>Microsoft</i> IT Akadēmija</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "83":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Jauniešiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=11&id=83>Žurnālistikas pamati</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Žurnālistikas pamati</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Žurnālistikas pamati</span><br></div>";
					echo "<div class=teksts >";
					echo "Šī sadaļa šobrīd nav pieejama!";
					echo "</div>";
				}
				else
				{
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "29":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Metālapstrādei &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=9&id=29>Eksaminācijas iespējas</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Eksaminācijas iespējas</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "31":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Metālapstrādei &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=9&id=31>Ekskursijas</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Ekskursijas</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "36":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Jauniešiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=11&id=36>Olimpiādes</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Mācību priekšmetu olimpiādes 2017./2018. m.g.</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "48":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Pedagogiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=10&id=48>Olimpiādes</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Mācību priekšmetu olimpiādes 2017./2018. m.g.</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";

					$sodiena = time();
					$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
					$result_oli = mysql_query(" SELECT *
												FROM
												web_notikumi_laiki kad,
												web_notikumi_sadalas kam,
												web_notikumi kas
												WHERE kas.id_not = kam.sad_id_not
												AND kas.id_not = kad.not_id
												AND kas.not_tips_id = '7'
												GROUP BY kas.not_nosaukums
												ORDER BY kas.id_not ASC;
												")or die(mysql_error());





					$count_oli = @mysql_num_rows($result_oli);

					if($count_oli == 0)
					{

					}
					else
					{

							echo "<div class=teksts >";
							$i_oli = 0;
						 	while($row_oli = mysql_fetch_array($result_oli))
						   	{

						   		echo "<p ><span style='font-family:tahoma;color:#black;font-size:13px;'><strong>". $row_oli['not_nosaukums'] ."</strong></span></p>";
								echo "<table border=0 style='margin-bottom:20px;border-top: 1px solid #CCCCCC;'>";


						   		$nosaukums = $row_oli['not_nosaukums'];
						   		$result_oli_klase = mysql_query(" SELECT *
														FROM
														web_notikumi_laiki kad,
														web_notikumi kas
														WHERE  kas.id_not = kad.not_id
														AND kas.not_tips_id = '7'
														AND kas.not_nosaukums = '$nosaukums'
														ORDER BY kas.id_not ASC;
														")or die(mysql_error());

									while($row_oli_klase = mysql_fetch_array($result_oli_klase))
						   			{
						   				echo "<tr style=' '>
													<td width=150px style='padding-left:30px;'>
													". $row_oli_klase['not_klase'] ."
													</td>
													<td width=80px>";
									echo date('d', $row_oli_klase['not_laiks']) . "." . date('m', $row_oli_klase['not_laiks']) . "." . date('Y', $row_oli_klase['not_laiks']) . ".
													</td>
													<td width=60px>";
									echo date('H', $row_oli_klase['not_laiks']) . ":" . date('i', $row_oli_klase['not_laiks']) . "
													</td>
													<td width=210px>
													". $row_oli_klase['not_vieta'] ."
													</td>
													</tr>";

									$idn_oli_fails = $row_oli_klase['id_not'];

												echo "
													<tr height=40px>
													<td width=150px>

													</td>


													<td colspan=3 valign=middle>";

											echo strip_tags($row_oli_klase['not_apraksts'], '<a>') . "  ";

			/*Atrod raksta pielikumus*/
					$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id = '$idn_oli_fails' ORDER BY id_file ASC");


					$count_oli_file = @mysql_num_rows($result_fil);


					if($count_oli_file != 0)
					{



						while ($row_files= mysql_fetch_array($result_fil))
							{

								$dok_nosaukums = $row_files['file_caption'];
								if ($row_files['file_caption'] != NULL)
								{
									$file_name = $row_files['file_name'];

										/*** get the path info ***/
										$info = pathinfo($file_name);

										/*** show the extension ***/

										switch (strtolower($info['extension']))
										{
										case 'ppt':
											echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
											break;
									    case 'pptx':
											echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
											break;
									    case 'doc':
											echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
											break;
										case 'docx':
											echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
											break;
										case 'xls':
											echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
											break;
										case 'xlsx':
											echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
											break;
										case 'pdf':
											echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:5px;margin-top:-8px;margin-left:25px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . "></a></span>";
											break;
										case 'png':
											echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
											break;
										case 'gif':
											echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
											break;
										case 'jpeg':
											echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
											break;
										case 'jpg':
											echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
											break;
										default:
											echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
											break;
										}
									}
									else
									{
										$dok_nosaukums = $row_files['file_name'];
										$filename = $row_files['file_name'];

										/*** get the path info ***/
										$info = pathinfo($filename);

										/*** show the extension ***/

										switch (strtolower($info['extension']))
										{
										    case 'ppt':
												echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
												break;
										    case 'pptx':
												echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
												break;
										    case 'doc':
												echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
												break;
											case 'docx':
												echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
												break;
											case 'xls':
												echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
												break;
											case 'xlsx':
												echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
												break;
											case 'pdf':
												echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:5px;margin-top:-8px;margin-left:25px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . "></a></span>";
												break;
											case 'png':
												echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
												break;
											case 'gif':
												echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
												break;
											case 'jpeg':
												echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
												break;
											case 'jpg':
												echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
												break;
											default:
												echo "  <a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span>";
												break;
										}
									}
							}
								echo "
										</div>";

					}
					else
					{

					}
												echo "	</td>
													</tr>";


									}
						   			echo "</table>";


							}



						echo "</div>";
					}




				}
			break;
			case "34":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Jauniešiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=11&id=34>Jaunie līderi</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Jaunie līderi</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "33":

				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Jauniešiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=11&id=33>Junioru universitāte</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Junioru universitāte</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];

						$sadalaID = $row['id_sad'];

						/*Failu ielādes SQL*/
						$result_sadalas_files = mysql_query("SELECT * FROM web_sadalas_files WHERE file_sad_id='$sadalaID'");

						while($row_files = mysql_fetch_array($result_sadalas_files))
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
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'pptx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'doc':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'docx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xls':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xlsx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'pdf':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'png':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'gif':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpeg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									default:
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
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
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'pptx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'doc':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'docx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xls':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xlsx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'pdf':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'png':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'gif':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpeg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									default:
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								}
								}
							}



				   		}
					echo "</div>";
				}


				$sodiena = time();
				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
				$result_zinas = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks < '$sodiena'
											AND kam.sad_id_sad = '11'
											AND kas.not_tips_id = '8'
											AND CHAR_LENGTH(kas.not_atskats) > 9
											ORDER BY kad.not_laiks DESC;
											")or die(mysql_error());



					$count = @mysql_num_rows($result_zinas);

					if($count == 0)
					{

					}
					else
					{
						$skaita = 0;
												echo "
											<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
												<span class=event_title style:'font-size:16px;'>Notikumu atskats</span><br>
											</div>";
						while($row = mysql_fetch_array($result_zinas))
						{
						   	$skaita++;
						   	if ($skaita <= 6)
						   	{

							   	echo "<div class=main_apskats>";
								echo "	<div align=left style='margin-bottom:10px;border: solid 0px #CCC; border-left:solid 4px #C60202; padding-left:7px;'>
						  				<span style='font-family:Arial; font-size: 14px; font-weight: 700; text-decoration: none;'><a class='h1_a' href=";
								if(isset($ser))
								{
									echo $ser;
								}
								echo  "event.php?id=" .$row['id_not']. ">" . $row['not_nosaukums'] ;
								echo "		</a></span> ";

								$idn=$row['id_not'];

		//___________________________________ pārbauda vai ir galerija

								$result_gal = mysql_query("SELECT *
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
								$row_gal = mysql_fetch_array($result_gal);
								//____________ ja galerija ir nulle
								if ($row_gal['gal_id_gal'] == null)
								{

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
									{
									echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
							 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
							 			  </div>";
									}
								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}
								else
								{
									//____________ ja galerija ir
									echo "  <img src=img/photo.png width=12px  border=0>";

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
									else
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=" . $galery_images . $row_gal['img'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
										//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}


									echo "<p style='margin-top:4px; line-height:15px'>";

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
								if ($skaita == 2 || $skaita == 4)
						   		{
						   			echo "<img src=".$cel_img."Line.png> ";
							   	}
							}
							else
							{
								goto andrew33;
							}
						}
					}
				andrew33: 	echo "<div class='crumb' width=100% align=right>";
							echo "<!--<a href=";if(isset($ser)){echo $ser;}echo "index.php>Visi notikumi &rsaquo;</a> -->";
							echo "</div>";

			break;
			case "73":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Jauniešiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=11&id=73>Junioru universitāte plus</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title style='font-weight:bold; color:#13529d;'>Junioru universitāte</span><span style='font-weight:bold; color:red;font-size:20px; font-style:italic;'>+</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts style='margin-bottom:30px;line-height:18px;text-align: justify;'>
					<img src='captcha/JU_Plus_curvets_04.png' id='pieteikt_logo' width='545px' >";

				   	while($row = mysql_fetch_array($result))
				   	{

				   		echo $row['sad_text'];

						$sadalaID = $row['id_sad'];

						/*Failu ielādes SQL*/
						$result_sadalas_files = mysql_query("SELECT * FROM web_sadalas_files WHERE file_sad_id='$sadalaID'");

						while($row_files = mysql_fetch_array($result_sadalas_files))
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
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'pptx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'doc':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'docx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xls':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xlsx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'pdf':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'png':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'gif':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpeg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									default:
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
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
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'pptx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'doc':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'docx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xls':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xlsx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'pdf':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'png':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'gif':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpeg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									default:
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								}
								}
							}
					}
					echo "</div>";
				}
			break;
			case "173":

				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Jauniešiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=11&id=73>Junioru universitāte plus</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title style='font-weight:bold; color:#13529d;'>Junioru universitāte</span><span style='font-weight:bold; color:red;font-size:20px; font-style:italic;'>+</span><br>
					</div>";


				include('pieteikt.php');


			break;
			case "46":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Pedagogiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=10&id=46>Pedagogu radošā darbība</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Pedagogu radošā darbība</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "47":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Pedagogiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=10&id=47>Skolēnu zinātniski pētnieciskā darbība</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Skolēnu zinātniski pētnieciskā darbība</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "27":



				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");

				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Uzņēmējiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=8&id=27>Kursi Uzņēmējiem</a>";
				echo "</div>";


				$sodiena1 = mktime( date('H')+2, date('i'), date('s'), date('n'), date('j'), date('Y'));
				$sodiena = time();
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
											id_sadala_parent='16'
											AND web_kursi_grafiks.kg_datums > $sodiena1
											AND web_kursi.sadala_id = web_kompetences_iedalijums.id_sadala
											AND web_kursi.id_kursi = web_kursi_grafiks.kg_id_kursi
											ORDER BY web_kursi_grafiks.kg_datums ASC");

				$count1 = @mysqli_num_rows($subkom_result);




					echo "<img src=". $cel_img3 . "16.jpg style='margin-bottom:2px;margin-left:17px;margin-top:20px;width:555px;'>";

					//////////////////////////////////////////////////////
					/////////////////////////////////////////////////////////
					if ($subkom_result->num_rows > 0)
					{
						echo "
						<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
							<span class=event_title>Mācības uzsāk</span><br>
						</div>";

							echo "<table style='margin-left:17px;margin-top:20px;'>";
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
								echo "<td width=280px style='border-bottom:1pt solid #aaa;padding-right:5px;'>";
								echo "<a class='kursi_a' href=";if(isset($ser)){echo $ser;} echo "index.php?view=kursi_review&id=" . $kursiID . "><p>" . $NosaukumsKursi . "</p></a></td>

											<td align=left  width=100px style='border-bottom:1pt solid #aaa;'> <span style='color:#b22222;font-weight:bolder;'>". $datums ."</span></td>
											<td align=left  width=80px style='border-bottom:1pt solid #aaa;'><pre class=stundas>" . $kursi['kg_laiki']. "</pre></td>
											<td align=center  width=100px style='border-bottom:1pt solid #aaa;'><a target='_blank' href='http://www.zrkac.lv/piet.php?idk=".$kursiID."' class='pogapiet'>Pieteikties</a></td>";
								echo "</a>";

							}
							echo "</table>";
							////////////////////////////////////////////////////////
							//////////////////////////////////////////////////////////
}



				include'include/banner_eepa.php';




				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Kursi uzņēmējiem</span><br>
					</div>";



/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		echo "
		<div width=100% style='margin-top:20px;margin-left:17px;margin-bottom:10px;'>
		<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>&nbsp;Eso&scaron;ais piedāvājums un kursu cena ir spēkā līdz 31.08.2016.</strong></span></span></p>
		</div>";
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

				$result = mysqli_query($GLOBALS['connection'], " SELECT *
											FROM
											web_kursi_merkauditorija kam,
											web_kompetences_iedalijums kur,
											web_kursi kas
											WHERE kas.id_kursi = kam.kursi_id_kursi
											AND kas.sadala_id = kur.id_sadala
											AND kam.kursi_id_sadala = '8'
											GROUP BY kur.id_sadala
											")or die(mysqli_error());


				$count = @mysqli_num_rows($result);

				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Atvainojiet!</span><br></div>";
					echo "<div class=teksts style:'margin-left:1px;'>";
					echo "Šī sadaļa šobrīd nav pieejama!";
					echo "</div>";
				}
				else
				{
					echo "<div class=teksts >";

				   	 	echo " <ul id=sadalas_heads> ";
					 	while($sadalas = mysqli_fetch_array($result))
					   	{
						   $sadaleID = $sadalas['id_sadala'];
						   $NosaukumsSA = $sadalas['sadalas_nos'];
						   echo "<li id=sadalas_heads_li><strong>";
						   echo $NosaukumsSA;
						   echo "</strong></li>";


						   					$kursi_result = mysqli_query($GLOBALS['connection'], "SELECT *
											FROM
											web_kursi_merkauditorija kam,
											web_kompetences_iedalijums kur,
											web_kursi kas
											WHERE kas.id_kursi = kam.kursi_id_kursi
											AND kas.sadala_id = kur.id_sadala
											AND kam.kursi_id_sadala = '8'
											AND kur.id_sadala = $sadaleID
											ORDER BY kas.kursi_nos

											")or die(mysqli_error());

											/////////////////////////////////////////////////////////////////////////
											echo "<table style='margin-left:17px;'>";
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
															<td align=center  width=100px style='border-bottom:1pt solid #aaa;'><a target='_blank' href='http://www.zrkac.lv/piet.php?idk=".$kursiID."' class='pogapiet'>Pieteikties</a></td>";
												echo "</a>";

											}
											echo "</table>";
											//////////////////////////////////////////////////////////////////////////
						}
					 	echo "</ul>";
					echo "</div>";
				}
			break;
			case "30":

				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Metālapstrādei &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=9&id=30>Kursi metālapstrādē</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Kursi metālapstrādē</span><br>
					</div>";

			/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					echo "
					<div width=100% style='margin-top:20px;margin-left:17px;margin-bottom:10px;'>
					<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>&nbsp;Eso&scaron;ais piedāvājums un kursu cena ir spēkā līdz 31.08.2016.</strong></span></span></p>
					</div>";
			/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

			$result = mysqli_query($GLOBALS['connection'], " SELECT *
										FROM
										web_kursi_merkauditorija kam,
										web_kompetences_iedalijums kur,
										web_kursi kas
										WHERE kas.id_kursi = kam.kursi_id_kursi
										AND kas.sadala_id = kur.id_sadala
										AND kam.kursi_id_sadala = '9'
										GROUP BY kur.id_sadala
										")or die(mysqli_error());


			$count = @mysqli_num_rows($result);
			echo "<img src=". $cel_img3 . "17.jpg style='margin-bottom:2px;margin-left:17px;margin-top:20px;width:555px;'>";

			if($count == 0)
			{
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a>";
				echo "</div>";
				echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Atvainojiet!</span><br></div>";
				echo "<div class=teksts style:'margin-left:1px;'>";
				echo "Šī sadaļa šobrīd nav pieejama!";
				echo "</div>";
			}
			else
			{
				echo "<div class=teksts >";

						echo " <ul id=sadalas_heads> ";
					while($sadalas = mysqli_fetch_array($result))
						{
						 $sadaleID = $sadalas['id_sadala'];
						 $NosaukumsSA = $sadalas['sadalas_nos'];
						 echo "<li id=sadalas_heads_li><strong>";
						 echo $NosaukumsSA;
						 echo "</strong></li>";


											$kursi_result = mysqli_query($GLOBALS['connection'], "SELECT *
										FROM
										web_kursi_merkauditorija kam,
										web_kompetences_iedalijums kur,
										web_kursi kas
										WHERE kas.id_kursi = kam.kursi_id_kursi
										AND kas.sadala_id = kur.id_sadala
										AND kam.kursi_id_sadala = '9'
										AND kur.id_sadala = $sadaleID
										ORDER BY kas.kursi_nos

										")or die(mysqli_error());

										/////////////////////////////////////////////////////////////////////////
										echo "<table style='margin-left:17px;'>";
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
														<td align=center  width=100px style='border-bottom:1pt solid #aaa;'><a target='_blank' href='http://www.zrkac.lv/piet.php?idk=".$kursiID."' class='pogapiet'>Pieteikties</a></td>";
											echo "</a>";

										}
										echo "</table>";
										//////////////////////////////////////////////////////////////////////////
					}
					echo "</ul>";
				echo "</div>";
			}
			break;
			case "51":




				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");

				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Darba meklētājiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=15&id=51>Kursi darba meklētājiem</a>";
				echo "</div>";



				$sodiena = time();
				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
				$result_aktuali = mysql_query("SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks > $sodiena
											AND kam.sad_id_sad = '15'
											AND kas.not_tips_id = '14'
											ORDER BY kad.not_laiks ASC;
											")or die(mysql_error());

				$count1 = @mysql_num_rows($result_aktuali);

				if($count1 == 0)
				{


				}
				else
				{
					echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Mācības uzsāk </span><br>
					</div>";

					echo "<div class=teksts >";

						$i = 0;
						while($aktuali_row = mysql_fetch_array($result_aktuali))
						{
							$i++;
							if($i >= $count1)
							{
								echo "<div style='margin-bottom:40px;height:auto;'>";
							}
							else
							{
								echo "<div style='margin-bottom:30px;height:auto;'>";
							}

							   $kurs_akt_id = $aktuali_row['id_not'];
							   $kurs_akt_nos = $aktuali_row['not_nosaukums'];



								echo "<span style='font-family:Arial; font-size: 16px; font-weight: 700; text-decoration: none; color:#c60202;'>";
						   		echo $kurs_akt_nos ;
						   		echo "</span><hr>";

							//-----------------------------------------------------aktualitātes Datums-----------------------------------------------------------------------------
								echo "<span style='margin-top:20px;margin-bottom:5px;margin-left:22px;font-family:Tahoma;font-size:11px;color:#adaaaa;'>";

								echo date('j. ', $aktuali_row['not_piev_laiks']) . $GadaMenesis[date('n', $aktuali_row['not_piev_laiks'])-1]. ", " . date('Y', $aktuali_row['not_piev_laiks']);  //izgatavojam datumu no pievienotā timestamp - iekļaujot mēneša masīva funkciju kurā atrodas mēnesis
								echo "</span>";

					//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------

					//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								if ($aktuali_row['not_titulbilde'] != NULL)
								{
								echo "<div  class=main_pct_small style='background-image: url(Sem2.png);    max-height: 75px;'>
						 				<img src=". $Notikuma_titulbilde . $aktuali_row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
						 			  </div>&nbsp;";
								}

								echo "<p style='margin-top:4px; margin-left:17px; line-height:15px'>";

					//---------------------------------------------------------------Aktualitātes teksts - apraksts--------------------------------------------------------
								$position = 270;

								if ($aktuali_row['not_apraksts'] == NULL)
								{
									$post = "Lasīt vairāk";
								}
								elseif (strlen($aktuali_row['not_apraksts']) <= $position)
								{
									$post = strip_tags($aktuali_row['not_apraksts']);
								}
								else
								{
						 			$post = substr(strip_tags($aktuali_row['not_apraksts']),$position,1);
																					                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
						 			if($post != " ")
						    		{
						        		while($post != " ")
						            	{
						                	$i=1;
											$position=$position+$i;
											$post = substr(strip_tags($aktuali_row['not_apraksts']),$position,1);
										}
						    		}
									else
									{
										$post = strip_tags($aktuali_row['not_apraksts']);
									}

									$post = substr(strip_tags($aktuali_row['not_apraksts']),0,$position) ;
								}																									// Attēlo īso ziņu kas ir sagatavota
								echo  $post;															//izņem html tagus, lai tie nepārveido tekstu aktualitāšhu tekstā!
								echo "...<a href=";
									if(isset($ser))
										{
											echo $ser;
										}
								echo  "event.php?id=" .$aktuali_row['id_not']. "><span style='font-size:12px;color:red;'> Lasīt vairāk <b>&#187;</b></span></a>";
							   echo "</p></div>";
							}
					echo "</div>";
				}


				$result = mysql_query(" SELECT *
											FROM
											web_kursi_merkauditorija kam,
											web_kompetences_iedalijums kur,
											web_kursi kas
											WHERE kas.id_kursi = kam.kursi_id_kursi
											AND kas.sadala_id = kur.id_sadala
											AND kam.kursi_id_sadala = '15'
											GROUP BY kur.id_sadala
											")or die(mysql_error());




				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Kursi darba meklētājiem</span><br>
					</div>";



				$result_sadala = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result_sadala);


				if($count == 0)
				{

					echo "<div class=teksts >";
					echo "Šī sadaļa šobrīd nav pieejama!";
					echo "</div>";
				}
				else
				{
					echo "<div class=teksts >";
				   	while($row_sad = mysql_fetch_array($result_sadala))
				   	{
				   		echo $row_sad['sad_text'];
					}
					echo "</div>";
				}






				$count3 = @mysql_num_rows($result);

				if($count3 == 0)
				{


					echo "<div class=teksts style:'margin-left:1px;'>";
					echo "<strong>Aktuālais piedāvājums</strong>";
					echo "</div>";
				}
				else
				{
					echo "<div class=teksts >";
				   	 	echo " <ul id=sadalas_heads> ";
					 	while($sadalas = mysql_fetch_array($result))
					   	{
						   $sadaleID = $sadalas['id_sadala'];
						   $NosaukumsSA = $sadalas['sadalas_nos'];
						   echo "<li id=sadalas_heads_li><b>";
						   echo $NosaukumsSA;
						   echo "</b></li>";


						   					$kursi_result = mysql_query(" SELECT *
											FROM
											web_kursi_merkauditorija kam,
											web_kompetences_iedalijums kur,
											web_kursi kas
											WHERE kas.id_kursi = kam.kursi_id_kursi
											AND kas.sadala_id = kur.id_sadala
											AND kam.kursi_id_sadala = '15'
											AND kur.id_sadala = $sadaleID
											ORDER BY kas.kursi_nos

											")or die(mysql_error());

										echo "<ul id=sadalas_kursi>";

										while($kursi = mysql_fetch_array($kursi_result))
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

						}


					 	echo "</ul>";
					echo "</div>";
				}
			break;
			case "43":

				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");

				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Pedagogiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=10&id=43>Kursi pedagogiem</a>";
				echo "</div>";



				$sodiena = time();
				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
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
											id_sadala_parent='10'
											AND web_kursi_grafiks.kg_datums > $sodiena1
											AND web_kursi.sadala_id = web_kompetences_iedalijums.id_sadala
											AND web_kursi.id_kursi = web_kursi_grafiks.kg_id_kursi
											ORDER BY web_kursi_grafiks.kg_datums ASC");

				$count1 = @mysqli_num_rows($subkom_result);




					echo "<img src=". $cel_img3 . "15.jpg style='margin-bottom:2px;margin-left:17px;margin-top:20px;width:555px;'>";

					//////////////////////////////////////////////////////
					/////////////////////////////////////////////////////////
					if ($subkom_result->num_rows > 0)
					{

						echo "
						<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
							<span class=event_title>Mācības uzsāk</span><br>
						</div>";

							echo "<table style='margin-left:17px;margin-top:20px;'>";
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
								echo "<td width=280px style='border-bottom:1pt solid #aaa;padding-right:5px;'>";
								echo "<a class='kursi_a' href=";if(isset($ser)){echo $ser;} echo "index.php?view=kursi_review&id=" . $kursiID . "><p>" . $NosaukumsKursi . "</p></a></td>

											<td align=left  width=100px style='border-bottom:1pt solid #aaa;'> <span style='color:#b22222;font-weight:bolder;'>". $datums ."</span></td>
											<td align=left  width=80px style='border-bottom:1pt solid #aaa;'><pre class=stundas>" . $kursi['kg_laiki']. "</pre></td>
											<td align=center  width=100px style='border-bottom:1pt solid #aaa;'><a target='_blank' href='http://www.zrkac.lv/piet.php?idk=".$kursiID."' class='pogapiet'>Pieteikties</a></td>";
								echo "</a>";

							}
							echo "</table>";
							////////////////////////////////////////////////////////
							//////////////////////////////////////////////////////////
}


				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Kursi pedagogiem</span><br>
					</div>";
					/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
							echo "
							<div width=100% style='margin-top:20px;margin-left:17px;margin-bottom:10px;'>
							<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>&nbsp;Eso&scaron;ais piedāvājums un kursu cena ir spēkā līdz 31.08.2016.</strong></span></span></p>
							</div>";
					/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

					$result = mysqli_query($GLOBALS['connection'], " SELECT *
												FROM
												web_kursi_merkauditorija kam,
												web_kompetences_iedalijums kur,
												web_kursi kas
												WHERE kas.id_kursi = kam.kursi_id_kursi
												AND kas.sadala_id = kur.id_sadala
												AND kam.kursi_id_sadala = '10'
												GROUP BY kur.id_sadala
												")or die(mysqli_error());


					$count = @mysqli_num_rows($result);

					if($count == 0)
					{
						echo "<div class='crumb' width=100%>";
						echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a>";
						echo "</div>";
						echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Atvainojiet!</span><br></div>";
						echo "<div class=teksts style:'margin-left:1px;'>";
						echo "Šī sadaļa šobrīd nav pieejama!";
						echo "</div>";
					}
					else
					{
						echo "<div class=teksts >";

								echo " <ul id=sadalas_heads> ";
							while($sadalas = mysqli_fetch_array($result))
								{
								 $sadaleID = $sadalas['id_sadala'];
								 $NosaukumsSA = $sadalas['sadalas_nos'];
								 echo "<li id=sadalas_heads_li><strong>";
								 echo $NosaukumsSA;
								 echo "</strong></li>";


													$kursi_result = mysqli_query($GLOBALS['connection'], "SELECT *
												FROM
												web_kursi_merkauditorija kam,
												web_kompetences_iedalijums kur,
												web_kursi kas
												WHERE kas.id_kursi = kam.kursi_id_kursi
												AND kas.sadala_id = kur.id_sadala
												AND kam.kursi_id_sadala = '10'
												AND kur.id_sadala = $sadaleID
												ORDER BY kas.kursi_nos

												")or die(mysqli_error());

												/////////////////////////////////////////////////////////////////////////
												echo "<table style='margin-left:17px;'>";
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
																<td align=center  width=100px style='border-bottom:1pt solid #aaa;'><a target='_blank' href='http://www.zrkac.lv/piet.php?idk=".$kursiID."' class='pogapiet'>Pieteikties</a></td>";
													echo "</a>";

												}
												echo "</table>";
												//////////////////////////////////////////////////////////////////////////
							}
							echo "</ul>";
						echo "</div>";
					}
								break;
			case "39":

				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");

				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Vecākiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=12&id=39>Kursi vecākiem</a>";
				echo "</div>";

				$sodiena = time();
				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
				$result_aktuali = mysql_query("SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks > $sodiena
											AND kam.sad_id_sad = '12'
											AND kas.not_tips_id = '14'
											ORDER BY kad.not_laiks ASC;
											")or die(mysql_error());

				$count1 = @mysql_num_rows($result_aktuali);

				if($count1 == 0)
				{


				}
				else
				{
					echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Mācības uzsāk</span><br>
					</div>";

					echo "<div class=teksts >";

						$i = 0;
						while($aktuali_row = mysql_fetch_array($result_aktuali))
						{
							$i++;
							if($i >= $count1)
							{
								echo "<div style='margin-bottom:40px;'>";
							}
							else
							{
								echo "<div style='margin-bottom:30px;'>";
							}

							   $kurs_akt_id = $aktuali_row['id_not'];
							   $kurs_akt_nos = $aktuali_row['not_nosaukums'];



								echo "<span style='font-family:Arial; font-size: 16px; font-weight: 700; text-decoration: none; color:#c60202;'>";
						   		echo $kurs_akt_nos ;
						   		echo "</span><hr>";

							//-----------------------------------------------------aktualitātes Datums-----------------------------------------------------------------------------
								echo "<span style='margin-top:20px;margin-bottom:5px;margin-left:22px;font-family:Tahoma;font-size:11px;color:#adaaaa;'>";

								echo "Pievienots: " . date('j. ', $aktuali_row['not_red_laiks']) . $GadaMenesis[date('n', $aktuali_row['not_red_laiks'])-1]. ", " . date('Y', $aktuali_row['not_red_laiks']);  //izgatavojam datumu no pievienotā timestamp - iekļaujot mēneša masīva funkciju kurā atrodas mēnesis
								echo "</span>";

					//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------

					//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								if ($aktuali_row['not_titulbilde'] != NULL)
								{
								echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
						 				<img src=". $Notikuma_titulbilde . $aktuali_row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
						 			  </div>";
								}

								echo "<p style='margin-top:4px; margin-left:17px; line-height:15px'>";

					//---------------------------------------------------------------Aktualitātes teksts - apraksts--------------------------------------------------------
								$position = 270;

								if ($aktuali_row['not_apraksts'] == NULL)
								{
									$post = "Lasīt vairāk";
								}
								elseif (strlen($aktuali_row['not_apraksts']) <= $position)
								{
									$post = strip_tags($aktuali_row['not_apraksts']);
								}
								else
								{
						 			$post = substr(strip_tags($aktuali_row['not_apraksts']),$position,1);
																					                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
						 			if($post != " ")
						    		{
						        		while($post != " ")
						            	{
						                	$i=1;
											$position=$position+$i;
											$post = substr(strip_tags($aktuali_row['not_apraksts']),$position,1);
										}
						    		}
									else
									{
										$post = strip_tags($aktuali_row['not_apraksts']);
									}

									$post = substr(strip_tags($aktuali_row['not_apraksts']),0,$position) ;
								}																									// Attēlo īso ziņu kas ir sagatavota
								echo  $post;															//izņem html tagus, lai tie nepārveido tekstu aktualitāšhu tekstā!
								echo "...<a href=";
									if(isset($ser))
										{
											echo $ser;
										}
								echo  "event.php?id=" .$aktuali_row['id_not']. "><span style='font-size:12px;color:red;'> Lasīt vairāk <b>&#187;</b></span></a>";
							   echo "</p></div>";
							}
					echo "</div>";
				}


				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Kursi vecākiem</span><br>
					</div>";

/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		echo "
		<div width=100% style='margin-top:20px;margin-left:17px;margin-bottom:10px;'>
		<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>█&nbsp;Eso&scaron;ais piedāvājums un kursu cena ir spēkā līdz 31.08.2016.</strong></span></span></p>
		</div>";
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

							$result = mysql_query(" SELECT *
											FROM
											web_kursi_merkauditorija kam,
											web_kompetences_iedalijums kur,
											web_kursi kas
											WHERE kas.id_kursi = kam.kursi_id_kursi
											AND kas.sadala_id = kur.id_sadala
											AND kam.kursi_id_sadala = '12'
											GROUP BY kur.id_sadala
											")or die(mysql_error());







				$count = @mysql_num_rows($result);

				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Atvainojiet!</span><br></div>";
					echo "<div class=teksts style:'margin-left:1px;'>";
					echo "Šī sadaļa šobrīd nav pieejama!";
					echo "</div>";
				}
				else
				{
					echo "<div class=teksts >";
				   	 	echo " <ul id=sadalas_heads> ";
					 	while($sadalas = mysql_fetch_array($result))
					   	{
						   $sadaleID = $sadalas['id_sadala'];
						   $NosaukumsSA = $sadalas['sadalas_nos'];
						   echo "<li id=sadalas_heads_li><b>";
						   echo $NosaukumsSA;
						   echo "</b></li>";


						   					$kursi_result = mysql_query(" SELECT *
											FROM
											web_kursi_merkauditorija kam,
											web_kompetences_iedalijums kur,
											web_kursi kas
											WHERE kas.id_kursi = kam.kursi_id_kursi
											AND kas.sadala_id = kur.id_sadala
											AND kam.kursi_id_sadala = '12'
											AND kur.id_sadala = $sadaleID
											ORDER BY kas.kursi_nos

											")or die(mysql_error());

										echo "<ul id=sadalas_kursi>";

										while($kursi = mysql_fetch_array($kursi_result))
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

						}


					 	echo "</ul>";
					echo "</div>";
				}
			break;
			case "53":
							$result = mysql_query(" SELECT *
											FROM
											web_kursi_merkauditorija kam,
											web_kompetences_iedalijums kur,
											web_kursi kas
											WHERE kas.id_kursi = kam.kursi_id_kursi
											AND kas.sadala_id = kur.id_sadala
											AND kam.kursi_id_sadala = '13'
											GROUP BY kur.id_sadala
											")or die(mysql_error());


				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Senioriem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=13&id=39>Kursi senioriem</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Kursi senioriem</span><br>
					</div>";

/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		echo "
		<div width=100% style='margin-top:20px;margin-left:17px;margin-bottom:10px;'>
		<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>█&nbsp;Eso&scaron;ais piedāvājums un kursu cena ir spēkā līdz 31.08.2016.</strong></span></span></p>
		</div>";
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

				$count = @mysql_num_rows($result);

				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Atvainojiet!</span><br></div>";
					echo "<div class=teksts style:'margin-left:1px;'>";
					echo "Šī sadaļa šobrīd nav pieejama!";
					echo "</div>";
				}
				else
				{
					echo "<div class=teksts >";
				   	 	echo " <ul id=sadalas_heads> ";
					 	while($sadalas = mysql_fetch_array($result))
					   	{
						   $sadaleID = $sadalas['id_sadala'];
						   $NosaukumsSA = $sadalas['sadalas_nos'];
						   echo "<li id=sadalas_heads_li><b>";
						   echo $NosaukumsSA;
						   echo "</b></li>";


						   					$kursi_result = mysql_query(" SELECT *
											FROM
											web_kursi_merkauditorija kam,
											web_kompetences_iedalijums kur,
											web_kursi kas
											WHERE kas.id_kursi = kam.kursi_id_kursi
											AND kas.sadala_id = kur.id_sadala
											AND kam.kursi_id_sadala = '13'
											AND kur.id_sadala = $sadaleID
											ORDER BY kas.kursi_nos

											")or die(mysql_error());

										echo "<ul id=sadalas_kursi>";

										while($kursi = mysql_fetch_array($kursi_result))
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

						}


					 	echo "</ul>";
					echo "</div>";
				}
			break;
            case "79":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Senioriem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=13&id=79>Noderīgi</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title style='font-weight:bold; color:#000000;'>Noderīgi</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts style='margin-bottom:30px;line-height:18px;text-align: justify;'>";

				   	while($row = mysql_fetch_array($result))
				   	{

				   		echo $row['sad_text'];

						$sadalaID = $row['id_sad'];

						/*Failu ielādes SQL*/
						$result_sadalas_files = mysql_query("SELECT * FROM web_sadalas_files WHERE file_sad_id='$sadalaID'");

						while($row_files = mysql_fetch_array($result_sadalas_files))
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
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'pptx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'doc':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'docx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xls':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xlsx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'pdf':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'png':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'gif':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpeg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									default:
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
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
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'pptx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'doc':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'docx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xls':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xlsx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'pdf':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'png':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'gif':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpeg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									default:
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								}
								}
							}
					}
					echo "</div>";
				}
			break;
			case "55":




				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");

				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						E-sabiedrība &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=14&id=55>Kursi E-sabiedrībai</a>";
				echo "</div>";



				$sodiena = time();
				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
				$result_aktuali = mysql_query("SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks > $sodiena
											AND kam.sad_id_sad = '14'
											AND kas.not_tips_id = '14'
											ORDER BY kad.not_laiks ASC;
											")or die(mysql_error());

				$count1 = @mysql_num_rows($result_aktuali);

				if($count1 == 0)
				{


				}
				else
				{
					echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Mācības uzsāk</span><br>
					</div>";

					echo "<div class=teksts >";

						$i = 0;
						while($aktuali_row = mysql_fetch_array($result_aktuali))
						{
							$i++;
							if($i >= $count1)
							{
								echo "<div style='margin-bottom:40px;'>";
							}
							else
							{
								echo "<div style='margin-bottom:30px;'>";
							}

							   $kurs_akt_id = $aktuali_row['id_not'];
							   $kurs_akt_nos = $aktuali_row['not_nosaukums'];



								echo "<span style='font-family:Arial; font-size: 16px; font-weight: 700; text-decoration: none; color:#c60202;'>";
						   		echo $kurs_akt_nos ;
						   		echo "</span><hr>";

							//-----------------------------------------------------aktualitātes Datums-----------------------------------------------------------------------------
								echo "<span style='margin-top:20px;margin-bottom:5px;margin-left:22px;font-family:Tahoma;font-size:11px;color:#adaaaa;'>";

								echo "Pievienots: " . date('j. ', $aktuali_row['not_red_laiks']) . $GadaMenesis[date('n', $aktuali_row['not_red_laiks'])-1]. ", " . date('Y', $aktuali_row['not_red_laiks']);  //izgatavojam datumu no pievienotā timestamp - iekļaujot mēneša masīva funkciju kurā atrodas mēnesis
								echo "</span>";

					//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------

					//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								if ($aktuali_row['not_titulbilde'] != NULL)
								{
								echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
						 				<img src=". $Notikuma_titulbilde . $aktuali_row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
						 			  </div>";
								}

								echo "<p style='margin-top:4px; margin-left:17px; line-height:15px'>";

					//---------------------------------------------------------------Aktualitātes teksts - apraksts--------------------------------------------------------
								$position = 270;

								if ($aktuali_row['not_apraksts'] == NULL)
								{
									$post = "Lasīt vairāk";
								}
								elseif (strlen($aktuali_row['not_apraksts']) <= $position)
								{
									$post = strip_tags($aktuali_row['not_apraksts']);
								}
								else
								{
						 			$post = substr(strip_tags($aktuali_row['not_apraksts']),$position,1);
																					                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
						 			if($post != " ")
						    		{
						        		while($post != " ")
						            	{
						                	$i=1;
											$position=$position+$i;
											$post = substr(strip_tags($aktuali_row['not_apraksts']),$position,1);
										}
						    		}
									else
									{
										$post = strip_tags($aktuali_row['not_apraksts']);
									}

									$post = substr(strip_tags($aktuali_row['not_apraksts']),0,$position) ;
								}																									// Attēlo īso ziņu kas ir sagatavota
								echo  $post;															//izņem html tagus, lai tie nepārveido tekstu aktualitāšhu tekstā!
								echo "...<a href=";
									if(isset($ser))
										{
											echo $ser;
										}
								echo  "event.php?id=" .$aktuali_row['id_not']. "><span style='font-size:12px;color:red;'> Lasīt vairāk <b>&#187;</b></span></a>";
							   echo "</p></div>";
							}
					echo "</div>";
				}
include'include/banner.php';
							$result = mysql_query(" SELECT *
											FROM
											web_kursi_merkauditorija kam,
											web_kompetences_iedalijums kur,
											web_kursi kas
											WHERE kas.id_kursi = kam.kursi_id_kursi
											AND kas.sadala_id = kur.id_sadala
											AND kam.kursi_id_sadala = '14'
											GROUP BY kur.id_sadala
											")or die(mysql_error());




				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Kursi informācijas tehnoloģijās</span><br>
					</div>";

/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		echo "
		<div width=100% style='margin-top:20px;margin-left:17px;margin-bottom:10px;'>
		<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>█&nbsp;Eso&scaron;ais piedāvājums un kursu cena ir spēkā līdz 31.08.2016.</strong></span></span></p>
		</div>";
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

				$count = @mysql_num_rows($result);

				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Atvainojiet!</span><br></div>";
					echo "<div class=teksts style:'margin-left:1px;'>";
					echo "Šī sadaļa šobrīd nav pieejama!";
					echo "</div>";
				}
				else
				{
					echo "<div class=teksts >";
				   	 	echo " <ul id=sadalas_heads> ";
					 	while($sadalas = mysql_fetch_array($result))
					   	{
						   $sadaleID = $sadalas['id_sadala'];
						   $NosaukumsSA = $sadalas['sadalas_nos'];
						   echo "<li id=sadalas_heads_li><b>";
						   echo $NosaukumsSA;
						   echo "</b></li>";


						   					$kursi_result = mysql_query(" SELECT *
											FROM
											web_kursi_merkauditorija kam,
											web_kompetences_iedalijums kur,
											web_kursi kas
											WHERE kas.id_kursi = kam.kursi_id_kursi
											AND kas.sadala_id = kur.id_sadala
											AND kam.kursi_id_sadala = '14'
											AND kur.id_sadala = $sadaleID
											ORDER BY kas.kursi_nos

											")or die(mysql_error());

										echo "<ul id=sadalas_kursi>";

										while($kursi = mysql_fetch_array($kursi_result))
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

						}


					 	echo "</ul>";
					echo "</div>";
				}
			break;
			case "60":
							$result = mysql_query(" SELECT *
											FROM
											web_kursi_merkauditorija kam,
											web_kompetences_iedalijums kur,
											web_kursi kas
											WHERE kas.id_kursi = kam.kursi_id_kursi
											AND kas.sadala_id = kur.id_sadala
											AND kam.kursi_id_sadala = '11'
											GROUP BY kur.id_sadala
											")or die(mysql_error());


				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Jauniešiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=11&id=60>Kursi jauniešiem</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Kursi jauniešiem</span><br>
					</div>";

/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		echo "
		<div width=100% style='margin-top:20px;margin-left:17px;margin-bottom:10px;'>
		<p><span style='font-size:14px;'><span style='color:#b22222;'><strong>█&nbsp;Eso&scaron;ais piedāvājums un kursu cena ir spēkā līdz 31.08.2016.</strong></span></span></p>
		</div>";
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

				$count = @mysql_num_rows($result);

				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Atvainojiet!</span><br></div>";
					echo "<div class=teksts style:'margin-left:1px;'>";
					echo "Šī sadaļa šobrīd nav pieejama!";
					echo "</div>";
				}
				else
				{
					echo "<div class=teksts >";
				   	 	echo " <ul id=sadalas_heads> ";
					 	while($sadalas = mysql_fetch_array($result))
					   	{
						   $sadaleID = $sadalas['id_sadala'];
						   $NosaukumsSA = $sadalas['sadalas_nos'];
						   echo "<li id=sadalas_heads_li><b>";
						   echo $NosaukumsSA;
						   echo "</b></li>";


						   					$kursi_result = mysql_query(" SELECT *
											FROM
											web_kursi_merkauditorija kam,
											web_kompetences_iedalijums kur,
											web_kursi kas
											WHERE kas.id_kursi = kam.kursi_id_kursi
											AND kas.sadala_id = kur.id_sadala
											AND kam.kursi_id_sadala = '11'
											AND kur.id_sadala = $sadaleID
											ORDER BY kas.kursi_nos

											")or die(mysql_error());

										echo "<ul id=sadalas_kursi>";

										while($kursi = mysql_fetch_array($kursi_result))
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

						}


					 	echo "</ul>";
					echo "</div>";
				}
			break;
			case "26":


				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

						echo "<div class='crumb' width=100%>";
						echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
								Uzņēmējiem &rsaquo;
								<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=8&id=26>Ziņas uzņēmējiem</a>";
						echo "</div>";



				$sodiena = time();
				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
				$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks > $sodiena
											AND kam.sad_id_sad = '8'
											AND kas.not_tips_id = '1'
											AND CHAR_LENGTH(kas.not_apraksts) > 9
											ORDER BY kad.not_laiks ASC;
											")or die(mysql_error());





				$count = @mysql_num_rows($result);

				if($count == 0)
				{

				}
				else
				{



						echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Aktualitātes uzņēmējiem</span><br>
							</div>";

						echo "<div class=teksts >";
					 	$i = 0;
					 	while($row = mysql_fetch_array($result))
					   	{
					   		$i++;
					   		if($i >= $count)
					   		{
					   			echo "<div>";
					   		}
							else
							{
								echo "<div style='margin-bottom:30px;'>";
							}

						   echo "<div align=left style='margin-bottom:8px;border: solid 0px #CCC; border-left:solid 3px #c60202; padding-left:7px;'>";
							echo "<a href=";if(isset($ser)){ echo $ser; }
							echo "event.php?id=" .$row['id_not']. " style='text-decoration:none;color:#000000;'><span style='font-family:Arial; font-size: 16px; font-weight: 700; text-decoration: none;'>";
					   		echo $row['not_nosaukums'] ;
					   		echo "</span></a>";
							$idn=$row['id_not'];

				   			$result_gal = mysql_query("SELECT gal_id_not, gal_id_gal FROM web_notikumi_gal WHERE gal_id_not=$idn");
							$row_gal = mysql_fetch_array($result_gal);
							if ($row_gal['gal_id_gal'] == null)
							{
								echo "";
							}
							else
							{
								echo "  <img src=img/photo.png width=12px  border=0>";
							}


							$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
							$row_file = mysql_fetch_array($result_fil);


							if ($row_file['id_file'] == null)
							{
								echo " ";
							}
							else
							{
								echo "  <img src=img/att.png width=12px border=0>";
							}						//Galvenā raksta virsrakst
							echo "</div>";
						//-----------------------------------------------------aktualitātes Datums-----------------------------------------------------------------------------
							echo "<span style='margin-top:20px;margin-bottom:5px;margin-left:5px;font-family:Tahoma;font-size:11px;color:#adaaaa;'>";

							echo date('j. ', $row['not_piev_laiks']) . $GadaMenesis[date('n', $row['not_piev_laiks'])-1]. ", " . date('Y', $row['not_piev_laiks']);  //izgatavojam datumu no pievienotā timestamp - iekļaujot mēneša masīva funkciju kurā atrodas mēnesis
							echo "</span>";

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
							if ($row['not_titulbilde'] != NULL)
							{
							echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
					 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
					 			  </div>";
							}

							echo "<p style='margin-top:4px; line-height:15px'>";

				//---------------------------------------------------------------Aktualitātes teksts - apraksts--------------------------------------------------------
							$position = 300;

							if ($row['not_apraksts'] == NULL)
							{
								$post = "Lasīt vairāk";
							}
							elseif (strlen($row['not_apraksts']) <= $position)
							{
								$post = strip_tags($row['not_apraksts']);
							}
							else
							{
					 			$post = substr(strip_tags($row['not_apraksts']),$position,1);
																				                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
					 			if($post != " ")
					    		{
					        		while($post != " ")
					            	{
					                	$i=1;
										$position=$position+$i;
										$post = substr(strip_tags($row['not_apraksts']),$position,1);
									}
					    		}
								else
								{
									$post = $row['not_apraksts'];
								}

								$post = substr(strip_tags($row['not_apraksts']),0,$position);
							}																									// Attēlo īso ziņu kas ir sagatavota
							echo str_replace($html_tagi, "", $post);															//izņem html tagus, lai tie nepārveido tekstu aktualitāšhu tekstā!

					 		echo "...</p>
					 		<p class=pie_raksta><a href=";
							if(isset($ser))
							{
								echo $ser;
							}
							echo  "event.php?id=" .$row['id_not']. ">Lasīt vairāk<span class=pie_raksta_b style='font-size:12px;'> <b>&#155;</b></span></a></p>";

							echo "</div>";
						}
					echo "</div>";
				}
include'include/banner_eepa.php';

								$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks < $sodiena
											AND kam.sad_id_sad = '8'
											AND kas.not_tips_id = '1'
											AND CHAR_LENGTH(kas.not_atskats) > 9
											ORDER BY kad.not_laiks DESC;
											")or die(mysql_error());



					$count = @mysql_num_rows($result);

	if($count == 0)
	{
		echo "<div class=main_act>";
	   	echo "<span style='font-size:13px;color:red;'> <b>Dati nav pieejami.<br>Lūdzu sazinies ar mums! </b></span> ";
		echo "</div>";
	}
	else
	{
		$skaita = 0;
								echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Notikumu atskats</span><br>
							</div>";
		while($row = mysql_fetch_array($result))
		{
		   	$skaita++;
		   	if ($skaita <= 6)
		   	{

			   	echo "<div class=main_apskats>";
				echo "	<div align=left style='margin-bottom:10px;border: solid 0px #CCC; border-left:solid 4px #C60202; padding-left:7px;'>
		  				<span style='font-family:Arial; font-size: 14px; font-weight: 700; text-decoration: none;'><a class='h1_a' href=";
				if(isset($ser))
				{
					echo $ser;
				}
				echo  "event.php?id=" .$row['id_not']. ">" . $row['not_nosaukums'] ;
				echo "		</a></span> ";

				$idn=$row['id_not'];


		//___________________________________ pārbauda vai ir galerija

								$result_gal = mysql_query("SELECT *
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
								$row_gal = mysql_fetch_array($result_gal);
								//____________ ja galerija ir nulle
								if ($row_gal['gal_id_gal'] == null)
								{

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_laiks']) . " " . $GadaMenesis[date('n ', $row['not_laiks'])-1]. ", ". date('Y', $row['not_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
									{
									echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
							 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
							 			  </div>";
									}
								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}
								else
								{
									//____________ ja galerija ir
									echo "  <img src=img/photo.png width=12px  border=0>";

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_laiks']) . " " . $GadaMenesis[date('n ', $row['not_laiks'])-1]. ", ". date('Y', $row['not_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
									else
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=" . $galery_images . $row_gal['img'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
										//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}


					echo "<p style='margin-top:4px; line-height:15px'>";

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
				if ($skaita == 2 || $skaita == 4)
		   		{
		   			echo "<img src=".$cel_img."Line.png> ";
			   	}
			}
			else
			{
				goto andrew26;
			}
		}
	}
andrew26: 	echo "<div class='crumbi' width=100% align=right>";
			echo "<a href=";if(isset($ser)){echo $ser;}echo "index.php?view=archive-not-uznemejiem>Notikumu arhīvs uzņēmējiem &rsaquo;</a>";
			echo "</div>";


			break;
			case '28':

				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

						echo "<div class='crumb' width=100%>";
						echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
								Metālapstrādei &rsaquo;
								<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=9&id=28>Ziņas</a>";
						echo "</div>";



				$sodiena = time();
				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
				$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks > $sodiena
											AND kam.sad_id_sad = '9'
											AND kas.not_tips_id = '1'
											AND CHAR_LENGTH(kas.not_apraksts) > 9
											")or die(mysql_error());





				$count = @mysql_num_rows($result);

				if($count == 0)
				{

				}
				else
				{



						echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Aktualitātes </span><br>
							</div>";

						echo "<div class=teksts >";
					 	while($row = mysql_fetch_array($result))
					   	{
						   echo "<div align=left style='margin-bottom:8px;border: solid 0px #CCC; border-left:solid 3px #c60202; padding-left:7px;'>";
							echo "<a href=";if(isset($ser)){ echo $ser; }
							echo "event.php?id=" .$row['id_not']. " style='text-decoration:none;color:#000000;'><span style='font-family:Arial; font-size: 16px; font-weight: 700; text-decoration: none;'>";
					   		echo $row['not_nosaukums'] ;
					   		echo "</span></a>";
							$idn=$row['id_not'];

				   			$result_gal = mysql_query("SELECT gal_id_not, gal_id_gal FROM web_notikumi_gal WHERE gal_id_not=$idn");
							$row_gal = mysql_fetch_array($result_gal);
							if ($row_gal['gal_id_gal'] == null)
							{
								echo "";
							}
							else
							{
								echo "  <img src=img/photo.png width=12px  border=0>";
							}


							$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
							$row_file = mysql_fetch_array($result_fil);


							if ($row_file['id_file'] == null)
							{
								echo " ";
							}
							else
							{
								echo "  <img src=img/att.png width=12px border=0>";
							}						//Galvenā raksta virsrakst
							echo "</div>";
						//-----------------------------------------------------aktualitātes Datums-----------------------------------------------------------------------------
							echo "<span style='margin-top:20px;margin-bottom:5px;margin-left:5px;font-family:Tahoma;font-size:11px;color:#adaaaa;'>";

							echo date('j. ', $row['not_piev_laiks']) . $GadaMenesis[date('n', $row['not_piev_laiks'])-1]. ", " . date('Y', $row['not_piev_laiks']);  //izgatavojam datumu no pievienotā timestamp - iekļaujot mēneša masīva funkciju kurā atrodas mēnesis
							echo "</span>";

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
							if ($row['not_titulbilde'] != NULL)
							{
							echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
					 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
					 			  </div>";
							}

							echo "<p style='margin-top:4px; line-height:15px'>";

				//---------------------------------------------------------------Aktualitātes teksts - apraksts--------------------------------------------------------
							$position = 300;

							if ($row['not_apraksts'] == NULL)
							{
								$post = "Lasīt vairāk";
							}
							elseif (strlen($row['not_apraksts']) <= $position)
							{
								$post = strip_tags($row['not_apraksts']);
							}
							else
							{
					 			$post = substr(strip_tags($row['not_apraksts']),$position,1);
																				                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
					 			if($post != " ")
					    		{
					        		while($post != " ")
					            	{
					                	$i=1;
										$position=$position+$i;
										$post = substr(strip_tags($row['not_apraksts']),$position,1);
									}
					    		}
								else
								{
									$post = $row['not_apraksts'];
								}

								$post = substr(strip_tags($row['not_apraksts']),0,$position);
							}																									// Attēlo īso ziņu kas ir sagatavota
							echo str_replace($html_tagi, "", $post);															//izņem html tagus, lai tie nepārveido tekstu aktualitāšhu tekstā!

					 		echo "...</p>
					 		<p class=pie_raksta><a href=";
							if(isset($ser))
							{
								echo $ser;
							}
							echo  "event.php?id=" .$row['id_not']. ">Lasīt vairāk<span class=pie_raksta_b style='font-size:12px;'> <b>&#155;</b></span></a></p>";


									}


					 	echo "</ul>";
					echo "</div>";
				}
include'include/banner.php';

								$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks < $sodiena
											AND kam.sad_id_sad = '9'
											AND kas.not_tips_id = '1'
											AND CHAR_LENGTH(kas.not_atskats) > 9
											ORDER BY kad.not_laiks DESC;
											")or die(mysql_error());



					$count = @mysql_num_rows($result);

	if($count == 0)
	{
		echo "<div class=main_act>";
	   	echo "<span style='font-size:13px;color:red;'> <b>Dati nav pieejami.<br>Lūdzu sazinies ar mums! </b></span> ";
		echo "</div>";
	}
	else
	{
		$skaita = 0;
								echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Notikumu atskats</span><br>
							</div>";
		while($row = mysql_fetch_array($result))
		{
		   	$skaita++;
		   	if ($skaita <= 6)
		   	{

			   	echo "<div class=main_apskats>";
				echo "	<div align=left style='margin-bottom:10px;border: solid 0px #CCC; border-left:solid 4px #C60202; padding-left:7px;'>
		  				<span style='font-family:Arial; font-size: 14px; font-weight: 700; text-decoration: none;'><a class='h1_a' href=";
				if(isset($ser))
				{
					echo $ser;
				}
				echo  "event.php?id=" .$row['id_not']. ">" . $row['not_nosaukums'] ;
				echo "		</a></span> ";

				$idn=$row['id_not'];


		//___________________________________ pārbauda vai ir galerija

								$result_gal = mysql_query("SELECT *
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
								$row_gal = mysql_fetch_array($result_gal);
								//____________ ja galerija ir nulle
								if ($row_gal['gal_id_gal'] == null)
								{

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_red_laiks']) . " " . $GadaMenesis[date('n ', $row['not_red_laiks'])-1]. ", ". date('Y', $row['not_red_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
									{
									echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
							 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
							 			  </div>";
									}
								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}
								else
								{
									//____________ ja galerija ir
									echo "  <img src=img/photo.png width=12px  border=0>";

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_red_laiks']) . " " . $GadaMenesis[date('n ', $row['not_red_laiks'])-1]. ", ". date('Y', $row['not_red_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
									else
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=" . $galery_images . $row_gal['img'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
										//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}


					echo "<p style='margin-top:4px; line-height:15px'>";

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
				if ($skaita == 2 || $skaita == 4)
		   		{
		   			echo "<img src=".$cel_img."Line.png> ";
			   	}
			}
			else
			{
				goto andrew28;
			}
		}
	}
andrew28: 	echo "<div class='crumb' width=100% align=right>";
			echo "<!--<a href=";if(isset($ser)){echo $ser;}echo "index.php>Visi notikumi &rsaquo;</a> -->";
			echo "</div>";
			break;
			case '50':

				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

						echo "<div class='crumb' width=100%>";
						echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
								Darba meklētājiem &rsaquo;
								<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=15&id=15>Ziņas</a>";
						echo "</div>";



				$sodiena = time();
				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
				$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks > $sodiena
											AND kam.sad_id_sad = '15'
											AND kas.not_tips_id = '1'
											AND CHAR_LENGTH(kas.not_apraksts) > 9
											")or die(mysql_error());





				$count = @mysql_num_rows($result);

				if($count == 0)
				{

				}
				else
				{



						echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Aktualitātes </span><br>
							</div>";

						echo "<div class=teksts >";
					 	while($row = mysql_fetch_array($result))
					   	{
						   echo "<div align=left style='margin-bottom:8px;border: solid 0px #CCC; border-left:solid 3px #c60202; padding-left:7px;'>";
							echo "<a href=";if(isset($ser)){ echo $ser; }
							echo "event.php?id=" .$row['id_not']. " style='text-decoration:none;color:#000000;'><span style='font-family:Arial; font-size: 16px; font-weight: 700; text-decoration: none;'>";
					   		echo $row['not_nosaukums'] ;
					   		echo "</span></a>";
							$idn=$row['id_not'];

				   			$result_gal = mysql_query("SELECT gal_id_not, gal_id_gal FROM web_notikumi_gal WHERE gal_id_not=$idn");
							$row_gal = mysql_fetch_array($result_gal);
							if ($row_gal['gal_id_gal'] == null)
							{
								echo "";
							}
							else
							{
								echo "  <img src=img/photo.png width=12px  border=0>";
							}


							$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
							$row_file = mysql_fetch_array($result_fil);


							if ($row_file['id_file'] == null)
							{
								echo " ";
							}
							else
							{
								echo "  <img src=img/att.png width=12px border=0>";
							}						//Galvenā raksta virsrakst
							echo "</div>";
						//-----------------------------------------------------aktualitātes Datums-----------------------------------------------------------------------------
							echo "<span style='margin-top:20px;margin-bottom:5px;margin-left:5px;font-family:Tahoma;font-size:11px;color:#adaaaa;'>";

							echo date('j. ', $row['not_laiks']) . $GadaMenesis[date('n', $row['not_laiks'])-1]. ", " . date('Y', $row['not_laiks']);  //izgatavojam datumu no pievienotā timestamp - iekļaujot mēneša masīva funkciju kurā atrodas mēnesis
							echo "</span>";

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
							if ($row['not_titulbilde'] != NULL)
							{
							echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
					 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
					 			  </div>";
							}

							echo "<p style='margin-top:4px; line-height:15px'>";

				//---------------------------------------------------------------Aktualitātes teksts - apraksts--------------------------------------------------------
							$position = 300;

							if ($row['not_apraksts'] == NULL)
							{
								$post = "Lasīt vairāk";
							}
							elseif (strlen($row['not_apraksts']) <= $position)
							{
								$post = strip_tags($row['not_apraksts']);
							}
							else
							{
					 			$post = substr(strip_tags($row['not_apraksts']),$position,1);
																				                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
					 			if($post != " ")
					    		{
					        		while($post != " ")
					            	{
					                	$i=1;
										$position=$position+$i;
										$post = substr(strip_tags($row['not_apraksts']),$position,1);
									}
					    		}
								else
								{
									$post = $row['not_apraksts'];
								}

								$post = substr(strip_tags($row['not_apraksts']),0,$position);
							}																									// Attēlo īso ziņu kas ir sagatavota
							echo str_replace($html_tagi, "", $post);															//izņem html tagus, lai tie nepārveido tekstu aktualitāšhu tekstā!

					 		echo "...</p>
					 		<p class=pie_raksta><a href=";
							if(isset($ser))
							{
								echo $ser;
							}
							echo  "event.php?id=" .$row['id_not']. ">Lasīt vairāk<span class=pie_raksta_b style='font-size:12px;'> <b>&#155;</b></span></a></p>";


									}


					 	echo "</ul>";
					echo "</div>";
				}
include'include/banner.php';

								$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks < $sodiena
											AND kam.sad_id_sad = '15'
											AND kas.not_tips_id = '1'
											AND CHAR_LENGTH(kas.not_atskats) > 9
											ORDER BY kad.not_laiks DESC;
											")or die(mysql_error());



					$count = @mysql_num_rows($result);

	if($count == 0)
	{
		echo "<div class=main_act>";
	   	echo "<span style='font-size:13px;color:red;'> <b>Dati nav pieejami.<br>Lūdzu sazinies ar mums! </b></span> ";
		echo "</div>";
	}
	else
	{
		$skaita = 0;
								echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Notikumu atskats</span><br>
							</div>";
		while($row = mysql_fetch_array($result))
		{
		   	$skaita++;
		   	if ($skaita <= 6)
		   	{

			   	echo "<div class=main_apskats>";
				echo "	<div align=left style='margin-bottom:10px;border: solid 0px #CCC; border-left:solid 4px #C60202; padding-left:7px;'>
		  				<span style='font-family:Arial; font-size: 14px; font-weight: 700; text-decoration: none;'><a class='h1_a' href=";
				if(isset($ser))
				{
					echo $ser;
				}
				echo  "event.php?id=" .$row['id_not']. ">" . $row['not_nosaukums'] ;
				echo "		</a></span> ";

				$idn=$row['id_not'];


		//___________________________________ pārbauda vai ir galerija

								$result_gal = mysql_query("SELECT *
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
								$row_gal = mysql_fetch_array($result_gal);
								//____________ ja galerija ir nulle
								if ($row_gal['gal_id_gal'] == null)
								{

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_laiks']) . " " . $GadaMenesis[date('n ', $row['not_laiks'])-1]. ", ". date('Y', $row['not_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
									{
									echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
							 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
							 			  </div>";
									}
								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}
								else
								{
									//____________ ja galerija ir
									echo "  <img src=img/photo.png width=12px  border=0>";

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_laiks']) . " " . $GadaMenesis[date('n ', $row['not_laiks'])-1]. ", ". date('Y', $row['not_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
									else
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=" . $galery_images . $row_gal['img'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
										//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}


					echo "<p style='margin-top:4px; line-height:15px'>";

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
				if ($skaita == 2 || $skaita == 4)
		   		{
		   			echo "<img src=".$cel_img."Line.png> ";
			   	}
			}
			else
			{
				goto andrew50;
			}
		}
	}
andrew50: 	echo "<div class='crumb' width=100% align=right>";
			echo "<!--<a href=";if(isset($ser)){echo $ser;}echo "index.php>Visi notikumi &rsaquo;</a>--> ";
			echo "</div>";

			break;
			case '42':


				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

						echo "<div class='crumb' width=100%>";
						echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
								Pedagogiem &rsaquo;
								<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=10&id=42>Ziņas pedagogiem</a>";
						echo "</div>";



				$sodiena = time();
				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
				$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks > $sodiena
											AND kam.sad_id_sad = '10'
											AND kas.not_tips_id = '1'
											AND CHAR_LENGTH(kas.not_apraksts) > 9
											ORDER BY kad.not_laiks ASC;
											")or die(mysql_error());





				$count = @mysql_num_rows($result);

				if($count == 0)
				{

				}
				else
				{



						echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Aktualitātes pedagogiem</span><br>
							</div>";

						echo "<div class=teksts >";
						$i = 0;
					 	while($row = mysql_fetch_array($result))
					   	{
					   		$i++;
					   		if($i >= $count)
					   		{
					   			echo "<div>";
					   		}
							else
							{
								echo "<div style='margin-bottom:30px;'>";
							}

						   	echo "<div align=left style='margin-bottom:8px;border: solid 0px #CCC; border-left:solid 3px #c60202; padding-left:7px;'>";
							echo "<a href=";if(isset($ser)){ echo $ser; }
							echo "event.php?id=" .$row['id_not']. " style='text-decoration:none;color:#000000;'><span style='font-family:Arial; font-size: 16px; font-weight: 700; text-decoration: none;'>";
					   		echo $row['not_nosaukums'] ;
					   		echo "</span></a>";
							$idn=$row['id_not'];

				   			$result_gal = mysql_query("SELECT gal_id_not, gal_id_gal FROM web_notikumi_gal WHERE gal_id_not=$idn");
							$row_gal = mysql_fetch_array($result_gal);
							if ($row_gal['gal_id_gal'] == null)
							{
								echo "";
							}
							else
							{
								echo "  <img src=img/photo.png width=12px  border=0>";
							}


							$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
							$row_file = mysql_fetch_array($result_fil);


							if ($row_file['id_file'] == null)
							{
								echo " ";
							}
							else
							{
								echo "  <img src=img/att.png width=12px border=0>";
							}						//Galvenā raksta virsrakst
							echo "</div>";
						//-----------------------------------------------------aktualitātes Datums-----------------------------------------------------------------------------
							echo "<span style='margin-top:20px;margin-bottom:5px;margin-left:5px;font-family:Tahoma;font-size:11px;color:#adaaaa;'>";

							echo date('j. ', $row['not_piev_laiks']) . $GadaMenesis[date('n', $row['not_piev_laiks'])-1]. ", " . date('Y', $row['not_piev_laiks']);  //izgatavojam datumu no pievienotā timestamp - iekļaujot mēneša masīva funkciju kurā atrodas mēnesis
							echo "</span>";

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
							if ($row['not_titulbilde'] != NULL)
							{
							echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
					 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
					 			  </div>";
							}

							echo "<p style='margin-top:4px; line-height:15px'>";

				//---------------------------------------------------------------Aktualitātes teksts - apraksts--------------------------------------------------------


							$position = 300;

							if ($row['not_apraksts'] == NULL)
							{
								$post = "Lasīt vairāk";
							}
							elseif (strlen(strip_tags($row['not_apraksts'])) <= $position)
							{
								$post = strip_tags($row['not_apraksts']);
							}
							else
							{
						 		$post = substr(strip_tags($row['not_apraksts']),$position,1);
																					                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
						 		if($post != " ")
						    	{
						       		while($post != " ")
						        	{
						      	     	$i=1;
										$position=$position+$i;
										$post = substr(strip_tags($row['not_apraksts']),$position,1);
									}
						    	}
								else
								{
									$post = strip_tags($row['not_apraksts']);
								}
									$post = substr(strip_tags($row['not_apraksts']),0,$position);
							}																									// Attēlo īso ziņu kas ir sagatavota
							echo $post;															//izņem html tagus, lai tie nepārveido tekstu aktualitāšhu tekstā!

					 		echo "...</p>
					 		<p class=pie_raksta><a href=";
							if(isset($ser))
							{
								echo $ser;
							}
							echo  "event.php?id=" .$row['id_not']. ">Lasīt vairāk<span class=pie_raksta_b style='font-size:12px;'> <b>&#155;</b></span></a></p>";

							echo "</div>";

						}



					echo "</div>";
				}
include'include/banner.php';

								$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks < $sodiena
											AND kam.sad_id_sad = '10'
											AND kas.not_tips_id = '1'
											AND CHAR_LENGTH(kas.not_atskats) > 9
											ORDER BY kad.not_laiks DESC;
											")or die(mysql_error());



					$count = @mysql_num_rows($result);

	if($count == 0)
	{
		echo "<div class=main_act>";
	   	echo "<span style='font-size:13px;color:red;'> <b>Dati nav pieejami.<br>Lūdzu sazinies ar mums! </b></span> ";
		echo "</div>";
	}
	else
	{
		$skaita = 0;
								echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Notikumu atskats</span><br>
							</div>";
		while($row = mysql_fetch_array($result))
		{
		   	$skaita++;
		   	if ($skaita <= 6)
		   	{

			   	echo "<div class=main_apskats>";
				echo "	<div align=left style='margin-bottom:10px;border: solid 0px #CCC; border-left:solid 4px #C60202; padding-left:7px;'>
		  				<span style='font-family:Arial; font-size: 14px; font-weight: 700; text-decoration: none;'><a class='h1_a' href=";
				if(isset($ser))
				{
					echo $ser;
				}
				echo  "event.php?id=" .$row['id_not']. ">" . $row['not_nosaukums'] ;
				echo "		</a></span> ";

				$idn=$row['id_not'];


		//___________________________________ pārbauda vai ir galerija

								$result_gal = mysql_query("SELECT *
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
								$row_gal = mysql_fetch_array($result_gal);
								//____________ ja galerija ir nulle
								if ($row_gal['gal_id_gal'] == null)
								{

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_laiks']) . " " . $GadaMenesis[date('n ', $row['not_laiks'])-1]. ", ". date('Y', $row['not_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
									{
									echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
							 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
							 			  </div>";
									}
								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}
								else
								{
									//____________ ja galerija ir
									echo "  <img src=img/photo.png width=12px  border=0>";

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_laiks']) . " " . $GadaMenesis[date('n ', $row['not_laiks'])-1]. ", ". date('Y', $row['not_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
									else
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=" . $galery_images . $row_gal['img'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
										//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}


					echo "<p style='margin-top:4px; line-height:15px'>";

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
				if ($skaita == 2 || $skaita == 4)
		   		{
		   			echo "<img src=".$cel_img."Line.png> ";
			   	}
			}
			else
			{
				goto andrew42;
			}
		}
	}
andrew42: 	echo "<div class='crumb' width=100% align=right>";
			echo "<!--<a href=";if(isset($ser)){echo $ser;}echo "index.php>Visi notikumi &rsaquo;</a> -->";
			echo "</div>";
			break;
			case '32':

				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

						echo "<div class='crumb' width=100%>";
						echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
								Jauniešiem &rsaquo;
								<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=11&id=32>Ziņas</a>";
						echo "</div>";



				$sodiena = time();
				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
				$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks > $sodiena
											AND kam.sad_id_sad = '11'
											AND kas.not_tips_id = '1'
											AND CHAR_LENGTH(kas.not_apraksts) > 9
											")or die(mysql_error());





				$count = @mysql_num_rows($result);

				if($count == 0)
				{

				}
				else
				{



						echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Aktualitātes </span><br>
							</div>";

						echo "<div class=teksts >";
					 	while($row = mysql_fetch_array($result))
					   	{
						   echo "<div align=left style='margin-bottom:8px;border: solid 0px #CCC; border-left:solid 3px #c60202; padding-left:7px;'>";
							echo "<a href=";if(isset($ser)){ echo $ser; }
							echo "event.php?id=" .$row['id_not']. " style='text-decoration:none;color:#000000;'><span style='font-family:Arial; font-size: 16px; font-weight: 700; text-decoration: none;'>";
					   		echo $row['not_nosaukums'] ;
					   		echo "</span></a>";
							$idn=$row['id_not'];

				   			$result_gal = mysql_query("SELECT gal_id_not, gal_id_gal FROM web_notikumi_gal WHERE gal_id_not=$idn");
							$row_gal = mysql_fetch_array($result_gal);
							if ($row_gal['gal_id_gal'] == null)
							{
								echo "";
							}
							else
							{
								echo "  <img src=img/photo.png width=12px  border=0>";
							}


							$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
							$row_file = mysql_fetch_array($result_fil);


							if ($row_file['id_file'] == null)
							{
								echo " ";
							}
							else
							{
								echo "  <img src=img/att.png width=12px border=0>";
							}						//Galvenā raksta virsrakst
							echo "</div>";
						//-----------------------------------------------------aktualitātes Datums-----------------------------------------------------------------------------
							echo "<span style='margin-top:20px;margin-bottom:5px;margin-left:5px;font-family:Tahoma;font-size:11px;color:#adaaaa;'>";

							echo date('j. ', $row['not_piev_laiks']) . $GadaMenesis[date('n', $row['not_piev_laiks'])-1]. ", " . date('Y', $row['not_piev_laiks']);  //izgatavojam datumu no pievienotā timestamp - iekļaujot mēneša masīva funkciju kurā atrodas mēnesis
							echo "</span>";

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
							if ($row['not_titulbilde'] != NULL)
							{
							echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
					 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
					 			  </div>";
							}

							echo "<p style='margin-top:4px; line-height:15px'>";

				//---------------------------------------------------------------Aktualitātes teksts - apraksts--------------------------------------------------------
							$position = 300;

							if ($row['not_apraksts'] == NULL)
							{
								$post = "Lasīt vairāk";
							}
							elseif (strlen($row['not_apraksts']) <= $position)
							{
								$post = strip_tags($row['not_apraksts']);
							}
							else
							{
					 			$post = substr(strip_tags($row['not_apraksts']),$position,1);
																				                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
					 			if($post != " ")
					    		{
					        		while($post != " ")
					            	{
					                	$i=1;
										$position=$position+$i;
										$post = substr(strip_tags($row['not_apraksts']),$position,1);
									}
					    		}
								else
								{
									$post = $row['not_apraksts'];
								}

								$post = substr(strip_tags($row['not_apraksts']),0,$position);
							}																									// Attēlo īso ziņu kas ir sagatavota
							echo str_replace($html_tagi, "", $post);															//izņem html tagus, lai tie nepārveido tekstu aktualitāšhu tekstā!

					 		echo "...</p>
					 		<p class=pie_raksta><a href=";
							if(isset($ser))
							{
								echo $ser;
							}
							echo  "event.php?id=" .$row['id_not']. ">Lasīt vairāk<span class=pie_raksta_b style='font-size:12px;'> <b>&#155;</b></span></a></p>";


									}


					 	echo "</ul>";
					echo "</div>";
				}
include'include/banner.php';

								$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks < $sodiena
											AND kam.sad_id_sad = '11'
											AND (kas.not_tips_id = '1' OR kas.not_tips_id = '8')
											AND CHAR_LENGTH(kas.not_atskats) > 9
											ORDER BY kad.not_laiks DESC;
											")or die(mysql_error());



					$count = @mysql_num_rows($result);

	if($count == 0)
	{
		echo "<div class=main_act>";
	   	echo "<span style='font-size:13px;color:red;'> <b>Dati nav pieejami.<br>Lūdzu sazinies ar mums! </b></span> ";
		echo "</div>";
	}
	else
	{
		$skaita = 0;
								echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Notikumu atskats</span><br>
							</div>";
		while($row = mysql_fetch_array($result))
		{
		   	$skaita++;
		   	if ($skaita <= 6)
		   	{

			   	echo "<div class=main_apskats>";
				echo "	<div align=left style='margin-bottom:10px;border: solid 0px #CCC; border-left:solid 4px #C60202; padding-left:7px;'>
		  				<span style='font-family:Arial; font-size: 14px; font-weight: 700; text-decoration: none;'><a class='h1_a' href=";
				if(isset($ser))
				{
					echo $ser;
				}
				echo  "event.php?id=" .$row['id_not']. ">" . $row['not_nosaukums'] ;
				echo "		</a></span> ";

				$idn=$row['id_not'];


		//___________________________________ pārbauda vai ir galerija

								$result_gal = mysql_query("SELECT *
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
								$row_gal = mysql_fetch_array($result_gal);
								//____________ ja galerija ir nulle
								if ($row_gal['gal_id_gal'] == null)
								{

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_red_laiks']) . " " . $GadaMenesis[date('n ', $row['not_red_laiks'])-1]. ", ". date('Y', $row['not_red_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
									{
									echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
							 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
							 			  </div>";
									}
								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}
								else
								{
									//____________ ja galerija ir
									echo "  <img src=img/photo.png width=12px  border=0>";

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_red_laiks']) . " " . $GadaMenesis[date('n ', $row['not_red_laiks'])-1]. ", ". date('Y', $row['not_red_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
									else
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=" . $galery_images . $row_gal['img'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
										//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}


					echo "<p style='margin-top:4px; line-height:15px'>";

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
				if ($skaita == 2 || $skaita == 4)
		   		{
		   			echo "<img src=".$cel_img."Line.png> ";
			   	}
			}
			else
			{
				goto andrew32;
			}
		}
	}
andrew32: 	echo "<div class='crumb' width=100% align=right>";
			echo "<!--<a href=";if(isset($ser)){echo $ser;}echo "index.php>Visi notikumi &rsaquo;</a> -->";
			echo "</div>";
			break;
			case '38':

				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

						echo "<div class='crumb' width=100%>";
						echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
								Vecākiem &rsaquo;
								<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=12&id=38>Ziņas</a>";
						echo "</div>";



				$sodiena = time();
				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
				$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks > $sodiena
											AND kam.sad_id_sad = '12'
											AND kas.not_tips_id = '1'
											AND CHAR_LENGTH(kas.not_apraksts) > 9
											")or die(mysql_error());





				$count = @mysql_num_rows($result);

				if($count == 0)
				{

				}
				else
				{



						echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Aktualitātes </span><br>
							</div>";

						echo "<div class=teksts >";
					 	while($row = mysql_fetch_array($result))
					   	{
						   echo "<div align=left style='margin-bottom:8px;border: solid 0px #CCC; border-left:solid 3px #c60202; padding-left:7px;'>";
							echo "<a href=";if(isset($ser)){ echo $ser; }
							echo "event.php?id=" .$row['id_not']. " style='text-decoration:none;color:#000000;'><span style='font-family:Arial; font-size: 16px; font-weight: 700; text-decoration: none;'>";
					   		echo $row['not_nosaukums'] ;
					   		echo "</span></a>";
							$idn=$row['id_not'];

				   			$result_gal = mysql_query("SELECT gal_id_not, gal_id_gal FROM web_notikumi_gal WHERE gal_id_not=$idn");
							$row_gal = mysql_fetch_array($result_gal);
							if ($row_gal['gal_id_gal'] == null)
							{
								echo "";
							}
							else
							{
								echo "  <img src=img/photo.png width=12px  border=0>";
							}


							$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
							$row_file = mysql_fetch_array($result_fil);


							if ($row_file['id_file'] == null)
							{
								echo " ";
							}
							else
							{
								echo "  <img src=img/att.png width=12px border=0>";
							}						//Galvenā raksta virsrakst
							echo "</div>";
						//-----------------------------------------------------aktualitātes Datums-----------------------------------------------------------------------------
							echo "<span style='margin-top:20px;margin-bottom:5px;margin-left:5px;font-family:Tahoma;font-size:11px;color:#adaaaa;'>";

							echo date('j. ', $row['not_piev_laiks']) . $GadaMenesis[date('n', $row['not_piev_laiks'])-1]. ", " . date('Y', $row['not_piev_laiks']);  //izgatavojam datumu no pievienotā timestamp - iekļaujot mēneša masīva funkciju kurā atrodas mēnesis
							echo "</span>";

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
							if ($row['not_titulbilde'] != NULL)
							{
							echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
					 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
					 			  </div>";
							}

							echo "<p style='margin-top:4px; line-height:15px'>";

				//---------------------------------------------------------------Aktualitātes teksts - apraksts--------------------------------------------------------
							$position = 300;

							if ($row['not_apraksts'] == NULL)
							{
								$post = "Lasīt vairāk";
							}
							elseif (strlen($row['not_apraksts']) <= $position)
							{
								$post = strip_tags($row['not_apraksts']);
							}
							else
							{
					 			$post = substr(strip_tags($row['not_apraksts']),$position,1);
																				                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
					 			if($post != " ")
					    		{
					        		while($post != " ")
					            	{
					                	$i=1;
										$position=$position+$i;
										$post = substr(strip_tags($row['not_apraksts']),$position,1);
									}
					    		}
								else
								{
									$post = $row['not_apraksts'];
								}

								$post = substr(strip_tags($row['not_apraksts']),0,$position);
							}																									// Attēlo īso ziņu kas ir sagatavota
							echo str_replace($html_tagi, "", $post);															//izņem html tagus, lai tie nepārveido tekstu aktualitāšhu tekstā!

					 		echo "...</p>
					 		<p class=pie_raksta><a href=";
							if(isset($ser))
							{
								echo $ser;
							}
							echo  "event.php?id=" .$row['id_not']. ">Lasīt vairāk<span class=pie_raksta_b style='font-size:12px;'> <b>&#155;</b></span></a></p>";


									}


					 	echo "</ul>";
					echo "</div>";
				}
include'include/banner.php';

								$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks < $sodiena
											AND kam.sad_id_sad = '12'
											AND (kas.not_tips_id = '1' OR kas.not_tips_id = '8')
											AND CHAR_LENGTH(kas.not_atskats) > 9
											ORDER BY kad.not_laiks DESC;
											")or die(mysql_error());



					$count = @mysql_num_rows($result);

	if($count == 0)
	{
		echo "<div class=main_act>";
	   	echo "<span style='font-size:13px;color:red;'> <b>Dati nav pieejami.<br>Lūdzu sazinies ar mums! </b></span> ";
		echo "</div>";
	}
	else
	{
		$skaita = 0;
								echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Notikumu atskats</span><br>
							</div>";
		while($row = mysql_fetch_array($result))
		{
		   	$skaita++;
		   	if ($skaita <= 6)
		   	{

			   	echo "<div class=main_apskats>";
				echo "	<div align=left style='margin-bottom:10px;border: solid 0px #CCC; border-left:solid 4px #C60202; padding-left:7px;'>
		  				<span style='font-family:Arial; font-size: 14px; font-weight: 700; text-decoration: none;'><a class='h1_a' href=";
				if(isset($ser))
				{
					echo $ser;
				}
				echo  "event.php?id=" .$row['id_not']. ">" . $row['not_nosaukums'] ;
				echo "		</a></span> ";

				$idn=$row['id_not'];


		//___________________________________ pārbauda vai ir galerija

								$result_gal = mysql_query("SELECT *
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
								$row_gal = mysql_fetch_array($result_gal);
								//____________ ja galerija ir nulle
								if ($row_gal['gal_id_gal'] == null)
								{

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_red_laiks']) . " " . $GadaMenesis[date('n ', $row['not_red_laiks'])-1]. ", ". date('Y', $row['not_red_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
									{
									echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
							 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
							 			  </div>";
									}
								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}
								else
								{
									//____________ ja galerija ir
									echo "  <img src=img/photo.png width=12px  border=0>";

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_red_laiks']) . " " . $GadaMenesis[date('n ', $row['not_red_laiks'])-1]. ", ". date('Y', $row['not_red_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
									else
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=" . $galery_images . $row_gal['img'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
										//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}


					echo "<p style='margin-top:4px; line-height:15px'>";

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
				if ($skaita == 2 || $skaita == 4)
		   		{
		   			echo "<img src=".$cel_img."Line.png> ";
			   	}
			}
			else
			{
				goto andrew38;
			}
		}
	}
andrew38: 	echo "<div class='crumb' width=100% align=right>";
			echo "<!--<a href=";if(isset($ser)){echo $ser;}echo "index.php>Visi notikumi &rsaquo;</a> -->";
			echo "</div>";
			break;
			case '52':

				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

						echo "<div class='crumb' width=100%>";
						echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
								Senioriem &rsaquo;
								<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=13&id=52>Ziņas</a>";
						echo "</div>";



				$sodiena = time();
				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
				$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks > $sodiena
											AND kam.sad_id_sad = '13'
											AND kas.not_tips_id = '1'
											AND CHAR_LENGTH(kas.not_apraksts) > 9
											")or die(mysql_error());





				$count = @mysql_num_rows($result);

				if($count == 0)
				{

				}
				else
				{



						echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Aktualitātes </span><br>
							</div>";

						echo "<div class=teksts >";
					 	while($row = mysql_fetch_array($result))
					   	{
						   echo "<div align=left style='margin-bottom:8px;border: solid 0px #CCC; border-left:solid 3px #c60202; padding-left:7px;'>";
							echo "<a href=";if(isset($ser)){ echo $ser; }
							echo "event.php?id=" .$row['id_not']. " style='text-decoration:none;color:#000000;'><span style='font-family:Arial; font-size: 16px; font-weight: 700; text-decoration: none;'>";
					   		echo $row['not_nosaukums'] ;
					   		echo "</span></a>";
							$idn=$row['id_not'];

				   			$result_gal = mysql_query("SELECT gal_id_not, gal_id_gal FROM web_notikumi_gal WHERE gal_id_not=$idn");
							$row_gal = mysql_fetch_array($result_gal);
							if ($row_gal['gal_id_gal'] == null)
							{
								echo "";
							}
							else
							{
								echo "  <img src=img/photo.png width=12px  border=0>";
							}


							$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
							$row_file = mysql_fetch_array($result_fil);


							if ($row_file['id_file'] == null)
							{
								echo " ";
							}
							else
							{
								echo "  <img src=img/att.png width=12px border=0>";
							}						//Galvenā raksta virsrakst
							echo "</div>";
						//-----------------------------------------------------aktualitātes Datums-----------------------------------------------------------------------------
							echo "<span style='margin-top:20px;margin-bottom:5px;margin-left:5px;font-family:Tahoma;font-size:11px;color:#adaaaa;'>";

							echo date('j. ', $row['not_laiks']) . $GadaMenesis[date('n', $row['not_laiks'])-1]. ", " . date('Y', $row['not_laiks']);  //izgatavojam datumu no pievienotā timestamp - iekļaujot mēneša masīva funkciju kurā atrodas mēnesis
							echo "</span>";

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
							if ($row['not_titulbilde'] != NULL)
							{
							echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
					 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
					 			  </div>";
							}

							echo "<p style='margin-top:4px; line-height:15px'>";

				//---------------------------------------------------------------Aktualitātes teksts - apraksts--------------------------------------------------------
							$position = 300;

							if ($row['not_apraksts'] == NULL)
							{
								$post = "Lasīt vairāk";
							}
							elseif (strlen($row['not_apraksts']) <= $position)
							{
								$post = strip_tags($row['not_apraksts']);
							}
							else
							{
					 			$post = substr(strip_tags($row['not_apraksts']),$position,1);
																				                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
					 			if($post != " ")
					    		{
					        		while($post != " ")
					            	{
					                	$i=1;
										$position=$position+$i;
										$post = substr(strip_tags($row['not_apraksts']),$position,1);
									}
					    		}
								else
								{
									$post = $row['not_apraksts'];
								}

								$post = substr(strip_tags($row['not_apraksts']),0,$position);
							}																									// Attēlo īso ziņu kas ir sagatavota
							echo str_replace($html_tagi, "", $post);															//izņem html tagus, lai tie nepārveido tekstu aktualitāšhu tekstā!

					 		echo "...</p>
					 		<p class=pie_raksta><a href=";
							if(isset($ser))
							{
								echo $ser;
							}
							echo  "event.php?id=" .$row['id_not']. ">Lasīt vairāk<span class=pie_raksta_b style='font-size:12px;'> <b>&#155;</b></span></a></p>";


									}


					 	echo "</ul>";
					echo "</div>";
				}
include'include/banner.php';

								$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks < $sodiena
											AND kam.sad_id_sad = '13'
											AND kas.not_tips_id = '1'
											AND CHAR_LENGTH(kas.not_atskats) > 9
											ORDER BY kad.not_laiks DESC;
											")or die(mysql_error());



					$count = @mysql_num_rows($result);

	if($count == 0)
	{
		echo "<div class=main_act>";
	   	echo "<span style='font-size:13px;color:red;'> <b>Dati nav pieejami.<br>Lūdzu sazinies ar mums! </b></span> ";
		echo "</div>";
	}
	else
	{
		$skaita = 0;
								echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Notikumu atskats</span><br>
							</div>";
		while($row = mysql_fetch_array($result))
		{
		   	$skaita++;
		   	if ($skaita <= 6)
		   	{

			   	echo "<div class=main_apskats>";
				echo "	<div align=left style='margin-bottom:10px;border: solid 0px #CCC; border-left:solid 4px #C60202; padding-left:7px;'>
		  				<span style='font-family:Arial; font-size: 14px; font-weight: 700; text-decoration: none;'><a class='h1_a' href=";
				if(isset($ser))
				{
					echo $ser;
				}
				echo  "event.php?id=" .$row['id_not']. ">" . $row['not_nosaukums'] ;
				echo "		</a></span> ";

				$idn=$row['id_not'];


		//___________________________________ pārbauda vai ir galerija

								$result_gal = mysql_query("SELECT *
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
								$row_gal = mysql_fetch_array($result_gal);
								//____________ ja galerija ir nulle
								if ($row_gal['gal_id_gal'] == null)
								{

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_laiks']) . " " . $GadaMenesis[date('n ', $row['not_laiks'])-1]. ", ". date('Y', $row['not_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
									{
									echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
							 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
							 			  </div>";
									}
								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}
								else
								{
									//____________ ja galerija ir
									echo "  <img src=img/photo.png width=12px  border=0>";

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_laiks']) . " " . $GadaMenesis[date('n ', $row['not_laiks'])-1]. ", ". date('Y', $row['not_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
									else
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=" . $galery_images . $row_gal['img'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
										//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}


					echo "<p style='margin-top:4px; line-height:15px'>";

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
				if ($skaita == 2 || $skaita == 4)
		   		{
		   			echo "<img src=".$cel_img."Line.png> ";
			   	}
			}
			else
			{
				goto andrew52;
			}
		}
	}
andrew52: 	echo "<div class='crumb' width=100% align=right>";
			echo "<!--<a href=";if(isset($ser)){echo $ser;}echo "index.php>Visi notikumi &rsaquo;</a>--> ";
			echo "</div>";
			break;
			case '54':


				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

						echo "<div class='crumb' width=100%>";
						echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
								E-sabiedrībai &rsaquo;
								<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=14&id=54>Ziņas e-sabiedrībai</a>";
						echo "</div>";



				$sodiena = time();
				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
				$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks > $sodiena
											AND kam.sad_id_sad = '14'
											AND kas.not_tips_id = '1'
											AND CHAR_LENGTH(kas.not_apraksts) > 9
											")or die(mysql_error());





				$count = @mysql_num_rows($result);

				if($count == 0)
				{

				}
				else
				{



						echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Aktualitātes e-sabiedrībai</span><br>
							</div>";

						echo "<div class=teksts >";
					 	while($row = mysql_fetch_array($result))
					   	{
						   echo "<div align=left style='margin-bottom:8px;border: solid 0px #CCC; border-left:solid 3px #c60202; padding-left:7px;'>";
							echo "<a href=";if(isset($ser)){ echo $ser; }
							echo "event.php?id=" .$row['id_not']. " style='text-decoration:none;color:#000000;'><span style='font-family:Arial; font-size: 16px; font-weight: 700; text-decoration: none;'>";
					   		echo $row['not_nosaukums'] ;
					   		echo "</span></a>";
							$idn=$row['id_not'];

				   			$result_gal = mysql_query("SELECT gal_id_not, gal_id_gal FROM web_notikumi_gal WHERE gal_id_not=$idn");
							$row_gal = mysql_fetch_array($result_gal);
							if ($row_gal['gal_id_gal'] == null)
							{
								echo "";
							}
							else
							{
								echo "  <img src=img/photo.png width=12px  border=0>";
							}


							$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
							$row_file = mysql_fetch_array($result_fil);


							if ($row_file['id_file'] == null)
							{
								echo " ";
							}
							else
							{
								echo "  <img src=img/att.png width=12px border=0>";
							}						//Galvenā raksta virsrakst
							echo "</div>";
						//-----------------------------------------------------aktualitātes Datums-----------------------------------------------------------------------------
							echo "<span style='margin-top:20px;margin-bottom:5px;margin-left:5px;font-family:Tahoma;font-size:11px;color:#adaaaa;'>";

							echo date('j. ', $row['not_piev_laiks']) . $GadaMenesis[date('n', $row['not_piev_laiks'])-1]. ", " . date('Y', $row['not_piev_laiks']);  //izgatavojam datumu no pievienotā timestamp - iekļaujot mēneša masīva funkciju kurā atrodas mēnesis
							echo "</span>";

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------

				//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
							if ($row['not_titulbilde'] != NULL)
							{
							echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
					 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
					 			  </div>";
							}

							echo "<p style='margin-top:4px; line-height:15px'>";

				//---------------------------------------------------------------Aktualitātes teksts - apraksts--------------------------------------------------------
							$position = 300;

							if ($row['not_apraksts'] == NULL)
							{
								$post = "Lasīt vairāk";
							}
							elseif (strlen($row['not_apraksts']) <= $position)
							{
								$post = strip_tags($row['not_apraksts']);
							}
							else
							{
					 			$post = substr(strip_tags($row['not_apraksts']),$position,1);
																				                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
					 			if($post != " ")
					    		{
					        		while($post != " ")
					            	{
					                	$i=1;
										$position=$position+$i;
										$post = substr(strip_tags($row['not_apraksts']),$position,1);
									}
					    		}
								else
								{
									$post = $row['not_apraksts'];
								}

								$post = substr(strip_tags($row['not_apraksts']),0,$position);
							}																									// Attēlo īso ziņu kas ir sagatavota
							echo str_replace($html_tagi, "", $post);															//izņem html tagus, lai tie nepārveido tekstu aktualitāšhu tekstā!

					 		echo "...</p>
					 		<p class=pie_raksta><a href=";
							if(isset($ser))
							{
								echo $ser;
							}
							echo  "event.php?id=" .$row['id_not']. ">Lasīt vairāk<span class=pie_raksta_b style='font-size:12px;'> <b>&#155;</b></span></a></p>";


									}


					 	echo "</ul>";
					echo "</div>";
				}
						include'include/banner_ecdl.php';

								$result = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks < $sodiena
											AND kam.sad_id_sad = '14'
											AND kas.not_tips_id = '1'
											AND CHAR_LENGTH(kas.not_atskats) > 9
											ORDER BY kad.not_laiks DESC;
											")or die(mysql_error());



					$count = @mysql_num_rows($result);

	if($count == 0)
	{
		echo "<div class=main_act>";
	   	echo "<span style='font-size:13px;color:red;'> <b>Dati nav pieejami.<br>Lūdzu sazinies ar mums! </b></span> ";
		echo "</div>";
	}
	else
	{
		$skaita = 0;
								echo "
							<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
								<span class=event_title style:'font-size:16px;'>Notikumu atskats</span><br>
							</div>";
		while($row = mysql_fetch_array($result))
		{
		   	$skaita++;
		   	if ($skaita <= 6)
		   	{

			   	echo "<div class=main_apskats>";
				echo "	<div align=left style='margin-bottom:10px;border: solid 0px #CCC; border-left:solid 4px #C60202; padding-left:7px;'>
		  				<span style='font-family:Arial; font-size: 14px; font-weight: 700; text-decoration: none;'><a class='h1_a' href=";
				if(isset($ser))
				{
					echo $ser;
				}
				echo  "event.php?id=" .$row['id_not']. ">" . $row['not_nosaukums'] ;
				echo "		</a></span> ";

				$idn=$row['id_not'];


		//___________________________________ pārbauda vai ir galerija

								$result_gal = mysql_query("SELECT *
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
								$row_gal = mysql_fetch_array($result_gal);
								//____________ ja galerija ir nulle
								if ($row_gal['gal_id_gal'] == null)
								{

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_laiks']) . " " . $GadaMenesis[date('n ', $row['not_laiks'])-1]. ", ". date('Y', $row['not_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
									{
									echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
							 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
							 			  </div>";
									}
								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}
								else
								{
									//____________ ja galerija ir
									echo "  <img src=img/photo.png width=12px  border=0>";

									$result_fil = mysql_query("SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");
									$row_file = mysql_fetch_array($result_fil);


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
									echo 		date('j.', $row['not_laiks']) . " " . $GadaMenesis[date('n ', $row['not_laiks'])-1]. ", ". date('Y', $row['not_laiks']) ;

						 			echo "	&nbsp;</span><br>";
						 			echo "	<span style='font-family:Tahoma;font-size:2px;color:#adaaaa;'>
						 						&nbsp;
						 					</span><br>";

								//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
									if ($row['not_titulbilde'] != NULL)
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
									else
										{
											echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
								 				<img src=" . $galery_images . $row_gal['img'] . " align=left width=115px style='border: solid 2px #13529d; '>
								 			  </div>";
										}
										//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								}


					echo "<p style='margin-top:4px; line-height:15px'>";

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
				if ($skaita == 2 || $skaita == 4)
		   		{
		   			echo "<img src=".$cel_img."Line.png> ";
			   	}
			}
			else
			{
				goto step54;
			}
		}
	}
step54: 	echo "<div class='crumb' width=100% align=right>";
			echo "<!--<a href=";if(isset($ser)){echo $ser;}echo "index.php>Visi notikumi &rsaquo;</a>--> ";
			echo "</div>";


			break;
			case "61":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Pedagogiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=10&id=61>Miniphänomenta</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Miniphänomenta</span><br>
					</div>";

				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";
				}
			break;
			case "44":

				$GadaMenesisDat = array("Janvārī","Februārī","Martā","Aprīlī","Maijā","Jūnijā","Jūlijā","Augustā","Septembrī","Oktobrī","Novembrī","Decembrī");
				$today = getdate();
				$sodiendiena = $today['mday'];
				$sodienmen = $today['mon'];
				$sodiengads = $today['year'];


      			$dat = $sodiengads . "-" . $sodienmen . "-" . $sodiendiena;

				list($year, $month, $day) = explode('-', $dat);

				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Pedagogiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=10&id=44>Plāni</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Darba plāni izglītības iestādēm</span><br>
					</div>";

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

			$today6 = mktime($hour_begin, $min_begin, $sec_begin, $fmonth, $fday, $fyear);
			$today7 = mktime( date('H')+3, date('i'), date('s'), date('n'), date('j'), date('Y'));
			$today8 = mktime($hour_end, $min_end, $sec_end, $lmonth, $lday, $lyear);

			$menesisDat = $GadaMenesisDat[$mon];

//----------------------------menesha plāns nāk no sadalas par skolotaju menesa plānu
				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = 74");

				$count = @mysql_num_rows($result);


				if($count == 0)
				{
					echo "<div class=teksts >";
					echo "Plāns šobrīd nav pieejams!";
					echo "</div>";
				}
				else
				{
					echo "<div align=right style='margin-right:25px;'>";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];

						$sadalaID = $row['id_sad'];

						/*Failu ielādes SQL*/
						$result_sadalas_files = mysql_query("SELECT * FROM web_sadalas_files WHERE file_sad_id='$sadalaID'");

						while($row_files = mysql_fetch_array($result_sadalas_files))
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
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'pptx':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'doc':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'docx':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xls':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xlsx':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'pdf':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'png':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'gif':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpeg':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpg':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									default:
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
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
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'pptx':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'doc':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'docx':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xls':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xlsx':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'pdf':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'png':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'gif':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpeg':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpg':
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									default:
										echo "  <p style='margin-right:30px;margin-top:10px;margin-bottom:0px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								}
								}
							}



				   		}
					echo "</div>";
				}
//--------------------------------menesha plāna scripta daļas beigas


			echo "<div class=teksts_plans style='margin-top:0px;'>";


			//echo "  <p><a href=" . $attachment_path . "menesa_plans_pedagogiem_112014_v2.pdf ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;margin-top:-10px;'>";
		//echo "Mēneša plāns izdrukai</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . "menesa_plans_pedagogiem_112014_v2.pdf >Lejuplādēt</a></span></p>";
			//echo "</div>";

			$result_calend = mysql_query(" SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi kas,
											web_notikumi_tipi kadi,
											web_notikumi_sadalas kam
											WHERE
												kas.id_not = kad.not_id
											AND kadi.id_tips = kas.not_tips_id
											AND kas.id_not = kam.sad_id_not
											AND kad.not_laiks >= '$today6'
											AND kad.not_laiks <= '$today8'
											AND kam.sad_id_sad = '10'
											AND kadi.id_tips > '1'
											AND kadi.id_tips <> '14'
											GROUP BY kadi.tips_nosaukums
											ORDER BY kadi.id_tips ASC

											")or die(mysql_error());



			$count = @mysql_num_rows($result_calend);


			if($count == 0)
			{

				echo "<div align=center>";
			   	echo "<span style='font-size:14px;color:#a50b0b;'> <b>".$notikums."</b></span> ";
				echo "</div>";
				echo  "<br>";

				echo "<div align=center>";
			   	echo "<span style='font-size:12px;color:#7c7c7c;'> <b>" . lcfirst($menesisDat)." Šajā mēnesī aktuālu notikumu pedagogiem nav</b></span> ";
				echo "</div>";
			}
			else
			{
				echo "<div align=center>";
			   	echo "<span style='font-size:14px;color:#a50b0b;'> <b>".$notikums."</b></span> ";
				echo "</div>";
				echo  "<br>";
				$i = 0;


				while($row_calend = mysql_fetch_array($result_calend))
	   			{
	   				echo "<p ><span style='font-family:tahoma;color:#cf0b0b;font-size:13px;'><strong>". $row_calend['tips_nosaukums'] ."</strong></span></p>";

	   							$tipinsh = $row_calend['id_tips'];
								$result_notik = mysql_query(" SELECT *
																FROM
																web_notikumi_laiki kad,
																web_notikumi kas,
																web_notikumi_tipi kadi,
																web_notikumi_sadalas kam
																WHERE
																	kas.id_not = kad.not_id
																AND kadi.id_tips = kas.not_tips_id
																AND kas.id_not = kam.sad_id_not
																AND kad.not_laiks >= '$today6'
																AND kad.not_laiks <= '$today8'
																AND kadi.id_tips = '$tipinsh'
																AND kam.sad_id_sad = '10'
																ORDER BY kad.not_laiks ASC

																")or die(mysql_error());



								$count = @mysql_num_rows($result_notik);


								if($count == 0)
								{


								}
								else
								{


									$i = 0;


									while($row_notikums = mysql_fetch_array($result_notik))
						   			{
						   				echo "<p class='calendar'><span style='font-size:11px; color:#7C7C7C'>" . date('d', $row_notikums['not_laiks']) . "." . date('m', $row_notikums['not_laiks']) . "." . date('Y', $row_notikums['not_laiks']). " ";
						   				echo "</span><span style='font-family:tahoma;color:#073060;'><a href=";	if(isset($ser)){ echo $ser; } echo  "event.php?id=" .$row_notikums['id_not']. ">". $row_notikums['not_nosaukums'] ."<span style='font-size:10px;color:red;'> <b>&#187;</b></span></a></strong></p>";





									}
						   				echo " <br>";
								}



				}

			}

			echo "</div>";


			break;
			case "45":

				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Pedagogiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=10&id=45>Metodiskās apvienības</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Metodiskās apvienības</span><br>
					</div>";

		//pirms tabulas teksts ar linku no sadaļām
				$result = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysql_num_rows($result);


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
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo $row['sad_text'];
					}
					echo "</div>";

					//pirms tabulas teksts ar linku no sadaļām beidzas tālāk nāk atsevišķi šai lapai paredzēts kods

				$result= mysql_query(" SELECT *
											FROM
												web_ma_jomas kadas,
												web_ma kas
											WHERE
												kadas.id_ma_joma = kas.ma_joma_id
											GROUP BY kadas.id_ma_joma
											ORDER BY kadas.id_ma_joma ASC

											")or die(mysql_error());



			$count = @mysql_num_rows($result);


			if($count == 0)
			{


			}
			else
			{
					echo "<div class=teksts >";
		/*********************************************************** visas jomas **********************/
				while($row_ = mysql_fetch_array($result))
	   			{
	   				echo "<p ><span style='font-family:tahoma;color:#cf0b0b;font-size:13px;'><strong>". $row_['joma_nos'] ."</strong></span></p>";
					$joma_id = $row_['id_ma_joma'];

									$result_ma= mysql_query(" SELECT *
																	FROM
																		web_ma_jomas kadas,
																		web_ma kas
																	WHERE
																		kadas.id_ma_joma = kas.ma_joma_id
																	AND kas.ma_joma_id = '$joma_id'
																	ORDER BY kas.ma_nos ASC

																	")or die(mysql_error());



									$count = @mysql_num_rows($result_ma);


									if($count == 0)
									{


									}
									else
									{
											echo "<div style='margin-left:17px;'>";
										while($row_ma = mysql_fetch_array($result_ma))
							   			{
							   				echo "<p ><span style='font-family:tahoma;color:#black;font-size:13px;'><strong>". $row_ma['ma_nos'] ."</strong></span></p>";
											echo "<table border=0 style='margin-bottom:20px;border-top: 1px solid #CCCCCC;'>
													<tr style=' '>
													<td width=110px>
													". $row_ma['ma_vaditajs'] ."
													</td>
													<td width=150px>
													". $row_ma['ma_skola'] ."
													</td>
													<td width=60px>
													E-pasts:
													</td>
													<td width=170px>
													<a href='mailto:". $row_ma['ma_email'] ."'>". $row_ma['ma_email'] ."</a>
													</td>
													</tr>
													<tr>
													<td width=110px>

													</td>
													<td width=150px>

													</td >
													<td width=60px>

													</td>
													<td width=170px>

													</td>
													</tr>";
													if ($row_ma['ma_gada_plans'] != NULL)
													{
														echo "	<tr>
														<td>

														</td>
														<td>

														</td >
														<td colspan=2>";


														$plans =  $row_ma['ma_gada_plans'];
														$dok_nosaukums = 'Gada plāns';
														/*** get the path info ***/
														$info = pathinfo($plans);

														/*** show the extension ***/

														switch (strtolower($info['extension']))
														{
														    case 'ppt':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
														    case 'pptx':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
														    case 'doc':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'docx':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'xls':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'xlsx':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'pdf':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'png':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'gif':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'jpeg':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'jpg':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															default:
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
														}


														echo "</td>

														</tr>";
													}
													echo"
											</table>";
										}
											echo "</div>";
									}

				}
		/*********************************************************** citas jomas **********************/
					echo "<p ><span style='font-family:tahoma;color:#cf0b0b;font-size:13px;'><strong>&nbsp;</strong></span></p>";


									$result_ma= mysql_query(" SELECT *
																	FROM
																		web_ma kas
																	WHERE
																		kas.ma_joma_id IS NULL
																	ORDER BY kas.ma_nos ASC

																	")or die(mysql_error());



									$count = @mysql_num_rows($result_ma);


									if($count == 0)
									{


									}
									else
									{
											echo "<div style='margin-left:17px;'>";
										while($row_ma = mysql_fetch_array($result_ma))
							   			{
							   				echo "<p ><span style='font-family:tahoma;color:#black;font-size:13px;'><strong>". $row_ma['ma_nos'] ."</strong></span></p>";
											echo "<table border=0 style='margin-bottom:20px;border-top: 1px solid #CCCCCC;'>
													<tr style=' '>
													<td width=110px>
													". $row_ma['ma_vaditajs'] ."
													</td>
													<td width=150px>
													". $row_ma['ma_skola'] ."
													</td>
													<td width=60px>
													E-pasts:
													</td>
													<td width=170px>
													<a href='mailto:". $row_ma['ma_email'] ."'>". $row_ma['ma_email'] ."</a>
													</td>
													</tr>
													<tr>
													<td width=110px>

													</td>
													<td width=150px>

													</td >
													<td width=60px>

													</td>
													<td width=170px>

													</td>
													</tr>";
													if ($row_ma['ma_gada_plans'] != NULL)
													{
														echo "	<tr>
														<td>

														</td>
														<td>

														</td >
														<td colspan=2>";


														$plans =  $row_ma['ma_gada_plans'];
														$dok_nosaukums = 'Gada plāns';
														/*** get the path info ***/
														$info = pathinfo($plans);

														/*** show the extension ***/

														switch (strtolower($info['extension']))
														{
														    case 'ppt':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
														    case 'pptx':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
														    case 'doc':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'docx':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'xls':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'xlsx':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'pdf':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'png':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'gif':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'jpeg':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															case 'jpg':
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
															default:
																echo "  <p><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
																echo $dok_nosaukums;
																echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_ma['ma_gada_plans'] . ">Lejuplādēt</a></span></p>";
																break;
														}


														echo "</td>

														</tr>";
													}
													echo"
											</table>";
										}
											echo "</div>";
									}
					echo "</div>";
				}


			}
			break;
			case "49":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Pedagogiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=10&id=49>Konkursi skolēniem</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Konkursi skolēniem</span><br>
					</div>";

					$result = mysql_query("SELECT
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
								web_notikumi.not_piederiba,
								web_notikumi.not_piev_laiks,
								web_notikumi.not_red_laiks
							FROM web_notikumi
							WHERE web_notikumi.not_tips_id = '6'
							AND web_notikumi.not_piederiba = '1'
							AND web_notikumi.not_piev_laiks > '1470009600'
							ORDER BY not_piev_laiks DESC");

				$count = @mysql_num_rows($result);


				if($count == 0)
				{

					echo "<div class=teksts >";
					echo "Šobrīd nav aktuālu konkursu";
					echo "</div>";
				}
				else
				{
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo "<p style='margin-bottom:5px;'><b><span style='font-size:14px;color:#B22222;'>";
				   		echo $row['not_nosaukums'];
				   		echo "</span></b>";
						echo "</p>";
						echo $row['not_apraksts'];


						$not_id = $row['id_not'];
						/*Failu ielādes SQL*/
						$result_konkursi_files = mysql_query("SELECT id_file, file_name, file_caption, file_not_id FROM web_notikumi_files WHERE file_not_id = '$not_id'  ORDER BY id_file ASC ");

						while($row_files = mysql_fetch_array($result_konkursi_files))
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
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'pptx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'doc':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'docx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xls':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xlsx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'pdf':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'png':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'gif':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpeg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									default:
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
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
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'pptx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'doc':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'docx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xls':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xlsx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'pdf':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'png':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'gif':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpeg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									default:
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								}
								}
							}}
						echo "<img src=".$cel_img."Line.png style='margin-top:20px;'> <br><br><br>";
					}
					echo "</div>";
				}
			break;
			case "62":
				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;
						Jauniešiem &rsaquo;
						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&group=11&id=62>Konkursi skolēniem</a>";
				echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Konkursi skolēniem</span><br>
					</div>";

					$result = mysql_query("SELECT
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
								web_notikumi.not_piederiba,
								web_notikumi.not_piev_laiks,
								web_notikumi.not_red_laiks
							FROM web_notikumi
							WHERE web_notikumi.not_tips_id = '6'
							AND web_notikumi.not_piederiba = '1'
							AND web_notikumi.not_piev_laiks > '1470009600'
							ORDER BY not_piev_laiks DESC");

				$count = @mysql_num_rows($result);


				if($count == 0)
				{

					echo "<div class=teksts >";
					echo "Šobrīd nav aktuālu konkursu";
					echo "</div>";
				}
				else
				{
					echo "<div class=teksts >";
				   	while($row = mysql_fetch_array($result))
				   	{
				   		echo "<p style='margin-bottom:5px;'><b><span style='font-size:14px;color:#B22222;'>";
				   		echo $row['not_nosaukums'];
				   		echo "</span></b>";
						echo "</p>";
						echo $row['not_apraksts'];


						$not_id = $row['id_not'];
						/*Failu ielādes SQL*/
						$result_konkursi_files = mysql_query("SELECT id_file, file_name, file_caption, file_not_id FROM web_notikumi_files WHERE file_not_id = '$not_id'  ORDER BY id_file ASC ");

						while($row_files = mysql_fetch_array($result_konkursi_files))
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
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'pptx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'doc':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'docx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xls':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xlsx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'pdf':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'png':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'gif':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpeg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $dok_nosaukums;
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									default:
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
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
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'pptx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								    case 'doc':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'docx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xls':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'xlsx':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'pdf':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'png':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'gif':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpeg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									case 'jpg':
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
									default:
										echo "  <p style='margin-left:30px;margin-top:10px;'><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
										echo $row_files['file_caption'];
										echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
										break;
								}
								}
							}}
						echo "<img src=".$cel_img."Line.png style='margin-top:20px;'> <br><br><br>";
					}
					echo "</div>";
				}
			break;
			case "187":




				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");

				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;

						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&id=187>Mācības uzsāk</a>";
				echo "</div>";



				$sodiena = time();
				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
				$result_aktuali = mysql_query("SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks > $sodiena
											AND kam.sad_id_sad = '4'
											AND kas.not_tips_id = '14'
											ORDER BY kad.not_laiks ASC;
											")or die(mysql_error());

				$count1 = @mysql_num_rows($result_aktuali);

				if($count1 == 0)
				{


				}
				else
				{
					echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Mācības uzsāk valodu grupas</span><br>
					</div>";

					echo "<div class=teksts >";

						$i = 0;
						while($aktuali_row = mysql_fetch_array($result_aktuali))
						{
							$i++;
							if($i >= $count1)
							{
								echo "<div style='margin-bottom:40px;'>";
							}
							else
							{
								echo "<div style='margin-bottom:30px;'>";
							}

							   $kurs_akt_id = $aktuali_row['id_not'];
							   $kurs_akt_nos = $aktuali_row['not_nosaukums'];



								echo "<span style='font-family:Arial; font-size: 16px; font-weight: 700; text-decoration: none; color:#c60202;'>";
						   		echo $kurs_akt_nos ;
						   		echo "</span><hr>";

							//-----------------------------------------------------aktualitātes Datums-----------------------------------------------------------------------------
								echo "<span style='margin-top:20px;margin-bottom:5px;margin-left:22px;font-family:Tahoma;font-size:11px;color:#adaaaa;'>";

								echo "Pievienots: " . date('j. ', $aktuali_row['not_red_laiks']) . $GadaMenesis[date('n', $aktuali_row['not_red_laiks'])-1]. ", " . date('Y', $aktuali_row['not_red_laiks']);  //izgatavojam datumu no pievienotā timestamp - iekļaujot mēneša masīva funkciju kurā atrodas mēnesis
								echo "</span>";

					//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------

					//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								if ($aktuali_row['not_titulbilde'] != NULL)
								{
								echo "<div  class=main_pct_small style='background-image: url(Sem2.png);'>
						 				<img src=". $Notikuma_titulbilde . $aktuali_row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
						 			  </div>";
								}

								echo "<p style='margin-top:4px; margin-left:17px; line-height:15px'>";

					//---------------------------------------------------------------Aktualitātes teksts - apraksts--------------------------------------------------------
								$position = 270;

								if ($aktuali_row['not_apraksts'] == NULL)
								{
									$post = "Lasīt vairāk";
								}
								elseif (strlen($aktuali_row['not_apraksts']) <= $position)
								{
									$post = strip_tags($aktuali_row['not_apraksts']);
								}
								else
								{
						 			$post = substr(strip_tags($aktuali_row['not_apraksts']),$position,1);
																					                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
						 			if($post != " ")
						    		{
						        		while($post != " ")
						            	{
						                	$i=1;
											$position=$position+$i;
											$post = substr(strip_tags($aktuali_row['not_apraksts']),$position,1);
										}
						    		}
									else
									{
										$post = strip_tags($aktuali_row['not_apraksts']);
									}

									$post = substr(strip_tags($aktuali_row['not_apraksts']),0,$position) ;
								}																									// Attēlo īso ziņu kas ir sagatavota
								echo  $post;															//izņem html tagus, lai tie nepārveido tekstu aktualitāšhu tekstā!
								echo "...<a href=";
									if(isset($ser))
										{
											echo $ser;
										}
								echo  "event.php?id=" .$aktuali_row['id_not']. "><span style='font-size:12px;color:red;'> Lasīt vairāk <b>&#187;</b></span></a>";
							   echo "</p></div>";
							}
					echo "</div>";
				}

				$result = mysql_query("SELECT *
														FROM web_notikumi kas
														WHERE kas.id_not = '268'
														")or die(mysql_error());

							$row = mysql_fetch_array($result);


						/*Eventa nosaukums*/
					echo "
						<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
							<span class=event_title>". $row['not_nosaukums'] ."</span><br>
						</div>";



					/*banerim vieta*/
					if ($row['not_banners']!= NULL)
					{
						echo "
							<div class=banners align=center>
								<img src=". $banner_img . $row['not_banners'] . " width=540px>
							</div>";
					}

					/*teksta izklāsts*/
					echo "
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
						</div>";

			break;
			case "188":




				$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");

				echo "<div class='crumb' width=100%>";
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a> &rsaquo;

						<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=group&id=187>Mācības uzsāk</a>";
				echo "</div>";



				$sodiena = time();
				$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
				$result_aktuali = mysql_query("SELECT *
											FROM
											web_notikumi_laiki kad,
											web_notikumi_sadalas kam,
											web_notikumi kas
											WHERE kas.id_not = kam.sad_id_not
											AND kas.id_not = kad.not_id
											AND kad.not_laiks > $sodiena
											AND kam.sad_id_sad = '9'
											AND kas.not_tips_id = '14'
											ORDER BY kad.not_laiks ASC;
											")or die(mysql_error());

				$count1 = @mysql_num_rows($result_aktuali);

				if($count1 == 0)
				{


				}
				else
				{
					echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
						<span class=event_title>Mācības uzsāk </span><br>
					</div>";

					echo "<div class=teksts >";

						$i = 0;
						while($aktuali_row = mysql_fetch_array($result_aktuali))
						{
							$i++;
							if($i >= $count1)
							{
								echo "<div style='margin-bottom:40px;height:auto;'>";
							}
							else
							{
								echo "<div style='margin-bottom:30px;height:auto;'>";
							}

							   $kurs_akt_id = $aktuali_row['id_not'];
							   $kurs_akt_nos = $aktuali_row['not_nosaukums'];



								echo "<span style='font-family:Arial; font-size: 16px; font-weight: 700; text-decoration: none; color:#c60202;'>";
						   		echo $kurs_akt_nos ;
						   		echo "</span><hr>";

							//-----------------------------------------------------aktualitātes Datums-----------------------------------------------------------------------------
								echo "<span style='margin-top:20px;margin-bottom:5px;margin-left:22px;font-family:Tahoma;font-size:11px;color:#adaaaa;'>";

								echo "Pievienots: " . date('j. ', $aktuali_row['not_red_laiks']) . $GadaMenesis[date('n', $aktuali_row['not_red_laiks'])-1]. ", " . date('Y', $aktuali_row['not_red_laiks']);  //izgatavojam datumu no pievienotā timestamp - iekļaujot mēneša masīva funkciju kurā atrodas mēnesis
								echo "</span>";

					//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------

					//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
								if ($aktuali_row['not_titulbilde'] != NULL)
								{
								echo "<div  class=main_pct_small style='background-image: url(Sem2.png);    max-height: 75px;'>
						 				<img src=". $Notikuma_titulbilde . $aktuali_row['not_titulbilde'] . " align=left width=115px style='border: solid 2px #13529d; '>
						 			  </div>&nbsp;";
								}

								echo "<p style='margin-top:4px; margin-left:17px; line-height:15px'>";

					//---------------------------------------------------------------Aktualitātes teksts - apraksts--------------------------------------------------------
								$position = 270;

								if ($aktuali_row['not_apraksts'] == NULL)
								{
									$post = "Lasīt vairāk";
								}
								elseif (strlen($aktuali_row['not_apraksts']) <= $position)
								{
									$post = strip_tags($aktuali_row['not_apraksts']);
								}
								else
								{
						 			$post = substr(strip_tags($aktuali_row['not_apraksts']),$position,1);
																					                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
						 			if($post != " ")
						    		{
						        		while($post != " ")
						            	{
						                	$i=1;
											$position=$position+$i;
											$post = substr(strip_tags($aktuali_row['not_apraksts']),$position,1);
										}
						    		}
									else
									{
										$post = strip_tags($aktuali_row['not_apraksts']);
									}

									$post = substr(strip_tags($aktuali_row['not_apraksts']),0,$position) ;
								}																									// Attēlo īso ziņu kas ir sagatavota
								echo  $post;															//izņem html tagus, lai tie nepārveido tekstu aktualitāšhu tekstā!
								echo "...<a href=";
									if(isset($ser))
										{
											echo $ser;
										}
								echo  "event.php?id=" .$aktuali_row['id_not']. "><span style='font-size:12px;color:red;'> Lasīt vairāk <b>&#187;</b></span></a>";
							   echo "</p></div>";
							}
					echo "</div>";
				}

				$result = mysql_query("SELECT *
														FROM web_notikumi kas
														WHERE kas.id_not = '268'
														")or die(mysql_error());

							$row = mysql_fetch_array($result);


						/*Eventa nosaukums*/
					echo "
						<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
							<span class=event_title>". $row['not_nosaukums'] ."</span><br>
						</div>";



					/*banerim vieta*/
					if ($row['not_banners']!= NULL)
					{
						echo "
							<div class=banners align=center>
								<img src=". $banner_img . $row['not_banners'] . " width=540px>
							</div>";
					}

					/*teksta izklāsts*/
					echo "
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
						</div>";

			break;
			default:
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Atvainojiet!</span><br></div>";
					echo "<div class=teksts >";
					echo "Šī sadaļa šobrīd nav pieejama!";
					echo "</div>";
				break;
			}






/*----------------------------------------------------------------------------- Te nāks ziņas un visi citi zvēri -----------------------------------------------*/




/*----------------------------------------------------------------------------- Te beidzas ziņas un visi citi zvēri -----------------------------------------------*/


?>
