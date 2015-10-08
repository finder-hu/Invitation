<!DOCTYPE html>
<html lang="zh" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
		<![endif]-->
	</head>
	<body>
<?php
echo $_POST['name']."<br/>";
echo $_POST['tel']."<br/>";
echo $_POST['message']."<br/>";

$name = $_POST['name'];
$tel = $_POST['tel'];
$message = $_POST['message'];
require_once 'conn.php';
if(mysql_query("insert into guests set name='$name',tel='$tel',message='$message'",$conn)){
echo "添加成功<a href='testmysql.php'>查看数据库</a>";
}
else{
	echo '添加失败';
}
?>
</body>
</html>