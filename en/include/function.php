<?php

/************************************************************  jānomaina pie function Show_news()***********************/


/************************************************************  jānomaina pie function Show_review()***********************/




/*------------------------------------------PPaŗadam lapas saturu no faila------*/
function Show_the_header()
{
	echo "
    	<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//LV' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    	<html xmlns='http://www.w3.org/1999/xhtml'>
    	<head>
    	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    
    	<title>" . Show_the_pageTitle(). "</title>
    	<link rel='shortcut icon' href='./favicon.ico'>
    	<link href='css/style.css' type='text/css' rel='StyleSheet'>
		<script type=\"text/javascript\" src=\"css/tinybox.js\"></script>
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
}

function Show_the_pageTitle()
{
	if (isset($_GET["view"])) 
	{
		$ko_skaties = $_REQUEST["view"];
	
		if ($ko_skaties != null) 
		{
			$incFile = $ko_skaties.".php";
			ob_start();
			include($incFile);
			ob_end_clean();
			if (isset($lapas_nosaukums1)) 
			{
	 			return $lapas_nosaukums1 . " - Zemgale Region Human Resource and Competences Development Centre";
	 		} 
	 		else 
	 		{
	 			return "Zemgale Region Human Resource and Competences Development Centre";
	 		}
		}
		else 
		{
			return "Zemgale Region Human Resource and Competences Development Centre";
		}
	}
	else 
		{
			return "Zemgale Region Human Resource and Competences Development Centre";
		}
}

function _GetTheCelsh_without_inc()
{
	$ko_skaties = $_REQUEST["view"];
	
	if ($ko_skaties != null) 
	{
		$filename = $ko_skaties.".php";
		_CheckOfExist_without_inc($filename);
		return $filename;
	} 
	else 
	{
		_CheckOfAnotherExist_without_inc($filename);
		return $filename;
	}
	
}
/*------------------------------------------Pārbaudam faila eksistenci------*/
function _CheckOfExist_without_inc($filename)
{
	if(file_exists($filename))
	{
		$incFile = $filename;
	} 
	else
	{
		 $incFile = '/include/' . $filename;
	}
	
	return $incFile;
}
/*------------------------------------------Pārbaudam faila eksistenci citā mapē------*/
function _CheckOfAnotherExist_without_inc($filename)
{
	$includefile = "/include/". $filename;
	if(file_exists($includefile))
	{
		$incfile = $includefile;
	} 
	else 
	{
	 	$incfile = "Nothing special ";	
	}
}

function _GetTheCelsh()
{
	$ko_skaties = $_REQUEST["view"];
	
	if ($ko_skaties != null) 
	{
		$filename = $ko_skaties.".php";
		_CheckOfExist($filename);
	} 
	else 
	{
		_CheckOfAnotherExist($filename);
	}
	
}
/*------------------------------------------Pārbaudam faila eksistenci------*/
function _CheckOfExist($filename)
{
	if(file_exists($filename))
		{
			include($filename);
		} 
	elseif(file_exists($filename))
		{
		 	include('/include/'.$filename);
		}
	else
		{
			$ser. "index.php";
		}
}
/*------------------------------------------Pārbaudam faila eksistenci citā mapē------*/
function _CheckOfAnotherExist($filename)
{
	$includefile = "/include/". $filename;
	if(file_exists($includefile))
	{
		include($includefile);
	} 
	else 
	{
		echo "Tāda lapa diemžēl neeksistē!  ";	
	}
}

function Show_competences()
{
	echo " <div style=margin-top:20px;>";

	//izsauc kompeten�u izv�lni uz kursu katalogu no datu b�zes tabulas

 	$kom_result = mysql_query("SELECT id_sadala, sadalas_nos, id_sadala_parent FROM web_kompetences_iedalijums WHERE id_sadala_parent = 0");
	echo "<ul class=kompetences>";
 	while($komp = mysql_fetch_array($kom_result))
   		{
    		$id_komp = $komp['id_sadala'];
    		$kompetence = $komp['sadalas_nos'];
   			echo " <a href=";if(isset($ser)){echo $ser;}echo "index.php?view=kursi&kompetence=" . $id_komp . "><li>";
   			echo $kompetence;
   			echo "</li></a>";
   		}
	echo "</ul>";
	echo "</div>";
}

function Show_sub_competences()
{
	
	echo " <div style=margin-top:20px;>";
	$kompetence = $_GET["kompetence"];
 	$sad_result = mysql_query("SELECT id_sadala, sadalas_nos, id_sadala_parent FROM web_kompetences_iedalijums WHERE id_sadala_parent = $kompetence")or die(mysql_error());
 	echo " <ul id=sadalas_heads> ";
 	while($sadalas = mysql_fetch_array($sad_result))
   	{
	   $sadaleID = $sadalas['id_sadala'];
	   $NosaukumsSA = $sadalas['sadalas_nos'];
	   echo "<li id=sadalas_heads_li><b>";
	   echo $NosaukumsSA;
	   echo "</b></li>";
	   
	   
	   	$kursi_result = mysql_query("SELECT id_kursi, kursi_nos, kursi_info, kursi_stundas, sadala_id FROM web_kursi WHERE sadala_id='$sadaleID' ")or die(mysql_error());
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

function Show_courses()
{
	
	echo " <div style=margin-top:20px;>";
	$kursi = $_GET["kursi"];
	
	$kurss_result = mysql_query("SELECT id_kursi, kursi_nos, kursi_info, kursi_stundas, sadala_id FROM web_kursi WHERE id_kursi='$kursi' ")or die(mysql_error());
	
		
	while($kurss = mysql_fetch_array($kurss_result))
	   	{
	        $kursiID = $kurss['id_kursi'];
	        $NosaukumsKursi = $kurss['kursi_nos'];
	        $StunduSkaits = $kurss['kursi_stundas'];
	        echo "  <li id=sadalas_kursi_li onclick=\"TINY.box.show({url:'kursi/kursi_post.php',post:'idkursi=$kursiID', width:670, fixed:false, opacity:40, topsplit:2})\">";
	        echo $NosaukumsKursi . " <span class=stundas>(" . $StunduSkaits . " māc.st.)</span>";
	        echo "</li>";
	    }
	
	echo "</div>";
	
}

function Show_news()
{
	
	$cel_img = 'img/';
	$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

	
	$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
	$html_tagi = array("<b>", "</b>", "<i>", "</i>", "<B>", "</B>", "<strong>", "</strong>", "<p>", "</p>", "<stop>", "style", "</span>", "<br />");
	
	date_default_timezone_set("Europe/Helsinki"); 
	$sodiena = mktime( date('H')+2, date('i'), date('s'), date('n'), date('j'), date('Y'));

	$result = mysql_query("SELECT
								web_notikumi_laiki.id_laiks,
								web_notikumi_laiki.not_id,
							MIN(web_notikumi_laiki.not_laiks) As N_L,
								web_notikumi_laiki.not_laiks_lidz,
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
								web_notikumi.not_piev_laiks,
								web_notikumi.not_red_laiks 
							FROM web_notikumi_laiki
							JOIN web_notikumi
							ON web_notikumi.id_not = web_notikumi_laiki.not_id
							WHERE web_notikumi_laiki.not_laiks > $sodiena
							AND CHAR_LENGTH(web_notikumi.not_atskats) < 9
							AND web_notikumi.not_tips_id = '1'
							GROUP BY web_notikumi_laiki.not_id
							ORDER BY N_L ASC");
	
	$count = @mysql_num_rows($result);
	
	
	if($count == 0)  
	{
		echo "<div class=main_act_error>"; 	
	   	echo "<span style='font-size:13px;color:red;'> <b>Dati nav pieejami.<br>Mēs risinam problēmu! </b></span> ";
		echo "</div>";
	} 
	else 
	{
		$i = 0; //counter start
	   	while($row = mysql_fetch_array($result)) 
	   	{
	   		 
			if ($i < 1) //counter Čeks
			{
//------------------------- Sveicienu aile! --------------------------------------------------------------------------------------------------------------////////////////////////////////////////////////////////////////////
				echo "<img src=".$cel_img."Sveiciens_ziemassvetki.jpg style='margin-top:10px;margin-left:20px;'>";
				
				echo "<div class=main_act>"; 
	//-----------------------------------------------------------------Aktualitātes virsraksts------------------------------------------------------------
		   		echo "<div align=left style='border: solid 0px #CCC; border-left:solid 6px #c60202; padding-left:7px;'>";
				echo "<a href=";
				if(isset($ser))
				{ 
					echo $ser; 
				}
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
				echo "<span style='margin-bottom:10px;margin-left:12px;font-family:Tahoma;font-size:11px;color:#adaaaa;'>";
		
				echo date('j. ', $row['not_piev_laiks']) . $GadaMenesis[date('n', $row['not_piev_laiks'])-1]. ", " . date('Y', $row['not_piev_laiks']);  //izgatavojam datumu no pievienotā timestamp - iekļaujot mēneša masīva funkciju kurā atrodas mēnesis
				echo "</span>";
				
	//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
				if ($row['not_titulbilde'] != NULL)
				{
				echo "<div class=main_pct style='background-image: url(Sem2.png);'>
		 				<img src=". $Notikuma_titulbilde . $row['not_titulbilde'] . " width=259px style='border: solid 2px #13529d;'>
		 			  </div>";
				}

				echo "<p style='margin-top:8px; line-height:15px'>";
				
	//---------------------------------------------------------------Aktualitātes teksts - apraksts--------------------------------------------------------
				$position = 300;
				
				if ($row['not_apraksts'] == NULL) 
				{
					$post = "Lasīt vairāk";
				} 
				elseif (strlen($row['not_apraksts']) <= $position)
				{
					$post = $row['not_apraksts'];
				} 
				else 
				{
		 			$post = substr($row['not_apraksts'],$position,1); 
																	                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
		 			if($post != " ")
		    		{
		        		while($post != " ")
		            	{
		                	$i=1;
							$position=$position+$i; 
							$post = substr($row['not_apraksts'],$position,1); 
						}
		    		}
					else 
					{
						$post = $row['not_apraksts'];
					}
					
					$post = substr($row['not_apraksts'],0,$position);
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
				
				$i = $i + 1; //counter
				echo "<div class=main_act>";
				echo "<div class=main_act_littletitle align=left>Citas aktualitātes";	
				echo "</div>";
				
	//------------------------------------------------------------------------------------------------------------------------------------------------------
			} 
			else 
			{
				if($i > 8) 
				{
					goto andrew; 
	
				}
	//-----------------------------------------------------------------Citas aktualitātes virsraksti------------------------------------------------------------
		   		echo "<div class=main_act_little align=left>";
				echo "<a href=";
				if(isset($ser))
				{ 
					echo $ser; 
				}
				echo "event.php?id=" .$row['id_not']. " style='text-decoration:none;color:#000000;'><span style='font-family:Arial; font-size: 14px; font-weight: 700; text-decoration: none;'>"; 
		   		echo $row['not_nosaukums'];	
				
																							//Galvenā raksta virsraksts
					$idn=$row['id_not'];
		   			$result_gal = mysql_query("SELECT gal_id_not, gal_id_gal FROM web_notikumi_gal WHERE gal_id_not=$idn");	
					$row_gal = mysql_fetch_array($result_gal);
					if ($row_gal['gal_id_gal'] == null) 
					{
						echo "</span>";
					} 
					else 
					{
						echo "  <img src=img/photo.png width=12px border=0></span>";
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
					}
					
					
				echo "<span style='font-size:13px;color:red;'> <b>&#187;</b></span></a>";
				echo "</div>";
				$i = $i + 1; //counter
	//------------------------------------------------------------------------------------------------------------------------------------------------------
			}
			
			   	
	
	   	}
	andrew: echo "</div>";
	}
}

function Show_news_for_group()
{
	
	if (isset($_GET["group"])) 
	{
		$kam1 = $_REQUEST["group"];
		
		$result_kam = mysql_query("SELECT * FROM web_sadalas WHERE id_sad = $kam1");


		$merkis = mysql_fetch_array($result_kam);
		


		$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
		$html_tagi = array("<b>", "</b>", "<i>", "</i>", "<B>", "</B>", "<strong>", "</strong>", "<p>", "</p>", "<stop>", "style", "</span>", "<br />");
		
		
		$sodiena = time();

		$result = mysql_query("SELECT
								web_notikumi_laiki.id_laiks,
								web_notikumi_laiki.not_id,
							MIN(web_notikumi_laiki.not_laiks) As N_L,
								web_notikumi_laiki.not_laiks_lidz,
								web_notikumi.id_not, 
								web_notikumi.not_nosaukums, 
								web_notikumi.not_apraksts,
								web_notikumi.not_atskats,
								web_notikumi.not_vieta,
								web_notikumi.not_atbildigais,
								web_notikumi.not_klase,
								web_notikumi.not_banners,
								web_notikumi.not_tips_id,
								web_notikumi.not_piev_laiks,
								web_notikumi.not_piev_laiks 
							FROM web_notikumi_laiki
							JOIN web_notikumi
							ON web_notikumi.id_not = web_notikumi_laiki.not_id
							WHERE web_notikumi.not_tips_id = 1 
							AND web_notikumi_laiki.not_laiks > $sodiena
							AND CHAR_LENGTH(web_notikumi.not_atskats) < 9
							GROUP BY web_notikumi_laiki.not_id
							ORDER BY N_L ASC");
	
	$count = @mysql_num_rows($result);
	
	
	if($count == 0)  
	{
		echo "<div class=main_act>"; 	
	   	echo "<span style='font-size:13px;color:red;'> <b>Dati nav pieejami.<br>Lūdzu sazinies ar mums! </b></span> ";
		echo "</div>";
	} 
	else 
	{
		$i = 0; //counter start
	   	while($row = mysql_fetch_array($result)) 
	   	{
	   		 
			if ($i < 1) //counter Čeks
			{
				echo "<div class=main_act>"; 
	//-----------------------------------------------------------------Aktualitātes virsraksts------------------------------------------------------------
		   		echo "<div align=left style='border: solid 0px #CCC; border-left:solid 6px #c60202; padding-left:7px;'>";
				echo "<a href=";
				if(isset($ser))
				{ 
					echo $ser; 
				}
				echo "event.php?id=" .$row['id_not']. " style='text-decoration:none;color:#000000;'><span style='font-family:Arial; font-size: 16px; font-weight: 700; text-decoration: none;'>"; 
		   		echo $row['not_nosaukums'];
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
				echo "<span style='margin-bottom:10px;margin-left:12px;font-family:Tahoma;font-size:11px;color:#adaaaa;'>";
		
				echo date('j. ', $row['not_piev_laiks']) . $GadaMenesis[date('n', $row['not_piev_laiks'])-1]. ", " . date('Y', $row['not_piev_laiks']);  //izgatavojam datumu no pievienotā timestamp - iekļaujot mēneša masīva funkciju kurā atrodas mēnesis
				echo "</span>";
				
	//---------------------------------------------------------Aktualitates titulbilde---------------------------------------------------------------------
				echo "<div class=main_pct style='background-image: url(Sem2.png);'>
		 				<img src=eka32.jpg width=263px>
		 			  </div>";
				echo "<p style='margin-top:8px; line-height:15px'>";
				
	//---------------------------------------------------------------Aktualitātes teksts - apraksts--------------------------------------------------------
				$position = 300;
				
				if ($row['not_apraksts'] == NULL) 
				{
					$post = "Lasīt vairāk";
				} 
				elseif (strlen($row['not_apraksts']) <= $position)
				{
					$post = $row['not_apraksts'];
				} 
				else 
				{
		 			$post = substr($row['not_apraksts'],$position,1); 
																	                                   // Ja pēdējā raksz;ime apgabalā nav  " " (tukshums) tad turpinam to meklēt
		 			if($post != " ")
		    		{
		        		while($post != " ")
		            	{
		                	$i=1;
							$position=$position+$i; 
							$post = substr($row['not_apraksts'],$position,1); 
						}
		    		}
					else 
					{
						$post = $row['not_apraksts'];
					}
					
					$post = substr($row['not_apraksts'],0,$position);
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
				
				$i = $i + 1; //counter
				echo "<div class=main_act>";
				echo "<div class=main_act_littletitle align=left>Citas aktualitātes";	
				echo "</div>";
				
	//------------------------------------------------------------------------------------------------------------------------------------------------------
			} 
			else 
			{
				if($i > 8) 
				{
					goto andrew; 
	
				}
	//-----------------------------------------------------------------Citas aktualitātes virsraksti------------------------------------------------------------
		   		echo "<div class=main_act_little align=left>";
				echo "<a href=";
				if(isset($ser))
				{ 
					echo $ser; 
				}
				echo "event.php?id=" .$row['id_not']. " style='text-decoration:none;color:#000000;'><span style='font-family:Arial; font-size: 14px; font-weight: 700; text-decoration: none;'>"; 
		   		echo $row['not_nosaukums'];	
				
																							//Galvenā raksta virsraksts
					$idn=$row['id_not'];
		   			$result_gal = mysql_query("SELECT gal_id_not, gal_id_gal FROM web_notikumi_gal WHERE gal_id_not=$idn");	
					$row_gal = mysql_fetch_array($result_gal);
					if ($row_gal['gal_id_gal'] == null) 
					{
						echo "</span>";
					} 
					else 
					{
						echo "  <img src=img/photo.png width=12px border=0></span>";
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
					}
					
					
				echo "<span style='font-size:13px;color:red;'> <b>&#187;</b></span></a>";
				echo "</div>";
				$i = $i + 1; //counter
	//------------------------------------------------------------------------------------------------------------------------------------------------------
			}
			
			   	
	
	   	}
	andrew: echo "</div>";
	}
}}

function Show_event_by_Id()
{
	$notikuma_id = $_GET["id"];
	
	$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
	$html_tagi = array("<b>", "</b>", "<i>", "</i>", "<B>", "</B>", "<strong>", "</strong>", "<p>", "</p>", "<stop>", "style", "</span>", "<br />");
	
	
	$result = mysql_query("SELECT id_not, not_nosaukums, not_apraksts, not_vieta, not_atbildigais, not_klase, not_banners, not_tips_id, not_piev_laiks, not_red_laiks FROM web_notikumi WHERE id_not=$notikuma_id ORDER BY not_piev_laiks DESC");
		
	echo $notikuma_id;
	$row = mysql_fetch_array($result);																//Galvenā raksta virsraksts

	return $row;

}

function Show_reviews()
{
		

		 

	$galery_images = 'http://' . ServerNos() . '/gal/';
	$cel_img = 'img/';
	$Notikuma_titulbilde = 'http://' . ServerNos() . '/dev_webadm/pct/';

	
	
	
	
	$GadaMenesis = array("janvāris","februāris","marts","aprīlis","maijs","jūnijs","jūlijs","augusts","septembris","oktobris","novembris","decembris");
	$NedelasDiena = array("Pirmdiena", "Otrdiena", "Trešdiena", "Ceturtdiena", "Piektdiena", "Sestdiena", "Svētdiena");
	$html_tagi = array("<b>", "</b>", "<i>", "</i>", "<B>", "</B>", "<strong>", "</strong>", "<p>", "</p>", "<stop>", "style", "</span>", "<br />");
	
	date_default_timezone_set("Europe/Helsinki"); 
	$sodiena = time();

		$result = mysql_query("SELECT
								web_notikumi_laiki.id_laiks,
								web_notikumi_laiki.not_id,
							MAX(web_notikumi_laiki.not_laiks) As N_L,
								web_notikumi_laiki.not_laiks_lidz,
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
								web_notikumi.not_piev_laiks,
								web_notikumi.not_red_laiks 
							FROM web_notikumi_laiki
							JOIN web_notikumi
							ON web_notikumi.id_not = web_notikumi_laiki.not_id
							WHERE (web_notikumi.not_tips_id = '1' OR web_notikumi.not_tips_id = '8')
							AND CHAR_LENGTH(web_notikumi.not_atskats) > 9
							GROUP BY web_notikumi_laiki.not_id
							ORDER BY N_L DESC");


	
	
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
		while($row = mysql_fetch_array($result)) 
		{
		   	$skaita++;
		   	if ($skaita <= 6)
		   	{
		   		
			   	echo "<div class=main_apskats>";
				echo "	<div align=left style='margin-bottom:10px;border: solid 0px #CCC; border-left:solid 5px #C60202; padding-left:7px;'>
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
				goto andrew2;
			}
		}
	}
andrew2: 	echo "<div class='crumb' width=100% align=right>";
			echo "<!--<a href=";if(isset($ser)){echo $ser;}echo "index.php>Visi notikumi &rsaquo;</a>--> ";
			echo "</div>";
}

function GetMumsForma()
{
	$Vards=$_POST['MumsVar'];
	$Uzvards=$_POST['MumsUzv'];
	$tMums=$_POST['MumsMums'];
	$Telefons=$_POST['MumsTel'];
	$Email=$_POST['MumsEmail'];
	$teksts=$_POST['MumsMums'];
	echo "<form action='?view=rmums&ID=MACC' method='POST'>";
	echo "<TABLE cellpadding='5' cellspacing='0' border='0' align='center' width=525px style='margin-top:30px;'>";
	echo "		<TR>";
	echo "			<TD width='0px' height='20' align='right' valign='top'>";
	echo "			</TD>";
	echo "			<TD width='104' align='right' valign='middle'>";
	echo "				<div class='regtxt'><b>Vārds:</b></div>";
	echo "			</TD>";
	echo "			<TD width='280' valign='middle'>";
	echo "				<input type='text' name='MumsVar' maxlength='30' size='30' value=''.$Vards.''>";
	echo "			</TD>";
	echo "			<TD width='0px' height='20' align='left' valign='top'>";
	echo "			</TD>";
	echo "		</TR>";
	echo "		<TR>";
	echo "			<TD width='0px' height='20' align='right' valign='top'>";
	echo "			</TD>";
	echo "			<TD width='104' align='right' valign='middle'>";
	echo "				<div class='regtxt'><b>Uzvārds:</b></div>";
	echo "			</TD>";
	echo "			<TD width='260' valign='middle'>";
	echo "				<input type='text' name='MumsUzv' maxlength='40' size='30' value=''.$Uzvards.''>";
	echo "			</TD>";
	echo "			<TD width='0px' height='20' align='left' valign='top'>";
	echo "			</TD>";
	echo "		</TR>";
	echo "		<TR>";
	echo "			<TD width='0px' height='20' align='right' valign='top'>";
	echo "			</TD>";
	echo "			<TD width='104' align='right' valign='middle'>";
	echo "				<div class='regtxt'><b>Telefons:</b></div>";
	echo "			</TD>";
	echo "			<TD width='260'>";
	echo "				<input type='text' name='MumsTel' maxlength='30' size='30' value=''.$Telefons.''>";
	echo "			</TD>";
	echo "			<TD width='0px' height='50' align='left' valign='top'>";
	echo "			</TD>";
	echo "		</TR>";
	echo "		<TR>";
	echo "			<TD width='0px' height='20' align='right' valign='top'>";
	echo "			</TD>";
	echo "			<TD width='104' align='right' valign='middle'>";
	echo "				<div class='regtxt'><b>E-pasts:</b></div>";
	echo "			</TD>";
	echo "			<TD width='260'>";
	echo "				<input type='text' name='MumsEmail' maxlength='100' size='30' value=''.$Email.''>";
	echo "			</TD>";
	echo "			<TD width='0px' height='20' align='left' valign='top'>";
	echo "			</TD>";
	echo "		</TR>";
	echo "		<TR>";
	echo "			<TD width='0px' height='20' align='right' valign='top'>";
	echo "			</TD>";
	echo "			<TD width='324' align='left' valign='middle' colspan='2'>";
	echo "				<div class='regtxt' style='margin-top:10px;margin-bottom:5px;'><i><font color='#000000'>Jūsu komentārs, jautājums, vēlējums...</font></i></div>";
	echo "			</TD>";
	echo "			<TD width='0px' height='20' align='left' valign='top'>";
	echo "			</TD>";
	echo "		</TR>";
	echo "		<TR>";
	echo "			<TD width='0' height='150' align='right' valign='top'>";
	echo "			</TD>";
	echo "			<TD style='border-bottom: 1px LightGray solid' width='324' colspan='2'>";
	echo "				<TEXTAREA name=MumsMums cols=45 rows=5 size='10' wrap='Hard'>$teksts</TEXTAREA>";
	echo "			</TD>";
	echo "			<TD width='16' height='150' align='left' valign='top'>";
	echo "			</TD>";
	echo "		</TR>";
	echo "		<TR>";
	echo "			<TD width='0px' height='60' align='right' valign='top'>";
	echo "			</TD>";
	echo "			<TD width='324' align='center' colspan='2'>";
	echo "				<p class='submit'>  <input type=submit value='Nosūtīt'></input></p>";
	echo "			</TD>";
	echo "			<TD width='0px' height='60' align='left' valign='top'>";
	echo "			</TD>";
	echo "		</TR>";
	echo "		<TR>";
	echo "			<TD align='right' valign='top'>";
	echo "			</TD>";
	echo "			<TD height='24px' colspan='2'>";
	echo "			</TD>";
	echo "			<TD align='left' valign='top'>";
	echo "			</TD>";
	echo "		</TR>";
	echo "	</TABLE>";
	echo "</form>";
}

function RegistretMums()
{
	$mumsOk=true;
	if($_POST['MumsMums']=='')
	{
		
		echo "<div align='center' style='margin-top:10px;margin-bottom:5px;'><span style='font-size:10.0pt;font-family:Tahoma;color:#A32B2B'><b>Jūs neievadījāt tekstu!</b></span></div>";
		$mumsOk=false;
	}
	if($_POST['MumsUzv']=='' && $_POST['MumsVar']=='' && $_POST['MumsTel']=='' && $_POST['MumsEmail']=='')
	{
		echo "<div align='center' style='margin-top:5px;margin-bottom:10px;'><span style='font-size:10.0pt;font-family:Tahoma;color:#A32B2B'><b>Jūs neievadījāt datus par sevi!</b></span></div>";
		$mumsOk=false;
	}
	if($mumsOk==false)
	{
		GetMumsForma();
	}
	
	else
	{
		$ip = $_SERVER['REMOTE_ADDR'];
		$conn=mysql_connect('127.0.0.1', 'jrpic', 'Trth4jefSFHppN5R');
		if(mysql_select_db('www_jrpic_lv', $conn))
		{
			$MVar=IevParb($_POST['MumsVar']);
			$MUzv=IevParb($_POST['MumsUzv']);
			$MTel=IevParb($_POST['MumsTel']);
			$MEmail=IevParb($_POST['MumsEmail']);
			$MMums=IevParb($_POST['MumsMums']);
			$MDat='NOW()';
			
			$tmpSaturs=$MMums;
			if(strlen($tmpSaturs)>0)
			{
				if(strlen($tmpSaturs)>1000)
				{
					$tmpSaturs=substr($tmpSaturs, 0, 1000);
				}
			}
			$MMums=$tmpSaturs;

			$res=mysql_query('SET NAMES utf8 COLLATE utf8_general_ci', $conn);
			$query='Insert into trmums(RMVar, RMUzv, RMTel, RMEmail, RMMums, RMIP, RMDate) values("'.$MVar.'", "'.$MUzv.'", "'.$MTel.'", "'.$MEmail.'", "'.$MMums.'", "'.$ip.'", '.$MDat.')';
//			echo 'query='.$query;
			$res=mysql_query($query, $conn);
			echo "	<TABLE width=100% height=100%>";
			echo "		<TR>";
			echo "			<TD align=center valign=middle>";
			echo "				<span style='font-size:14.0pt; font-family:Tahoma; color:#13529D;' ><b>Paldies!</b></span>";
			echo "			</TD>";
			echo "		</TR>";
			echo "	</TABLE>";
		}
	}
}

function MumsAccept()
{
	$conn=mysql_connect('127.0.0.1', 'jrpic', 'Trth4jefSFHppN5R');

	if(mysql_select_db('www_jrpic_lv', $conn))
	{
		$ip=$_SERVER['REMOTE_ADDR'];
		$query='Select RMID,RMDate from trmums where RMIP="'.$ip.'" and date_sub(NOW(), interval 10 minute) <=RMDate order by RMID desc limit 1';
		$res=mysql_query($query, $conn);
		while($data=mysql_fetch_row($res))
		{
			$RMID=$data[0];
		}
		if(isset($RMID))
		{
			$query='Select "deny" from trmums where date_sub(NOW(), interval 5 minute) <=RMDate and RMID='.$RMID;
			$res=mysql_query($query, $conn);
			while($data=mysql_fetch_row($res))
			{
				return "deny";
			}
		}
	}
}

function IevParb($ievteksts)
{
	$ievteksts=htmlspecialchars($ievteksts);
	$ievteksts=str_replace('\\', '\\', $ievteksts);
	$ievteksts=str_replace('"', '\"', $ievteksts);
	$ievteksts=str_replace('\'', '\'', $ievteksts);
	return $ievteksts;
}


?>