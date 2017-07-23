<?php
//密码修改
header('Content-Type: text/html; charset=utf-8');
include 'config.php';
mysql_query("set names 'utf8'");
$username=$_COOKIE['username'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$cutename=$_POST['cutename'];
$password=$password1;
$sql="update userlist set password='$password' where username='$username'";
$sql_cutename="update userlist set cutename='$cutename' where username='$username'";
if($password1==$password2&&$password1!=""&&$password2!=""){
	if(mysql_query($sql)){
		echo "<script>alert('修改成功')</script>";
		echo "<script>location='person.php'</script>";
	}else{
		echo "failed";
	}
}
else{
	if(strlen($cutename)>15){
	echo "<script>alert('昵称过长')</script>";echo "<script>location='person.php'</script>";}
	elseif(strlen($cutename)<=15){mysql_query($sql_cutename);echo "<script>location='person.php'</script>";}
	else{
		echo "<script>alert('两次输入的密码不一致')</script>";
		echo "<script>location='person.php'</script>";}	
}


?>