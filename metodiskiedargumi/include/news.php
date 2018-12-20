<?php

include("dbconn.php");

$query_text = "SELECT * FROM nb_aktualitates ORDER BY akt_piev_laiks DESC LIMIT 3";

    if ($result = $mysqli->query($query_text)) {
       
        /* fetch associative array */
        while ($textrow = $result->fetch_assoc()) {
            
            $idak = $textrow['id_akt'];

            $short = substr($textrow['akt_apraksts'], 0, 300);
            $short = explode(' ', $short);
            array_pop($short);
            $short = implode(' ', $short);
            
            echo " <div class='col-md-4'>
                            <div class='img-thumb-box'>
                                <img class='center-cropped' src='nbadm/img/aktualitates/".$textrow['akt_titulbilde']."' alt='".$textrow['akt_nosaukums']."' width='350'>
                            </div>";
                        
            echo "<h3 class='service-heading'>". $textrow['akt_nosaukums']. "</h3><p class='text-muted'>";
            echo strip_tags($short)." ...";
            echo "</p><p style='margin-top:15px;' ><a class='btn btn-default portfolio-link' data-toggle='modal' href='#portfolioModal".$idak."' role='button'>Lasīt vairāk &raquo;</a></p></div>";
        
        }
             
    /* free result set */
    $result->free();
    }
else {
    echo " ";
}

?>