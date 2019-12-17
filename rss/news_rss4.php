<?php
	function stripslashes_deep($val)
	{
	$val=is_array($val) ? array_map('stripslashes_deep', $val) : mysql_real_escape_string($val);
	return $val;
	}

	$_POST = array_map('stripslashes_deep', $_POST);
	$_GET = array_map('stripslashes_deep', $_GET);
	$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
	$_REQUEST = array_map('stripslashes_deep', $_REQUEST);


 
    DEFINE ('DB_USER', 'jrpicadm');   
    DEFINE ('DB_PASSWORD', '54Nx3sw2zHA4RT8y');   
    DEFINE ('DB_HOST', '127.0.0.1');   
    DEFINE ('DB_NAME', 'www_jrpic_lv'); 
	
	
	header('Content-Type: text/xml; charset=utf-8');

	echo '<?xml version="1.0" encoding="utf-8"?>
	<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
	<title>Aktualitātes Zemgales reģiona kompetenču attīstības centrā</title>
	<description>Aktualitātes Zemgales reģiona kompetenču attīstības centrā</description>
	<link>http://www.zrkac.lv/rss/news_rss4.php</link>
	<atom:link href="http://www.zrkac.lv/rss/news_rss4.php" rel="self" type="application/rss+xml" />';
 

 
    $connection = @mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)
        or die('Nevar pieslēgties datu bāzei');
    mysql_select_db(DB_NAME)
        or die ('Nav izvēlēta datu bāze');
	mysql_query('SET NAMES UTF8')
		or die ("Neizdevās iestatīt valodu!");
 
	$sodiena = mktime( date('H')+2, date('i'), date('s'), date('n'), date('j'), date('Y'));
    $get_articles = "SELECT
								web_notikumi_laiki.id_laiks,
								web_notikumi_laiki.not_id,
							MIN(web_notikumi_laiki.not_laiks) As N_L,
								web_notikumi_laiki.not_laiks_lidz,
								web_notikumi.id_not, 
								web_notikumi.not_nosaukums, 
								web_notikumi.not_apraksts,
								web_notikumi.not_atskats,
								web_notikumi.not_vieta,
								web_notikumi.not_atbildigais,
								web_notikumi.not_klase,
								web_notikumi.not_banners,
								web_notikumi.not_titulbilde,
								web_notikumi.not_tips_id,
								web_notikumi.not_kategorija_id,
								web_notikumi.not_piev_laiks,
								web_notikumi.not_red_laiks 
							FROM web_notikumi_laiki
							JOIN web_notikumi
							ON web_notikumi.id_not = web_notikumi_laiki.not_id
							WHERE web_notikumi_laiki.not_laiks > $sodiena
							AND CHAR_LENGTH(web_notikumi.not_atskats) < 9
							AND web_notikumi.not_tips_id = '1'
							AND web_notikumi.not_kategorija_id IS NOT NULL 
							GROUP BY web_notikumi_laiki.not_id
							ORDER BY web_notikumi.not_red_laiks DESC";

$articles = mysql_query($get_articles) or die(mysql_error());

while ($article = mysql_fetch_array($articles)){
      
    echo '

	
	
       <item>
          <title><![CDATA['.$article[not_nosaukums].']]></title>
		  <pubDate>'. date("D, d M Y H:i:s " , $article[not_piev_laiks]).'GMT</pubDate>
          <description>  <![CDATA['.$article[not_apraksts].' ]]></description>
			
			<thumbnail>http://www.zrkac.lv/dev_webadm/pct/'.$article[not_titulbilde].'</thumbnail>
				
			<link>http://www.zrkac.lv/event.php?id='.$article[id_not].'</link>
		  <category>cat_'. $article[not_kategorija_id].'</category>
		  <author>info@zrkac.jelgava.lv  (Zemgales reģiona kompetenču attīstības centrs)</author>
		  <guid>http://www.zrkac.lv/event.php?id='.$article[id_not].'</guid>
      </item>';
}
echo '</channel>
</rss>';							



	
	
?>