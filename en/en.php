<?php

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
	$kam = $_REQUEST["group"];
	$sad_id = $_GET["id"];

		/*$result_kam = mysql_query("SELECT *	FROM web_sadalas WHERE id_sad = $kam");
		while($row_group = mysql_fetch_array($result_kam))
	   	{
	   		echo $row_group['sad_nosaukums'];
		}
*/
		switch ($sad_id)
		{
			case "20":
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=en&id=20>Contacts</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Contacts </span><br></div>";

				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Page not Found! </span><br></div>";
					echo "<div class=teksts >";
					echo "Please, come back Later!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_en'];
					}
					echo "</div>";
				}
			break;
			case "21":
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=en&id=21>Partners</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Collaboration partners </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Page not Found! </span><br></div>";
					echo "<div class=teksts >";
					echo "Please, come back Later!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_en'];
					}
					echo "</div>";
				}
			break;
			case "63":
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=en&id=63>Projects</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>About projects </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Page not Found! </span><br></div>";
					echo "<div class=teksts >";
					echo "Please, come back Later!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_en'];
					}
					echo "</div>";
				}
			break;
			case "22":
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=en&id=22>Services</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Services </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Page not Found! </span><br></div>";
					echo "<div class=teksts >";
					echo "Please, come back Later!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_en'];
					}
					echo "</div>";
				}
			break;
			case "64":
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=en&id=64>Courses</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Courses </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Page not Found! </span><br></div>";
					echo "<div class=teksts >";
					echo "Please, come back Later!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_en'];
					}
					echo "</div>";
				}
			break;
			case "17":
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>About us </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Page not Found! </span><br></div>";
					echo "<div class=teksts >";
					echo "Please, come back Later!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_en'];
					}
					echo "</div>";
				}
			break;
			case "8":

					$grouping = '72';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=en&id=8>For entrepreneurs</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Support for business competence </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Page not Found! </span><br></div>";
					echo "<div class=teksts >";
					echo "Please, come back Later!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_en'];
					}
					echo "</div>";
				}
			break;
			case "9":

					$grouping = '71';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=en&id=9>For metal working</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Support for engineering competence </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Page not Found! </span><br></div>";
					echo "<div class=teksts >";
					echo "Please, come back Later!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_en'];
					}
					echo "</div>";
				}
			break;
			case "15":

					$grouping = '70';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=en&id=15>For jobseekers</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Free education opportunities for the unemployed and jobseekers </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Page not Found! </span><br></div>";
					echo "<div class=teksts >";
					echo "Please, come back Later!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_en'];
					}
					echo "</div>";
				}
			break;
			case "10":

					$grouping = '69';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=en&id=10>For schools</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Support for Pedagogue Professional competence </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Page not Found! </span><br></div>";
					echo "<div class=teksts >";
					echo "Please, come back Later!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_en'];
					}
					echo "</div>";
				}
			break;
			case "11":

					$grouping = '68';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=en&id=11>For youth</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Support for Youth </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Page not Found! </span><br></div>";
					echo "<div class=teksts >";
					echo "Please, come back Later!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_en'];
					}
					echo "</div>";
				}
			break;
			case "13":

					$grouping = '67';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=en&id=13>For seniors</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Support for seniors </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Page not Found! </span><br></div>";
					echo "<div class=teksts >";
					echo "Please, come back Later!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_en'];
					}
					echo "</div>";
				}
			break;
			case "14":

					$grouping = '66';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=en&id=14>For e-society</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Support for Information society </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Page not Found! </span><br></div>";
					echo "<div class=teksts >";
					echo "Please, come back Later!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_en'];
					}
					echo "</div>";
				}
			break;
			case "4":

					$grouping = '65';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=en&id=4>Library</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Methodical library </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Page not Found! </span><br></div>";
					echo "<div class=teksts >";
					echo "Please, come back Later!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_en'];
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

				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

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

				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

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
			default:
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>About us</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Page not Found! </span><br></div>";
					echo "<div class=teksts >";
					echo "Please, come back Later!";
					echo "</div>";
				break;
			}






/*----------------------------------------------------------------------------- Te nāks ziņas un visi citi zvēri -----------------------------------------------*/




/*----------------------------------------------------------------------------- Te beidzas ziņas un visi citi zvēri -----------------------------------------------*/


?>
