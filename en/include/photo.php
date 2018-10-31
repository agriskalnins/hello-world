<?php


	$galerijas_titulbilde = 'http://' . ServerNos() . '/gal/';


	$result_gal = mysql_query("SELECT 
									kas.id_gal,
									kas.gal_nos,
									kas.gal_date,
									cik.img,
									cik.gal_id
								FROM 
									web_gal kas,
									web_gal_img cik
								WHERE kas.id_gal = cik.gal_id
								AND kas.gal_date > 1370044800
								ORDER BY RAND()
								
								LIMIT 1
								")or die(mysql_error());
								
	$row_gal = mysql_fetch_array($result_gal);
	

	



echo "<div id=galvina align=left width=195px style=background-color:#13529D;padding:3px;margin-top:15px;margin-bottom:10px;padding-left:20px;>
        <span style=color:#FFFFFF;font-family:Arial;><b><i><a style='color:#FFF' href=";if(isset($ser)){echo $ser;} echo "galerija.php>Photo gallery</a></b></i></span>
      </div>
      <div class=rbanner text=left>
            
            <a href=";if(isset($ser)){echo $ser;} echo "galerija.php?gid=". $row_gal['id_gal'] . ">";
            
	  echo "          <figure id=fotogalerija>
                <img src=". $galerijas_titulbilde . $row_gal['img'] . " style='border: 0px' />
                <figcaption ><span style='font-weight:bold'>".date('d', $row_gal['gal_date']) . "." . date('m', $row_gal['gal_date']) . "." . date('Y', $row_gal['gal_date'])."</span><br>
                ".$row_gal['gal_nos']."</figcaption>
            </figure>
            </a>


      </div>
      ";

?>