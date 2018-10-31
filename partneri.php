<?php


$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);


	if (isset($_GET["view"]) == 'partneri')
	{
		$kas = $_REQUEST["view"];

		$result_sadala = mysqli_query($GLOBALS['connection'], "SELECT id_sad, sad_parent_id, sad_nosaukums, sad_pos, sad_kartiba, sad_text FROM web_sadalas WHERE sad_parent_id = 6");

		$Partneri = mysqli_fetch_array($result_sadala);

		
		$lapas_nosaukums1 = $Partneri['sad_nosaukums'];

	   	echo "<div class='crumb' width=100%>";
		echo "	<a href=".$ser."index.php>Sākums</a> &rsaquo;
				<a href=".$ser. "index.php?view=partneri>Sadarbības partneri</a>";
		echo "
			</div>";


    	echo "<div class='event_tittle_space' align='left' style='margin-top:20px; margin-left:17px; margin-bottom:0px;'> ";
        echo "<span class='event_title'>" . $Partneri['sad_nosaukums'] . "</span><br>";
    	echo "</div>";

		echo "<div width=100% style=margin-top:20px;margin-left:17px;margin-bottom:20px;>" . $Partneri['sad_text']  . "</div>";


	}
	else
	{
		echo "Notikusi kļūda";
	}
?>
