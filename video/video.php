<?php



$xml=simplexml_load_file("http://vimeo.com/api/v2/user20726755/videos.xml");

$id_video_vimeo = array();

	for ($i = 0; $i < count($xml); $i++)
		{
			$id_video_vimeo[]=$xml->video[$i]->id;
		}

		$query_select = "SELECT id_video FROM web_video";
		$result_select = mysqli_query($GLOBALS['connection'], $query_select) or die (mysqli_error($connection));
		$id_video_db = array();
		$id_video_not_in_vimeo = array();

	while ($row = mysqli_fetch_array($result_select))
		{
     		extract($row);
			$id_video_db[] = $id_video;

			if (!in_array(@$id_video, $id_video_vimeo))
			{
				$id_video_not_in_vimeo[] = $id_video;

				/*$query_delete = "DELETE FROM web_video WHERE id_video=$id_video";
				$result_delete = mysql_query($query_delete, $connection) or die (mysql_error($connection));*/
				//echo "DELETED ".$id_video;
			}

		}

	for ($i = 0; $i < count($xml); $i++)
		{
			if (!in_array($xml->video[$i]->id, @$id_video_db))
			{
			$query_insert = "INSERT INTO web_video (id_video) VALUES (".$xml->video[$i]->id.")";
			$result_insert = mysqli_query($GLOBALS['connection'], $query_insert) or die (mysqli_error($connection));
			//echo "INSERTED ".$xml->video[$i]->id;
			}
		}

if (isset($_GET['vid']))
{
	for ($i = 0; $i < count($xml); $i++)
		{
			$resulta = $xml->xpath("//video/id");
			$id_video = $resulta[$i];
			If($id_video == $_GET['vid'])
			{
				$resulta = $xml->xpath("//video/title");
				//echo "ID: " . $resulta[$i] . "</br>";
					echo "<div class='crumb' width=100%>";
					echo "<a href=".$ser."index.php>Sākums</a> &rsaquo; <a href=";if(isset($ser)){echo $ser;} echo "video.php>Video galerija</a> &rsaquo; <a href=";if(isset($ser)){echo $ser;} echo "video.php?vid=". $_GET['vid'] .">". $resulta[$i] ."</a>";
					echo "</div>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:20px;'>
						<span class=event_title>". $resulta[$i] ."</span><br>
					</div>";
				echo "<div class=teksts>";
				echo "<iframe src='//player.vimeo.com/video/".$_GET['vid']."?title=0&amp;byline=0&amp;portrait=0&amp;color=13529d' width='550' height='309' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
				echo "<img src=".$cel_img."top_desc.png>";
				$resulta = $xml->xpath("//video/description");

				echo "<p style='margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;font-size:11,5px;'>". $resulta[$i] ."</p>";
				echo "<img src=".$cel_img."bot_desc.png>";
				echo "</div>";

			}


		}

echo "<div class=teksts>";

				echo "
					<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:20px;'>
						<span class=event_title>Video galerija</span><br>
					</div>";
echo "<table class=list_video cellspacing=0 cellpadding=0 style='margin-top:20px;'>";

if (count($xml)==0)
		{
		echo "<tr height=26>
			<td align=center colspan=4 class=tcont1>- saraksts ir tukšs -</td>
			</tr>";
		}


	for ($i = 0; $i < count($xml); $i++)
		{

			$query_select = "SELECT id_video, video_datums, video_nos_ru, video_nos_en FROM web_video WHERE id_video=".$xml->video[$i]->id;
			$result_select = mysqli_query($GLOBALS['connection'], $query_select) or die (mysqli_error($connection));
			$row = mysqli_fetch_array($result_select);
			extract($row);


	echo "
	<tr height=50>";




	//$imagefile=urlencode($xml->video[$i]->thumbnail_small); JA VAJAG IZMANTOT image.php

	echo "
	<td width=105px height=78px align=center valign=middle><img src=".$xml->video[$i]->thumbnail_small." style='border:1px solid lightgray'></td>
	<td class=listmargin width=1060>
		<p style='margin-top: 0px; margin-bottom: 0px'>
			<span style='font-size: 11px; font-family:Tahoma; color: #5A5A5A'>
				Publicēts: ". date('d.m.Y', strtotime($xml->video[$i]->upload_date))."
			</span></p>
		<p style='margin-top: 2px; margin-bottom: 0px'>
			<a href=";if(isset($ser)){echo $ser;} echo "video.php?vid=".$xml->video[$i]->id.">".$xml->video[$i]->title."</a></p><span style='font-size: 11px; font-family:Tahoma; color: #5A5A5A'> ". sec_to_time($xml->video[$i]->duration)." min.
		</span>";

	/*if (strlen($video_datums)>0)
	{echo "<p style='margin-top: 0px; margin-bottom: 0px'><span style='font-size: 11px; font-family:Tahoma; color: #5A5A5A'>Pasākuma datums: ".date("d.m.Y", $video_datums)."</span></p>";}*/

	echo "</td>



		</tr>";

		}

	echo "</table>";


	echo "</div>";
}

else
{

echo "<div class=teksts>";


echo "<table class=list_video cellspacing=0 cellpadding=0 >";

if (count($xml)==0)
		{
		echo "<tr height=26>
			<td align=center colspan=4 class=tcont1>- saraksts ir tukšs -</td>
			</tr>";
		}


	for ($i = 0; $i < count($xml); $i++)
		{

			$query_select = "SELECT id_video, video_datums, video_nos_ru, video_nos_en FROM web_video WHERE id_video=".$xml->video[$i]->id;
			$result_select = mysqli_query($GLOBALS['connection'], $query_select) or die (mysqli_error($connection));
			$row = mysqli_fetch_array($result_select);
			extract($row);


	echo "
	<tr height=50>";




	//$imagefile=urlencode($xml->video[$i]->thumbnail_small); JA VAJAG IZMANTOT image.php

	echo "
	<td width=105px height=78px align=center valign=middle><img src=".$xml->video[$i]->thumbnail_small." style='border:1px solid lightgray'></td>
	<td class=listmargin width=1060>
		<p style='margin-top: 0px; margin-bottom: 0px'>
			<span style='font-size: 11px; font-family:Tahoma; color: #5A5A5A'>
				Publicēts: ". date('d.m.Y', strtotime($xml->video[$i]->upload_date))."
			</span></p>
		<p style='margin-top: 2px; margin-bottom: 0px'>
			<a href=";if(isset($ser)){echo $ser;} echo "video.php?vid=".$xml->video[$i]->id.">".$xml->video[$i]->title."</a></p><span style='font-size: 11px; font-family:Tahoma; color: #5A5A5A'> ". sec_to_time($xml->video[$i]->duration)." min.
		</span>";

	/*if (strlen($video_datums)>0)
	{echo "<p style='margin-top: 0px; margin-bottom: 0px'><span style='font-size: 11px; font-family:Tahoma; color: #5A5A5A'>Pasākuma datums: ".date("d.m.Y", $video_datums)."</span></p>";}*/

	echo "</td>



		</tr>";

		}

	echo "</table>";





echo "</div>";




}

function sec_to_time($sec)
		{

$seconds = $sec;

$hours = floor($seconds / 3600);
$mins = floor(($seconds - $hours*3600) / 60);
$s = $seconds - ($hours*3600 + $mins*60);

$mins = ($mins<10?"0".$mins:"".$mins);
$s = ($s<10?"0".$s:"".$s);

$time = ($hours>0?$hours.":":"").$mins.":".$s;
return $time;
		}
?>
