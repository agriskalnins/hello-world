<?php


/*----------------------------------------------------------------------------- Te nāks sānu izvēlnes un citi zvēri -----------------------------------------------*/

	 
	$query = "SELECT id_sad, sad_parent_id, sad_nosaukums, sad_pos, sad_kartiba FROM web_sadalas WHERE sad_pos = 1 ORDER BY sad_kartiba ASC";
	$result = $connection->query($query) or trigger_error($connection->error."[$query]");				
	
	$count = @mysqli_num_rows($result);
	
	
	echo "<div style='float:left' id='my_menu' class='sdmenu'>";
	
	while($izv= $result->fetch_assoc()) 
	{
	  echo "<div class='collapsed' id='".$izv['sad_nosaukums']."'>";
	  echo "<span>&nbsp;</span>
        	<ul class='SDsubMenu'>";
        	$sadalas_id = $izv['id_sad'];
			$parentmenu_query = "SELECT id_sad, sad_parent_id, sad_nosaukums, sad_pos, sad_kartiba FROM web_sadalas WHERE sad_parent_id = $sadalas_id AND (sad_nosaukums IS NOT NULL) ORDER BY sad_kartiba ASC";
        	$parentmenu_result = $connection->query($parentmenu_query) or trigger_error($connection->error."[$parentmenu_query]");
			
        	while($row_parentmenu = $parentmenu_result->fetch_assoc())
        	{
	            $id_parentmenu = $row_parentmenu['id_sad'];
	            $parentmenu_nos = $row_parentmenu['sad_nosaukums'];
	            $parentmenu_parent = $row_parentmenu['sad_parent_id'];    
	            $parentmenu_order = $row_parentmenu['sad_kartiba'];
    
        		echo " 
        			<li class='SDhas-sub'><a href=".$ser. "index.php?view=group&group=".$sadalas_id."&id=".$id_parentmenu."><b>" . $parentmenu_nos . " </b></a></li>";
        	}
		echo"
	      </ul>
      		</div>";
	}
        echo "<a href=".$ser. "index.php?view=group&group=0&id=81><div class='collapsed' id='vakances'>";
	    echo "</div></a>";
		echo "<a href=".$ser. "index.php?view=group&group=0&id=85><div class='collapsed' id='velejumi'>";
	    echo "</div></a>";
	
	echo "</div>";


/*----------------------------------------------------------------------------- Te beidzas sānu izvēlnes un visi citi zvēri -----------------------------------------------*/


?>