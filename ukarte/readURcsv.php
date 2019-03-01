<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//LV' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jelgavas pilsētas uzņēmumu karte</title>
</head>

<body>

<?php
$tab = ";";
$csv = array();
$lines = file('UR-dati.csv', FILE_IGNORE_NEW_LINES);

foreach ($lines as $key => $value)
{
    $csv[$key] = str_getcsv($value, $tab);

}

// $skaits = count($csv)-1;
// echo "<table border=1><tr><td>Nrpk</td><td>Nr</td><td>" .
// $csv[0][1] . "</td><td>" .
// $csv[0][0] . "</td><td>" .
// $csv[0][4] . "</td><td>" .
// $csv[0][6] . "</td><td>" .
// $csv[0][8] . "</td><td>" .
// $csv[0][9] . "</td>";
// echo "</tr>";
// $a = 0;
// for ($x = 0; $x <= $skaits; $x++) {
//
// //  if ($csv[$x][4] == 'Jelgava')
//   if ($csv[$x][4] == 'Jelgava' && $csv[$x][8] == '34')
//   {
//     $a++;
//     echo "<tr><td>" .
//     $a . "</td><td>" .
//     $x . "</td><td>" .
//     $csv[$x][1] . "</td><td>" .
//     $csv[$x][0] . "</td><td>" .
//     $csv[$x][4] . "</td><td>" .
//     $csv[$x][6] . "</td><td>" .
//     $csv[$x][8] . "</td><td>" .
//     $csv[$x][9] . "</td>";
//     echo "</tr>";
//   }
//
// }
//
//
// echo "</table>";




echo '<pre>';
  print_r($csv);
echo '</pre>';



 ?>

</body>
</html>
