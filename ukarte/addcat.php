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
$kategorija = mysqli_real_escape_string($GLOBALS['connection'], $_REQUEST['kategorija']);
$subkategnos = mysqli_real_escape_string($GLOBALS['connection'], $_REQUEST['subkategnos']);

if ($kategorija == null)
{
  $kategorija = 0;
}

// Attempt insert query execution
$kat_sql = "INSERT INTO ukategorija (kat_nosaukums, kat_subkategorija_id) VALUES ('$subkategnos', '$kategorija')";
if(mysqli_query($GLOBALS['connection'], $kat_sql)){
    echo "Kategorija pievienota.";
    header("Refresh:0; url=category.php");
} else{
    echo "ERROR: Neizdevās pievienot: $kat_sql. " . mysqli_error($GLOBALS['connection']);
}

// Close connection
mysqli_close($GLOBALS['connection']);
?>
</body>
</html>
