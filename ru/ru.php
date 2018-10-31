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
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=ru&id=20>Специалисты</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Специалисты </span><br></div>";

				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Страница не найдена! </span><br></div>";
					echo "<div class=teksts >";
					echo "Пожалуйста, зайдите позже!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_ru'];
					}
					echo "</div>";
				}
			break;
			case "21":
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=ru&id=21>Партнеры </a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Партнеры по сотрудничеству </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Страница не найдена! </span><br></div>";
					echo "<div class=teksts >";
					echo "Пожалуйста, зайдите позже!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_ru'];
					}
					echo "</div>";
				}
			break;
			case "63":
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=ru&id=63>Проекты</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>О проектах </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Страница не найдена! </span><br></div>";
					echo "<div class=teksts >";
					echo "Пожалуйста, зайдите позже!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_ru'];
					}
					echo "</div>";
				}
			break;
			case "22":
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=ru&id=22>Услуги</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Услуги </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Страница не найдена! </span><br></div>";
					echo "<div class=teksts >";
					echo "Пожалуйста, зайдите позже!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_ru'];
					}
					echo "</div>";
				}
			break;
			case "64":
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=ru&id=64>Курсы</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Курсы </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Страница не найдена! </span><br></div>";
					echo "<div class=teksts >";
					echo "Пожалуйста, зайдите позже!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_ru'];
					}
					echo "</div>";
				}
			break;
			case "17":
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>О нас </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $sad_id");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Страница не найдена! </span><br></div>";
					echo "<div class=teksts >";
					echo "Пожалуйста, зайдите позже!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_ru'];
					}
					echo "</div>";
				}
			break;
			case "8":

					$grouping = '72';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=ru&id=8>Предпринимателям</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Поддержка предпринимательской деятельности </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Страница не найдена! </span><br></div>";
					echo "<div class=teksts >";
					echo "Пожалуйста, зайдите позже!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_ru'];
					}
					echo "</div>";
				}
			break;
			case "9":

					$grouping = '71';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=ru&id=9>Металлообработке</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Поддержка для развития инженерной компетенции </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Страница не найдена! </span><br></div>";
					echo "<div class=teksts >";
					echo "Пожалуйста, зайдите позже!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_ru'];
					}
					echo "</div>";
				}
			break;
			case "15":

					$grouping = '70';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=ru&id=15>Ищущим работу </a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Курсы для безработных и людей, ищущих работу </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Страница не найдена! </span><br></div>";
					echo "<div class=teksts >";
					echo "Пожалуйста, зайдите позже!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_ru'];
					}
					echo "</div>";
				}
			break;
			case "10":

					$grouping = '69';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=ru&id=10>Школам </a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Поддержка школ </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Страница не найдена! </span><br></div>";
					echo "<div class=teksts >";
					echo "Пожалуйста, зайдите позже!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_ru'];
					}
					echo "</div>";
				}
			break;
			case "11":

					$grouping = '68';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=ru&id=11>Молодежи </a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Поддержка молодежи </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Страница не найдена! </span><br></div>";
					echo "<div class=teksts >";
					echo "Пожалуйста, зайдите позже!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_ru'];
					}
					echo "</div>";
				}
			break;
			case "13":

					$grouping = '67';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=ru&id=13>Сениорам </a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Поддержка сениоров </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Страница не найдена! </span><br></div>";
					echo "<div class=teksts >";
					echo "Пожалуйста, зайдите позже!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_ru'];
					}
					echo "</div>";
				}
			break;
			case "14":

					$grouping = '66';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=ru&id=14>Информационному обществу </a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Поддержка информационному обществу </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Страница не найдена! </span><br></div>";
					echo "<div class=teksts >";
					echo "Пожалуйста, зайдите позже!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_ru'];
					}
					echo "</div>";
				}
			break;
			case "4":

					$grouping = '65';
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a> &rsaquo;
							<a href=";if(isset($ser)){echo $ser;} echo "index.php?view=ru&id=4>Библиотека</a>";
				echo "</div>";


					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>О библиотеке </span><br></div>";


				$result = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_sadalas WHERE id_sad = $grouping");

				$count = @mysqli_num_rows($result);


				if($count == 0)
				{
					echo "<div class='crumb' width=100%>";
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Страница не найдена! </span><br></div>";
					echo "<div class=teksts >";
					echo "Пожалуйста, зайдите позже!";
					echo "</div>";
				}
				else
				{
					$i = 0; //counter start
					echo "<div class=teksts >";
				   	while($row = mysqli_fetch_array($result))
				   	{

				   		echo $row['sad_text_ru'];
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
				echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>Sākums </a> &rsaquo;
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
					echo "<a href=";if(isset($ser)){echo $ser;} echo "index.php>О нас</a>";
					echo "</div>";
					echo "<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'><span class=event_title>Страница не найдена! </span><br></div>";
					echo "<div class=teksts >";
					echo "Пожалуйста, зайдите позже!";
					echo "</div>";
				break;
			}






/*----------------------------------------------------------------------------- Te nāks ziņas un visi citi zvēri -----------------------------------------------*/




/*----------------------------------------------------------------------------- Te beidzas ziņas un visi citi zvēri -----------------------------------------------*/


?>
