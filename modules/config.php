<?php
	$tenserver = "localhost";
	$username = "root";
	$password = "";
	$database_name = "db_php_web_datmon_nh";
	/*$database_name = "news";*/
	$con = mysql_connect($tenserver,$username,$password,8080);
	mysql_select_db($database_name,$con);
	if(!$con){
		die ("Couldn not conntect; ".mysql_error());
	}
	//Hiển Thị Tiếng Việt
	mysql_set_charset("utf8",$con);
?>