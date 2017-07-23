<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../../css/doorwebsite.css">
</head>
<body>
<style>
#person_table {
	margin:20px 0 0 15%;
	text-align:center;
}

</style>
<?php
$severname="localhost";
$user="root";
$passwd="";
$database="user1";
$username=$_COOKIE["username"];
$conn=mysql_connect($severname,$user,$passwd);
if(!$conn){
	echo "something is wrong";
}
mysql_select_db($database);
mysql_query("set names 'utf8'");
$sql="select * from userlist where username='$username'";
$result=mysql_query($sql);
echo "<div id='person_table'>";
echo "<table  width='600'>";
echo "<tr>";
echo "<th>用户账号</th>";
echo "<th>用户密码</th>";
echo "<th>创建时间</th>";
echo "<th>昵称</th>";
echo "<th>邮箱</th>";
echo "</tr>";
while($row=mysql_fetch_assoc($result)){
	echo"<tr>";
	echo "<td>{$row['username']}</td>";
	echo "<td>{$row['password']}</td>";
	echo "<td>{$row['time']}</td>";
	echo "<td>{$row['cutename']}</td>";
	echo "<td>{$row['email']}</td>";
	echo "</tr>";
}
echo "</table>";
echo "</div>";
?>
</body>
</html>