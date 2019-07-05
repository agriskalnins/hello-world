<?php

function stripslashes_deep($val)
{
$val=is_array($val) ? array_map('stripslashes_deep', $val) : mysql_real_escape_string($val);
return $val;
}

$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);


	include_once('include/function.php');
	include 'cnn.php';
	include 'conf.php';
	$ser = 'http://' . ServerNos() . '/';
	include 'var.php';



	$notikuma_id = strip_tags($_GET["id"]);

	$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
	$GadaMenesisD = array("janvārī","februārī","martā","aprīlī","maijā","jūnijā","jūlijā","augustā","septembrī","oktobrī","novembrī","decembrī");
	$GadaMenesiskam = array("janvārim","februārim","martam","aprīlim","maijam","jūnijam","jūlijam","augustam","septembrim","oktobrim","novembrim","decembrim");
	$NedelasDiena = array("Pirmdiena", "Otrdiena", "Trešdiena", "Ceturtdiena", "Piektdiena", "Sestdiena", "Svētdiena");
	$NedelasDienaD = array("Pirmdien", "Otrdien", "Trešdien", "Ceturtdien", "Piektdien", "Sestdien", "Svētdien");
	$html_tagi = array("<b>", "</b>", "<i>", "</i>", "<B>", "</B>", "<strong>", "</strong>", "<p>", "</p>", "<stop>", "style", "</span>", "<br />");


	$result = mysqli_query($GLOBALS['connection'], "SELECT *
							FROM
								web_notikumi_laiki kad,
								web_notikumi kas
							WHERE kas.id_not = kad.not_id
							AND kas.id_not = '$notikuma_id'
							")or die(mysqli_error());

	$row = mysqli_fetch_array($result);

	$lapas_nosaukums1 = $row['not_nosaukums'];
	$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';
/*----------------------------------------------------------------------------- Galviņa -------------------------------------------------------------------------*/
	echo "
    	<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//LV' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    	<html xmlns='http://www.w3.org/1999/xhtml'>
    	<head>
    	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

    	<title>" . $lapas_nosaukums1. "- Zemgales reģiona Kompetenču attīstības centrs</title>
    	<link rel='shortcut icon' href='favicon.ico'>
    	<link href='css/style.css' type='text/css' rel='StyleSheet'>
    	<link rel='stylesheet' href='css/print.css' type='text/css' media='print' />


		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js' type='text/javascript'></script>
		<!--script src='js/jquery.lint.js' type='text/javascript' charset='utf-8'></script-->
		<link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='screen' title='prettyPhoto main stylesheet' charset='utf-8' />
		<script src='js/jquery.prettyPhoto.js' type='text/javascript' charset='utf-8'></script>


		<script type=\"text/javascript\" src=\"css/sdmenu.js\">	</script>
		<script type=\"text/javascript\">
			// <![CDATA[
			var myMenu;
			window.onload = function() {
				myMenu = new SDMenu(\"my_menu\");
				myMenu.init();
			};
			// ]]>
		</script>


    </head>
    <body>";
	include_once("counter.php");

/*----------------------------------------------------------------------------- Bodijs -------------------------------------------------------------------------*/

echo "

<div id='outer-container'>
	<div class='back_tulip'>
    	<img src=".$cel_img."back_tulip.png>
	</div>";
/*----------------------------------------------------------------------------- Lapas galvas sadaļa tops, logo un c --------------------------------------------*/
echo "
    <div id='header'>
    	<div class='top_schortcut'>
    		<a href=";if(isset($ser)){echo $ser;} echo"><img src=".$cel_img3."lv.png width=22px></a>
			<a href=";if(isset($ser)){echo $ser;} echo"en><img src=".$cel_img3."en.png width=22px style='margin-left:3px;'></a>
    		<a href=";if(isset($ser)){echo $ser;} echo"ru><img src=".$cel_img3."ru.png width=22px style='margin-left:3px;'></a>";
echo "      <a href=";if(isset($ser)){echo $ser;} echo"><img src=".$cel_img3."home.png width=18px style='margin-bottom:4px;margin-left:8px;'></a>";

echo "<script type=\"text/javascript\">
			// Popup window code
			function newPopup(url) {
				popupWindow = window.open(
				url,'popUpWindow','height=600,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
			}
			</script>";
echo "		<a href=\"JavaScript:newPopup('http://www.zrkac.lv/RMums.php');\"><img src=".$cel_img3."mail.png width=22px style='margin-right:2px;margin-left:8px;'></a>";
echo "		<a href=\"JavaScript:newPopup('http://www.zrkac.lv/RMums.php');\"><span style='display: inline-block;vertical-align: middle;line-height: normal;margin-bottom:15px;'>Rakstīt mums</span></a>";


echo "		<a href=\"JavaScript:newPopup('http://www.zrkac.lv/MA.php');\"><img src=".$cel_img3."map.png width=20px style='margin-bottom:2px;margin-left:8px;'></a>
			<a href=\"JavaScript:newPopup('http://www.zrkac.lv/MA.php');\"><span style='display: inline-block;vertical-align: middle;line-height: normal;margin-bottom:15px;'>Mēs atrodamies</span></a>";
echo "		<a href=";if(isset($ser)){echo $ser;} echo "kna/index.php><img src=".$cel_img3."check.png style='margin-bottom:5px;margin-left:8px;'></a>
			<span style='display: inline-block;vertical-align: middle;line-height: normal;margin-bottom:15px;'><a href=";if(isset($ser)){echo $ser;} echo "kna/index.php><b>Kursu anketa</b></a></span>";

echo "<script type=\"text/javascript\">
			// Popup window code
			function newPopup(url) {
				popupWindow = window.open(
				url,'popUpWindow','height=600,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
			}
			</script>";
echo "		<a href=\"JavaScript:newPopup('http://www.zrkac.lv/piet.php');\"><img src=".$cel_img3."piet.png width=22px style='margin-left:8px;'></a>";
echo "		<span style='display: inline-block;vertical-align: middle;line-height: normal;margin-bottom:15px;'><a href=\"JavaScript:newPopup('http://www.zrkac.lv/piet.php');\">Pieteikties</a></span>";


echo "<script type=\"text/javascript\">
			// Popup window code
			function newPopup2(url) {
				popupWindow = window.open(
				url,'popUpWindow','height=800,width=1000,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
			}
			</script>";
echo "		<a href=\"JavaScript:newPopup2('http://www.zrkac.lv/diag/menu.php');\"><img src=".$cel_img3."tests.png width=20px style='margin-bottom:2px;margin-left:8px;'></a>";
echo "		<span style='display: inline-block;vertical-align: middle;line-height: normal;margin-bottom:15px;'><a href=\"JavaScript:newPopup2('http://www.zrkac.lv/diag/menu.php');\">Diagnostikas tests</a></span>&nbsp;&nbsp;&nbsp;&nbsp;";


echo "
        </div>
        <a href=";if(isset($ser)){echo $ser;} echo "><div class='Logo_div'>
             <img src=".$cel_img."ZRKAC_logo.png>
        </div></a>
        <div class='social_div'>
             <a class=social_draugiem href=http://www.draugiem.lv/zrkac>&nbsp;</a>

             <!--<a class=social_facebook href=#>&nbsp;</a>-->
        </div>
        <div class='divClear'>
        </div>
    </div>
    <div style='clear: both'>
    </div> ";
/*-----------------------------------------------------------------------------------Lapas galvas sadaļas beigas------------------------------------------------*/

/*-------------------------------------Maza balta strīpiņa --------------------------*/
echo "
        <div id='footer_wraper_top'>
        </div>";
/*-----------------------------------------------------------------------------------*/

/*----------------------------------------------------------------------------- Zilā Līnija Top navigācijā --------------------------------------------------------------*/
echo "
	<div id='top_navig'>";

		include_once('include/top_menu.php');

echo "
	</div>";
/*----------------------------------------------------------------------------- Beidzās zilā linija top navigācijā -----------------------------------------------------*/
echo "
    <div style='clear: both'>
    </div>

    <div id='left-sidebar' >";

		include_once('include/side_menu.php');
echo "
    </div> ";

/*----------------------------------------------------------------------------- Te nāks ziņas un visi citi zvēri -----------------------------------------------*/
echo "
    <div id='content-container' style='	min-height:456px;'>";
	if ($row == null)
	{
		echo "<meta http-equiv='refresh' content='0;url=".$ser."'>";
	}
	else {

	$notik_tips = $row['not_tips_id'];

	$piev_laiks = strtotime('+1 hour',$row['not_piev_laiks']);
	$labot_laiks = strtotime('+1 hour',$row['not_red_laiks']);
	$not_laiks = strtotime('+1 hour',$row['not_laiks']);
	$not_laiks_lidz = strtotime('+1 hour',$row['not_laiks_lidz']);


	/*kursi aktuāli tipam piešķir rediģēto laiku pārējiem pievienoto*/

	if ($notik_tips == 14)
	{
		$laiksnotikumam = $labot_laiks;
	}
	else
	{
		$laiksnotikumam = $piev_laiks;
	}
	/******************************************************/

	/*Lapas ceļš*/
	echo "<div class='crumb' width=100%>";
	echo "<a href=".$ser."index.php>Sākums</a> &rsaquo; <a href=#>Notikuma kalendārs</a>";
	echo "
		</div>";
	/*Eventa nosaukums*/
	echo "
		<div class=event_tittle_space align=left style='margin-top:20px;margin-left:17px;margin-bottom:0px;'>
			<span class=event_title>". $row['not_nosaukums'] ."</span><br>
		</div>";
	echo "
		<div class=laiks width=100%>Publicēts: ";
	echo	$NedelasDienaD[date('N', $laiksnotikumam)-1] . ", ". date('Y', $laiksnotikumam) . ". gada " . date('j.', $laiksnotikumam) . " " . $GadaMenesisD[date('n ', $laiksnotikumam)-1] ." " . date('G:i', $laiksnotikumam);
	/*laiks un printeris*/
	echo "
		<a href='#' target='_blank' onclick='window.print();return false;'><img src=".$cel_img3."print.png width=16px style='margin-right:2px;margin-left:8px;margin-bottom:-3px;'> </a></div>";

	/*Notikuma tagi*/
	echo "
		<div class=teksts>";
		$stunda = date('H', $not_laiks);
		$minute = date('i', $not_laiks);

		if ($stunda == '00' && $minute == '00' && $row['not_tips_id'] == '1')
		{
			echo "<br>";
		}
		elseif ($row['not_tips_id'] == '1')
		{

			if ($row['not_vieta'] != "")
			{
				echo "<strong>Vieta</strong>: ". $row['not_vieta']."<br>";
			}
		}
		elseif ($stunda == '00' && $minute == '00' && $row['not_tips_id'] == '11') //tips "11" - citas izglītības iestāžu pasākumi
		{
			//echo "<strong>Datums</strong>: Līdz " . date('d', $not_laiks) . ". " . $GadaMenesiskam[date('n ', $not_laiks)-1] . "<br>";
			if ($row['not_vieta'] != "")
			{
				echo "<strong>Vieta</strong>: ". $row['not_vieta']."<br>";
			}
			if ($row['not_atbildigais'] != "")
			{
				echo "<strong>Atbildīgais</strong>:  ".$row['not_atbildigais']."<br>";
			}
		}
		else
		{
			//echo "<strong>Datums</strong>:  ".date('d', $not_laiks) . "." . date('m', $not_laiks) . "." . date('Y', $not_laiks) . "  " .date('H', $not_laiks) . "<sup>" . date('i', $not_laiks) . "</sup> ";
			if ($row['not_laiks_lidz'] !=NULL)
			{
				//echo "- " . date('H', $not_laiks_lidz) . "<sup>" . date('i', $not_laiks_lidz) . "</sup><br>";
			}else{
				echo "<br>";
			}
			if ($row['not_vieta'] != "")
			{
				echo "<strong>Vieta</strong>: ". $row['not_vieta']."<br>";
			}
			if ($row['not_atbildigais'] != "")
			{
				echo "<strong>Atbildīgais</strong>:  ".$row['not_atbildigais']."<br>";
			}
		}

echo"		</div>";


	/*banerim vieta*/
	if ($row['not_banners']!= NULL)
	{
		echo "
			<div class=banners align=center>
				<img src=". $banner_img . $row['not_banners'] . ">
			</div>";
	}

	/*teksta izklāsts*/
	echo "
		<div class=event_teksts>";



		//ja apraksta zonā ir mazāk teksta par 9 zīmēm, tad ir atskats
		if (strlen($row['not_apraksts']) < 9)
		{
			//bilde pie raksta
			if ($row['not_titulbilde'] == NULL)
			{

			}
			else
			{
				echo "<img src='" . $Notikuma_titulbilde . $row['not_titulbilde'] . "' width=250 style='float:right; padding-left:15px;'>";
			}
				//raksts par bijušo pasākumu kas bija
			echo $row['not_atskats'];

		}
		else {
				//bilde pie raksta
				if ($row['not_titulbilde'] == NULL)
				{

				}
				else
				{
				echo "<img src='" . $Notikuma_titulbilde . $row['not_titulbilde'] . "' width=250 style='float:right; padding-left:15px;'>";
				}

				//raksts par nākamo pasākumu - kas būs
				echo $row['not_apraksts'];
		}


	echo "
		</div>";
			/*Atrod raksta galeriju*/
					$idn=$row['id_not']; //iegūst notikuma id
		   			$result_gal = mysqli_query($GLOBALS['connection'], "SELECT gal_id_not, gal_id_gal FROM web_notikumi_gal WHERE gal_id_not=$idn");	//atlasa notikuma galerija kur ir galerijas id pēc notikuma id
					$row_gal = mysqli_fetch_array($result_gal);
					if ($row_gal['gal_id_gal'] == null) // ja notikuma galerijas id ir tuksh
					{
						echo "";
					}
					else
					{
						echo "
							<div class=galerija>";
						echo "<img src=img/photo.png width=14px border=0> <span style='font-size:16px;'>  Galerija</span><br><br>";

						$idg = $row_gal['gal_id_gal'];  // atlasa pašu galeriju kas bija pie notikuma galerijas id
						$result_galeri = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_gal WHERE id_gal=$idg"); //atlasa galeriju ar tādu pašu id kads bija pie notikuma
						$row_galeri = mysqli_fetch_array($result_galeri);
							echo "<span style='font-size:14px;font-weight:bold'>" . $row_galeri['gal_nos'] . "</span><br>"; //iegūst galerijas nosaukumu
						$galerijasnosaukums = $row_galeri['gal_nos'];

						$result_bildes = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_gal_img WHERE gal_id=$idg"); //atlasa bildes kas bija pie šīs galerijas id

						echo "<ul class='gallery clearfix'>";
						while ($row_bildes= mysqli_fetch_array($result_bildes))
						{
							$bilde = $row_bildes['img'];
							echo "<li class='bildes'><a href='" . $galery_images . $bilde . "' rel='prettyPhoto[gallery2]'><img src='" . $galery_images . $bilde . "' width=100px  alt='$galerijasnosaukums' border=0 style='margin:3px;' /></a></li>";

						}
						echo "</ul>";


						echo "
							</div>";

					}
			/*Atrod raksta pielikumus*/
					$result_fil = mysqli_query($GLOBALS['connection'], "SELECT * FROM web_notikumi_files WHERE file_not_id=$idn");


					$count = @mysqli_num_rows($result_fil);


					if($count != 0)
					{

						echo "
							<div class=pielikumi>";
						echo "  <img src=img/att.png width=14px border=0> <span style='font-size:16px;'>  Pielikumi</span><br><br>";



						while ($row_files= mysqli_fetch_array($result_fil))
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
											echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
											break;
									    case 'pptx':
											echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
											break;
									    case 'doc':
											echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
											break;
										case 'docx':
											echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
											break;
										case 'xls':
											echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
											break;
										case 'xlsx':
											echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
											break;
										case 'pdf':
											echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
											break;
										case 'png':
											echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
											break;
										case 'gif':
											echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
											break;
										case 'jpeg':
											echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
											break;
										case 'jpg':
											echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
											break;
										default:
											echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=25px border=0 align=middle style='margin-right:10px;'>";
											echo $dok_nosaukums;
											echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
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
												echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
												break;
										    case 'pptx':
												echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/powerpoint_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
												break;
										    case 'doc':
												echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
												break;
											case 'docx':
												echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/word_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
												break;
											case 'xls':
												echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
												break;
											case 'xlsx':
												echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/excel_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
												break;
											case 'pdf':
												echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/pdf_icon.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
												break;
											case 'png':
												echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
												break;
											case 'gif':
												echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
												break;
											case 'jpeg':
												echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
												break;
											case 'jpg':
												echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/picture.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
												break;
											default:
												echo "  <p><a href=" . $attachment_path . $row_files['file_name'] . " ><img src=design/other.png width=20px border=0 align=middle style='margin-right:10px;'>";
												echo $dok_nosaukums;
												echo "</a><span class=downloade style='margin-left:5px; font-size:10px; color:#7c7c7c;'><a href=" . $attachment_path . $row_files['file_name'] . ">Lejuplādēt</a></span></p>";
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







	/*Atgriešanās poga*/
echo "
		<div width=100% style='margin-top:45px;margin-left:17px;margin-bottom:10px;'>
			<a href='#' onclick='history.go(-1);return false;'><b>&#139;</b> Atgriezties</a>
		</div>";
}
echo "
	</div> ";



/*----------------------------------------------------------------------------- Te beidzas ziņas un visi citi zvēri -----------------------------------------------*/

/*----------------------------------------------------------------------------- Labā puse -----------------------------------------------*/
echo "
	<div id='right-sidebar'>
    	<div id='right-sidebar-content'>

			<div class='top_time' align=center>
      			<input type='hidden' value='' id='your_time_seconds'>";
?>
		 <script type="text/javascript">

		function runTimeSeconds(source, target)
		{

		    hours = parseInt(document.getElementById(source).value/3600);
		    if (hours < 10)
		    {
		      hours = '0' + hours;
		    }

		    pom = document.getElementById(source).value%3600;

		    minutes = parseInt(pom/60);
		    if (minutes < 10)
		    {
		      minutes = '0' + minutes;
		    }

		    seconds = pom%60;
		    if (seconds < 10)
		    {
		      seconds = '0' + seconds;
		    }

		    document.getElementById(target).innerHTML = hours + ":" + minutes + ":" + seconds;
		    document.getElementById(source).value = parseInt(document.getElementById(source).value) + 1;

		    if (document.getElementById(source).value >= (24*60*60))
		    {
		      document.getElementById(source).value = document.getElementById(source).value - (24*60*60);
		    }

		    timerID = setTimeout("runTimeSeconds('" + source + "', '" + target + "')", 1000);

		  }

		  </script>

		  			<script type="text/javascript">
					var currentTime = new Date()
					var hours = currentTime.getHours()
					var minutes = currentTime.getMinutes()
					var seconds = currentTime.getSeconds()

					var kopa = (hours*3600)+(minutes*60)+seconds

					document.getElementById('your_time_seconds').value = kopa;

 				</script>
<?php

$today = getdate();
$sodiendiena = $today['mday'];
$sodienmen = $today['mon'];
$sodiengads = $today['year'];

echo "
      			<div><a href=";if(isset($ser)){ echo $ser;}echo"index.php?view=calendar&dat=". $sodiengads . "-" . $sodienmen . "-" . $sodiendiena . " class='link' style='color: #13529d;'>";
echo " 			<img src=".$cel_img."clock.png border=0 height=18px style='margin-bottom:-3px'></a>
				<a href=";if(isset($ser)){ echo $ser;}echo"index.php?view=calendar&dat=". $sodiengads . "-" . $sodienmen . "-" . $sodiendiena . " class='link' style='color: #13529d;'><span id='your_time'></span></a>
	  			<script>
        			runTimeSeconds('your_time_seconds', 'your_time');
      			</script></div>
			</div>";
include('include/calendar.php');

	/*include('include/eprasmes.php');*/
echo"
    	<br><br>";
echo "
		<a href=".$ser. "event.php?id=4015><img src=".$cel_img."VIAA_Macibas_pieaugusajiem_lv.gif border=0 width='214px' style='margin-bottom:10px;'></a><br>
		<a href=".$ser. "index.php?view=group&group=12&id=80><img src=".$cel_img."Fastrackids.gif border=0 width='214px' style='margin-bottom:10px;'></a><br>
        <a href=http://www.nacionaliedargumi.lv><img src=".$cel_img."ND_baneris.jpg border=0 width='214px' style='margin-bottom:10px;'></a><br>
		<a href=http://www.zrkac.lv/event.php?id=4818><img src=".$cel_img."VeselibasVeicinasana.gif border=0 width='214px' style='margin-bottom:10px;'></a><br>
		<a href=http://e-studijas.zrkac.lv><img  src=".$cel_img."estudijas.jpg  border=0 style='margin-bottom:10px;'></a><br>
    	<a href=".$ser. "uk.php><img src=".$cel_img."Zemg_uzn_kat.png border=0></a><br>";
include('include/photo.php');
include('include/video.php');
echo "<br><br>
    	</div>
        <div id='right-sidebar-bottom'>";

      	include 'sadarbiba.php';

echo "
        </div>
    </div>";
/*----------------------------------------------------------------------------- te beidzas labās puses mala -----------------------------------------------*/
echo "
    <div style='clear: both'>
        </div>";


/*-------------------------------------Maza balta strīpiņa --------------------------*/
echo "
        <div id=footer_wraper>

        </div>";
/*-----------------------------------------------------------------------------------*/



/*----------------------------------------------------------------------------- Zilā Līnija foterā --------------------------------------------------------------*/
echo "
	<div id='footer'>
        <!--<img style='border:0px; vertical-align: middle; margin-left:25px; margin-right:5px;' alt='Info' src=".$cel_img."info.png height=17px><span style=' margin-top:0px; border: solid 0px #636363; color:#FFF;'>";
echo "  <a href=".$ser."index.php?view=FAQ>Informācija</a></span>-->";
echo "  <a href=\"JavaScript:newPopup('http://www.zrkac.lv/RMums.php');\"><img  style='border:0px; vertical-align: middle; margin-left:25px; margin-right:5px;' alt='Raksti mums' src=".$cel_img."mail2.png height=20px></a><span style=' margin-top:0px;border: solid 0px #636363; color:#FFF;'><a href=\"JavaScript:newPopup('http://www.zrkac.lv/RMums.php');\">Rakstīt mums</a></span>
        <a href=\"JavaScript:newPopup('http://www.zrkac.lv/MA.php');\"><img style='border:0px; vertical-align: middle; margin-left:25px; margin-right:5px;' alt='Karte' src=".$cel_img."map.png height=17px><span style='margin-top:0px; margin-bottom:5px; border: solid 0px #636363; color:#FFF;'></a><a href=\"JavaScript:newPopup('http://www.zrkac.lv/MA.php');\">Mēs atrodamies</a></span>
    </div>";
/*----------------------------------------------------------------------------- Beidzās zilā linija foterā -----------------------------------------------------*/







/*--------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------- Zem zilās linijas fotera laukums -----------------------------------------------*/
echo "
    <div class='fotter_middle' align=center style='margin-top:-3px; margin-bottom:-6px;'>";
/*------------------------------------- Kreisā puse footerā ------------------------*/
echo "
        <div id='footer-left-sidebar'>
            <a href='".$ser."index.php'>
            <img style='border: solid 0px #636363;' alt='Zemgales reģiona Kompetenču attīstības centrs' src='".$cel_img."ZRKAC_logo.png' width='260px' ></a>
            <p align=left style='margin-top: -10px; margin-bottom: 20px' class=graytext>Svētes iela 33, Jelgava, LV-3001<br>
            Tālr.:63082101; Fakss: 63007033<br>
            E-pasts:birojs@zrkac.jelgava.lv<br>
            www.zrkac.lv</p>
        </div>";
/*------------------------------------- vidus  footerā ----------------------------*/
echo "
        <div id='footer-content-container'>

        </div>";
/*-------------------------------------Labā puse footerā --------------------------*/
echo "
        <div id='footer-right-sidebar' align=left>";/*
            <span id='follow_us' style='font-family:Tahoma; font-size:12px;margin-left:20px;color:#0b3459' ><b>Mūs var sastapt arī šeit:</b></span><br>
            <a href='http://www.draugiem.lv/ZRKAC' target='_blank'>
            <img style='margin-left:70px; margin-top:10px; border: solid 0px #636363;' alt='draugiem.lv' src='".$cel_img."draugiem.png'  width='40px' height='40px'></a>

            <a href='http://www.facebook.com/' target='_blank'>
            <img style=' margin-top:10px; border: solid 0px #636363;' alt='facebook.com' src='".$cel_img."facebook.png' width='40px' height='40px'></a>

            <a href='http://twitter.com/' target='_blank'>
            <img style=' margin-top:10px; border: solid 0px #636363;' alt='twitter.com' src='".$cel_img."twitter.png' width='40px' height='40px'></a>

            <!--<a href='http://www.youtube.com/' target='_blank'>
            <img style='border: solid 0px #636363;' alt='youtube.com' src='".$cel_img."youtube-.png' style='width: 27px; height: 26px; ' width='27' height='26'></a>-->*/
echo "
        </div> ";
/*-----------------saglabājam trīs skaistas kolonnas un veidojam vienu jaunu ---------*/
echo "
        <div style='clear: both'>
        </div>";
/*-------------------------------------Maza balta strīpiņa --------------------------*/
echo "
        <div id=footer_wraper>
        </div>
    </div>";
/*-----------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------- Zem zilās linijas fotera laukuma beigas-----------------------------------------------*/


/*----------------------------------------------------------------------------- noslēdzošais tags Outerconteineram (lapas satura laukam)------------------------------*/
echo "
</div>";





/*-------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------- Zem lapas paraksts un copyrights-----------------------------------------------*/
echo "<div id=footer_links>
    <!--<a href=#>Informācija</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--><a href=\"JavaScript:newPopup('http://www.zrkac.lv/RMums.php');\">Atsauksmes/Ieteikumi</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"JavaScript:newPopup('http://www.zrkac.lv/MA.php');\">Mēs atrodamies</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=".$ser. "index.php?view=kontakti>Kontakti</a><br /> Dizains un izstrāde: ZRKAC &#169; 2013
</div>
    </body>
	</html>";

?>
			<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();

				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'pp_default',slideshow:4000, autoplay_slideshow: false});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',slideshow:10000, hideflash: true});

				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:160px; height:165px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
			});
			</script>
