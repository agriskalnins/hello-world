<?php




echo "

	<table style='border-collapse: collapse; border: 0px' cellspacing=0 cellpadding=0>";

$query_select = "SELECT id_sp, sp_nosaukums, sp_web, sp_logo FROM web_sadpartneri, web_valstis WHERE id_valsts=valsts_id AND valsts_nos='Latvija' ORDER BY sp_nosaukums";
$result_select = mysqli_query($GLOBALS['connection'], $query_select) or die (mysql_error($connection));
		if (mysqli_num_rows($result_select)==0)
		{
		echo "<tr height=26>
			<td align=center colspan=3 class=tcont1>- saraksts ir tukšs -</td>
			</tr>";
		}
		else
		{
	$i=0;
	$j=0;
	$col=3; //kolonu skaits
	$cnt=mysqli_num_rows($result_select);
	$atl=mysqli_num_rows($result_select)%$col;
	while ($row = mysqli_fetch_array($result_select))
		{
     		extract($row);

	if ($i==0)
	{echo "
	<tr height=50>";}

	if (strlen($sp_logo)>0){$pding='16px';}else{$pding='66px';}

		if (strlen($sp_web)>0)
		{
	echo "

	<td class=listmargin class=tcont style='padding: $pding 0 16px 0; width: 188px' align=center valign=top>";

	if (strlen($sp_logo)>0)
	{
	echo "<a class=static href='http://$sp_web' target=_blank><span style='display: block'>
	<div class=roundshadow style='width: 154px; height: 144px; vertical-align: middle; display: table-cell'>
	<img style='display: block' src=image.php?path=./splogo/$sp_logo&width=120>
	</div></span></a>";
	}

	echo "<p style='margin: 12px 10px 0 10px; text-indent: 0'><a class=static href='http://$sp_web' target=_blank>
	<span style='font-size: 10.0pt;font-family:Arial;color:black'>$sp_nosaukums</span></a></p>
	<a class=static href='http://$sp_web' target=_blank><span style='font-size: 11px; font-family:Tahoma; color: #5A5A5A'>$sp_web</span></a>
	</td>";
		}

		else
		{

		echo "

	<td class=listmargin class=tcont style='padding: $pding 0 16px 0; width: 188px' align=center valign=top>";

	if (strlen($sp_logo)>0)
	{
	echo "<span style='display: block'>
	<div class=roundshadow style='width: 154px; height: 144px; vertical-align: middle; display: table-cell'>
	<img style='display: block' src=image.php?path=./splogo/$sp_logo&width=120>
	</div></span>";
	}

	echo "<p style='margin: 12px 10px 0 10px; text-indent: 0'>
	<span style='font-size: 10.0pt;font-family:Arial;color:black'>$sp_nosaukums</span></p>

	</td>";

		}



	$i++;
	$j++;

		/*if($cnt==$j and $atl>0)
				{
				for($tdi=0 ; $tdi<$col-$atl ; $tdi++){echo"<td>liekais</td>";}

		}*/
		if ($i==$col)
			{
			echo "</tr>"; $i=0;
			}

		}//while


		}//else

	echo "</tr></table>";








$query_select_valsts = "SELECT DISTINCT id_valsts, valsts_nos FROM web_sadpartneri, web_valstis WHERE id_valsts=valsts_id AND valsts_nos<>'Latvija' ORDER BY valsts_nos";
$result_select_valsts = mysqli_query($GLOBALS['connection'], $query_select_valsts) or die (mysql_error($connection));

if (mysqli_num_rows($result_select_valsts)>0)
		{

		echo "<p style='font-size: 10.0pt;font-family:Tahoma;color:#444; margin: 36px 0 -10px 0; text-indent: 4px'><b>Sadarbība starptautiskajos projektos</b></p>";

while ($rowv = mysqli_fetch_array($result_select_valsts))
		{
     	extract($rowv);
		echo "<p style='font-size: 10pt;font-family:Tahoma;color:#444; margin: 20px 0 6px 0;text-indent: 4px'>$valsts_nos</p>";




		echo "<table style='border-collapse: collapse; border: 0px' cellspacing=0 cellpadding=0>";
$query_select = "SELECT id_sp, sp_nosaukums, sp_web, sp_logo FROM web_sadpartneri, web_valstis WHERE id_valsts=valsts_id AND valsts_id=$id_valsts ORDER BY sp_nosaukums";
$result_select = mysqli_query($GLOBALS['connection'], $query_select) or die (mysql_error($connection));
		if (mysqli_num_rows($result_select)==0)
		{
		echo "<tr height=26>
			<td align=center colspan=3 class=tcont1>- saraksts ir tukšs -</td>
			</tr>";
		}
		else
		{
	$i=0;
	$j=0;
	$col=3; //kolonu skaits
	$cnt=mysqli_num_rows($result_select);
	$atl=mysqli_num_rows($result_select)%$col;
	while ($row = mysqli_fetch_array($result_select))
		{
     		extract($row);

	if ($i==0)
	{echo "
	<tr height=50>";}

	if (strlen($sp_logo)>0){$pding='16px';}else{$pding='66px';}



	if (strlen($sp_web)>0)
		{
	echo "

	<td class=listmargin class=tcont style='padding: $pding 0 16px 0; width: 188px' align=center valign=top>";

	if (strlen($sp_logo)>0)
	{
	echo "<a class=static href='http://$sp_web' target=_blank><span style='display: block'>
	<div class=roundshadow style='width: 154px; height: 144px; vertical-align: middle; display: table-cell'>
	<img style='display: block' src=image.php?path=./splogo/$sp_logo&width=120>
	</div></span></a>";
	}

	echo "<p style='margin: 12px 10px 0 10px; text-indent: 0'><a class=static href='http://$sp_web' target=_blank>
	<span style='font-size: 10.0pt;font-family:Arial;color:black'>$sp_nosaukums</span></a></p>
	<a class=static href='http://$sp_web' target=_blank><span style='font-size: 11px; font-family:Tahoma; color: #5A5A5A'>$sp_web</span></a>
	</td>";
		}
		else
		{
		echo "

	<td class=listmargin class=tcont style='padding: $pding 0 16px 0; width: 188px' align=center valign=top>";

	if (strlen($sp_logo)>0)
	{
	echo "<span style='display: block'>
	<div class=roundshadow style='width: 154px; height: 144px; vertical-align: middle; display: table-cell'>
	<img style='display: block' src=image.php?path=./splogo/$sp_logo&width=120>
	</div></span>";
	}

	echo "<p style='margin: 12px 10px 0 10px; text-indent: 0'>
	<span style='font-size: 10.0pt;font-family:Arial;color:black'>$sp_nosaukums</span></p>
	</td>";
		}


	$i++;
	$j++;

		/*if($cnt==$j and $atl>0)
				{
				for($tdi=0 ; $tdi<$col-$atl ; $tdi++){echo"<td>liekais</td>";}
				}*/

		if ($i==$col)
			{
			echo "</tr>"; $i=0;
			}

		}//while


		}//else

	echo "</tr></table>";


		}
		}





?>
