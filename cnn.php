<?php  

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

date_default_timezone_set('Europe/Riga');
########################
#Pieslēgšanās datubāzeii#
########################

#Pieslēguma informācija tiek saglabāta mainīgajos
$user="root";
$host="127.0.0.1";
$password="";
$database = "www_jrpic_lv";

#Notiek pieslegšanās MySQL serverim un rezultāta piešķiršana mainīgajam
$connection = mysqli_connect($host,$user,$password)
       or die ("Neizdevās pieslēgties serverim!");
	   
#Notiek pieslegšanās datubāzei un rezultāta piešķiršana mainīgajam
$db = mysqli_select_db($connection, $database)
       or die ("Neizdevās pieslēgties datubāzei!");

#Datubāzei tiek iestatīts latviešu valodas atbalsts
$connection->set_charset("utf8")
or die ("Neizdevās iestatīt valodu!");

?>