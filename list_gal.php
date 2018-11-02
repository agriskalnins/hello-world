<?php

    $targetpage =  "index.php";
    $limit = 10;
    
    $query =  "SELECT COUNT(*) as num FROM web_gal ";
    $total_pages = mysql_fetch_array(mysql_query($query));
    $total_pages = $total_pages['num'];

    $stages = 2;
    
    $page = mysql_real_escape_string($_GET['page']);
    if($page)
    {
        $start = ($page - 1) * $limit;
    }
    else
    {
        $start = 0;
    }

    // Get page data
    
 
$query_select_galerija = "SELECT id_gal, gal_nos, gal_date FROM web_gal ORDER BY gal_date DESC LIMIT $start, $limit ";
$result_select_galerija = mysql_query($query_select_galerija, $connection) or die (mysql_error($connection));

        // Initial page num setup
    if ($page == 0){$page = 1;}
    $prev = $page - 1;
    $next = $page + 1;
    $lastpage = ceil($total_pages/$limit);
    $LastPagem1 = $lastpage - 1;    

   $paginate = '';
    if($lastpage > 1)
    {  
 
        $paginate .=  " <div class='paginate'> ";
        // Previous
        if ($page > 1){
            $paginate.=  " <a href='$targetpage?idx=listgal&page=$prev'>&nbsp;&nbsp;&nbsp;&#171;&nbsp;&nbsp;&nbsp;</a> ";
        }else{
            $paginate.=  " <span class='disabled'>&nbsp;&nbsp;&nbsp;&#171;&nbsp;&nbsp;&nbsp;</span> "; }
 
        // Pages
        if ($lastpage  < 7 + ($stages * 2))   // Not enough pages to breaking it up
        {
            for ($counter = 1; $counter  <= $lastpage; $counter++)
            {
                if ($counter == $page){
                    $paginate.=  " <span class='current'>$counter </span> ";
                }else{
                    $paginate.=  " <a href='$targetpage?idx=listgal&page=$counter'>$counter </a> ";}
            }
        }
        elseif($lastpage > 5 + ($stages * 2))    // Enough pages to hide a few?
        {
            // Beginning only hide later pages
            if($page  < 1 + ($stages * 2))
            {
                for ($counter = 1; $counter  < 4 + ($stages * 2); $counter++)
                {
                    if ($counter == $page){
                        $paginate.=  " <span class='current'>$counter </span> ";
                    }else{
                        $paginate.=  " <a href='$targetpage?idx=listgal&page=$counter'>$counter </a> ";}
                }
                $paginate.=  "&nbsp;&#183;&#183;&#183;&nbsp;";
                $paginate.=  " <a href='$targetpage?idx=listgal&page=$LastPagem1'>$LastPagem1 </a> ";
                $paginate.=  " <a href='$targetpage?idx=listgal&page=$lastpage'>$lastpage </a> ";
            }
            // Middle hide some front and some back
            elseif($lastpage - ($stages * 2) > $page  && $page > ($stages * 2))
            {
                $paginate.=  " <a href='$targetpage?idx=listgal&page=1'>1 </a> ";
                $paginate.=  " <a href='$targetpage?idx=listgal&page=2'>2 </a> ";
                $paginate.=  "&nbsp;&#183;&#183;&#183;&nbsp;";
                for ($counter = $page - $stages; $counter  <= $page + $stages; $counter++)
                {
                    if ($counter == $page){
                        $paginate.=  " <span class='current'>$counter </span> ";
                    }else{
                        $paginate.=  " <a href='$targetpage?idx=listgal&page=$counter'>$counter </a> ";}
                }
                $paginate.=  "&nbsp;&#183;&#183;&#183;&nbsp;";
                $paginate.=  " <a href='$targetpage?idx=listgal&page=$LastPagem1'>$LastPagem1 </a> ";
                $paginate.=  " <a href='$targetpage?idx=listgal&page=$lastpage'>$lastpage </a> ";
            }
            // End only hide early pages
            else
            {
                $paginate.=  " <a href='$targetpage?idx=listgal&page=1'>1 </a> ";
                $paginate.=  " <a href='$targetpage?idx=listgal&page=2'>2 </a> ";
                $paginate.=  "&nbsp;&#183;&#183;&#183;&nbsp;";
                for ($counter = $lastpage - (2 + ($stages * 2)); $counter  <= $lastpage; $counter++)
                {
                    if ($counter == $page){
                        $paginate.=  " <span class='current'>$counter </span> ";
                    }else{
                        $paginate.=  " <a href='$targetpage?idx=listgal&page=$counter'>$counter </a> ";}
                }
            }
        }
 
                // Next
        if ($page  < $counter - 1){
            $paginate.=  " <a href='$targetpage?idx=listgal&page=$next'>&nbsp;&nbsp;&nbsp;&#187;&nbsp;&nbsp;&nbsp; </a> ";
        }else{
            $paginate.=  " <span class='disabled'>&nbsp;&nbsp;&nbsp;&#187;&nbsp;&nbsp;&nbsp;  </span> ";
            }
 
        $paginate.=  " </div> ";      
 
}


    echo "
        <form id=goedit action='?idx=editgal' method='POST'>
        <input type='hidden' id=eid name='id_gal' value=''>
        <input type='hidden' name='comingfromlist'>
        </form>

        <script type=\"text/javascript\">
        function uedit(id)
        {
           document.getElementById(\"eid\").value=id;
           document.getElementById(\"goedit\").submit();
        }
        </script>
        ";

    echo "
        <table border=0 cellspacing=0 cellpadding=0>
		<tr height=40>
			<td style='text-indent: 0px;' align=left valign=top><img src=img/design/gal_list_head.png></td>
		</tr>	
        <tr>
	       <td>
	
	           <table class=list cellspacing=0 cellpadding=0>";	

    if (mysql_num_rows($result_select_galerija)==0)
    {
        echo "
                <tr height=26>
                    <td align=center colspan=3 class=tcont1>
                        - saraksts ir tukšs -
                    </td>
                </tr>";
    }
	
	while ($row = mysql_fetch_array($result_select_galerija))
		{
     		extract($row);
			if (strlen($gal_date)>0) {$gal_date=date("d.m.Y", $gal_date);}
			$query_select_thumb = "SELECT img FROM web_gal_img WHERE gal_id=$id_gal LIMIT 1";
			$result_select_thumb = mysql_query($query_select_thumb, $connection) or die (mysql_error($connection));
			
			$query_count_img = "SELECT COUNT(img) AS count FROM web_gal_img WHERE gal_id=$id_gal";
			$result_count_img = mysql_query($query_count_img, $connection) or die (mysql_error($connection));
			
	
	
        	echo "		
                        <tr height=50>";
        	// saliek galerijas titulbildi
        	if (mysql_num_rows($result_select_thumb) > 0)
        		{
        			$row = mysql_fetch_array($result_select_thumb);
        			extract($row);
        			echo "
                            <td class=list width=50>
                                <img src=\"image.php?path=$galpath/$img&width=50&height=50\">
                            </td>  ";
        		}
        	else
        		{
        		echo "
                            <td class=list width=50>
                                <img width=50 height=50 src=img/design/no_img.png>
                            </td>  ";
        		}
       		// Beidz likt galerijas titulbildi
            
        		$row = mysql_fetch_array($result_count_img);
        		extract($row);
        	
            echo "
                            <td class=list width=60px align=center valign=middle>
                                <span style='font-size: 11px; font-family:Tahoma; color: #5A5A5A'>
                                    <div>$gal_date</div>
                                    <div>($count Attēli)</div>
                                </span>
                            </td>
                            <td class=listmargin width=950 class=tcont>
                                <a class=static name=gt$id_gal>$gal_nos</a>
                            </td>
                            <td class=list align=center width=48>
                                <a href='javascript:void(0);' onclick='uedit($id_gal)'>
                                <img border=0 src=img/design/btn_edit.png></a>
                            </td>
                        </tr>";
		}
		
	echo "
                <tr>
                <td colspan=4 class=list width=60px align=center valign=middle>";
    echo $paginate;
    echo "
                </td>
                </tr>
                </table>
		
		</td>
		</tr>		
		</table>";	
?>