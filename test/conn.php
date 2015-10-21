<html>
<body>
<?php
$ip = '120.27.37.1';
$username = 'you';
$password = 'yt';
$database = 'wedding';
$charset = 'utf8';
$table = 'blessings';
$conn = mysql_connect($ip, $username, $password);
if($conn)
{
//echo "连接成功";
$test = mysql_query("use $database");
/*if ($test) {
	echo "wedding 数据库选择成功";
}*/
$test = mysql_query("SET NAMES '$charset'");
/*if ($test) {
	echo "charset 字符集选择成功";
}*/
}
else
{
	die("mysql_connect:".mysql_errno());
}
?>
</body>
</html>
