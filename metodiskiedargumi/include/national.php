<?php

include("dbconn.php");

$query_dargumi = "SELECT * FROM nb_objekti WHERE obj_id_regions='0' ORDER BY id_objekts DESC LIMIT 3";

    if ($result = $mysqli->query($query_dargumi)) {
       
        /* fetch associative array */
        while ($dargumirow = $result->fetch_assoc()) {
            
            $idak = $dargumirow['id_objekts'];

            echo " <div class='col-md-4 col-sm-6 portfolio-item'>
                            <a href='#portfolioModal".$idak."' class='portfolio-link' data-toggle='modal'>
                                <div class='portfolio-hover'>
                                    <div class='portfolio-hover-content'>
                                        <i class='fa fa-plus fa-3x'></i>
                                    </div>
                                </div>
                                <img class='img-responsive center-cropped'  src='nbadm/img/objekti/";
           
            if (!isset($dargumirow['obj_img']))
            {
                echo "NULL.jpg";
            }
            else
            {
                echo $dargumirow['obj_img'];
            }
            
            
            echo "' width='350px' alt='".$dargumirow['obj_nosaukums']."'>
                            </a>
                            <div class='portfolio-caption'>";     
            echo "<h3>". $dargumirow['obj_nosaukums']. "</h3>";
            echo "<a href='#portfolioModal".$idak."' class='portfolio-link' data-toggle='modal'><p class='text-muted'>Skatīt vairāk</p></a>
                    </div>
                </div>";
        
        }
             
    /* free result set */
    $result->free();
    }

?>
