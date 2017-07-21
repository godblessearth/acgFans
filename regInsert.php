<?php
//注册处理
include 'config.php';
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$cutename=$_POST['cutename'];
mysql_query("set names 'utf8'");
date_default_timezone_set('PRC');
$time=date("Y-m-d H:i:s");
$match="select * from userlist where username='$username' ";
$matchdata=mysql_query($match);
$row=mysql_fetch_assoc($matchdata);
$sql="insert into userlist(username,password,email,phone,time,cutename) values('$username','$password','$email',$phone,'$time','$cutename')";
if($username==""||$password==""||$email==""||$phone==""){
	echo "<script>alert('重要信息不能为空')</script>";
	echo "<script>location='registerWeb.php'</script>";
}
elseif($row['username']==$username){
	echo "<script>alert('该账号已经被注册')</script>";
	echo "<script>location='registerWeb.php'</script>";
}
else{
	if(!preg_match("/^[0-9a-zA-Z]/",$username)){
		$nameErr="有非法字符，账号只能是字母、数字或者下划线";
		echo "<script>alert('$nameErr')</script>";
		echo "<script>location='registerWeb.php'</script>";}
	else{
		if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
			echo "<script>alert('非有效邮箱')</script>";
			echo "<script>location='registerWeb.php'</script>";
		}
		elseif(strlen($username)>12||strlen($cutename)>12||strlen($password)<6){
				if(strlen($username)>12){echo "<script>alert('用户名过长')</script>";echo "<script>location='registerWeb.php'</script>";}
				elseif(strlen($cutename)>12){echo "<script>alert('昵称过长')</script>";echo "<script>location='registerWeb.php'</script>";}
				else{echo "<script>alert('密码至少6位')</script>";echo "<script>location='registerWeb.php'</script>";}
			}
		else{
			mysql_query($sql);	
			echo "<script>location='loadWeb.php'</script>";}}
}
				
?>