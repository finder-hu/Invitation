<!DOCTYPE html>
<html>
<body>
<?php
$name = $_POST['name'];
$message = $_POST['blessing'];

require_once 'conn.php';
$sql = "INSERT INTO '$talbe' (Name, Blessing, Up)
VALUES('$name', '$blessing', '0')";
if(mysql_query($sql, $conn))
{
echo "添加成功<a href='view.php'>查看数据库</a>";
}
else
{
	echo '添加失败';
}
mysql_close($conn);
?>
</body>
</html>