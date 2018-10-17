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
$Kom_Name = mysqli_real_escape_string($GLOBALS['connection'], $_REQUEST['Kom_Name']);
$Kom_Adrese = mysqli_real_escape_string($GLOBALS['connection'], $_REQUEST['Kom_Adrese']);

// Attempt insert query execution
$Kom_sql = "INSERT INTO ukomersants (knosaukums, kjur_adrese) VALUES ('$Kom_Name', '$Kom_Adrese')";
if(mysqli_query($GLOBALS['connection'], $Kom_sql)){
    echo "Komersants pievienots.";
    echo "<a href='adm.php'>Atgriezties pie pievienošanas.</a>";
} else{
    echo "ERROR: Neizdevās pievienot: $Kom_sql. " . mysqli_error($GLOBALS['connection']);
}

// Close connection
mysqli_close($GLOBALS['connection']);
?>
</body>
</html>