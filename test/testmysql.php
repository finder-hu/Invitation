<!DOCTYPE html>
<html lang="zh" class="no-js">
<head>
	<style>
		body{text-align:center}
		#divcss{margin:0 auto;border:1px solid #000;width:900px;height:10px}
	</style>
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
	require_once 'conn.php';
	$result = mysql_query("select * from guests",$conn);
	echo "<table border=1 align='center'height='100%' width='100%'><tr>";
	echo "<caption><em><h1>宾客名单</h1></em></caption>";
	while($field = mysql_fetch_field($result)){
		echo "<td >&nbsp;".$field->name."&nbsp;</td>";
	}
	echo "</tr>";
	while($row = mysql_fetch_row($result)){
		echo "<tr>";
		for($i=0;$i<count($row);$i++){
			echo "<td>&nbsp;".$row[$i]."&nbsp;</td>";
		}
	}
	echo "</tr></table>";
	MYSQL_CLOSE($conn);
	echo "<br><a href='index.html'>返回继续添加嘉宾</a>";
	?>
</body>
</html>
