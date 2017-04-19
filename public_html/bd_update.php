<?php
die();
	$conn = mysql_connect ("localhost", "partneox_cbs", "M17vv*}w") or die ("Соединение не установлено!");
	mysql_select_db("partneox_cbs") or die("База данных не найдена");
	$result = mysql_query("SELECT id FROM cbs_k2_items WHERE featured = '1'");
	$arr = array();
	while($date_array = mysql_fetch_array ($result)) {
	    $arr[] = $date_array['id'];
	};
	$acount = count($arr);
	$wcount = 0;

	while($wcount < $acount) {
		$sql = mysql_query("INSERT INTO modx_site_tmplvar_contentvalues(tmplvarid,contentid,value) VALUES ('6','".$arr[$wcount]."','1')");
		$wcount++;
	};
?>
