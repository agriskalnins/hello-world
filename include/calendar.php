<?php


$cel_img = 'img/';


$today = getdate();
$WeekDays=array("Pirmdiena","Otrdiena","Trešdiena","Ceturtdiena","Piektdiena","Sestdiena","Svētdiena");
$ShortWeekDays = array("Pi","Ot","Tr","Ce","Pk","Se","Sv");
$GadaMenesis = array("Janvāris","Februāris","Marts","Aprīlis","Maijs","Jūnijs","Jūlijs","Augusts","Septembris","Oktobris","Novembris","Decembris");






function Lieldienas($sv_diena, $sv_menesis, $sv_gads)
    {
        $svetki = 0;

        $dat = date("j.n.Y", easter_date($sv_gads));

        list($day, $month, $year) = explode('.', $dat);

        /*if (($sv_diena+2 == $day && $sv_menesis == $month && $sv_gads == $year) || ($sv_diena-1 == $day && $sv_menesis == $month && $sv_gads == $year))*/
        if (($sv_diena+3 == $day && $sv_menesis == $month && $sv_gads == $year) || ($sv_diena == $day && $sv_menesis == $month && $sv_gads == $year))
            {
                $svetki++;
            }
            else
            {

            }


        if ($svetki >= 1)
        {
               return true;
        }
        else
        {
                return false;
        }

    }

function SvetkuDienas ($sv_diena, $sv_menesis)
    {
        $svetki = 0;



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
mysqli_set_charset($connection, "utf8")
or die ("Neizdevās iestatīt valodu!");
        if (!$connection)
        {
           die('Could not connect: ' . mysqli_error());
        }

		$query_svetkudienas = "SELECT * FROM web_svetku_dienas";
		$result = $connection->query($query_svetkudienas) or trigger_error($connection->error."[$query_svetkudienas]");

        while($row = $result->fetch_assoc())
            {
            $id_svetki = $row['svetku_id'];
            $dat = $row['svetku_dat'];
            list($day, $month, $year) = explode('.', $dat);

            if ($sv_diena+1 == $day && $sv_menesis == $month)
            {
                $svetki++;
            }
            else
            {

            }
            }
        if ($svetki >= 1)
        {
               return true;
        }
        else
        {
                return false;
        }


    }




list($day, $month, $year) = explode('.', '26.12.2012');
$datums = mktime(0, 0, 0, $month, $day, $year);

$svetkudiena = $day;
$svetkumen = $month;
$svetkugads = $year;




if (!isset($_REQUEST["dat"]) && !isset($_REQUEST["menesis"]) || $_REQUEST["dat"] == NULL)
    {
        $_REQUEST["gads"] = date("Y");
        $_REQUEST["menesis"] = date("n");
    }
    else
    {
        list($year, $month, $day) = explode('-', $_REQUEST["dat"]);
        $_REQUEST["gads"] = $year;
		if ($month == NULL)
		{
			$_REQUEST["menesis"] = date("n");
		}
		else
		{
			$_REQUEST["menesis"] = $month;
		}

    }

$cMonth = $_REQUEST["menesis"];
$cYear = $_REQUEST["gads"];

 if (is_numeric($cYear))
 {

$get_menesis = date("n", mktime(0, 0, 0, $cMonth, 1, $cYear))-1;
$menesis = $get_menesis + 1;
$show_menesis = $GadaMenesis[$get_menesis];

$show_gadi = $cYear;

$prev_year = $cYear;
$next_year = $cYear;
$prev_month = $cMonth-1;
$next_month = $cMonth+1;

if ($prev_month == 0 ) {
    $prev_month = 12;
    $prev_year = $cYear - 1;
}
if ($next_month == 13 ) {
    $next_month = 1;
    $next_year = $cYear + 1;
}

$sodiendiena = $today['mday'];
$sodienmen = $today['mon'];
$sodiengads = $today['year'];

echo "<div align=center style='margin-top:10px;'>";
echo "<div id=galvina align=left width=215px style='background-color:#13529D; padding:3px; margin-top:15px; margin-bottom:10px; padding-left:20px;'>
        <span style='color:#FFFFFF;font-family:Arial;'><b><i>Notikumu kalendārs</b></i></span>
      </div>";
echo "<div id=cal_head align=center>";

        // parāda kalendāru atpakaļskatā kalendāru pa kreisi
echo "
        <div id=cal_left>
            <a href=";if(isset($ser)){ echo $ser;}echo"index.php?view=calendar&dat=" . $prev_year . "-". $prev_month . "-1" . " style='text-decoration:none;'>";
echo "	<span style='color:#d00b0b; font-weight:bolder;font-family:Arial; font-size:18px;'><img style='border:0px;' src=". $ser . $cel_img ."left.png></span></a>
        </div>";

        //  parāda mēneša nosaukumu un gadu!
echo "
        <div id=cal_content>
            <span style='color:#073060; font-weight:bolder;font-family:Arial; font-size:17px'><a style='color:#073060;' href=";if(isset($ser)){ echo $ser;} echo"index.php?view=calendar&dat=". $show_gadi ."-". $cMonth . ">" . $show_menesis . " " . $show_gadi . "</a></span>
        </div>";

        //  parāda kalendāru turpmākajā skatā kalendāru pa kreisi
echo "
        <div id=cal_right>
            <a href=";if(isset($ser)){ echo $ser;}echo"index.php?view=calendar&dat=" . $next_year . "-" . $next_month . "-1"  . " style='text-decoration:none;'><span style='color:#d00b0b; font-weight:bolder;font-family:Arial; font-size:18px;'>";
      echo "<img style='border:0px;' src=". $ser . $cel_img ."right.png></span></a>
        </div>
        <div style='clear: both'>
        </div>
      </div>";

        //  Sākas datumu izvietošanas funkcija
echo "<table  cellpadding=0 cellspacing=0 style='font-family:Tahoma; font-size:12px; border:1px solid #CCC; margin-top:-2px; '>";
echo "<tr>";
for($i = 0; $i < count($ShortWeekDays); $i++)
    {
    echo "<td style='border:1px solid #ccc;' align=center valign=center width=25 height=25><span style='color:#a4a4a4;'><b>" . $ShortWeekDays[$i] . "</b></span></td>";
    }
echo "</tr>";


 $daycounter = "0";
 $weekcounter = "0";
 $nedelas_diena = date("N", mktime(0, 0, 0, $cMonth, 1, $cYear));
 $dienas = cal_days_in_month(CAL_GREGORIAN, $cMonth, $cYear);
for($i = 0; $i <= 5; $i++)
    {
    echo "<tr>";
    $dienas;
    $weekcounter = $weekcounter + 1;
    for($a = 1; $a <= 7; $a++)
        {

            if ( SvetkuDienas($daycounter, $cMonth) || ($a == 7) || Lieldienas($daycounter, $cMonth, $cYear))
            {
                $span_color = "#d00b0b; font-weight:bolder";
            }
            else
            {
                $span_color = "#073060; font-weight:bolder";
            }

            if (($a ==  $nedelas_diena) && !($weekcounter > 1) )
            {
                $daycounter = $daycounter + 1;
				/* pirmais datums */
                echo "<td style='border:1px solid #ccc;' align=center valign=center width=25 height=25><a href=";if(isset($ser)){ echo $ser;}echo"index.php?view=calendar&dat=" . $show_gadi . "-" . $menesis . "-" . $daycounter . " style='text-decoration:none;'>";
                echo "<span style='color:" . $span_color . ";'>" . $daycounter . "</span></a></td>";

            }
            elseif (($weekcounter > 1) || ($a >  $nedelas_diena))
            {
                $daycounter = $daycounter + 1;
                if (($daycounter <= $dienas) || ($daycounter < 1))
                {
                    if (($daycounter == $sodiendiena) && ($cMonth == $sodienmen) && ($cYear == $sodiengads))
                    {
                    	/* šodienas datums*/
                        echo "<td style='border:1px solid #073060;' bgcolor=#dbdada align=center valign=center width=25 height=25>";
                        echo "<a href=";if(isset($ser)){ echo $ser;}echo"index.php?view=calendar&dat=". $sodiengads . "-" . $sodienmen . "-" . $sodiendiena . " style='text-decoration:none;'><span style='color:" . $span_color . ";'>";
						echo $daycounter . "</span></a></td>";

                    }
                    elseif ($a==32)
                    {
                        echo "<td style='border:1px solid #073060; bgcolor=#073060;' align=center valign=center width=25 height=25><span style='color:#FFF;font-weight:bolder;'>" .  $daycounter . "</span></td>";

                    }
                    else
                    {
                    	/* pārējie datumi*/
                        echo "<td style='border:1px solid #ccc;' align=center valign=center width=25 height=25>";
                        echo "<a href=";if(isset($ser)){ echo $ser;}echo"index.php?view=calendar&dat=". $show_gadi . "-" . $menesis . "-" . $daycounter . " style='text-decoration:none;'><span style='color:" . $span_color . ";'>" .  $daycounter ;
                        echo "</span></a></td>";
                    }

                }
                else
                {
                    echo "<td style='border:1px solid #e9e9e9; bgcolor=#e9e9e9;' align=center valign=center width=25 height=25></td>";

                }
            }
            else
            {
                echo "<td style='border:1px solid #e9e9e9; bgcolor=#e9e9e9;' align=center valign=center width=25 height=25></td>";
            }
        }
    echo "</tr>";
    }
echo "</table>";


echo "</div>";


}


?>
