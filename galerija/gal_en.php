<?php

include("cnn.php");

mysql_query('SET NAMES cp1257') or die (mysql_error($connection));

$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

if (isset($_GET['gid']))
{

echo "

<script type=\"text/javascript\" src=\"../webadm/highslide/highslide-with-gallery.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"../webadm/highslide/highslide.css\" />


<script type=\"text/javascript\">
hs.showCredits = false;
hs.graphicsDir = '../webadm/highslide/graphics/';
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




$query_select_galerija = "SELECT gal_nos_en, gal_date, COUNT(img) AS count FROM web_gal, web_gal_img WHERE gal_id=id_gal AND gal_id=".$_GET['gid']." GROUP BY id_gal";
$result_select_galerija = mysql_query($query_select_galerija, $connection) or die (mysql_error($connection));
$row = mysql_fetch_array($result_select_galerija);
extract($row);
if (strlen($gal_date)>0) {$gal_date="(".date("d.m.Y", $gal_date).")";} else {$gal_date='';}

$query_select_images = "SELECT img FROM web_gal_img WHERE gal_id=".$_GET['gid'];
$result_select_images = mysql_query($query_select_images, $connection) or die (mysql_error($connection));


//NOSAUKUMS GALERIJAI-----------------------

echo '
<table style=\'margin-top:0pt;margin-bottom:6pt\' cellspacing=0 cellpadding=0 border=0>
<TR>
	<TD align="right" width="100">
		<img src="../dizpct/artel.jpg" border="0">
	</TD>
	<TD width="20">
	</TD>
	<TD width="95%" style="font-size: 12pt; font-family: Arial; font-weight: Bold" height="28">'.$gal_nos_en.' '.$gal_date.'
	</TD>
</TR>
</table>';
//---------------------------------


echo "<p style='margin-top:0; margin-bottom:9px; margin-left:24px'><a class=href3 href='javascript:history.back(1)'>&nbsp;<img border=0 src=../ukadm/images/backbullet.png>&nbsp;Back</a></p>";
			
		
		if (mysql_num_rows($result_select_images) > 0)
		{
			echo "
			
			<div class=\"highslide-gallery\"><table border=0 cellspacing=0 cellpadding=0>";
			$i=1;
			$nr=1;
			while ($row212 = mysql_fetch_array($result_select_images))
			{
     		extract($row212);
			
			if ($i==1) {echo "<tr>";}
			
			echo "<td style='text-indent: 3px;' width=125>
			
			
			<a href=\"image.php?path=../gal/$img&width=830&height=600\" class=\"highslide\" onclick=\"return hs.expand(this)\" style='font-size: 9pt'>
	<img width=130 height=104 src=\"image.php?path=../gal/$img&width=130&height=104\" alt=\"$nr. Img\"
		title=\"\" />
</a>
			
			<div class=\"highslide-caption\">
	$gal_date $gal_nos_en. $nr of $count
</div>
			
			
			</td>";
			$nr++;
			
			if ($i==5) {echo "<tr>";}
			$i++;
			if ($i>5) {$i=1;}			
			}
			
			
			echo "</table></div>";
			
		}

}

else
{


//NOSAUKUMS-----------------------

echo '
<table style=\'margin-top:0pt;margin-bottom:6pt\' cellspacing=0 cellpadding=0 border=0>
<TR>
	<TD align="right" width="100">
		<img src="../dizpct/artel.jpg" border="0">
	</TD>
	<TD width="20">
	</TD>
	<TD width="95%" style="font-size: 12pt; font-family: Arial; font-weight: Bold" height="28">
			Photo gallery
		</TD>
</TR>
</table>';
//---------------------------------



$query_select_galerija = "SELECT id_gal, gal_nos_en, gal_date, COUNT(img) AS count FROM web_gal, web_gal_img WHERE gal_id=id_gal AND LENGTH(gal_nos_en)>0 GROUP BY id_gal ORDER BY gal_date DESC";
$result_select_galerija = mysql_query($query_select_galerija, $connection) or die (mysql_error($connection));



echo "
	
	<table class=list cellspacing=0 cellpadding=4>";	

		if (mysql_num_rows($result_select_galerija)==0)
		{
		echo "<tr height=26>
			<td align=center colspan=3 class=tcont1>- saraksts ir tukðs -</td>
			</tr>";
		}
	
	while ($row = mysql_fetch_array($result_select_galerija))
		{
     		extract($row);
			if (strlen($gal_date)>0) {$gal_date=date("d.m.Y", $gal_date);}
			$query_select_thumb = "SELECT img FROM web_gal_img WHERE gal_id=$id_gal LIMIT 1";
			$result_select_thumb = mysql_query($query_select_thumb, $connection) or die (mysql_error($connection));
			
					
	
	
	echo "		
	<tr height=50>";
	

			$row = mysql_fetch_array($result_select_thumb);
			extract($row);
			echo "<td class=list width=50><a class=href3 href=$url&gid=$id_gal><img border=0 src=\"image.php?path=../gal/$img&width=129&height=70\"></img></td>";
			
		
	
	
	echo	"
	
	<td class=list align=left valign=middle width=500><span style='font-size: 11px; font-family:Tahoma; color: #5A5A5A'><div>$gal_date</div></span><a class=href3 href=$url&gid=$id_gal>$gal_nos_en</a></td>
						
					
		</tr>";
		
		}
		
	echo "</table>";
}		
?>