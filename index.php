<?php

function stripslashes_deep($val)
{
$val=is_array($val) ? array_map('stripslashes_deep', $val) : stripslashes($val);
return $val;
}

$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);


	$lapas_nosaukums1 = 'Sākums';



	include_once('include/function.php');
	include 'cnn.php';
	include 'conf.php';
	$ser = 'http://' . ServerNos() . '/';
	include 'var.php';

	if (isset($_GET["view"]))
	{
		$ko_skaties = $_GET["view"];
	}
/*----------------------------------------------------------------------------- Galviņa -------------------------------------------------------------------------*/
Show_the_header();

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
echo "      <a href=";if(isset($ser)){echo $ser;} echo"><img src=".$cel_img3."home.png width=18px style='margin-bottom:4px;margin-left:8px;'></a>
				<a href=";if(isset($ser)){echo $ser;} echo"rss/news_rss.php><img src=".$cel_img3."rss.png width=18px style='margin-bottom:4px;margin-left:4px;'></a>";

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
/*echo "		<span style='display: inline-block;vertical-align: middle;line-height: normal;margin-bottom:15px;'><a href=";if(isset($ser)){echo $ser;} echo "print_pdf.php>PDF Tests</a></span>&nbsp;&nbsp;&nbsp;&nbsp;";*/

echo "
        </div>
        <a href=";if(isset($ser)){echo $ser;} echo "><div class='Logo_div'>
             <img src=".$cel_img."ZRKAC_logo.png>
        </div></a>
        <div class='social_div'>
             <a class=social_draugiem href=http://www.draugiem.lv/zrkac>&nbsp;</a>
             <a class=social_facebook href=http://www.facebook.com/pages/Zemgales-re%C4%A3iona-kompeten%C4%8Du-att%C4%ABst%C4%ABbas-centrs/485884298225547?view_public_for=485884298225547>&nbsp;</a>
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
    <div id='content-container'>";

	if (isset($_GET["view"]))
	{
		if ($ko_skaties != null)
		{
			_GetTheCelsh();
		}
		else
		{

			echo "
				<br><br>Sākuma lapa";
		}
	}
			else
		{
//////Rādam aktualitātes funkciju/////////////
		//Show_news();

		include'include/banner.php';
		//include'include/banner_pedagogi.php';


    //////Rādam notikumu atskata funkciju/////////////
    		//Show_reviews();
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
        <div id='footer-right-sidebar' align=left>        ";



        	/* <span id='follow_us' style='font-family:Tahoma; font-size:12px;margin-left:20px;color:#0b3459' ><b>Cita informācija:</b></span><br>
               <ul class=menu-bottom style='list-style-type: disc;'>
               		<li><a href='#'>Iepirkumi</a></li>
               		<li><a  href='#'>Projekti</a></li>
               		<li><a href='#'>Kontakti</a></li>
               		<li><a href='#'>Infolapa</a></li>
               </ul>*/


            /* <span id='follow_us' style='font-family:Tahoma; font-size:12px;margin-left:20px;color:#0b3459' ><b>Mūs var sastapt arī šeit:</b></span><br>
            <a href='http://www.draugiem.lv/ZRKAC' target='_blank'>
            <img style='margin-left:70px; margin-top:10px; border: solid 0px #636363;' alt='draugiem.lv' src='".$cel_img."draugiem.png'  width='40px' height='40px'></a>

            <a href='http://www.facebook.com/' target='_blank'>
            <img style=' margin-top:10px; border: solid 0px #636363;' alt='facebook.com' src='".$cel_img."facebook.png' width='40px' height='40px'></a>

            <a href='http://twitter.com/' target='_blank'>
            <img style=' margin-top:10px; border: solid 0px #636363;' alt='twitter.com' src='".$cel_img."twitter.png' width='40px' height='40px'></a>

            <!--<a href='http://www.youtube.com/' target='_blank'>
            <img style='border: solid 0px #636363;' alt='youtube.com' src='".$cel_img."youtube-.png' style='width: 27px; height: 26px; ' width='27' height='26'></a>-->*/

echo "  </div> ";
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
echo "<div id=footer_links>";

echo "    <!--<a href=#>Informācija</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"JavaScript:newPopup('http://www.zrkac.lv/RMums.php');\">Atsauksmes/Ieteikumi</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"JavaScript:newPopup('http://www.zrkac.lv/MA.php');\">Mēs atrodamies</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=".$ser. "index.php?view=kontakti>Kontakti</a><br />";
echo "Dizains un izstrāde: ZRKAC &#169; 2018<br>";






echo"
</div>
    </body>
	</html>";

?>
