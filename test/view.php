
<!DOCTYPE html>
<html>
<body>
<?php
	require_once 'conn.php';
	$result = mysql_query("select * from '$table'",$conn);
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
	mysql_close($conn);
	echo "<br><a href='index.html'>返回继续添加嘉宾</a>";
?>
</body>
</html>