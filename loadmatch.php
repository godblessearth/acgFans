<?php
//登陆处理、匹配
header('Content-Type: text/html; charset=utf-8');
$loadname=$_POST["fname"];
$loadpass=$_POST["passwd"];
include 'config.php';
$sql="select * from userlist where username='$loadname'";
mysql_query("set names 'utf8'");
$to=mysql_query($sql);
$tos=mysql_fetch_assoc($to);
if($loadname!=""&&$loadpass!=""){
	if($tos['username']==$loadname&&$tos['password']==$loadpass){
		setcookie("username",$loadname,time()+60*60*24,"/");
		setcookie("password",$loadpass,time()+60*60*24,"/");
		setcookie("cutename",$tos['cutename'],time()+60*60*24,"/");
		echo "<script>location='../index/index.php'</script>";
	}
	else{
		echo "<script>alert('账号或密码错误')</script>";
		echo "<script>location='loadWeb.php'</script>";}
}
else{
	echo "<script>alert('请输入账号密码')</script>";
	echo "<script>location='loadWeb.php'</script>";
}

?>