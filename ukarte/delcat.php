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



$id = $_GET['id'];

//Define the query
$delcat_sql = "DELETE FROM ukategorija WHERE id_kategorija='$id' LIMIT 1";


if(mysqli_query($GLOBALS['connection'], $delcat_sql)){
    echo "Kategorija dzēsta. <a href='category.php'>Parādīt kategoriju sarakstu</a>";

} else{
    echo "ERROR: Neizdevās dzēst: $delcat_sql. " . mysqli_error($GLOBALS['connection']);
}

// Close connection
mysqli_close($GLOBALS['connection']);

?>
</body>
</html>
