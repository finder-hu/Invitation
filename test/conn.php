<?php
$ip = '120.27.37.1';
$username = 'you';
$password = 'yt';
$database = 'wedding';
$charset = 'gbk';
$table = 'blessings';
$conn = mysql_connect($ip, $username, $password) or die("MYSQL_connect:".mysql_errno());
mysql_query("use '$database'");
mysql_query("SET NAMES '$charset'");
?>