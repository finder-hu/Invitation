<!DOCTYPE html>
<html>
<body>
<?php
/*echo $_POST['name']."<br/>";
echo $_POST['blessing']."<br/>";*/

$name = $_POST['name'];
$blessing= $_POST['blessing'];

require_once 'conn.php';
$sql = "INSERT INTO $table (Name, Blessing, Up)
VALUES ('$name', '$blessing', '0')";
//echo "这是sql的内容: ".$sql."<br/>";
//mysql_query("insert into blessings set name='$name', blessing='$blessing'")
if(mysql_query($sql, $conn))
{
// echo "添加成功<a href='view.php'>查看数据库</a>";
}
else
{
	echo '添加失败';
}
mysql_close($conn);
?>
</body>
</html>
