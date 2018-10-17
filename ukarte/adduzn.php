<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//LV' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jelgavas pilsētas uzņēmumu kartes administrēšana</title>
</head>
<body>

<?php

include 'cnn.php';

// Check connection
if($GLOBALS['connection'] === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



// Escape user inputs for security
$Uzn_Name = mysqli_real_escape_string($GLOBALS['connection'], $_REQUEST['Uzn_Name']);
$Uzn_Tips = mysqli_real_escape_string($GLOBALS['connection'], $_REQUEST['Uzn_Tips']);
$Uzn_Kom = mysqli_real_escape_string($GLOBALS['connection'], $_REQUEST['Uzn_Kom']);
$Uzn_Adrese = mysqli_real_escape_string($GLOBALS['connection'], $_REQUEST['Uzn_Adrese']);
$Uzn_Telefons = mysqli_real_escape_string($GLOBALS['connection'], $_REQUEST['Uzn_Telefons']);
$Uzn_Epasts = mysqli_real_escape_string($GLOBALS['connection'], $_REQUEST['Uzn_Epasts']);
$Uzn_Info = mysqli_real_escape_string($GLOBALS['connection'], $_REQUEST['Uzn_Info']);
$Uzn_LAT = mysqli_real_escape_string($GLOBALS['connection'], $_REQUEST['Uzn_LAT']);
$Uzn_LNG = mysqli_real_escape_string($GLOBALS['connection'], $_REQUEST['Uzn_LNG']);

// Attempt insert query execution
$Uzn_sql = "INSERT INTO uznemums (uz_tips_id, uzkomersants_id, uznosaukums, uzadrese, uztelefons, uzepasts, uzinfo, uzlogo, uz_lat, uz_lng)
            VALUES ('$Uzn_Tips', '$Uzn_Kom', '$Uzn_Name', '$Uzn_Adrese', '$Uzn_Telefons', '$Uzn_Epasts', '$Uzn_Info', NULL, '$Uzn_LAT', '$Uzn_LNG')";
if(mysqli_query($GLOBALS['connection'], $Uzn_sql)){
    echo "Uzņēmums pievienots. <br>";
    echo "<a href='adm.php'>Atgriezties pie pievienošanas.</a>";
} else{
    echo "ERROR: Neizdevās pievienot: $Uzn_sql. " . mysqli_error($GLOBALS['connection']);
}

// Close connection
mysqli_close($GLOBALS['connection']);
?>
</body>
</html>
