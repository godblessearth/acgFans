<?php
header('Content-Type:text/html;charset=utf-8');
include "config.php";
mysql_query("set names 'utf8'");
$title=$_POST['videotitle'];
$url=$_POST['videourl'];
$picture=$_POST['videopicture'];
$videotype=$_POST['videotype'];
date_default_timezone_set('PRC');
$time=date("Y-m-d H:i:s");
echo "$title";
if($title!=""&&$url!=""){
$sql="insert into animate (title,url,picture,time,videotype) values('$title','$url','$picture','$time','$videotype')";
mysql_query($sql);
echo "<script>alert('添加成功')</script>";
echo "<script>location='../load_regi/person.php'</script>";}
else{echo "<script>alert('内容不能为空')</script>";
echo "<script>location='../load_regi/person.php'</script>";}





?>