<?php
header('Content-Type:text/html;charset=utf-8');
include 'config.php';
$sender=$_COOKIE['username'];
$content=$_POST['content'];
$parentid=$_POST['receiver_id'];
$receiver=$_POST['receiver'];
date_default_timezone_set('PRC');
$time=date("Y-m-d H:i:s");
$sql="insert into message (sender,parentid,receiver,content,time) values('$sender','$parentid','$receiver','$content','$time')";
if($sender!=""&&$content!=""){
mysql_query($sql);
echo "<script>alert('添加成功')</script>";
echo "<script>location='demo.php'</script>";
}
else{echo "<script>alert('内容不能为空')</script>";}





?>