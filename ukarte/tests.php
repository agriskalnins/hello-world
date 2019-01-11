<?php
	include 'cnn.php';
?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//LV' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #FFF;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  text-align:center;
}

.sidenav a {
  text-decoration: none;
  color: #818181;
  transition: 0.3s;

}

.sidenav a:hover{
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  color: #000000;
  top: 0;
  right: 25px;
  font-size: 50px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">

<div id="txtHint"> Informācija par uzņēmumu
</div>





</div>

<h2>Jelgavas pilsētas uzņēmumu karte</h2>
<p><a href="index.php">Skatīt karti</a> </p>
<span style="font-size:20px">Klikšķini, lai atvērtu uzņēmuma profilu</span> <br>
<?php

      $uznem_result = mysqli_query($GLOBALS['connection'], "SELECT 	id_uznemums, uznosaukums FROM uznemums")
                                                            or die(mysql_error());
      while($uznem = mysqli_fetch_array($uznem_result))
      {
        echo "<span style=\"font-size:30px;cursor:pointer\" onclick=\"openNav(this.id)\" id=\" ". $uznem["id_uznemums"] . "\">&#9776; ". $uznem["uznosaukums"] . "</span> <br>";
      }


?>

<script>
function openNav(str) {
  if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getcom.php?q="+str,true);
        xmlhttp.send();
    }
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>
</html>
