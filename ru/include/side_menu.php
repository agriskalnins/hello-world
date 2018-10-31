<?php


/*----------------------------------------------------------------------------- Te nāks sānu izvēlnes un citi zvēri -----------------------------------------------*/

	$result = mysqli_query($GLOBALS['connection'], "SELECT id_sad, sad_parent_id, sad_nosaukums, sad_pos, sad_kartiba FROM web_sadalas WHERE sad_pos = 1 AND id_sad <> 12 ORDER BY sad_kartiba ASC");


	$count = @mysqli_num_rows($result);


	echo "<div style='float:left' id='my_menu' class='sdmenu'>";
	
	while($izv= mysqli_fetch_array($result))
	{
	  echo "<a href=".$ser. "index.php?view=ru&id=".$izv['id_sad']."><div class='collapsed' id='".$izv['sad_nosaukums']."'>";
	  echo "
      		</div></a>";
	}

	echo "</div>";


/*----------------------------------------------------------------------------- Te beidzas sānu izvēlnes un visi citi zvēri -----------------------------------------------*/


?>
