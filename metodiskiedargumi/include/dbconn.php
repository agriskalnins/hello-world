<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );


$mysqli = new mysqli("localhost", "root", "", "nb");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Feilenis: %s\n", $mysqli->connect_error);
    exit();
}

@mysqli_set_charset($mysqli, "utf8");

?>