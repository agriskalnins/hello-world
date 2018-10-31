<?php

$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);

$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

$gid=$_GET['gid'];


if (isset($_GET['gid']))
{

echo "

<script type=\"text/javascript\" src=\"galerija/highslide/highslide-with-gallery.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"galerija/highslide/highslide.css\" />


<script type=\"text/javascript\">
hs.showCredits = false;
hs.graphicsDir = 'galerija/highslide/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.fadeInOut = true;
//hs.dimmingOpacity = 0.75;

// Add the controlbar
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: 0.75,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});
</script>

";


$gid=intval($gid);

$query_select_galerija = "SELECT gal_nos, gal_date, COUNT(img) AS count FROM web_gal, web_gal_img WHERE gal_id=id_gal AND gal_id=$gid GROUP BY id_gal";
$result_select_galerija = mysqli_query($GLOBALS['connection'], $query_select_galerija) or die (mysqli_error($connection));

if (mysqli_num_rows($result_select_galerija) > 0)
{
$row = mysqli_fetch_array($result_select_galerija);
extract($row);
}
if (strlen($gal_date)>0) {$gal_date="(".date("d.m.Y", $gal_date).")";} else {$gal_date='';}

$query_select_images = "SELECT img FROM web_gal_img WHERE gal_id=$gid";
$result_select_images = mysqli_query($GLOBALS['connection'], $query_select_images) or die (mysqli_error($connection));


//NOSAUKUMS GALERIJAI-----------------------

echo "<div class='crumb' width=100%>";
	echo "<a href=".$ser."index.php>Sākums</a> &rsaquo; <a href=";if(isset($ser)){echo $ser;} echo "galerija.php>Galerija</a>";
	echo "
		</div>";
	/*Eventa nosaukums*/
	echo "
		<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
			<span class=event_title>" . $gal_nos . " " . $gal_date. "</span><br>
		</div>";

echo "<div class=teksts>";
//---------------------------------


/*echo "<p style='margin-top:0; margin-bottom:9px; margin-left:24px'><a class=href3 href='javascript:history.back(1)'>&nbsp;<img border=0 src=design/backbullet.png>&nbsp;Atpakaļ</a></p>";*/


		if (mysqli_num_rows($result_select_images) > 0)
		{
			echo "

			<div class=\"highslide-gallery\"><table border=0 cellspacing=0 cellpadding=0>";
			$i=1;
			$nr=1;
			while ($row212 = mysqli_fetch_array($result_select_images))
			{
     		extract($row212);

			if ($i==1) {echo "<tr>";}

			echo "<td style='text-indent: 3px;' width=125>


			<a href=\"image.php?path=gal/$img&width=830&height=600\" class=\"highslide\" onclick=\"return hs.expand(this)\" style='font-size: 9pt'>
	<img width=130 height=104 src=\"image.php?path=gal/$img&width=130&height=104\" alt=\"$nr. Attēls\"
		title=\"Palielināt\" />
</a>

			<div class=\"highslide-caption\">
	$gal_date $gal_nos. $nr no $count
</div>


			</td>";
			$nr++;

			if ($i==4) {echo "<tr>";}
			$i++;
			if ($i>4) {$i=1;}
			}


			echo "</table></div>";

		}
echo "</div >";
}

else
{




$query_select_galerija = "SELECT id_gal, gal_nos, gal_date, COUNT(img) AS count FROM web_gal, web_gal_img WHERE gal_id=id_gal GROUP BY id_gal ORDER BY gal_date DESC";
$result_select_galerija = mysqli_query($GLOBALS['connection'], $query_select_galerija) or die (mysqli_error($connection));


echo "<div class=teksts>";
echo "

	<table class=list cellspacing=0 cellpadding=4>";

		if (mysqli_num_rows($result_select_galerija)==0)
		{
		echo "<tr height=26>
			<td align=center colspan=3 class=tcont1>- saraksts ir tukšs -</td>
			</tr>";
		}

	while ($row = mysqli_fetch_array($result_select_galerija))
		{
     		extract($row);
			if (strlen($gal_date)>0) {$gal_date=date("d.m.Y", $gal_date);}
			$query_select_thumb = "SELECT img FROM web_gal_img WHERE gal_id=$id_gal LIMIT 1";
			$result_select_thumb = mysqli_query($GLOBALS['connection'], $query_select_thumb) or die (mysqli_error($connection));


	

	echo "
	<tr height=50>";


			$row = mysqli_fetch_array($result_select_thumb);
			extract($row);
			echo "<td class=list width=50><a class=href3 href=$url?gid=$id_gal><img style='border: solid 2px #13529d;' src=\"image.php?path=gal/$img&width=129&height=70\"></img></td>";




	echo	"

	<td class=list align=left valign=middle width=500><span style='font-size: 11px; font-family:Tahoma; color: #5A5A5A'><div>$gal_date</div></span><a class=href3 href=$url?gid=$id_gal>$gal_nos</a></td>


		</tr>";

		}

	echo "</table>";
	echo "</div >";
}
?>
