<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//LV' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>

   <head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
      <title>Connecting MySQLi Server</title>
   </head>

   <body>
      <?php
         $dbhost = '127.0.0.1';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);



         if(! $conn ) {
            die('Nevarēja pieslēgties: ' . mysqli_error());
         }
         mysqli_select_db($conn, 'www_jrpic_lv' );

         #Datubāzei tiek iestatīts latviešu valodas atbalsts
         mysqli_set_charset($conn, "utf8")
         or die ("Neizdevās iestatīt valodu!");
                 if (!$conn)
                 {
                    die('Nevarēja pieslēgties: ' . mysqli_error());
                 }

         $kursi_result = mysqli_query($conn, "SELECT id_kursi, kursi_nos, kursi_info, kursi_stundas, sadala_id FROM web_kursi WHERE sadala_id='19' ")or die(mysql_error());
   		echo "<ul id=sadalas_kursi>";

   		while($kursi = mysqli_fetch_array($kursi_result))
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
         mysqli_close($conn);

      ?>
   </body>
</html>
