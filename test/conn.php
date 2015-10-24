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
$test = mysql_query("use $database");
$test = mysql_query("SET NAMES '$charset'");
}
else
{
	die("mysql_connect:".mysql_errno());
}

//function to protect from SQL injection attack
function check_input($value)
{
// 去除斜杠
if (get_magic_quotes_gpc())
  {
  $value = stripslashes($value);
  }
// 转义特殊字符
if (!is_numeric($value))
  {
  $value = mysql_real_escape_string($value);
  }
return $value;
}

?>
