<?php

$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);




echo "
      <div class=partneri>
            <a href='http://www.jelgava.lv/' target=_blank><img src=".$cel_img."Jelgava.png width=190px style='border:0px;margin-top:15px;'></a>
      </div>
      ";

echo "<div id=galvina align=left width=195px style=background-color:#13529D;padding:2px;margin-top:25px;padding-left:20px;>
        <span style=color:#FFFFFF;font-family:Arial;><b>ES <i>informācija</b></i></span>
      </div>
      <div class=partneri>
            <a href='http://www.esmaja.lv/' target=_blank><img src=".$cel_img."ES_maja.png width=190px style='border:0px;margin-top:15px;'></a>
            <a href='http://www.europarl.lv/lv/' target=_blank><img src=".$cel_img."ES_Info_lv.png width=190px style='border:0px;margin-top:15px;'></a>
      </div>
      ";
?>